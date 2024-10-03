#!/usr/bin/env php
<?php
/**
 *  To run this script in the command line:
 *      1.- Add the shebang in the first line: #!/usr/bin/env php
 *      2.- set permissions: chmod +x mk_fork.php
 *      3.- run the script as: ./mk_fork.php TARGET ID
 *          Example:  ./mk_fork.php DCE 208 
 */



/**
 * TAKES AN EXISTING JSON FILE TO CREATE A NEW FILE WITH A DIFFERENT TARGET PLATFORM 
 * 
 * BEFORE RUNNING THIS SCRIPT:
 * 
 *  - Create JSON for HTML target
 *  - Create JSON with url image replacements
 * 
 * 
 */
include_once("includes_v2/functions_v2.php"); 

define("ERR_BAD_ARGS", "\n\033[1;37;41m ERROR: \033[0m sintaxis o número de argumentos inválidos." . PHP_EOL."        uso: php mk_fork.php [TARGET] IDmail".PHP_EOL."             donde TARGET= DCE, FSH o HTML" . PHP_EOL. PHP_EOL);

$year = getYear();

// ::::::: check arguments ::::::::: //

if ($argc == 3){
    $target1 = strtoupper($argv[2]);
    $target2 = strtoupper($argv[1]);
    if ( $target1 === "DCE" || $target1 === "FSH" || $target1 === "HTML")
    {
        $target = $target1;
        $idMail = $argv[1];
    }
    else if ( $target2 === "DCE" || $target2 === "FSH" || $target2 === "HTML")
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
// var_export($vars); die;


if ($vars['id'] == "000")
{
    // Default data in file? abort process
    echo PHP_EOL."\033[1;37;41m ERROR: \033[0m NO hay datos en archivo $year.$idMail-config.php" . PHP_EOL . PHP_EOL;
    die;
}

// echo "so far so good2 "; die;

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
    msgDone($jsonFilename);
}


// CREA CARPETA PARA ARCHIVOS HTML
$r2 = mk_path( dirname(dirname(dirname(__FILE__)))."/email/"  , $monthFolder , $jsonFolder );


// -----  done -------





