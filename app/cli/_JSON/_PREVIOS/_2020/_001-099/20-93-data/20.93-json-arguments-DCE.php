<?php

/**
 * THESE VARIABLES ARE USED TO CHANGE THE TARGET PLATFORM FROM AN EXISTING JSON FILE
 * 
 * INSTRUCTIONS:
 * 
 *  1) Fill the variables in this file
 *  2) Create "$filename1". It's a JSON file describing the source platform, the target platform and the filenames to be changed.
 *  3) Create "$filename2" taking only the "blocks" section from the original JSON file.
 *  4) Run the script createjson.php
 * 
 */


$mes        = "pmi2005";
$folder     = "pmi-200525-lending-AB-testing";
$filename   = "pmi-200525-20.93-Lending-AB-test-try-benefits-1-DCE";

$subject     = "Prueba IQOS sin costo desde tu casa.";
$preheader   = "Conoce cómo.";
$path        = "Content Builder > Mexico > Commercial > MX_20200525_Lending AB Testing > 01_HTML";
$nameincrm   = "Lending AB Test Try Benefits 1";
$customerkey = "830f50f0-4368-44e2-9542-02f1698c6454";

$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

$target     = "DCE";        // "HTML", "DCE" o "FSH"
$source     = "HTML";       // "HTML", "DCE" o "FSH"
$footergrey = "1";          // 1:grey  0:white
$bgColor    = "#FFFFFF";    // "transparent" NOT advised!

$filename1 = "20-93-data/20.93-replacements.json";      // Definition of replacements to be made
$filename2 = "20-93-data/20.93-html-blocks.txt";        // Source to be modified (only "blocks" section)


