<?php

require_once("20.149-common.php");

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
    "img_Cover_HTML",
    "spacer",
    "greeting_negro",
    "p300",             // ¿Sabías qué tu puedes compartir el cambio con tus amigos<sup>(1)</sup>?<br><br>¡Es muy sencillo!
    "m_IMG_TXT_m",
    "spacer",
    "m_IMG_TXT_m",
    "spacer",
    "m_IMG_TXT_m",
    "p700",             // ¿Quieres saber más?
    "cta1",
    "spacer",
    "legal_extra",  // (1) Solo para fumadores adultos.<br>(2). Consulta términos y condiciones. Válido en la compra y registro del primer kit IQOS (IQOS Holder + Cargador IQOS) de cada amigo referido. Para obtener su descuento, el amigo referido debe registrarse y registrar su dispositivo en iqos.com, y hacerlo válido en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y/o iqos.com. Aplican restricciones. Descuento no válido en productos de tabaco.<br>(3) Recompensa no canjeable por dinero en efectivo y redimible en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y/o a través de un Experto IQOS. Aplican restricciones. No canjeable por productos de tabaco. Limitado a los primeros 5 amigos referidos que compren y registren su primer kit IQOS con tu código único.
    "spacer",           
    "disclaimer_iqos"    
);


// "img_Logo_Header_HTML",
// "img_Cover_HTML",
// "img",
// "spacer",
// "greeting_negro",
// "greeting_dorado",
// "p300",
// "p700",
// "rawHTML",
// "m_TXT_TXT_m",
// "m_TXT_IMG_m",
// "m_IMG_TXT_m",
// "btn_sa_comprar_HTML",
// "cta1",
// "one_rs",
// "two_rs",
// "sinfuego_sinhumo_sinceniza_negro_HTML",
// "sinfuego_sinhumo_sinceniza_dorado_HTML",
// "legal_extra",
// "disclaimer_iqos",
// "pframed",
// "cols_33_33_33",
// "form",
// "mgm_coupon_1",
// "cta_share_WA_coupon",
// "graylineframed",
// "shopping_list",


// "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
// "rawHTML", // %%=ContentBlockbyKey(&quot;Onboarding_Conversion_Check&quot;)=%% 
// "p300",    // f7f7f7   Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.    
// <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>
// $a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";