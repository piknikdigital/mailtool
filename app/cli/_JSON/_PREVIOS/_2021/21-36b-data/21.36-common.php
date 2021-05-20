<?php

$p_id =  '36b';
$p_subject =  '¿Ya escuchaste hablar de la alternativa para consumir tabaco?';
$p_preheader =  'IQOS te está esperando con grandes beneficios.';
$p_yy =  '21';
$p_mm =  '03';
$p_dd =  '26';
$p_name4folder =  'leads';
$p_name4json =  '60-days-leads-welcome';
$p_name4folderDCE =  'Leads';
$p_mailname4DCE =  '60 Days - LEADS Welcome';
$p_customerkey_DCE =  'NA';
$p_name4folderFSH =  'Leads';
$p_mailname4FSH =  '60 Days - LEADS Welcome';
$p_customerkey_FSH =  'd4d001af-c73e-4611-870e-c933301dd560';
$id_FSH_folder =  '109';

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




