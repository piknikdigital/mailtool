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
$folder       = "pmi-200528-leads-cta-lending";
$filename     = "pmi-200528-ID20.100-Leads-5-No-es-fumar-no-es-vapear-es-otra-cosa-FSH";
$target       = "FSH";        // "HTML", "DCE" o "FSH"
$source       = "HTML";       // "HTML", "DCE" o "FSH"

//Data for template
$footergrey   = "1";          // 1:grey  0:white
$bgColor      = "#FFFFFF";    // "transparent" NOT advised!
$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

//Texts for CRM
$subject     = "";
$preheader   = "";
$path        = "Content Builder > 61_IQOS LEADS CTA Lending 28 05 2020 > 02_HTML";
$nameincrm   = "LEADS CTA Lending 5";
$customerkey = "";

// Definition of replacements to be made
$filename1   = "20-100-data/20.100-replacements.json";      


