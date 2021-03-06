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
$filename   = "pmi-200525-20.91-Lending-AB-test-try-introduction-1-DCE";

$target     = "DCE";        // "HTML", "DCE" o "FSH"
$source     = "HTML";       // "HTML", "DCE" o "FSH"
$footergrey = "1";          // 1:grey  0:white
$bgColor    = "#FFFFFF";    // "transparent" NOT advised!

$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

$subject     = "Conoce nuestro Programa de Préstamo IQOS.";
$preheader   = "Prueba IQOS sin costo por 15 días.";
$path        = "Content Builder > Mexico > Commercial > MX_20200525_Lending AB Testing > 01_HTML";
$nameincrm   = "Lending AB Test Try Introduction 1";
$customerkey = "a863a980-8e6e-4bdd-9366-acd16691fe4b";

$filename1 = "20-91-data/20.91-replacements.json";      // Definition of replacements to be made
$filename2 = "20-91-data/20.91-html-blocks.txt";        // Source to be modified (only "blocks" section)


