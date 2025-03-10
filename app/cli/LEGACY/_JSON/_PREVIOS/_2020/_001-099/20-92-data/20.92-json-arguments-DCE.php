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
$filename   = "pmi-200525-20.92-Lending-AB-test-try-introduction-2-DCE";

$subject     = "";
$preheader   = "";
$path        = "Content Builder > Mexico > Commercial > MX_20200525_Lending AB Testing > 01_HTML";
$nameincrm   = "Lending AB Test Try Introduction 2";
$customerkey = "827a670c-7b45-4109-b193-80b045aba389";

$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

$target     = "DCE";        // "HTML", "DCE" o "FSH"
$source     = "HTML";       // "HTML", "DCE" o "FSH"
$footergrey = "1";          // 1:grey  0:white
$bgColor    = "#FFFFFF";    // "transparent" NOT advised!

$filename1 = "20-92-data/20.92-replacements.json";      // Definition of replacements to be made
$filename2 = "20-92-data/20.92-html-blocks.txt";        // Source to be modified (only "blocks" section)


