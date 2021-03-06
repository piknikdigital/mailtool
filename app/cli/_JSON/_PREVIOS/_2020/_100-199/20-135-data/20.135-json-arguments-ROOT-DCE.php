<?php

require_once("20.135-common.php");

$target    = "DCE";       // "HTML", "DCE" o "FSH"

$filename  = $filename_base . $target;
$subject   = $subject_base;
$preheader = $preheader_base;

switch ($target)
{
    case "DCE":  $path = $path_DCE; $nameincrm = $name_in_DCE; $customerkey=$customerkey_DCE; break;
    case "FSH":  $path = $path_FSH; $nameincrm = $name_in_FSH; $customerkey=$customerkey_FSH; break;
    default:     $path = "";        $nameincrm = "";           $customerkey="" ; break;
}

$requiredBlocks = array(
    "img_Logo_Header_HTML",
    "img_Cover_HTML",
    "spacer",
    "greeting_negro",
    "p700",             //
    "p300",             //
    "img",              //
    "p300",             //
    "img",              //
    "spacer",           //
    "p300",             //
    "cta1",             //
    "spacer",
    "p300",             //
    "cta1",             //
    "spacer",           //
    "p700",             //
    "legal_extra",      //
    "disclaimer_iqos"

);

// "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
// "sinfuego_sinhumo_sinceniza_dorado_HTML",
// "spacer",
// "m_IMG_TXT_m",      // 
// "img_Cover_HTML",
// "p700",             // 
// "img",
// "spacer",
// "pframed",          // 
// "m_IMG_TXT_m",      // 
// "m_TXT_TXT_m",
// "p300", // f7f7f7   Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.    
// "rawHTML", // %%=ContentBlockbyKey("Onboarding_Conversion_Check")=%% 
// <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>
// $a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";