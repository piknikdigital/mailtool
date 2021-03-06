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
$folder     = "pmi-200602-cleaning-sticks";
$filename   = "pmi-200602-ID20.102-cleaning-sticks-DCE";
$target       = "DCE";        // "HTML", "DCE" o "FSH"
$source       = "HTML";       // "HTML", "DCE" o "FSH"

//Data for template
$footergrey   = "1";          // 1:grey  0:white
$bgColor      = "#FFFFFF";    // "transparent" NOT advised!
$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

//Texts for CRM
$subject     = "Mejora el rendimiento de tu IQOS.";
$preheader   = "Te tenemos algunos consejos.";
$path        = "Content Builder > Mexico > Commercial > MX_20200602_Cleaning Sticks > 01_HTML";
$nameincrm   = "Cleaning Sticks";
$customerkey = "6eea6db2-ce03-4ffc-a3dd-06641e2aaad6";

// Definition of replacements to be made
$filename1   = "20-102-data/20.102-replacements.json";      


