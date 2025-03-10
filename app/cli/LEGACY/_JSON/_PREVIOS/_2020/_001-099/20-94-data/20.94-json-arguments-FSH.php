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
$filename   = "pmi-200525-20.94-Lending-AB-test-try-benefits-2-FSH";

$subject     = "Es momento de probar IQOS desde casa y ¡sin costo!";
$preheader   = "Aquí te decimos cómo.";
$path        = "Content Builder > 59_IQOS Lending AB Test 25 05 2020 > 02_HTML";
$nameincrm   = "Lending AB Test Try Benefits 2";
$customerkey = "0193c67d-6794-4be1-9a51-17561b1a88e3";

$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

$target     = "FSH";        // "HTML", "DCE" o "FSH"
$source     = "HTML";       // "HTML", "DCE" o "FSH"
$footergrey = "1";          // 1:grey  0:white
$bgColor    = "#FFFFFF";    // "transparent" NOT advised!

$filename1 = "20-94-data/20.94-replacements.json";      // Definition of replacements to be made
$filename2 = "20-94-data/20.94-html-blocks.txt";        // Source to be modified (only "blocks" section)


