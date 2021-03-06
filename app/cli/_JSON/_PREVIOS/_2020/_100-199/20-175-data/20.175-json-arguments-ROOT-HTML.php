<?php

require_once("20.175-common.php");

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
    "greeting_dorado",
    "p300",             // Ahora eres miembro de la comunidad <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span> y tendrás acceso a diferentes beneficios al momento de adquirir tu dispositivo.
    "img",      // 2
    "p300",             // Utiliza este código y recibirás <span style=\"color: #e4ab68; font-weight: 700;\">$200 MXN</span> de descuento en la compra de tu primer <span style=\"color: #e4ab68; font-weight: 700;\">Kit IQOS.</span>
    "img",      // 3
    "pframed",  // %%=v(@voucher_code)=%%
    "spacer",
    "cta1",     // btn-sa-comprar-ahora.png  // 
    "spacer",
    "m_IMG_TXT_m",  // #f7f7f7    // 3 // <span style=\"color: #e4ab68; font-weight: 700;\">¿Aún no te decides?</span><br><br>¡No te preocupes! Tenemos la solución.<br><br><span style=\"color: #e4ab68; font-weight: 700;\">Solicita una prueba y únete a IQOS EL RETO<sup>(1)</sup>.</span><br><br>Podrás probar uno de nuestros  dispositivos, sin costo, durante 15 días. Después de ese tiempo tu decidirás si te unes a la comunidad.
                    // btn-sa-unete-a-iqos-el-reto.png     https://www.probar-iqos.com/
    "m_TXT_IMG_m",  // #f7f7f7    // 4 // h1: ¡Ya compraste tu dispositivo? #e4ab68
                    // p: Regístralo en <span style=\"color: #e4ab68; font-weight: 700;\">iqos.com</span> para tener acceso a nuestro servicio de cobertura extendida, <span style=\"color: #e4ab68; font-weight: 700;\">IQOS CARE PLUS<sup>(2)</sup></span> y muchos beneficios más.
                    // btn-sa-click-aqui.png    // https://www.iqos.com/mx/es/care-plus.html
    "spacer",           
    "sinfuego_sinhumo_sinceniza_dorado_HTML",
    "spacer",           
    "legal_extra",  // (1) El periodo de prueba del Programa de Préstamo IQOS es de hasta 15 días naturales a partir de la entrega del dispositivo. Al cabo de dicho período, el usuario puede optar por comprar el dispositivo o devolverlo. Sujeto a disponibilidad de inventario. Programa exclusivo para dumadores adultos en la Ciudad de México y área metropolitana. Consulta requisitos y Términos y Condiciones del programa.<br><br>(2) Conoce Términos y Condiciones del programa IQOS CARE PLUS en iqos.com
    "disclaimer_iqos"    
);


/* 
    "img_Logo_Header_HTML",
    "img_Cover_HTML",
    "img",
    "spacer",
    "greeting_negro",
    "greeting_dorado",
    "p300",
    "p700",
    "rawHTML",
    "m_TXT_TXT_m",
    "m_TXT_IMG_m",
    "m_IMG_TXT_m",
    "btn_sa_comprar_HTML",
    "cta1",
    "one_rs",
    "two_rs",
    "sinfuego_sinhumo_sinceniza_negro_HTML",
    "sinfuego_sinhumo_sinceniza_dorado_HTML",
    "legal_extra",
    "disclaimer_iqos",
    "pframed",
    "cols_33_33_33",
    "form",
    "mgm_coupon_1",
    "cta_share_WA_coupon",
    "graylineframed",
    "shopping_list",
 */

// "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
// "rawHTML", // %%=ContentBlockbyKey(&quot;Onboarding_Conversion_Check&quot;)=%% 
// "p300",    // f7f7f7   Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.    
// <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>
// $a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";