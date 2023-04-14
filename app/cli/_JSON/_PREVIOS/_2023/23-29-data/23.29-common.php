<?php

$p_id =  '29';
$p_subject =  'Ya escuchaste hablar de IQOS, ¿pero sabes qué es o cómo funciona?';
$p_preheader =  'Da clic y conoce todo lo que necesitas saber sobre esta alternativa al consumo de tabaco';
$p_yy =  '23';
$p_mm =  '02';
$p_dd =  '24';
$p_name4folder =  'leads-educational';
$p_name4json =  'leads-educational-marzo';
$p_name4folderDCE =  'NA';
$p_mailname4DCE =  'NA';
$p_customerkey_DCE =  'NA';
$p_name4folderFSH =  'Leads Educativo';
$p_mailname4FSH =  'Leads Educativo Marzo';
$p_customerkey_FSH =  'NA';
$id_FSH_folder =  '172';


//-----------------------------------------

$companyBrand     =  "pmi";
$designStyle      =  "bw";    // "sa": Simple Amazing 2020 // "bw": Brand World 2021

//$TwigTemplate     = "pmi-Brand-World-A02-600-v03.twig";
$TwigTemplate     = "pmi-Brand-World-B01-600-v01.twig";

$TwigFooterBlock  = "block-footer.twig";

$footergrey       = "1";          // 1:grey  0:white ( "sa" designStyle)
$bgColor          = "#FFFFFF";    // Don't use "transparent"

//-----------------------------------------

//Data of target to be created
$mes             = $companyBrand  .$p_yy.$p_mm;
$folder          = $companyBrand ."-" .$p_yy.$p_mm.$p_dd. "-" .$p_name4folder;
$filename_base   = $companyBrand ."-" .$p_yy.$p_mm.$p_dd. "-ID" .$p_yy. "." .$p_id. "-" .$p_name4json. "-";

//Texts for CRM
$subject_base     = trim($p_subject);
$preheader_base   = trim($p_preheader);

$path_DCE         = "Content Builder > Mexico > Commercial > MX_20" .$p_yy.$p_mm.$p_dd.  "_" . $p_name4folderDCE ." > 01_HTML";
$name_in_DCE      = $p_mailname4DCE;
$customerkey_DCE  = $p_customerkey_DCE;

//$path_FSH       = "Content Builder > YY_NAME4CRM DD MES 2020 > 02_HTML";
$path_FSH         = "Content Builder > ". $id_FSH_folder .  "_" .$p_name4folderFSH. " " . $p_dd . " " .$p_mm. " 20" .$p_yy. " > 02_HTML";
$name_in_FSH      = $p_mailname4FSH;
$customerkey_FSH  = $p_customerkey_FSH;

// E N D  -  C O N F I G


//-----------------------------------------
// $TwigTemplate     = "pmi-blocks-mod-B01-600-v03.twig";
// $TwigFooterBlock  = "block-footer-no-youtube.twig";

