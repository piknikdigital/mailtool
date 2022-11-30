<?php

require_once("22.168-common.php");

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
    "greeting_v2",

    "img",
    "columns",
    "columns",

    "spacer",
    "img",
    "columns",

    "ElijoIQOS",
    "legal_extra",
    "disclaimer_iqos",
    "footer_bw_v1_lowercase"
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
" ",
--------------------
++---------------------------------++
||   COLOR TURQUESA Brand World    ||
||   00d1d2                        ||
||   COLOR SLATE  Brand World      ||
||   34303d                        ||
||   Naranja                       ||
||   e3813b                        ||
++---------------------------------++
--------------------
===================================================================
<span style=\"color:#00d1d2;font-weight:700;\"></span>
===================================================================
<span style=\"color:#00d1d2;font-weight:700;font-size:24px;\"></span>
===================================================================
<span style=\"font-size:24px;font-weight:700;\"></span>
===================================================================
<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TEXTO</a>


<span style=\"text-decoration:line-through;\">$799 MXN</span>

<span style=\"font-size:24px;\"><sup>MXN</sup></span>

===================================================================
<span style=\"font-size:12px;\"><sup>(1)</sup></span>
<span style=\"font-size:12px;\"><sup>(2)</sup></span>
<span style=\"font-size:12px;\"><sup>(3)</sup></span>
<span style=\"font-size:12px;\"><sup>(4)</sup></span>
===================================================================
--------------------
--------------------
--------------------
Llama al <span style=\"color:#00d1d2;\">*993</span> desde tu celular para<br> agendar una cita.
--------------------
Recoge tu <span style=\"color:#00d1d2;\">Kit IQOS en préstamo</span> en<br> tu Tienda IQOS*.
--------------------
¡Listo! <span style=\"color:#00d1d2;\">Comienza la experiencia.</span>
--------------------
--------------------
--------------------
--------------------
--------------------
Además, si decides adquirir tu dispositivo, podrás recibir
--------------------
10% de descuento<span style=\"font-size:16px;\"><sup>(1)</sup></span>
--------------------
en la compra de tu primer <b>Kit IQOS</b> usando<br>el siguiente código:
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
Precio Original
--------------------
$799 MXN
--------------------
Precio Final con Descuento
--------------------
$719.10 MXN
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
Tu Equipo myIQOS
--------------------
--------------------
*Programa disponible en Tiendas IQOS Antara, Perisur, Santa Fe y IQOS Corners en Sanborns seleccionados. El listado de tiendas podrá cambiar sin previo aviso.<br>(1) Promoción vigente del 1 de octubre al 31 de diciembre del 2022. Código de 10% de descuento redimible solo una vez por usuario registrado (con cuenta creada en www.iqos.com). Válido únicamente en la compra de tu primer Kit IQOS en la República Mexicana. No es válido en la compra de unidades de tabaco para calentar ni en accesorios IQOS. Solo para fumadores adultos o usuarios adultos de otros productos con nicotina. Vigencia del código del 1 de octubre al 31 de diciembre del 2022. Aplicable en compras realizadas en compraiqos.com.mx, Tiendas IQOS y asesores IQOS. Sujeto a disponibilidad de inventario. El código deberá ser canjeado en su totalidad en una sola exhibición. No es acumulable con otros códigos de descuento y no será canjeable por dinero en efectivo ni cualquier otra forma de pago.
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
===================================================================

"donde_codificar_la_siguiente url" : "https://www.urlencoder.org/",
"url_ctaDECODED"     : "whatsapp://send?text=",
"text2encode"        : "Te regalo 20% de descuento en la compra de tu primer Kit IQOS. No olvides utilizar mi código %%=v(@voucher_code)=%% al comprar.",
"imgulr1"            : "whatsapp://send?text=",
"imgulr2"            : "https://wa.me/?text=",
"imgulr3"            : "https://web.whatsapp.com/send?text=",
"imgulr"             : "https://wa.me/?text=Te%20regalo%2020%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS.%0ANo%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25%3Dv%28%40voucher_code%29%3D%25%25%20al%20comprar.",

===================================================================

LEGAL FSH  - Brand World
&copy; 2021 %%Member_Busname%% Todos los derechos reservados.<br>%%Member_Addr%%,<br>%%Member_City%%, %%Member_PostalCode%%, %%Member_State%%, %%Member_Country%%<br><a href=\"%%unsub_center_url%%\"><span style=\"text-decoration:underline;color:blue;\">Darme de baja</span></a> | <a href=\"%%profile_center_url%%\"><span style=\"text-decoration:underline;color:blue;\">Actualizar perfil</span></a>

===================================================================
--------------------
--------------------
--------------------
--------------------
--------------------

<br>
<br><br>
<b></b>



<b>IQOS</b>
<b>Kit IQOS</b>
<b>Tiendas IQOS</b>
<b>IQOS 2.4 PLUS</b>
<b>iqos.com</b>





*/