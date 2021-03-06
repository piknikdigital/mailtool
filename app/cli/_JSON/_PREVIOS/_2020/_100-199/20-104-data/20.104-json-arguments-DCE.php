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
$folder     = "pmi-200604-hesitator";
$filename   = "pmi-200604-ID20.104-Day50-Hesitator-store-DCE";
$target     = "DCE";        // "HTML", "DCE" o "FSH"
$source     = "HTML";       // "HTML", "DCE" o "FSH"

//Data for template
$footergrey   = "1";          // 1:grey  0:white
$bgColor      = "#FFFFFF";    // "transparent" NOT advised!
$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

//Texts for CRM
$subject     = "Lo que tu IQOS necesita.";
$preheader   = "Personalízalo y hazlo tan único cómo tú.";
$path        = "Content Builder > Mexico > Commercial > MX_20200604_Hesitator_Day50 > 01_HTML";
$nameincrm   = "Hesitator Day 15 Store";
$customerkey = "1702a3bd-8079-4a01-bf58-7fa853d43181";

// Definition of replacements to be made
$filename1   = "_JSON/20-104-data/20.104-replacements.json";      


