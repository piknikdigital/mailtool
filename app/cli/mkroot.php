#!/usr/bin/php
<?php
/**
 *  To run this script in the command line:
 *      1.- Add in the first line: #!/usr/bin/php
 *      2.- in command line run:    chmod +x makeroot.php
 *      3.- run the script as: ./makeroot.php  ID
 *          Example:  ./makeroot.php 208 
 */



include_once("includes/functions.php"); 
include_once("includes/predefined_blocks.php"); 


// -----  arguments  -------

if ($argc == 2){
    $arguments= "_JSON/21-$argv[1]-data/21.$argv[1]-json-arguments-ROOT-HTML.php";
}
else{
    $arguments= "_JSON/21-XXX-data/21.XXX-json-arguments-ROOT-HTML.php";
}

// echo $arguments.PHP_EOL; die;
// $arguments= "_JSON/CINTILLO-MGM/CINTILLO-MGM-json-arguments-ROOT-HTML.php";



// -----  begin operations -------

if( file_exists( $arguments )  ){
    include_once($arguments);
}else{
    echo PHP_EOL."------> ERROR: NO EXISTE " . $arguments . PHP_EOL . PHP_EOL;
    die;
}
$vars = create_environment($mes, $folder, $filename, $target, $footergrey, $bgColor, $TwigTemplate, $subject, $preheader, $path, $nameincrm, $customerkey);
$config_sections = fill_config( $vars );
$blocks_section = createBlocks($requiredBlocks, $libraryBlocks); //get_emptyblocks();
$ending = get_ending();

$boilerplate_ = $config_sections
                .$blocks_section
                .$ending;

file_put_contents($filename.".json" , $boilerplate_);
msgDone($filename);
mk_path( "../json-data/"           , $mes , $folder);
mk_path( "../../email/" , $mes , $folder);

// -----  done -------

