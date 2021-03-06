<?php

require_once("20.231-common.php");

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
    "p300",             // 
    "cta1",
    "spacer",   
    "img",
    "spacer",   
    "m_IMG_TXT_m",
    "m_TXT_IMG_m",
    "spacer",   
    "sinfuego_sinhumo_sinceniza_dorado_HTML",
    "spacer",   
    "legal_extra",
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
    "m_IMG_IMG_m",
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
    "mgm_coupon_2cols",
    "rgm_coupon_2cols",
    "cta_share_WA_coupon",
    "graylineframed",
    "shopping_list",
    "3cols_chat_fb_phone",

    CODIGO PARA CUPON 231231XX :   %%=v(@voucher_code)=%% 
    "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
    "rawHTML", // %%=ContentBlockbyKey(&quot;Onboarding_Conversion_Check&quot;)=%% 
    $a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";
*/


/*
BAD CHR : ""   
--------------------
¡Gracias por registrarte en <b>IQOS!</b><br><br>Para tener una mejor experiencia, se ha creado una cuenta con tu correo en <b>iqos.com.</b><br>Para usarla, debes primero establecer tu contraseña, haciendo clic aquí:
--------------------

<span style=\"color: #e4ab68; font-weight: 700;\">¿Aún no te decides?</span><br><br>¡No te preocupes! Tenemos la solución.<br><br><span style=\"color: #e4ab68; font-weight: 700;\">Solicita una prueba y únete a IQOS EL RETO<sup>(1)</sup>.</span><br><br>Podrás probar uno de nuestros  dispositivos, sin costo, durante 15 días. Después de ese tiempo tu decidirás si te unes a la comunidad.
--------------------

<span style=\"color: #e4ab68; font-weight: 700;\">¿Ya compraste tu dispositivo?</span><br><br>Regístralo en iqos.com para tener acceso a nuestro servicio de cobertura extendida, <span style=\"color: #e4ab68; font-weight: 700;\">IQOS CARE PLUS<sup>(2)</sup></span> y muchos beneficios más.

--------------------
(1) El periodo de prueba del Programa de Préstamo IQOS es de hasta 15 días naturales a partir de la entrega del dispositivo. Al cabo de dicho período, el usuario puede optar por comprar el dispositivo o devolverlo. Sujeto a disponibilidad de inventario. Programa exclusivo para dumadores adultos en la Ciudad de México y área metropolitana. Consulta requisitos y <a href=\"https://www.probar-iqos.com/terminos-condiciones\" style=\"text-decoration:underline;\"  target=\"_blank\">Términos y Condiciones</a> del programa.<br><br>(2) Conoce Términos y Condiciones del programa IQOS CARE PLUS en <a href=\"https://www.iqos.com/mx/es/home.html\" style=\"text-decoration:underline;\" target=\"_blank\">iqos.com</a>
--------------------
--------------------
--------------------
--------------------
--------------------
<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TEXTO</a>

<br>
<br><br>
<sup>(1)</sup>
<sup>(2)</sup>
<sup>(3)</sup>
<sup>(4)</sup>
<b></b>
<span style=\"color: #e4ab68; font-weight: 700;\">IQOS EL RETO</span>
<span style=\"color: #e4ab68; font-weight: 700;\">IQOS EL RETO<sup>(1)</sup></span>
<span style=\"color: #e4ab68; font-weight: 700;\">KIT IQOS</span>
<span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>
<span style=\"color: #e4ab68; font-weight: 700;\">iqos.com</span>
<span style=\"color: #e4ab68; font-weight: 700;\">350&deg;C</span>
<span style=\"color: #e4ab68; font-weight: 700;\">¡$300 MXN de descuento!</span>
<span style=\"color: #e4ab68; font-weight: 700;\">$300 MXN de descuento</span>
<span style=\"color: #e4ab68; font-weight: 700;\">$300 MXN</span>
<span style=\"color: #e4ab68; font-weight: 700;\">HeatControl&trade; Technology</span>
<span style=\"color: #e4ab68; font-weight: 700;\">¿Aún no te has convencido?</span>
<span style=\"color: #e4ab68; font-weight: 700;\">¿Todavía lo estás pensando?</span>
<span style=\"color: #e4ab68; font-weight: 700;\">gratis</span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>

*/