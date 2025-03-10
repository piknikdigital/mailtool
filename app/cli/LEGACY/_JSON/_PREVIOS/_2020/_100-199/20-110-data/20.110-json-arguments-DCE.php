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
$filename   = "pmi-200616-ID20.110-lending-AB-testing-call-now-DCE";
$target     = "DCE";        // "HTML", "DCE" o "FSH"
$source     = "HTML";       // "HTML", "DCE" o "FSH"

//Data for template
$footergrey   = "1";          // 1:grey  0:white
$bgColor      = "#FFFFFF";    // "transparent" NOT advised!
$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

//Texts for CRM
$subject     = "Tenemos información importante para ti.";
$preheader   = "Tu período de prueba está por comenzar.";
$path        = "Content Builder > Mexico > Commercial > MX_20200616_Lending AB Testing > 01_HTML";
$nameincrm   = "Lending AB Test - Call Now";
$customerkey = "0635eb74-d65e-4b8e-a3d0-c3192b514cba";

// Definition of replacements to be made
$filename1   = "_JSON/20-110-data/20.110-replacements.json";      


