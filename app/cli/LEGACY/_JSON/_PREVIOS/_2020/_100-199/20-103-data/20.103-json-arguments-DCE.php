<?php

/**
 * THESE VARIABLES ARE USED TO CHANGE THE TARGET PLATFORM FROM AN EXISTING JSON FILE
 * 
 * INSTRUCTIONS:
 * 
 *  1) Fill the variables in this file
 *  2) Create "$filename1". It's a JSON file describing the source platform, the target platform and the filenames to be changed.
 *  3) Run the script createjson.php
 * 
 */

//Data of target to be created
$mes        = "pmi2006";
$folder     = "pmi-200602-UGC-benefits";
$filename   = "pmi-200602-ID20.103-UGC-benefits-DCE";
$target       = "DCE";        // "HTML", "DCE" o "FSH"
$source       = "HTML";       // "HTML", "DCE" o "FSH"

//Data for template
$footergrey   = "1";          // 1:grey  0:white
$bgColor      = "#FFFFFF";    // "transparent" NOT advised!
$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

//Texts for CRM
$subject     = "Conoce las opiniones de nuestros usuarios IQOS.";
$preheader   = "¡Ya somos más de 10 millones en el mundo!";
$path        = "Content Builder > Mexico > Commercial > MX_20200602_UGC Benefits > 01_HTML";
$nameincrm   = "UGC Benefits";
$customerkey = "c1ec55a8-21be-40ca-a95d-4c13c83ac947";

// Definition of replacements to be made
$filename1   = "20-103-data/20.103-replacements.json";      


