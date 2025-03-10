<?php

$p_id =  '160';
$p_subject =  'Un Futuro sin Humo sí es posible';
$p_preheader =  'Sigamos alzando la voz';
$p_yy =  '21';
$p_mm =  '08';
$p_dd =  '24';
$p_name4folder =  'fsh';
$p_name4json =  'fsh-firmas';
$p_name4folderDCE =  'NA';
$p_mailname4DCE =  'NA';
$p_customerkey_DCE =  'NA';
$p_name4folderFSH =  'FSH';
$p_mailname4FSH =  'FSH Firmas';
$p_customerkey_FSH =  'c5d62d68-a9be-435f-87d2-177ecfcf48a5';
$id_FSH_folder =  '125';


//-----------------------------------------

$companyBrand     =  "pmi";
$designStyle      =  "sa";    // "sa": Simple Amazing 2020 // "bw": Brand World 2021

$TwigTemplate     = "pmi-blocks-mod-B01-600-v03.twig";
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

