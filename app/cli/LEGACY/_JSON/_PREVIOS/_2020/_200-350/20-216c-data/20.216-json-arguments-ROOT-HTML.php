<?php

require_once("20.216-common.php");

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


/*

--------------------------------
Hemos recibido tu solicitud en el <span style=\"color: #e4ab68; font-weight: 700;\">Programa de Préstamo* IQOS.</span> Uno de nuestros <span style=\"color: #e4ab68; font-weight: 700;\">Expertos IQOS</span> te llamará dentro de las próximas 24 horas para confirmar tus datos y coordinar la entrega de tu dispositivo.
--------------------------------
Usa el código:

Y recibe <span style=\"color: #e4ab68; font-weight: 700;\">$400.00 pesos</span> de descuento** en la compra de tu primer Kit IQOS.<br><br>Si tu código de descuento es del Programa de Referidos, el monto puede variar. Consulta <a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html\" style=\"text-decoration:underline;\"  target=\"_blank\">aquí</a> para más información.


--------------------------------
Horarios de atención
--------------------------------
Lunes a Viernes de 9 a 21 hrs.<br>Sábados 9 a 18 hrs.<br>Domingos de 10 a 18 hrs.
--------------------------------

*El periodo de prueba del Programa de Préstamo IQOS es de hasta 15 días naturales a partir de la entrega del dispositivo. Al cabo de dicho período, el usuario puede optar por comprar el dispositivo o devolverlo. Sujeto a disponibilidad de inventario. Programa exclusivo para fumadores adultos en la Ciudad de México y área metropolitana. Consulta requisitos y <a href=\"https://www.probar-iqos.com/terminos-condiciones\" style=\"text-decoration:underline;\"  target=\"_blank\">Términos y Condiciones</a> del programa. <br><br>**Código de descuento redimible solo una vez por usuario registrado (con cuenta creada en www.iqos.com). Válido únicamente en la compra de tu primer Kit IQOS en la República Mexicana. No es válido en la compra de unidades de tabaco para calentar ni en accesorios IQOS. Solo para fumadores adultos o usuarios adultos de otros productos con nicotina. Vigencia del código hasta el 31 de octubre de 2020. Aplicable únicamente en compras realizadas con Asesores Comerciales IQOS, Tiendas IQOS participantes (IQOS Store, IQOS Shop) y compras realizadas en www.iqos.com. Sujeto a disponibilidad de inventario. El código deberá ser canjeado en su totalidad en una sola exhibición. No es acumulable con otros códigos de descuento y no será canjeable por dinero en efectivo ni cualquier otra forma de pago. <a href=\"https://www.iqos.com/mx/es/terminos-condiciones.html\" style=\"text-decoration:underline;\"  target=\"_blank\">Consulta Términos y Condiciones.</a>


--------------------------------
--------------------------------
--------------------------------


<a href=\"LINK\" style=\"text-decoration:underline;\"  target=\"_blank\">TEXTO</a>
<a href=\"LINK\" style=\"text-decoration:underline;\"  target=\"_blank\">TEXTO</a>
<a href=\"LINK\" style=\"text-decoration:underline;\"  target=\"_blank\">TEXTO</a>
<a href=\"LINK\" style=\"text-decoration:underline;\"  target=\"_blank\">TEXTO</a>


Consulta requisitos y <a href=\"https://www.iqos.com/mx/es/terminos-condiciones.html\" style=\"text-decoration:underline;\"  target=\"_blank\">Términos y Condiciones</a> del programa.
--------------------------------
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
<span style=\"color: #e4ab68; font-weight: 700;\">Programa de Préstamo* IQOS.</span>
<span style=\"color: #e4ab68; font-weight: 700;\">Expertos IQOS</span>
<span style=\"color: #e4ab68; font-weight: 700;\">$400.00 pesos</span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>

*/