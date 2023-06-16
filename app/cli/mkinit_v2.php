<?php

include_once("includes_v2/functions_v2.php"); 

$year = getYear();

define("WK_SOURCE_DIR"   , "includes_v2/$year-XXX-data-v2/");
define("WK_TARGET_DIR"   , "_JSON_v2/");
define("MK_DIR_TEMPLATE" , "$year-XXX-data-v2/");

if ($argc == 2)
{
    $number = $argv[1];
}
else
{
    echo PHP_EOL . "     ===> ERROR: argumento MAIL-ID requerido." . PHP_EOL. PHP_EOL  ;
    die;
}

$folders = array('.', '..' );                               // folders 2 skip
$files = array_diff(scandir(WK_SOURCE_DIR), $folders);      // skips items matching $folders

foreach($files as $file)
    makefile($file, $number);
echo PHP_EOL;

function makefile($file, $number)
{
    $filecontent    = file_get_contents( WK_SOURCE_DIR . $file );
    $newFilename    = str_replace( "XXX", $number, $file);
    $newFilecontent = str_replace( "XXX", $number, $filecontent);
    $newDirectory   = str_replace( "XXX", $number, MK_DIR_TEMPLATE);
    @mkdir( WK_TARGET_DIR. $newDirectory);
    echo "Creando $newFilename". PHP_EOL;
    file_put_contents( WK_TARGET_DIR.$newDirectory.$newFilename , $newFilecontent );
}