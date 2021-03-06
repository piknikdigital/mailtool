<?php

require_once("20.273-common.php");

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
    "p300",
    "pframed",
    "spacer",
    "pframed",
    "spacer",
    "img",
    "p300",
    "img",
    "p700",
    "p700",
    "legal_extra",
    "disclaimer_iqos"    
);


/* 
    "img",
    "spacer",
    "pframed",
    "cta1",
    "greeting_negro",
    "greeting_dorado",
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
Sabemos que desde hace 1 año eres parte de los miles de mexicanos que se han unido al cambio con <b>IQOS</b> y queremos contarte algo.<br><br>No importa si se te acaba la batería, si quieres un momento <b>IQOS</b> adicional o simplemente complementar tu uso, te tenemos una excelente noticia.
--------------------
Adquiere un <span style=\"color: #F3F3F3; font-size:24px; font-weight: 700;\">IQOS 2.4 PLUS</span> con <br><span style=\"color: #F3F3F3; font-size:24px; font-weight: 700;\">35% de descuento</span><br>con el siguiente código<sup>(1)</sup> para que nada detenga tu camino.
d6a76f
--------------------
SINHUMO21
fbe092
--------------------
COMPRAR
20.273-2.jpg
https://www.iqos.com/mx/es/shop/kit-iqos-2-4-plus-blanco.html
--------------------
Conoce las experiencias de aquellos que ya viven el cambio con más de un dispositivo.
--------------------
¿Te quedarás solo con uno?
--------------------
IQOS LO CAMBIA TODO
e4ab68
--------------------
(1) Solo para fumadores adultos, usuarios adultos IQOS o usuarios adultos de otros productos con nicotina. Únicamente son elegibles para utilizar el código de descuento los usuarios con cuenta registrada en www.iqos.com, que tengan cuando menos 12 meses de haberse registrado (creado su cuenta) y que, además, cuenten con un dispositivo ligado/registrado a su cuenta. El código de descuento estará vigente a partir del 1o de enero de 2021, para ser redimido hasta por 24 meses contados desde la fecha de registro del usuario en www.iqos.com, sin exceder en ningún caso del 31 de diciembre de 2022 que es la fecha límite para redimirlo. Aplica solamente para 1 (un) Kit IQOS 2.4 PLUS por usuario elegible. Descuento no aplicable en la compra de unidades de tabaco para calentar ni accesorios IQOS. Válido únicamente en compras realizadas con Asesores Comerciales IQOS, Tiendas IQOS participantes (IQOS Store, IQOS Shop), compras realizadas en www.iqos.com, y IQOS Corners en puntos de venta seleccionados. Sujeto a disponibilidad de inventario. El código deberá ser canjeado en su totalidad en una sola exhibición. No es acumulable con otros códigos de descuento y no será canjeable por dinero en efectivo ni cualquier otra forma de pago. Consulta <a href=\"https://www.iqos.com/mx/es/codigos-de-descuento.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones.</a>
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------


<br>
<br><br>
<sup>(1)</sup>
<sup>(2)</sup>
<sup>(3)</sup>
<sup>(4)</sup>
<b></b>

<b>IQOS</b>
<b>Kit IQOS</b>
b>IQOS 2.4 PLUS </b>
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
<span style=\"color: #e4ab68; font-size:24px; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-size:24px; font-weight: 700;\"></span>
<span style=\"color: #F3F3F3; font-size:24px; font-weight: 700;\">IQOS 2.4 PLUS</span>
<span style=\"color: #F3F3F3; font-size:24px; font-weight: 700;\">35% de descuento</span>

*/