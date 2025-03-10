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
$mes          = "pmi2005";
$folder       = "pmi-200527-hot-sale-2020-2";
$filename     = "pmi-200527-20.95-hot-sale-2020-2-red-DCE";
$target       = "DCE";        // "HTML", "DCE" o "FSH"
$source       = "HTML";       // "HTML", "DCE" o "FSH"

//Data for template
$footergrey   = "1";          // 1:grey  0:white
$bgColor      = "#FFFFFF";    // "transparent" NOT advised!
$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

//Texts for CRM 
$subject     = "Aprovecha los últimos días de Hot Sale con IQOS.";
$preheader   = "Hasta 12 MSI en la compra de tu Kit IQOS.";
$path        = "Content Builder > Mexico > Commercial > MX_20200527_HOT SALE 2 > 01_HTML";
$nameincrm   = "HOT SALE 2020 - 2";
$customerkey = "05cf59b2-a9f4-4aca-95f4-898b8186bc9f";

// Definition of replacements to be made
$filename1   = "20-95-data/20.95-replacements.json";      


