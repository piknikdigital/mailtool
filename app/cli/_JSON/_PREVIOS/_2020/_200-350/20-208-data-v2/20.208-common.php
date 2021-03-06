<?php

$p_id              = '208B';
$p_subject         = 'El siguiente paso es cambiar.';
$p_preheader       = '¡Estás muy cerca!';

$p_yy              = '20';
$p_mm              = '10';
$p_dd              = '05';
$p_name4folder     = 'leads-el-reto';
$p_name4json       = 'leads-el-reto-warm-6-el-siguiente-paso-es-cambiar';

$p_name4folderDCE  = 'NA';
$p_mailname4DCE    = 'NA';
$p_customerkey_DCE = 'NA';

$p_name4folderFSH  = 'LEADS_EL_RETO';
$p_mailname4FSH    = 'Leads Warm 6 El siguiente paso es cambiar - v3';
$p_customerkey_FSH = 'aebe92d5-3b44-4618-9494-be22774b6ce3';
$id_FSH_folder     = '82';

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