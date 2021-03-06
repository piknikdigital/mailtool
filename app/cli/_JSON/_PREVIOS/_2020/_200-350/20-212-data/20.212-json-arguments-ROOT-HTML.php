<?php

require_once("20.212-common.php");

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
    "p300",             // 
    "img",  //2
    "p300", // Así funciona IQOS
    "img",  //3  link video
    "spacer",
    "p300", // f7f7f7
    "rgm_coupon_2cols",
    "spacer",
    "p700", // f7f7f7 ¿Aún no te decides?
    "p300", // f7f7f7 
    "img",  // 4 CTA pedir un iqoa
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
    "cta_share_WA_coupon",
    "graylineframed",
    "shopping_list",
 */


/*

<span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span> es un innovador dispositivo que utiliza <span style=\"color: #e4ab68; font-weight: 700;\">HeatControl&trade; Technology</span>, la tecnología que calienta el tabaco en lugar de quemarlo, disminuyendo las siguientes molestias.
-------

Así funciona <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>:

------

Ahora que ya lo conoces,  ¡es momento de tener el tuyo!
-----
Utiliza el código
RGM_W120
Recibe
<span style=\"color: #e4ab68; font-weight: 700;\">$400.00</span><sup>(1)</sup>
de descuento en la compra 
de tu primer <span style=\"color: #e4ab68; font-weight: 700;\">KIT IQOS.</span>
--------

<span style=\"color: #e4ab68; font-weight: 700;\">¿Aún no te decides?</span>
----

Prueba IQOS gratis<sup>(2)</sup>
----

¡Acepta El Reto y cámbialo todo! Solicita un IQOS en préstamo por 15 días. No es necesario hacer algún pago ni dejar tu tarjeta de crédito en garantía.

-----

*Aplican restricciones. Consulta Términos y Condiciones del programa IQOS CARE PLUS en iqos.com<br><br>(1) Cupón redimible únicamente en la compra de tu primer Kit IQOS. Restringido a un cupón por usuario registrado. No es válido en la compra de unidades de tabaco para calentar ni en accesorios IQOS. Descuento válido únicamente para fumadores adultos, usuarios adultos IQOS o usuarios adultos de otros productos con nicotina. Vigencia del cupón hasta el 31 de octubre de 2020. Aplicable únicamente en compras realizadas con Asesores Comerciales IQOS, Tiendas IQOS participantes y compras realizadas en iqos.com. Sujeto a disponibilidad de inventario. Este cupón deberá ser canjeado en su totalidad en una sola exhibición. No es acumulable con otros códigos de descuento y no será canjeable por dinero en efectivo ni cualquier otra forma de pago. Consulta Términos y Condiciones en iqos.com<br><br>(2) El periodo de prueba del Programa de Préstamo IQOS es de hasta 15 días naturales a partir de la entrega del dispositivo. Al cabo de dicho período, el usuario puede optar por comprar el dispositivo o devolverlo. Sujeto a disponibilidad de inventario. Programa exclusivo para fumadores adultos en la Ciudad de México y área metropolitana. Consulta requisitos y Términos y Condiciones del programa.





----




<br>
<br><br>
<sup>(1)</sup>
<sup>(2)</sup>
<sup>(3)</sup>
<sup>(4)</sup>
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
<span style=\"color: #e4ab68; font-weight: 700;\">HeatControl&trade; Technology</span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>

*/