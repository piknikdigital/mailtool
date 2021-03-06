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
$folder     = "pmi-200616-lending-AB-testing";
$filename   = "pmi-200616-ID20.108-lending-AB-testing-try-introduction-FSH";
$target     = "FSH";        // "HTML", "DCE" o "FSH"
$source     = "HTML";       // "HTML", "DCE" o "FSH"

//Data for template
$footergrey   = "1";          // 1:grey  0:white
$bgColor      = "#FFFFFF";    // "transparent" NOT advised!
$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

//Texts for CRM
$subject     = "Conoce nuestro Programa de Préstamo IQOS.";
$preheader   = "Prueba IQOS gratis por 15 días.";
$path        = "Content Builder > 62_IQOS Lending AB Test 16 06 2020 > 02_HTML";
$nameincrm   = "Lending AB Test - TRY Introduction";
$customerkey = "21b29da8-5e46-4d60-b965-5b286e4d18f7";

// Definition of replacements to be made
$filename1   = "_JSON/20-108-data/20.108-replacements.json";      


