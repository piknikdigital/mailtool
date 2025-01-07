<?php

include_once("includes_v2/functions_v2.php"); 


// askUserforFileOverwriteConfirmation("_JSON_v2/24-1113-data-v2/24.1113-replacements.json");
// die;
//echo realpath(__FILE__);    //  /Users/armandoromero/Documents/devF1/mailtool.lan/app/cli/mk_init.php


$year = getYear();

define("WK_SOURCE_DIR"   , "includes_v2/$year-XXX-data-v2/");
define("WK_TARGET_DIR"   , "_JSON_v2/");
define("MK_DIR_TEMPLATE" , "$year-XXX-data-v2/");

if ($argc == 2)
{
    $number = $argv[1];
    if ( strstr( $argv[1], ".") )
    {
        list($year, $number) = explode(".",  $argv[1]);
    }
}
else
{
    // ERROR: argumento MAIL-ID requerido
    echo PHP_EOL . "\033[30;43m ! \033[1;37;41m ERROR: \033[0m Argumento MAIL-ID requerido." . PHP_EOL. PHP_EOL  ;
    die;
}
// echo "year:" . $year . PHP_EOL  ."number" . $number . PHP_EOL; die;

// $files:  Lista de archivos a contruir. Con cada template en la carpeta WK_SOURCE_DIR
//          se construirá un archivo para el MAIL-ID solicitado
$folders = array('.', '..' );                               // folders to skip
$files = array_diff(scandir(WK_SOURCE_DIR), $folders);      // skips items matching $folders

echo PHP_EOL;

foreach($files as $file){
    $v = makefile($file, $number);
    if ($v == -1)
      break;
}
echo PHP_EOL;


// ------ done ------


function makefile($file, $number)
{
    // echo PHP_EOL . "Creando $file". PHP_EOL;
    $newFilename    = str_replace( "XXX", $number, $file);
    $newDirectory   = str_replace( "XXX", $number, MK_DIR_TEMPLATE);
    $newFile        = WK_TARGET_DIR.$newDirectory.$newFilename;
    if ( !file_exists( WK_TARGET_DIR. $newDirectory ) )
        @mkdir( WK_TARGET_DIR. $newDirectory);
    if ( file_exists( $newFile ) )
        askUserforFileOverwriteConfirmation($newFile);
    $filecontent    = file_get_contents( WK_SOURCE_DIR . $file );
    $newFilecontent = str_replace( "XXX", $number, $filecontent);
    file_put_contents( $newFile , $newFilecontent );
    echo "\033[1;33;44m Se ha creado: \033[0m $newFilename ". PHP_EOL;
    return 0;

}