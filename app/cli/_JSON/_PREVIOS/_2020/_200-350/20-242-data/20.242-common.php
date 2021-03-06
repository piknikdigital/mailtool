<?php

$p_id              = '242';
$p_subject         = 'Conoce una mejor alternativa para consumir tabaco.';
$p_preheader       = 'Millones de fumadores adultos ya nos unimos al cambio.';

$p_yy              = '20';
$p_mm              = '10';
$p_dd              = '23';
$p_name4folder     = 'cigarettes-say-goodbye';
$p_name4json       = 'cigarettes-say-goodbye-leads';

$p_name4folderDCE  = 'Cigarettes Say Goodbye';
$p_mailname4DCE    = 'Cigarettes Say Goodbye Leads';
$p_customerkey_DCE = 'TBD';

$p_name4folderFSH  = 'Cigarettes Say Goodbye';
$p_mailname4FSH    = 'Cigarettes Say Goodbye Leads';
$p_customerkey_FSH = 'e717007f-549b-4c13-8def-3fde74e87367';
$id_FSH_folder     = '86';

//-----------------------------------------

//Data of target to be created
$mes             = "pmi"  .$p_yy.$p_mm;
$folder          = "pmi-" .$p_yy.$p_mm.$p_dd. "-" .$p_name4folder;
$filename_base   = "pmi-" .$p_yy.$p_mm.$p_dd. "-ID" .$p_yy. "." .$p_id. "-" .$p_name4json. "-";

//Texts for CRM
$subject_base     = trim($p_subject);
$preheader_base   = trim($p_preheader);

$path_DCE         = "Content Builder > Mexico > Commercial > MX_20" .$p_yy.$p_mm.$p_dd.  "_" . $p_name4folderDCE ." > 01_HTML";
$name_in_DCE      = $p_mailname4DCE;
$customerkey_DCE  = $p_customerkey_DCE;

//$path_FSH         = "Content Builder > YY_NAME4CRM DD MES 2020 > 02_HTML";
$path_FSH         = "Content Builder > ". $id_FSH_folder .  "_" .$p_name4folderFSH. " " . $p_dd . " " .$p_mm. " 20" .$p_yy. " > 02_HTML";
$name_in_FSH      = $p_mailname4FSH;
$customerkey_FSH  = $p_customerkey_FSH;

$TwigTemplate     = "pmi-blocks-mod-B01-600-v01.twig";
$footergrey       = "1";          // 1:grey  0:white
$bgColor          = "#FFFFFF";    // Don't use "transparent"

// E N D  -  C O N F I G


// TEST VARS
// echo $mes             . PHP_EOL;
// echo $folder          . PHP_EOL;
// echo $filename_base   . PHP_EOL;
// echo "SUBJECT"                    . PHP_EOL . $subject_base    . PHP_EOL ;
// echo "PREHEADER"                  . PHP_EOL . $preheader_base  . PHP_EOL ;
// echo "RUTA DCE"                   . PHP_EOL . $path_DCE        . PHP_EOL ;
// echo "RUTA CONTENT BUILDER LOCAL" . PHP_EOL . $path_FSH        . PHP_EOL. PHP_EOL ;




