<?php

require_once("21.87-common.php");

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
    "header_brand_world",
    "img",
    "spacer",
    "spacer",
    "greeting_negro",
    "p300_BW",
    "img",
    "m_TXT_TXT_m",

    "p700_BW",

    "legal_extra",
    "disclaimer_iqos",
    "footer_brand_world"
);


/* 
    "img",
    "spacer",
    "pframed",
    "cta1",
    "p300_BW",
    "p700_BW",
    "greeting_negro",
    "greeting_dorado",
    "footer_brand_world",
    "header_brand_world",

    
    "p300",
    "p700",
    "img_Logo_Header_HTML",
    "img_Cover_HTML",
    "rawHTML",
    "m_TXT_TXT_m",
    "m_TXT_IMG_m",
    "m_IMG_TXT_m",
    "m_IMG_IMG_m",
    "btn_sa_comprar_HTML",
    "one_rs",
    "two_rs",
    "three_rs",
    "sinfuego_sinhumo_sinceniza_negro_HTML",
    "sinfuego_sinhumo_sinceniza_dorado_HTML",
    "legal_extra",
    "disclaimer_iqos",
    "cols_33_33_33",
    "form",
    "mgm_coupon_1",
    "mgm_coupon_2cols",
    "rgm_coupon_2cols",
    "cta_share_WA_coupon",
    "graylineframed",
    "shopping_list",
    "3cols_chat_fb_phone",

    CODIGO PARA CUPON X X X X X X X X :   %%=v(@voucher_code)=%% 
    "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
    "rawHTML", // %%=ContentBlockbyKey(&quot;Onboarding_Conversion_Check&quot;)=%% 
    $a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";
*/


/*
BAD CHR : "", "	"
--------------------
--------------------
00d4d3
--------------------
¡Gracias por registrarte en <span style=\"color:#00d4d3;font-weight:700;\">IQOS</span>!<br><br>Sabemos que ya estás listo para empezar el cambio, por eso, tenemos algo para ti.<br><br>Podrás adquirir tu primer <span style=\"color:#00d4d3;font-weight:700;\">Kit IQOS</span> con el siguiente código<span style=\"font-size:12px;\"><sup>(1)</sup></span> y recibir <span style=\"color:#00d4d3;font-weight:700;\">$200 MXN de descuento</span> en tu compra.<br><br>Por el momento <b>no</b> contamos con disponibilidad de dispositivos, pero ¡no te preocupes! Nosotros te confirmaremos cuando volvamos a tener en existencia y podrás aplicar este código para obtener el descuento.

--------------------
Codigo de descuento 
--------------------
<span style=\"color: #00d4d3; font-weight: 700;\">%%CODEHERE%%</span>
--------------------
--------------------
SIN FUEGO, SIN HUMO, SIN CENIZA 
--------------------
--------------------
(1) Código de descuento redimible solo una vez por usuario registrado (con cuenta creada en www.iqos.com). Válido únicamente en la compra de tu primer Kit IQOS en la República Mexicana. No es válido en la compra de unidades de tabaco para calentar ni en accesorios IQOS. Solo para fumadores adultos o usuarios adultos de otros productos con nicotina. Vigencia del código del 1 de enero de 2021 al 31 de diciembre de 2021. Válido únicamente en compras realizadas en Tiendas IQOS participantes (IQOS Store, IQOS Shop), compras realizadas en www.iqos.com, IQOS Corners en puntos de venta seleccionados y compras realizadas a través de nuestros asesores telefónicos de la línea de atención al cliente 8001 IQOS (800 1 476769). Sujeto a disponibilidad de inventario. El código deberá ser canjeado en su totalidad en una sola exhibición. No es acumulable con otros códigos de descuento y no será canjeable por dinero en efectivo ni cualquier otra forma de pago. Consulta <a href=\"https://www.iqos.com/mx/es/terminos-condiciones.html\" style=\"text-decoration:underline;\" target=\"_blank\">términos y condiciones en iqos.com</a>
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
<a href=\"https://www.iqos.com/mx/es/terminos-condiciones.html\" style=\"text-decoration:underline;\" target=\"_blank\">términos y condiciones en iqos.com</a>

<br>
<br><br>
<b></b>

<sup>(1)</sup>
<sup>(2)</sup>
<sup>(3)</sup>
<sup>(4)</sup>

<span style=\"font-size:12px;\"><sup>(1)</sup></span>
<span style=\"font-size:12px;\"><sup>(2)</sup></span>
<span style=\"font-size:12px;\"><sup>(3)</sup></span>
<span style=\"font-size:12px;\"><sup>(4)</sup></span>


<b>IQOS</b>
<b>Kit IQOS</b>
<b>Tiendas IQOS</b>
<b>IQOS 2.4 PLUS</b>
<b></b>
<b></b>
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
<span style=\"color: #00d4d3; font-weight: 700;\"></span>

<span style=\"color: #e4ab68; font-size:24px; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-size:24px; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-size:24px; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-size:24px; font-weight: 700;\"></span>

<span style=\"font-size:24px; font-weight: 700;\"></span>
<span style=\"font-size:24px; font-weight: 700;\"></span>
<span style=\"font-size:24px; font-weight: 700;\">35% de descuento</span>
<span style=\"font-size:24px; font-weight: 700;\">IQOS 2.4 PLUS</span>


*/