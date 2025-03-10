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
$folder     = "pmi-200617-heets-reinforcement";
$filename   = "pmi-200617-ID20.111-heets-reinforcement-DCE";
$target     = "DCE";        // "HTML", "DCE" o "FSH"
$source     = "HTML";       // "HTML", "DCE" o "FSH"

//Data for template
$footergrey   = "1";          // 1:grey  0:white
$bgColor      = "#FFFFFF";    // "transparent" NOT advised!
$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

//Texts for CRM
$subject     = "¿Te quedaste sin unidades de tabaco para calentar?";
$preheader   = "Tenemos información importante para ti.";
$path        = "Content Builder > Mexico > Commercial > MX_20200617_Heets > 01_HTML";
$nameincrm   = "Heets Reinforcement 2";
$customerkey = "b0040ee5-dee5-45f3-8cc0-775ddca92550";

// Definition of replacements to be made
$filename1   = "_JSON/20-111-data/20.111-replacements.json";      


