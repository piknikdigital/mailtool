<?php

require_once("21.257-common.php");

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
    "img",
    "greeting_v2",
    "p300_BW",

    "img",
    "columns",
    "spacer",

    "columns",

    "p300_BW",

    "ElijoIQOS",
    "legal_extra",
    "disclaimer_iqos",
    "footer_bw_v1"
);


/* 
    "img",
    "spacer",
    "pframed",
    "cta1",
    "p_v2",
    "p300_BW",
    "p700_BW",
    "greeting_v2",
    "columns",
    "cta1_v2",
    "spacer_v2",

    "footer_bw_v1",
    "footer_fsh",
    "disclaimer_fsh",

    "greeting_negro",
    "greeting_dorado",
    "footer_brand_world",
    "header_brand_world",

    "FSH_Yellow_Share",
    "FSH_Yellow_Share_2",
    "FSH_Framed_Card",


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

    PREVIO, YA NO USAR: "footer_brand_world"



    CODIGO PARA CUPON X X X X X X X X :   %%=v(@voucher_code)=%% 

    "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
    "rawHTML", // %%=ContentBlockbyKey(&quot;Onboarding_Conversion_Check&quot;)=%% 


*/


/*
BAD CHR : "", "	"
--------------------
Comienza un nuevo año invitando a tus amigos<span style=\"font-size:12px;\"><sup>(1)</sup></span> a ser parte del cambio.<br><br>Ayúdalos a cumplir su propósito de cambiar el cigarro y ambos recibirán <b>¡grandes beneficios!</b>
--------------------
Comparte tu código único.
--------------------
Te recomendamos hacerlo desde tu celular.
--------------------
Por cada amigo que utilice tu código y registre su Kit en iqos.com recibirás desde <b>$300 MXN hasta $1,500 MXN en beneficios.<span style=\"font-size:12px;\"><sup>(2)</sup></span></b>
--------------------
Regala <br><b>20% de descuento<span style=\"font-size:12px;\"><sup>(3)</sup></span></b>a tus amigos en la compra de su primer Kit IQOS.
--------------------
--------------------
Recuerda que puedes invitar a tus amigos<br> a probar IQOS antes de comprarlo<br> <b>durante 14 días</b> con el<br> Programa de Préstamo IQOS
--------------------
Gracias por ser parte de la comunidad que ya usa una mejor alternativa al consumo de tabaco, deseamos que este <span style=\"color:#db3624;font-weight:700;\">2022</span> sigas adelante con el cambio y los compartas con tus seres queridos.
--------------------
--------------------
--------------------
--------------------
(1) Solo para fumadores adultos.<br>(2) Cada beneficio equivale a $300 MXN en dinero electrónico, no canjeable por dinero en efectivo, válido solo en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y iqos.com. No canjeable por productos de tabaco. Por cada amigo que utilice tu código, obtendrás $300 MXN en recompensas, teniendo la oportunidad de recibir hasta $1,500 MXN en recompensas. Limitado a los primeros 5 amigos referidos que compren y registren su primer dispositivo con tu código único.<br>(3) Consulta <a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a>. Válido en la compra y registro del primer dispositivo (IQOS Holder + Cargador IQOS) de cada amigo referido. Para obtener su descuento, el amigo referido debe registrarse y registrar su dispositivo en iqos.com, y hacerlo válido en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y iqos.com. Descuento no válido en productos de tabaco.
--------------------
--------------------


--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
COLOR AQUA Brand World
00d1d2
--------------------
--------------------
"donde_codificar_la_siguiente url" : "https://www.urlencoder.org/",
"url_ctaDECODED"     : "whatsapp://send?text=",
"text2encode"        : "Te regalo 20% de descuento en la compra de tu primer Kit IQOS. No olvides utilizar mi código %%=v(@voucher_code)=%% al comprar.",
"imgulr1"            : "whatsapp://send?text=",
"imgulr2"            : "https://wa.me/?text=",
"imgulr3"            : "https://web.whatsapp.com/send?text=",
"imgulr"             : "https://wa.me/?text=Te%20regalo%2020%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS.%0ANo%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25%3Dv%28%40voucher_code%29%3D%25%25%20al%20comprar.",
--------------------
--------------------
--------------------
LEGAL FSH  - Brand World
&copy; 2021 %%Member_Busname%% Todos los derechos reservados.<br>%%Member_Addr%%,<br>%%Member_City%%, %%Member_PostalCode%%, %%Member_State%%, %%Member_Country%%<br><a href=\"%%unsub_center_url%%\"><span style=\"text-decoration:underline;color:blue;\">Darme de baja</span></a> | <a href=\"%%profile_center_url%%\"><span style=\"text-decoration:underline;color:blue;\">Actualizar perfil</span></a>
--------------------
--------------------

--------------------
<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TEXTO</a>
--------------------
--------------------

<br>
<br><br>
<b></b>


<span style=\"font-size:12px;\"><sup>(1)</sup></span>
<span style=\"font-size:12px;\"><sup>(2)</sup></span>
<span style=\"font-size:12px;\"><sup>(3)</sup></span>
<span style=\"font-size:12px;\"><sup>(4)</sup></span>


<b>IQOS</b>
<b>Kit IQOS</b>
<b>Tiendas IQOS</b>
<b>IQOS 2.4 PLUS</b>
<b>iqos.com</b>


<b></b>
<b></b>
<b></b>

<span style=\"color:#00d1d2;font-weight:700;\">IQOS</span>
<span style=\"color:#00d1d2;font-weight:700;\">Kit IQOS</span>
<span style=\"color:#00d1d2;font-weight:700;\">Tiendas IQOS</span>
<span style=\"color:#00d1d2;font-weight:700;\">Experto IQOS</span>


<span style=\"color:#00d1d2;font-weight:700;\">IQOS EL RETO</span>
<span style=\"color:#00d1d2;font-weight:700;\">IQOS EL RETO<sup>(1)</sup></span>
<span style=\"color:#00d1d2;font-weight:700;\">KIT IQOS</span>
<span style=\"color:#00d1d2;font-weight:700;\">IQOS</span>
<span style=\"color:#00d1d2;font-weight:700;\">iqos.com</span>
<span style=\"color:#00d1d2;font-weight:700;\">350&deg;C</span>
<span style=\"color:#00d1d2;font-weight:700;\">¡$300 MXN de descuento!</span>
<span style=\"color:#00d1d2;font-weight:700;\">$300 MXN de descuento</span>
<span style=\"color:#00d1d2;font-weight:700;\">$300 MXN</span>
<span style=\"color:#00d1d2;font-weight:700;\">HeatControl&trade; Technology</span>
<span style=\"color:#00d1d2;font-weight:700;\">¿Aún no te has convencido?</span>
<span style=\"color:#00d1d2;font-weight:700;\">¿Todavía lo estás pensando?</span>
<span style=\"color:#00d1d2;font-weight:700;\">gratis</span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#db3624;font-weight:700;\"></span>

<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>

<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>

<span style=\"font-size:24px;font-weight:700;\"></span>
<span style=\"font-size:24px;font-weight:700;\"></span>
<span style=\"font-size:24px;font-weight:700;\">35% de descuento</span>
<span style=\"font-size:24px;font-weight:700;\">IQOS 2.4 PLUS</span>



*/