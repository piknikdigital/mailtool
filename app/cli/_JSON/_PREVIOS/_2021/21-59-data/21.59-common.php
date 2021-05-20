<?php

$p_id =  '59';
$p_subject =  'Llegó la hora de cambiar';
$p_preheader =  'Da clic para conocer nuestra nueva imagen';
$p_yy =  '21';
$p_mm =  '05';
$p_dd =  '19';
$p_name4folder =  'brand-world';
$p_name4json =  'launch-brand-world';
$p_name4folderDCE =  'Brand World';
$p_mailname4DCE =  'Launch Brand World';
$p_customerkey_DCE =  'NA';
$p_name4folderFSH =  'NA';
$p_mailname4FSH =  'NA';
$p_customerkey_FSH =  'NA';
$id_FSH_folder =  'NA';

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

$TwigTemplate     = "pmi-blocks-mod-B01-600-v02.twig";
$TwigFooterBlock  = "block-footer-no-youtube.twig";

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




