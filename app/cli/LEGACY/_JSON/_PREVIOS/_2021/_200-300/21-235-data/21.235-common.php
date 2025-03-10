<?php

$p_id =  '235';
$p_subject =  'Ponle Fin al humo y adquiere tu primer IQOS';
$p_preheader =  'Al Fin: ni tu casa, ni tu ropa olerán a cigarro';
$p_yy =  '21';
$p_mm =  '11';
$p_dd =  '11';
$p_name4folder =  'buen-fin';
$p_name4json =  'buen-fin-noviembre-2';
$p_name4folderDCE =  'Buen Fin 2021';
$p_mailname4DCE =  'Buen Fin 2021 Leads 2';
$p_customerkey_DCE =  'NA';
$p_name4folderFSH =  'Buen Fin 2021';
$p_mailname4FSH =  'Buen Fin 2021 Leads 2';
$p_customerkey_FSH =  'tbd';
$id_FSH_folder =  '133';


//-----------------------------------------

$companyBrand     =  "pmi";
$designStyle      =  "bw";    // "sa": Simple Amazing 2020 // "bw": Brand World 2021

//$TwigTemplate     = "pmi-Brand-World-A02-600-v03.twig";
$TwigTemplate     = "pmi-Brand-World-B01-600-v01.twig";

$TwigFooterBlock  = "block-footer.twig";

$footergrey       = "1";          // 1:grey  0:white ( "sa" designStyle)
$bgColor          = "#34303d";    // Don't use "transparent"

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

