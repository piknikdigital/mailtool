#!/usr/bin/env php
<?php
/**
 *  To run this script in the command line:
 *      1.- Add the shebang in the first line: #!/usr/bin/env php
 *      2.- set permissions: chmod +x mk_crm.php
 *      3.- run the script as: ./mk_crm.php TARGET ID
 *          Example:  ./mk_crm.php DCE 208 
 */



/**
 * TAKES AN EXISTING JSON FILE TO CREATE A HTML FILE TO BE USED IN THE CRM
 * 
 * BEFORE RUNNING THIS SCRIPT:
 * 
 *  - Create JSON for HTML target
 *  - Create JSON with url image replacements
 * 
 * 
 */
require_once '../../vendor/autoload.php';
include_once("includes_v2/functions_v2.php"); 

define("ERR_BAD_ARGS", "\n\033[1;37;41m ERROR: \033[0m sintaxis o número de argumentos inválidos." . PHP_EOL."        uso: php mk_crm.php [TARGET] IDmail".PHP_EOL."             donde TARGET= DCE o FSH" . PHP_EOL. PHP_EOL);

$year = getYear();

// ::::::: check arguments ::::::::: //

if ($argc == 3){
    $target1 = strtoupper($argv[2]);
    $target2 = strtoupper($argv[1]);
    if ( $target1 === "DCE" || $target1 === "FSH" )
    {
        $target = $target1;
        $idMail = $argv[1];
    }
    else if ( $target2 === "DCE" || $target2 === "FSH" )
    {
        $target = $target2;
        $idMail = $argv[2];       
    }
}
else{
    // $arguments = "_JSON/21-193-data/21.193-json-arguments-DCE.php" ;
    // // echo PHP_EOL."------> ERROR: numero de argumentos erroneo";
    // // echo PHP_EOL."        uso: php makefork.php TARGET IDmail";
    // // echo PHP_EOL."             donde TARGET= DCE, FSH o HTML" . PHP_EOL;
    echo ERR_BAD_ARGS;
    die;
}

$arguments = "_JSON_v2/$year-$idMail-data-v2/$year.$idMail-config.php";

// echo $arguments.PHP_EOL; die;


// LOAD CONFIG DATA FILE -----------------------------------------
if( file_exists( $arguments )  ){
    include_once($arguments);
}else{
    echo PHP_EOL."\033[1;37;41m ERROR: \033[0m NO EXISTE " . $arguments . PHP_EOL . PHP_EOL;
    die;
}

$vars            = createEnvironment2($arguments, $target );

//var_export($vars); die;

if ($vars['id'] == "000")
{
    // Default data in file? abort process
    echo PHP_EOL."\033[1;37;41m ERROR: \033[0m No hay datos en archivo $year.$idMail-config.php" . PHP_EOL . PHP_EOL;
    die;
}




$config_sections = fill_config( $vars );
$blocks_section  = blockreplace_v3($target, $vars);
$ending          = get_ending();

$boilerplate_ = $config_sections
                .$blocks_section
                .$ending;


$jsonFilename    = $vars['filename'].".json";   //pmi-YYMMDD-IDYY.ID-json-filename-HTML.json 
$base            = dirname( dirname(__FILE__) ) . "/json-data/";   // /Users/armandoromero/Documents/devF1/mailtool.lan/app/json-data
$monthFolder     = $vars['mes'];     // pmiYYMM
$jsonFolder      = $vars['folder'];  // pmi-YYMMDD-foldername
$jsonPath        = $base . $monthFolder . "/". $jsonFolder;  // Ruta completa de carpeta JSON
$jsonFilePath    = $jsonPath . "/" . $jsonFilename;  // Rura completa de archivo JSON

// CREA CARPETA PARA ARCHIVOS JSON
$proceed = true;
mk_path( $base , $monthFolder, $jsonFolder);

if( file_exists( $jsonFilePath ) )
{
    $proceed = false;

    echo "\n\033[1;37;41m ADVERTENCIA: \033[0m"  
         ."\033[1;m EL ARCHIVO " . $jsonFilename . " YA EXISTE \033[0m" .PHP_EOL;
    $msg = "(S) para continuar, otra tecla para abortar.  -> " ;
    $userinput = readline($msg);
    if ($userinput == "S" or $userinput == "s")
    {
        echo "\033[33m►►►►► El archivo será sobreescrito. ◄◄◄◄◄\033[0m\n" ;
        $msg2 = "(S) para confirmar, otra tecla para abortar.  -> " ;
        $userinput2 = readline($msg2);
        if ($userinput2 == "S" or $userinput2 == "s")
            $proceed = true;
    }else{
        echo 'Proceso abortado.'. PHP_EOL . PHP_EOL ;
        die;
    }
}
if ( $proceed )
{
    $currentpath = getcwd();
    chdir($jsonPath);
    file_put_contents($jsonFilename , $boilerplate_);
    chdir($currentpath);
    msgDone2($jsonFilename);
}


