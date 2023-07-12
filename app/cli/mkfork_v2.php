#!/usr/bin/php
<?php

/**
 *  To run this script in the command line:
 *      1.- Add in the first line: #!/usr/bin/php
 *      2.- in command line run:    chmod +x mkfork_v2.php
 *      3.- run the script as: ./mkfork_v2.php TARGET ID
 *          Example:  ./mkfork_v2.php DCE 208 
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

define("ERR_BAD_ARGS", PHP_EOL."------> ERROR: sintaxis o número de argumentos inválidos.".PHP_EOL."        uso: php mkfork_v2.php [TARGET] IDmail".PHP_EOL."             donde TARGET= DCE, FSH o HTML" . PHP_EOL. PHP_EOL);

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

//$arguments = "_JSON_v2/$year-$idMail-data-v2/$year.$idMail-json-arguments-$target.php" ;
$arguments = "_JSON_v2/$year-$idMail-data-v2/$year.$idMail-config.php";

// echo $arguments.PHP_EOL; die;


// LOAD CONFIG DATA FILE -----------------------------------------
if( file_exists( $arguments )  ){
    include_once($arguments);
}else{
    echo PHP_EOL."------> ERROR: NO EXISTE " . $arguments . PHP_EOL . PHP_EOL;
    die;
}

// $vars            = create_environment($mes, $folder, $filename, $target, $footergrey, $bgColor, $TwigTemplate, $TwigFooterBlock, $subject, $preheader, $path, $nameincrm, $customerkey);
$vars            = createEnvironment2($arguments, $target );

//var_export($vars); die;

$config_sections = fill_config( $vars );
// $blocks_section  = blockreplace_v2($filename, $filename1, $source, $target, $vars);
$blocks_section  = blockreplace_v3($target, $vars);
$ending          = get_ending();

$boilerplate_ = $config_sections
                .$blocks_section
                .$ending;

file_put_contents($vars['filename'].".json" , $boilerplate_);
msgDone($vars['filename'].".json");
mk_path( "../json-data/"  , $vars['mes'] , $vars['folder']);
mk_path( "../../email/"   , $vars['mes'] , $vars['folder']);

// -----  done -------


//$blocks_section  = blockreplace($filename1, $filename2, $source, $target);


// ---------------------------------------------


function uyuyuyu__blockreplace($replacementsfile, $inputfile)
{
    $value_old = array();
    $value_new = array();
    $data1  = file_get_contents($replacementsfile);
    $a      = json_decode($data1, true);
    foreach ($a['replacements'] as $b) {
        $value_old[] = $b[$a['source']];
        $value_new[] = $b[$a['target']];
    }
    $data2  = file_get_contents($inputfile);
    $data3  = str_replace( $value_old, $value_new, $data2);
    // file_put_contents($outputfile , $data3);
    return $data3; 
}



