<?php

require_once("20.246-common.php");

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
    "p300", // Gracias a ti, tus amigos fumadores adultos han cambiado su vida y  son parte de una mejor alternativa para consumir tabaco.<br><br>Queremos reconocer tu esfuerzo con algo especial y exclusivo para ti.    
    "img", // 2
    "spacer",
    "mgm_coupon_2cols",
    "three_rs",
    "p700", // IQOS LO CAMBIA TODO
    "img", // 3
    "legal_extra", // (1) <a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html\" style=\"text-decoration:underline;\" target=\"_blank\">Consulta términos y condiciones</a>. Válido en la compra y registro del primer dispositivo (IQOS Holder + Cargador IQOS) de cada amigo referido. Para obtener su descuento, el amigo referido debe registrarse y registrar su dispositivo en iqos.com, y hacerlo válido en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y iqos.com. Descuento no válido en productos de tabaco.<br><br>(2) Solo para fumadores adultos.
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

    CODIGO PARA CUPON 246246XX :   %%=v(@voucher_code)=%% 
    "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
    "rawHTML", // %%=ContentBlockbyKey(&quot;Onboarding_Conversion_Check&quot;)=%% 
    $a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";
*/


/*
BAD CHR : "", "	"
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------


(1) Consulta términos y condiciones de la Dinámica aquí y del programa Refiere un Amigo en iqos.com. Vigencia de la Dinámica del 5 de noviembre al 4 de diciembre de 2020. Participan únicamente los Usuarios con mínimo 1 referido al momento del inicio de la Dinámica. Válido en la compra y registro del primer dispositivo (IQOS Holder + Cargador IQOS) de cada amigo referido. Para considerarse como referido, tu amigo referido deberá registrarse y registrar su dispositivo en iqos.com.<br><br>(2) Solo para amigos fumadores adultos o usuarios adultos de otros productos con nicotina.











https://cloud.e.iqos.com/mx_mgmmotorsports_TC






















































(1) Consulta términos y condiciones de la Dinámica <a href=\"https://cloud.e.iqos.com/mx_motorsport\" style=\"text-decoration:underline;\" target=\"_blank\">aquí</a> y del programa Refiere un Amigo en <a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html\" style=\"text-decoration:underline;\" target=\"_blank\">iqos.com</a>. Vigencia de la Dinámica del 5 de noviembre al 4 de diciembre de 2020. Participan únicamente los Usuarios con mínimo 1 referido al momento del inicio de la Dinámica. Válido en la compra y registro del primer dispositivo (IQOS Holder + Cargador IQOS) de cada amigo referido. Para considerarse como referido, tu amigo referido deberá registrarse y registrar su dispositivo en iqos.com.<br><br>(2) Solo para amigos fumadores adultos o usuarios adultos de otros productos con nicotina.


--------------------------------------------------------------------------------

<a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html\" style=\"text-decoration:underline;\" target=\"_blank\">iqos.com</a>



<a href=\"https://cloud.e.iqos.com/mx_motorsport\" style=\"text-decoration:underline;\" target=\"_blank\">aquí</a>

<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TXT</a>
<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TXT</a>
<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TXT</a>
<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TXT</a>

--------------------------------------------------------------------------------
(1) <a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html\" style=\"text-decoration:underline;\" target=\"_blank\">Consulta términos y condiciones</a>. Válido en la compra y registro del primer dispositivo (IQOS Holder + Cargador IQOS) de cada amigo referido. Para obtener su descuento, el amigo referido debe registrarse y registrar su dispositivo en iqos.com, y hacerlo válido en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y iqos.com. Descuento no válido en productos de tabaco.<br><br>(2) Solo para fumadores adultos.
--------------------------------------------------------------------------------



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