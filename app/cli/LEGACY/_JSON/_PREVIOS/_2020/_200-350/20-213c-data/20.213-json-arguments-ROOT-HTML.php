<?php

require_once("20.213-common.php");

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
    "img",//2
    "spacer",
    "rgm_coupon_2cols",
    "img",// btn ir a tienda en linea
    "spacer",
    "p700",
    "p300",
    "img",
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
    "rgm_coupon_2cols",
    "cta_share_WA_coupon",
    "graylineframed",
    "shopping_list",
 */

// CODIGO PARA CUPON 213213XX :   %%=v(@voucher_code)=%% 

/*

Descubre todo lo que <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span> tiene para brindarte en nuestra Tienda en línea.
---------------------------------
¡Ahora es momento de tener el tuyo!
Utiliza el código
RGMSEPT20
y recibe $400.00 (1) pesos 
de descuento en la 
compra de tu primer Kit IQOS.


¿Aún no te decides?
---------------------------------
Prueba IQOS gratis<sup>(2)</sup>
---------------------------------
¡Acepta El Reto y cámbialo todo! Solicita un IQOS en préstamo por 15 días. No es necesario hacer algún pago ni dejar tu tarjeta de crédito en garantía.
-----
RGMSEPT20
------

*Aplican restricciones. Consulta Términos y Condiciones del programa IQOS CARE PLUS en iqos.com<br><br>(1) Cupón redimible únicamente en la compra de tu primer Kit IQOS. Restringido a un cupón por usuario registrado. No es válido en la compra de unidades de tabaco para calentar ni en accesorios IQOS. Descuento válido únicamente para fumadores adultos, usuarios adultos IQOS o usuarios adultos de otros productos con nicotina. Vigencia del cupón hasta el 31 de octubre de 2020. Aplicable únicamente en compras realizadas con Asesores Comerciales IQOS, Tiendas IQOS participantes y compras realizadas en iqos.com. Sujeto a disponibilidad de inventario. Este cupón deberá ser canjeado en su totalidad en una sola exhibición. No es acumulable con otros códigos de descuento y no será canjeable por dinero en efectivo ni cualquier otra forma de pago. Consulta Términos y Condiciones en iqos.com<br><br>(2) El periodo de prueba del Programa de Préstamo IQOS es de hasta 15 días naturales a partir de la entrega del dispositivo. Al cabo de dicho período, el usuario puede optar por comprar el dispositivo o devolverlo. Sujeto a disponibilidad de inventario. Programa exclusivo para fumadores adultos en la Ciudad de México y área metropolitana. Consulta requisitos y <a href=\"https://www.iqos.com/mx/es/terminos-condiciones.html\" style=\"text-decoration:underline;\"  target=\"_blank\">Términos y Condiciones</a> del programa.


Consulta requisitos y <a href=\"https://www.iqos.com/mx/es/terminos-condiciones.html\" style=\"text-decoration:underline;\"  target=\"_blank\">Términos y Condiciones</a> del programa.
RGMSEPT20

---------------------------------------------------------------------------------------------------
156
Day 01 - Confirmation
https://paginum.com/public/static/html/pmi2008/pmi-200810-lending-el-reto/pmi-200810-ID20.156-lending-el-reto-confirmation-HTML.html

160	
Day 11 - Conversion	
https://paginum.com/public/static/html/pmi2008/pmi-200810-lending-el-reto/pmi-200810-ID20.160-lending-el-reto-conversion-HTML.html

161
Day 15 - Buy
https://paginum.com/public/static/html/pmi2008/pmi-200810-lending-el-reto/pmi-200810-ID20.161-lending-el-reto-buy-HTML.html


---------------------------------------------------------------------------------------------------



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
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>

*/

