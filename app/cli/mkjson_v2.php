#!/usr/bin/php
<?php
/**
 *  To run this script in the command line:
 *      1.- Add in the first line: #!/usr/bin/php
 *      2.- in command line run:    chmod +x mkjson.php
 *      3.- run the script as: ./mkjson.php  ID
 *          Example:  ./mkjson.php 208 
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
    echo PHP_EOL."------> ERROR: NO SE ESPECIFICÓ ID."  . PHP_EOL . PHP_EOL;
    die;
}

// echo $arguments.PHP_EOL; die;
// $arguments= "_JSON/CINTILLO-MGM/CINTILLO-MGM-json-arguments-ROOT-HTML.php";



// -----  begin operations -------

if( !file_exists( $arguments )  ){
    echo PHP_EOL."------> ERROR: NO EXISTE " . $arguments . PHP_EOL . PHP_EOL;
    die;
}

$vars = createEnvironment2($arguments, "HTML");

// var_dump($vars);
// echo PHP_EOL; die;

// $vars = create_environment(   $mes, $folder, $filename, $target, $footergrey, 
//                               $bgColor, $TwigTemplate, $TwigFooterBlock, $subject, $preheader, 
//                               $path, $nameincrm, $customerkey);


$config_sections = fill_config( $vars );
$blocks_section = createBlocks_v2( $arguments, $libraryBlocks, $year.".".$argv[1], );
//$blocks_section = createBlocks($requiredBlocks, $libraryBlocks, $year.".".$argv[1]);
$ending = get_ending();

$boilerplate_ = $config_sections
                .$blocks_section
                .$ending;

file_put_contents($vars['filename'].".json" , $boilerplate_);
msgDone($vars['filename'].".json");
mk_path( "../json-data/"   , $vars['mes'] , $vars['folder'] );
mk_path( "../../email/"    , $vars['mes'] , $vars['folder'] );

// -----  done -------

