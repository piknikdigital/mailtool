<?php

require_once("20.223-common.php");

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
    "p300",             // Celebra con tus amigos<sup>(1)</sup> y ayúdalos a independizarse del humo.<br><br>Comparte con ellos el cambio, del <b>9 al 30 de septiembre,</b> y podrán obtener beneficios <b>¡al doble!</b>
    "img",// 2
    "spacer",
    "img",// 3
    "p300",             // Tu código único es:
    "mgm_coupon_1",
    "spacer",
    "cta_share_WA_coupon",
    "p300",             // Te recomendamos hacerlo desde tu celular.<br><br>¿Quieres saber más?
    "cta1", // cnocer-mas // https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html
    "spacer",
    "legal_extra", // (1) Solo para fumadores adultos o usuarios adultos de otros productos con nicotina.<br><br>(2) Descuento válido del 9 al 30 de septiembre de 2020. Válido en la compra y registro del primer Kit IQOS de cada amigo referido. Para obtener el descuento, el amigo referido debe registrarse, registrar su Kit IQOS en iqos.com y hacerlo válido en Tiendas IQOS y iqos.com. No es válido en la compra de unidades de tabaco para calentar.<br><br>(3) Recompensa válida del 9 al 30 de septiembre de 2020. Cupón redimible en Tiendas IQOS y iqos.com. Cupón redimible solo una vez por usuario registrado (con cuenta creada en www.iqos.com). No es válido en la compra de unidades de tabaco para calentar. Limitado a los primeros 5 amigos referidos que compren y registren su primer Kit IQOS con tu código único. Si el valor de el/los productos es mayor al monto de la recompensa, el usuario deberá cubrir la diferencia. El cupón deberá ser canjeado en su totalidad en una sola exhibición. No es acumulable con otros códigos de descuento y no será canjeable por dinero en efectivo ni cualquier otra forma de pago. Consulta <a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a> del Programa.
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

    CODIGO PARA CUPON 223223XX :   %%=v(@voucher_code)=%% 
    "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
    "rawHTML", // %%=ContentBlockbyKey(&quot;Onboarding_Conversion_Check&quot;)=%% 
    $a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";
*/


/*
BAD CHR : ""   
--------------------
Celebra con tus amigos<sup>(1)</sup> y ayúdalos a independizarse del humo.<br><br>Comparte con ellos el cambio, del <b>9 al 30 de septiembre,</b> y podrán obtener beneficios <b>¡al doble!</b>
--------------------
Tu código único es:
--------------------
%%=v(@voucher_code)=%%
--------------------
Te recomendamos hacerlo desde tu celular.<br><br>¿Quieres saber más?
--------------------
(1) Solo para fumadores adultos o usuarios adultos de otros productos con nicotina.<br><br>(2) Descuento válido del 9 al 30 de septiembre de 2020. Válido en la compra y registro del primer Kit IQOS de cada amigo referido. Para obtener el descuento, el amigo referido debe registrarse, registrar su Kit IQOS en iqos.com y hacerlo válido en Tiendas IQOS y iqos.com. No es válido en la compra de unidades de tabaco para calentar.<br><br>(3) Recompensa válida del 9 al 30 de septiembre de 2020. Cupón redimible en Tiendas IQOS y iqos.com. Cupón redimible solo una vez por usuario registrado (con cuenta creada en www.iqos.com). No es válido en la compra de unidades de tabaco para calentar. Limitado a los primeros 5 amigos referidos que compren y registren su primer Kit IQOS con tu código único. Si el valor de el/los productos es mayor al monto de la recompensa, el usuario deberá cubrir la diferencia. El cupón deberá ser canjeado en su totalidad en una sola exhibición. No es acumulable con otros códigos de descuento y no será canjeable por dinero en efectivo ni cualquier otra forma de pago. Consulta <a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a> del Programa.
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