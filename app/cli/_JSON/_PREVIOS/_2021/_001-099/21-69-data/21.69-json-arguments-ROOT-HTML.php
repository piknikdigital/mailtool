<?php

require_once("21.69-common.php");

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
    "p300_BW",

    "spacer",
    "greeting_negro",
    "p300_BW",

    "m_TXT_IMG_m",
    "spacer",   
    "m_TXT_IMG_m",
    "spacer",   
    "m_IMG_TXT_m",
    "spacer",   

    "p700_BW",

    "disclaimer_iqos",
    "footer_brand_world"
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
    "header_brand_world",
    "p300_BW",
    "p700_BW",

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

Te sientes bien,<br><span style=\"color: #FFFFFF;\">te ves bien</span>
--------------------
Sabemos que tu camino al cambio apenas empieza y estamos muy felices de acompañarte.<br><br><br><b>¿Cómo te has sentido?</b><br><br>Inspírate con algunas de las experiencias de usuarios en México que cómo tú, ya forman parte de la Comunidad IQOS.
--------------------
Desde que lo uso me ha gustado bastante. El hecho de que no uses fuego, no haya humo ni cenizas me agrado ¡mucho más! Además IQOS es muy fácil de usar, los diseños son compactos, cómodos y hay accesorios con los que se pueden personalizar y darle tu toque personal. Una decisión muy acertada y altamente recomendable, sin duda. <br><br>Usuario IQOS México<br>Tony
BG
00d1d2
COL
FFFFFF
--------------------
He dejado de fumar tabaco en cigarrillo, ahora consumo unidades de tabaco para calentar y en mucho menor cantidad que el cigarro normal, además de ya no tener el molesto olor a cigarro y no molestar a las personas que están cerca de mí.<br><br><span style=\"font-size:11px;\">Usuario IQOS México<br>Joel</span>

e2813a
FFFFFF
--------------------
Conoce más historias de cambio en nuestro Instagram y comparte tu experiencia con aquellos que también optaron por la alternativa al consumo de tabaco.
--------------------
#YoElijoIQOS
00d1d2
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TEXTO</a>

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
<span style=\"color: #e4ab68; font-weight: 700;\"></span>

<span style=\"color: #e4ab68; font-size:24px; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-size:24px; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-size:24px; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-size:24px; font-weight: 700;\"></span>

<span style=\"font-size:24px; font-weight: 700;\"></span>
<span style=\"font-size:24px; font-weight: 700;\"></span>
<span style=\"font-size:24px; font-weight: 700;\">35% de descuento</span>
<span style=\"font-size:24px; font-weight: 700;\">IQOS 2.4 PLUS</span>


*/