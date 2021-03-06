<?php

require_once("20.154-common.php");

$target     = "FSH";          // "HTML", "DCE" o "FSH"
$source     = "HTML";         // "HTML", "DCE" o "FSH"

// Definition of replacements to be made
$filename1  = "_JSON/20-154-data/20.154-replacements.json";      


/**
 * VARS BELOW ARE ALMOST ALWAYS THE SAME
 */

$filename   = $filename_base . $target;
$subject    = $subject_base;
$preheader  = $preheader_base;

switch ($target)
{
    case "DCE":  $path = $path_DCE; $nameincrm = $name_in_DCE; $customerkey=$customerkey_DCE; break;
    case "FSH":  $path = $path_FSH; $nameincrm = $name_in_FSH; $customerkey=$customerkey_FSH; break;
    default:     $path = "";        $nameincrm = "";           $customerkey="" ; break;
}

