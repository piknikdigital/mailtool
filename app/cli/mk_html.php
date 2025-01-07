#!/usr/bin/env php
<?php
/**
 *  To run this script in the command line:
 *      1.- Add the shebang in the first line: #!/usr/bin/env php
 *      2.- set permissions: chmod +x mk_html.php
 *      3.- run the script as: ./mk_html.php  ID
 *          Example:  ./mk_html.php 208 
 */

// echo dirname(dirname(__DIR__)) ;  echo PHP_EOL; die;

require_once '../../vendor/autoload.php';
include_once("includes_v2/functions_v2.php"); 


define("ERR_BAD_ARGS", PHP_EOL."\033[1;37;41m ERROR: \033[0m Sintaxis o número de argumentos inválidos.".PHP_EOL."        uso: php mk_html.php [TARGET] IDmail".PHP_EOL."             donde TARGET= DCE, FSH o HTML" . PHP_EOL. PHP_EOL);


$year = getYear();


// ::::::: check arguments ::::::::: //

if ($argc == 3){
    $target1 = strtoupper($argv[2]);
    $target2 = strtoupper($argv[1]);
    if ( $target1 === "DCE" || $target1 === "FSH" || $target1 === "HTML")
    {
        $target = $target1;
        $idMail = $argv[1];
        if ( strstr( $argv[1], ".") )
        {
            list($year, $idMail) = explode(".",  $argv[1]);
        }
    }
    else if ( $target2 === "DCE" || $target2 === "FSH" || $target2 === "HTML")
    {
        $target = $target2;
        $idMail = $argv[2];
        if ( strstr( $argv[2], ".") )
        {
            list($year, $idMail) = explode(".",  $argv[2]);
        }
    }
}else if ($argc == 2){
    $strTry = strtoupper($argv[1]);
    if ( $strTry === "DCE" || $strTry === "FSH" || $strTry === "HTML")
    {
        echo ERR_BAD_ARGS;
        die;    
    }
    else
    {
        $target = "HTML";
        $idMail = $argv[1];
        if ( strstr( $argv[1], ".") )
        {
            list($year, $idMail) = explode(".",  $argv[1]);
        }
    }
}else{
    echo ERR_BAD_ARGS;
    die;
}

$arguments = "_JSON_v2/$year-$idMail-data-v2/$year.$idMail-config.php";



// var_dump(  array("TARGET" => $target,  "ID-mail" => $idMail) );
// echo PHP_EOL; die;
// echo $arguments . PHP_EOL;
// die;

// LOAD CONFIG DATA FILE -----------------------------------------
if( file_exists( $arguments )  )
    include_once($arguments);
else
    abort(PHP_EOL."\033[1;37;41m ERROR: \033[0m No existe " . $arguments . PHP_EOL . PHP_EOL);


// ****************************************************************************************

$mes      = $companyBrand . $p_yy . $p_mm;
$folder   = $companyBrand . "-" . $p_yy . $p_mm . $p_dd . "-" . $p_name4folder;
$filename = $companyBrand . "-" . $p_yy . $p_mm . $p_dd . "-ID" . $p_yy . "." . $p_id . "-" . $p_name4json . "-" . $target;

// var_dump($mes);       // ej: string(7)  "pmi2409"  
// var_dump($folder);    // ej: string(22) "pmi-240912-test-folder"      
// var_dump($filename);  // ej: string(34) "pmi-240912-ID24.1111-test-json-DCE"          

// LOAD JSON DATA FILE FOR TWIG TEMPLATE ---------------------------------
$f = $mes. "/" . $folder. "/" . $filename;    
$f1 = dirname(__DIR__) . "/json-data/" . $mes. "/" . $folder. "/" . $filename;

// var_dump($f);  // ej: string(65)  "pmi2409/pmi-240912-test-folder/pmi-240912-ID24.1111-test-json-DCE"  
// var_dump($f1); // ej: string(129) "/Users/armandoromero/Documents/devF1/mailtool.lan/app/json-data/pmi2409/pmi-240912-test-folder/pmi-240912-ID24.1111-test-json-DCE"   


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

// $vars = createEnvironment2($arguments, $target);
// mk_path( "../../email/"    , $vars['mes'] , $vars['folder'] );


$htmlfile = '../../email/'. $twigData['HTMLstaticfile'];

// echo dirname(dirname(__DIR__)) . PHP_EOL;
// echo dirname(dirname(__DIR__)) . "/email/". $twigData['HTMLstaticfile'] . PHP_EOL;  
// die;

// OK:
// /Users/armandoromero/Documents/devF1/
// mailtool.lan/email/pmi2308/pmi-230814-lending-originals/pmi-230814-ID23.155-lending-awareness-2-HTML.html


// echo $htmlfile.PHP_EOL; die;
file_put_contents($htmlfile, $output);
msgDone($htmlfile);

// RENDER MINIFIED VERSION TO FILE FOR CRM
if ($target != "HTML")
{
    echo "Construyendo versión minificada..." . PHP_EOL;
    $fnmin = strtolower($twigData['HTMLstaticfile']);
    if ( strstr($fnmin, 'dce.html')  || strstr($fnmin, 'fsh.html') ) 
    {
        $htmlfileMinified = str_replace( ".html", "-min.html" , $htmlfile ); 
        renderMinified($output, $htmlfileMinified);
        msgDone($htmlfileMinified);
    }
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
        // echo var_export($twigData, true); die;
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