// CREA CARPETA PARA ARCHIVOS HTML
$r2 = mk_path( dirname(dirname(dirname(__FILE__)))."/email/"  , $monthFolder , $jsonFolder );





// -----  json for CRM done -------



// LOAD JSON DATA FILE FOR TWIG TEMPLATE ---------------------------------


$f = $monthFolder . "/" .  $jsonFolder  . "/" . $vars['filename'];    
$f1 = dirname(__DIR__) . "/json-data/" . $monthFolder. "/" . $jsonFolder. "/" . $vars['filename'];

$twigData = loadjson($f1);
$twigData['isWebVer'] = 0;     // HTML version for mail

// LOAD TWIG TEMPLATE ----------------------------------------------------
// $loader = new \Twig\Loader\FilesystemLoader('../../app/views/pmi');
$loader = new \Twig\Loader\FilesystemLoader(
    array(   dirname(dirname(__DIR__)) ."/app/views/iqos/", 
             dirname(dirname(__DIR__)) ."/app/views/iqos/templates/", 
             dirname(dirname(__DIR__)) ."/app/views/iqos/blocks/", 
             dirname(dirname(__DIR__)) ."/app/views/ms/", 
             dirname(dirname(__DIR__)) ."/app/views/pmi/", 
             dirname(dirname(__DIR__)) ."/app/views/zyn/", 
             dirname(dirname(__DIR__)) ."/app/views/zyn/templates/", 
             dirname(dirname(__DIR__)) ."/app/views/zyn/blocks/", 
             dirname(dirname(__DIR__)) ."/app/views/system/" 
    )
);
$twig = new \Twig\Environment($loader);
$template = $twig->load($TwigTemplate);

// RENDER TWIG TEMPLATE TO STRING ----------------------------------------
$output = $twig->render($TwigTemplate, $twigData );

// RENDER TWIG TEMPLATE TO FILE ------------------------------------------

$htmlfile = dirname(dirname(dirname(__FILE__)))."/email/" . $twigData['HTMLstaticfile'];

// file_put_contents($htmlfile, $output);
// msgDone($htmlfile);

// RENDER MINIFIED VERSION TO FILE FOR CRM --------------------------------
   
echo PHP_EOL . "Construyendo HTML minificado para CRM ..." . PHP_EOL;
$fnmin = strtolower($twigData['HTMLstaticfile']);
if ( strstr($fnmin, 'dce.html')  || strstr($fnmin, 'fsh.html') ) 
{
    $htmlfileMinified = str_replace( ".html", "-min.html" , $htmlfile ); 
    renderMinified($output, $htmlfileMinified);
    msgDone2($htmlfileMinified);
}


// -----  done -------


function loadjson( $f )
{  
    $filename =  $f. ".json";

    if ( !file_exists ($filename) ){
        abort("\n\033[1;37;41m ERROR: \033[0m No encuentro el archivo JSON $filename" . PHP_EOL);
    }else{
        $data = file_get_contents($filename);
        if (strlen( $data ) < 50 )
        {
            echo "El archivo: \n $filename \nEs demasiado corto (< 50 bytes).";
        }
        // echo var_export($filename, true); die;            
        // echo var_export($data, true); die;
        $twigData = json_decode($data, true);
        if ($twigData == NULL)
        {
            echo "\n\033[1;37;41m ERROR: \033[0m\n" .$filename . "\n\033[1;33m   No se puede decodificar.\033[0m Verificar sintaxis del archivo.\n   El error usualmente es por una coma faltante o sobrante." .PHP_EOL.PHP_EOL;
            die;
        }
        // echo var_export($twigData);die;
        return $twigData;
    }
}

function renderMinified($data, $file)
{
    // $data      = file_get_contents($filename);
    $buffer    = explode( "\x0A", $data);
    $array     = array_filter(array_map('trim', explode("\n", $data)), 'strlen'); // array_map: trims extra spaces; array_filter: filters out empty lines

    file_put_contents( $file, "" ); // if file exists, make it empty
    foreach ($array as $txt)
    {
        file_put_contents($file, $txt ."\n" , FILE_APPEND);
    }
}


