<?php

$p_id              = '233';
$p_subject         = 'Es momento de compartir el cambio con tus amigos.';
$p_preheader       = '¡Podrán recibir el doble de beneficios!';

$p_yy              = '20';
$p_mm              = '10';
$p_dd              = '09';
$p_name4folder     = 'mgm-600-reward';
$p_name4json       = 'mgm-600-reward';

$p_name4folderDCE  = 'MGM 600 Reward';
$p_mailname4DCE    = 'MGM 600 Reward';
$p_customerkey_DCE = 'a2cec525-dcf0-4577-abd7-c221b3178d6e';

$p_name4folderFSH  = 'NA';
$p_mailname4FSH    = 'NA';
$p_customerkey_FSH = 'NA';
$id_FSH_folder     = '84';

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
$bgColor          = "#F7F7F7";    // Don't use "transparent"

// E N D  -  C O N F I G


// TEST VARS
// echo $mes             . PHP_EOL;
// echo $folder          . PHP_EOL;
// echo $filename_base   . PHP_EOL;
// echo "SUBJECT"                    . PHP_EOL . $subject_base    . PHP_EOL ;
// echo "PREHEADER"                  . PHP_EOL . $preheader_base  . PHP_EOL ;
// echo "RUTA DCE"                   . PHP_EOL . $path_DCE        . PHP_EOL ;
// echo "RUTA CONTENT BUILDER LOCAL" . PHP_EOL . $path_FSH        . PHP_EOL. PHP_EOL ;




