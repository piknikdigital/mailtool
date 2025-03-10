<?php

require_once("20.128-common.php");

$target    = "HTML";       // "HTML", "DCE" o "FSH"

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
    //"img_Cover_HTML",
    "spacer",
    "greeting_negro",
    "p700",             // ¿Te quedaste sin unidades de tabaco para calentar?
    "p300",             // Te tenemos buenas noticias.
    "img",              // 1
    "p300",             // #e6e6e6  // Podrás encontar las unidades de tabaco para calentar en puntos de venta seleccionados de las siguientes cadenas comerciales.
    "img",              // 2 png 
    "spacer",           // #e6e6e6
    "p300",             // Recuerda que contamos con Envío a Domicilio* dentro de la Ciudad de México y área metropolitana.
    "cta1",             // btn-sa-click-aqui.png       https://www.ordenar-unidades.com/?utm_source=crm&utm_medium=email&utm_campaign=launch
    "spacer",
    "p300",             // #e6e6e6  // Si te encuentras fuera de la CDMX, encuentra el punto de venta más cercano a ti para adquirir unidades de tabaco para calentar.
    "cta1",             // #e6e6e6  // btn-sa-localizar-tienda.png       https://mxiqos.com/tiendasunidades
    "spacer",           // #e6e6e6
    "p700",             // Tu equipo IQOS Care
    "legal_extra",      // *Entregas únicamente en Ciudad de México y Área Metropolitana. Sólo para mayores de edad con identificación oficial. Este servicio es exclusivo para usuarios adultos de IQOS registrados en nuestra base de datos.
    "disclaimer_iqos"

);


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