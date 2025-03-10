<?php

require_once("20.139-common.php");

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
    "p300",             // Forma parte de la comunidad que ha dejado el humo de cigarro atrás. Entra hoy a <b>Amazon</b> y adquiere tu <b>IQOS</b>.
    "img",
    "p300",             // Nuestra gama completa de <b>IQOS 2.4 Plus</b> y sus accesorios te está esperando.
    "cta1",             // btn-sa-ir-a-tienda.png       // https://www.amazon.com.mx/s?k=IQOS&ref=bl_dp_s_web_18755677011
    "img",
    "p300",             // Descubre lo que la gente está diciendo de <b>IQOS</b> en nuestras redes sociales.
    "two_rs",           
    "spacer",           
    "sinfuego_sinhumo_sinceniza_dorado_HTML",
    "spacer",           
    "legal_extra",      // La marca registrada Amazon se usa con licencia de Amazon.com.mx, Inc. o sus afiliados.
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