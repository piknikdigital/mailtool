#!/usr/bin/php
<?php
/**
 *  To run this script in the command line:
 *      1.- Add in the first line: #!/usr/bin/php
 *      2.- in command line run:    chmod +x mkhtml.php
 *      3.- run the script as: ./mkhtml.php  ID
 *          Example:  ./mkhtml.php 208 
 */


require_once '../../vendor/autoload.php';
include_once("includes_v2/functions_v2.php"); 


// $root = dirname(dirname(getcwd()));

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
    $arguments = "_JSON/$year-$idMail-data/$year.$idMail-json-arguments-$target.php" ;
}else if ($argc == 2){
    $strTry = strtoupper($argv[1]);
    if ( $strTry === "DCE" || $strTry === "FSH" || $strTry === "HTML")
    {
        echo PHP_EOL."------> ERROR: numero de argumentos erroneo";
        echo PHP_EOL."        uso: php mkhtml_v2.php [TARGET] IDmail";
        echo PHP_EOL."             donde TARGET= DCE, FSH o HTML" . PHP_EOL. PHP_EOL;
        die;    
    }
    else
    {
        $target = "HTML";
        $idMail = $argv[1];
    }
}else{
    echo PHP_EOL."------> ERROR: numero de argumentos erroneo";
    echo PHP_EOL."        uso: php mkhtml_v2.php [TARGET] IDmail";
    echo PHP_EOL."             donde TARGET= DCE, FSH o HTML" . PHP_EOL. PHP_EOL;
    die;
}

// var_dump(  array("TARGET" => $target,  "ID-mail" => $idMail) );
// echo PHP_EOL; die;

$arguments= "_JSON_v2/$year-$argv[1]-data-v2/$year.$argv[1]-config.php";


// LOAD CONFIG DATA FILE -----------------------------------------
if( file_exists( $arguments )  )
    include_once($arguments);
else
    abort(PHP_EOL."ERROR: No existe " . $arguments . PHP_EOL . PHP_EOL);


// ****************************************************************************************

$mes      = $companyBrand . $p_yy . $p_mm;     // Ej: pmi2306
$folder   = $companyBrand . "-" . $p_yy . $p_mm . $p_dd . "-" . $p_name4folder; // Ej: pmi-230609-leads-junio
$filename = $companyBrand . "-" . $p_yy . $p_mm . $p_dd . "-ID" . $p_yy . "." . $p_id . "-" . $p_name4json . "-" . $target;  // Ej: pmi-230609-ID23.76-leads-junio-2-HTML

// LOAD JSON DATA FILE FOR TWIG TEMPLATE ---------------------------------
$f = $mes. "/" . $folder. "/" . $filename;
$twigData = loadjson($f);
$twigData['isWebVer'] = 0;     // HTML version for mail

// LOAD TWIG TEMPLATE ----------------------------------------------------
$loader = new \Twig\Loader\FilesystemLoader('../../app/views/pmi');
$twig = new \Twig\Environment($loader);
$template = $twig->load($TwigTemplate);

// RENDER TWIG TEMPLATE TO STRING ----------------------------------------
$output = $twig->render($TwigTemplate, $twigData );

// RENDER TWIG TEMPLATE TO FILE ------------------------------------------
$htmlfile = '../../email/'. $twigData['HTMLstaticfile'];
file_put_contents($htmlfile, $output);
msgDone($htmlfile);

// RENDER MINIFIED VERSION TO FILE FOR CRM
if ($target != "HTML")
{
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
    $filename = "../json-data/". $f. ".json";

    if ( !file_exists ($filename) ){
        abort("No encuentro el archivo JSON $filename");
    }else{
        $data = file_get_contents($filename);
        // echo var_export($filename, true); die;            
        // echo var_export($data, true); die;
        $twigData = json_decode($data, true);
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
