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
$filename     = "pmi-200528-ID20.98-Leads-3-cont-IQOS-te-esta-esperando-FSH";
$target       = "FSH";        // "HTML", "DCE" o "FSH"
$source       = "HTML";       // "HTML", "DCE" o "FSH"

//Data for template
$footergrey   = "1";          // 1:grey  0:white
$bgColor      = "#FFFFFF";    // "transparent" NOT advised!
$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

//Texts for CRM
$subject     = "El siguiente paso es...";
$preheader   = "¡conocer IQOS con un experto!";
$path        = "Content Builder > 61_IQOS LEADS CTA Lending 28 05 2020 > 02_HTML";
$nameincrm   = "LEADS CTA Lending 3 - IQOS te esta esperando";
$customerkey = "";

// Definition of replacements to be made
$filename1   = "20-98-data/20.98-replacements.json";      


