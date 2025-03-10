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
$folder     = "pmi-200605-onboarding";
$filename   = "pmi-200605-ID20.106-Day30-onboarding-conversion-check-DCE";
$target     = "DCE";        // "HTML", "DCE" o "FSH"
$source     = "HTML";       // "HTML", "DCE" o "FSH"

//Data for template
$footergrey   = "1";          // 1:grey  0:white
$bgColor      = "#FFFFFF";    // "transparent" NOT advised!
$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

//Texts for CRM
$subject     = "¡Felicidades por tus primeros días con IQOS!";
$preheader   = "Comparte tu experiencia con nosotros.";
$path        = "Content Builder > Mexico > Commercial > MX_20191018_Onboarding > 01_HTML";
$nameincrm   = "Email_Day30_Conversion_ver3_FORM_CONTENT_BLOCK";
$customerkey = "0f21fee7-d086-4990-954c-a4407f9706b3";

// Definition of replacements to be made
$filename1   = "_JSON/20-106-data/20.106-replacements.json";      


