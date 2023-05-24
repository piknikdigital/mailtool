#!/usr/bin/php
<?php
/**
 *  To run this script in the command line:
 *      1.- Add in the first line: #!/usr/bin/php
 *      2.- in command line run:    chmod +x mkjson.php
 *      3.- run the script as: ./mkjson.php  ID
 *          Example:  ./mkjson.php 208 
 */



include_once("includes/functions.php"); 
include_once("includes/predefined_blocks.php"); 


// -----  arguments  -------

$year = getYear();

if ($argc == 2){
    $arguments= "_JSON/$year-$argv[1]-data/$year.$argv[1]-json-arguments-ROOT-HTML.php";
}
else{
    $arguments= "_JSON/$year-XXX-data/$year.XXX-json-arguments-ROOT-HTML.php";
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
$vars = create_environment($mes, $folder, $filename, $target, $footergrey, $bgColor, $TwigTemplate, $TwigFooterBlock, $subject, $preheader, $path, $nameincrm, $customerkey);
$config_sections = fill_config( $vars );
$blocks_section = createBlocks($requiredBlocks, $libraryBlocks, $year.".".$argv[1]);
$ending = get_ending();

$boilerplate_ = $config_sections
                .$blocks_section
                .$ending;

file_put_contents($filename.".json" , $boilerplate_);
msgDone($filename);
mk_path( "../json-data/"           , $mes , $folder);
mk_path( "../../email/" , $mes , $folder);

// -----  done -------

