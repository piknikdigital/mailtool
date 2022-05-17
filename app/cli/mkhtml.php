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
include_once("includes/functions.php"); 


// $root = dirname(dirname(getcwd()));

$year = getYear();


// CHECK ARGUMENTS  ---------------------------------------
if ($argc == 2)
    $arguments= "_JSON/$year-$argv[1]-data/$year.$argv[1]-json-arguments-ROOT-HTML.php";
    // $arguments= "_JSON/21-$argv[1]-data/21.$argv[1]-json-arguments-ROOT-HTML.php";
else
    abort( PHP_EOL."ERROR: No se proporcionó ID" . PHP_EOL . PHP_EOL );


// LOAD DATA FILE -----------------------------------------
if( file_exists( $arguments )  )
    include_once($arguments);
else
    abort(PHP_EOL."ERROR: No existe " . $arguments . PHP_EOL . PHP_EOL);
    // echo "mes : ". $mes. PHP_EOL;
    // echo "folder : ". $folder. PHP_EOL;
    // echo "filename : ". $filename. PHP_EOL;
    // echo "TwigTemplate : ". $TwigTemplate. PHP_EOL;


// LOAD JSON DATA FILE FOR TWIG TEMPLATE ------------------
$f = $mes. "/" . $folder. "/" . $filename;
$twigData = loadjson($f);


// LOAD TWIG TEMPLATE -------------------------------------
$loader = new \Twig\Loader\FilesystemLoader('../../app/views/pmi');
$twig = new \Twig\Environment($loader);
$template = $twig->load($TwigTemplate);


// RENDER TWIG TEMPLATE TO FILE ---------------------------
$twigData['isWebVer'] = 0;     // HTML version for mail
$htmlfile = "test.html";
$htmlfile = '../../email/'. $twigData['HTMLstaticfile'];
file_put_contents($htmlfile, $twig->render( $TwigTemplate, $twigData ));
msgDone($htmlfile);


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
