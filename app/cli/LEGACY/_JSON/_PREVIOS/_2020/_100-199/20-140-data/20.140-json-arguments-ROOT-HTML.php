<?php

require_once("20.140-common.php");

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
    "p300",             // Forma parte de la comunidad <b>IQOS</b>. Aquí te decimos dónde puedes adquirirlos.
    "m_IMG_TXT_m",      // img 2 // Encuentra todos los productos <b>IQOS</b> en nuestra <b>Tienda en Línea</b>.  // btn-iqos-com.png  // https://www.iqos.com/mx/es/descubre/comprar-dispositivos.html
    "m_TXT_IMG_m",      // img 3 // La gama completa de <b>IQOS 2.4 Plus</b > y sus accesorios se encuentra disponible en Amazon. // btn-ir-a-tienda.png // https://www.amazon.com.mx/s?k=IQOS&ref=bl_dp_s_web_18755677011
    "p300",             // Síguenos en nuestras redes sociales y forma parte de la comunidad que ha dejado el humo de cigarro atrás.
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