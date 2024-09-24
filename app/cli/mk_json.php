#!/usr/bin/env php
<?php
/**
 *  To run this script in the command line:
 *      1.- Add the shebang in the first line: #!/usr/bin/env php
 *      2.- set permissions: chmod +x mk_json.php
 *      3.- run the script as: ./mk_json.php  ID
 *          Example:  ./mk_json.php 208
 */



include_once("includes_v2/functions_v2.php");
include_once("includes_v2/predefined_blocks_v2.php");


// -----  arguments  -------

$year = getYear();


// echo $argc;
// echo PHP_EOL; die;

if ($argc == 2){
    $arguments= "_JSON_v2/$year-$argv[1]-data-v2/$year.$argv[1]-config.php";
}
else{
    echo PHP_EOL."\033[1;37;41m ERROR: \033[0m No se especificó ID, o error en número de parámetros."  . PHP_EOL . PHP_EOL;
    die;
}

// echo $arguments.PHP_EOL; die;
// $arguments= "_JSON/CINTILLO-MGM/CINTILLO-MGM-json-arguments-ROOT-HTML.php";



// -----  begin operations -------

if( !file_exists( $arguments )  ){
    echo PHP_EOL."\033[1;37;41m ERROR: \033[0m NO EXISTE " . $arguments . PHP_EOL . PHP_EOL;
    die;
}

// var_dump($arguments);
// echo PHP_EOL; die;

$vars = createEnvironment2($arguments, "HTML");
// var_dump($vars);
// echo PHP_EOL; die;

if ($vars['id'] == "000")
{
    // Default data in file? abort process
    echo PHP_EOL."\033[1;37;41m ERROR: \033[0m NO hay datos en archivo $year.$argv[1]-config.php" . PHP_EOL . PHP_EOL;
    die;
}


$config_sections = fill_config( $vars );
$blocks_section  = createBlocks_v2( $arguments, $libraryBlocks, $year.".".$argv[1], );
$ending          = get_ending();
$boilerplate_    = $config_sections
                   .$blocks_section
                   .$ending;

$jsonFilename    = $vars['filename'].".json";   //pmi-YYMMDD-IDYY.ID-json-filename-HTML.json 
$base            = dirname( dirname(__FILE__) ) . "/json-data/";   // /Users/armandoromero/Documents/devF1/mailtool.lan/app/json-data
$monthFolder     = $vars['mes'];     // pmiYYMM
$jsonFolder      = $vars['folder'];  // pmi-YYMMDD-foldername
$jsonPath        = $base . $monthFolder . "/". $jsonFolder;  // Ruta completa de carpeta JSON
$jsonFilePath    = $jsonPath . "/" . $jsonFilename;  // Rura completa de archivo JSON

// CREA CARPETA PARA ARCHIVOS JSON
mk_path( $base , $monthFolder, $jsonFolder);

if( file_exists( $jsonFilePath ) )
{
    echo "\n\033[1;37;41m ADVERTENCIA: \033[0m"  
         ."\033[1;m El archivo \n\033[31m██████████████\033[0m " . $jsonFilename . "\n\033[31m██████████████\033[0m YA EXISTE \033[0m"
         . "\n\033[31m██████████████\033[0m Abortando proceso."
         . PHP_EOL .PHP_EOL;
    die;
}

$currentpath = getcwd();
chdir($jsonPath);
file_put_contents($jsonFilename , $boilerplate_);
chdir($currentpath);
msgDone2($jsonFilename);


// CREA CARPETA PARA ARCHIVOS HTML
$r2 = mk_path( dirname(dirname(dirname(__FILE__)))."/email/"  , $monthFolder , $jsonFolder );



// -----  done -------


// $r = mk_path( "../json-data/"   , $vars['mes'] , $vars['folder'] );
// $r = mk_path( dirname( dirname(__FILE__) ) . "/json-data/"   , $vars['mes'] , $vars['folder'] );
