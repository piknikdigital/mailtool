<?php

$p_id              = '217c';
$p_subject         = '¿Ya estás decidido?';
$p_preheader       = '¡El siguiente paso está muy cerca!';

$p_yy              = '20';
$p_mm              = '09';
$p_dd              = '07';
$p_name4folder     = 'lending-el-reto';
$p_name4json       = 'lending-el-reto-conversion-ver4';

$p_name4folderDCE  = 'Lending_ELRETO';
$p_mailname4DCE    = 'Lending El Reto - Day 11 - Conversion';
$p_customerkey_DCE = 'custkeyDCE';

$p_name4folderFSH  = 'Lending_ELRETO';
$p_mailname4FSH    = 'Lending El Reto - Day 11 - Conversion - v4 - 2020 11 27';
$p_customerkey_FSH = 'ed2150aa-6b55-49ef-ab5a-b01212a0a976';
$id_FSH_folder     = '80';


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




