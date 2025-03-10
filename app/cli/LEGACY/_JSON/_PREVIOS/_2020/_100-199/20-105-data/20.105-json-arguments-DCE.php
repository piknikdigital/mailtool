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
$folder     = "pmi-200605-heets";
$filename   = "pmi-200605-ID20.105-heets-DCE";
$target     = "DCE";        // "HTML", "DCE" o "FSH"
$source     = "HTML";       // "HTML", "DCE" o "FSH"

//Data for template
$footergrey   = "1";          // 1:grey  0:white
$bgColor      = "#FFFFFF";    // "transparent" NOT advised!
$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

//Texts for CRM
$subject     = "Información de tus unidades de tabaco para calentar.";
$preheader   = "Puedes ordenarlas para recibirlas y pagarlas en tu domicilio.";
$path        = "Content Builder > Mexico > Commercial > MX_20200605_Heets > 01_HTML";
$nameincrm   = "HEETS";
$customerkey = "371eae5e-4a93-40df-aea7-2dd4f1464671";

// Definition of replacements to be made
$filename1   = "_JSON/20-105-data/20.105-replacements.json";      


