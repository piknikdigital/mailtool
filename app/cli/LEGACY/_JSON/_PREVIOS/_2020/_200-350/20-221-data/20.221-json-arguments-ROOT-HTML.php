<?php

require_once("20.221-common.php");

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
    "img", //2
    "p300",             // 
    "pframed", // #d6a76f //
    "spacer",
    "spacer",// #f7f7f7
    "m_IMG_TXT_m",
    "spacer",// #f7f7f7
    "m_IMG_TXT_m",
    "spacer",// #f7f7f7
    "m_IMG_TXT_m",
    "spacer",// #f7f7f7
    "spacer",   
    "pframed", // #0a2354
    "p300",             // 
    "cta1",
    "spacer",   
    "3cols_chat_fb_phone",
    "spacer",   
    "sinfuego_sinhumo_sinceniza_dorado_HTML",
    "spacer",   
    "legal_extra",
    "disclaimer_iqos"    
);


/* 
    "img_Logo_Header_HTML",
    "img_Cover_HTML",
    "img", //
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

    CODIGO PARA CUPON 221221XX :   %%=v(@voucher_code)=%% 
    "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
    "rawHTML", // %%=ContentBlockbyKey(&quot;Onboarding_Conversion_Check&quot;)=%% 
    $a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";
*/


/*
BAD CHR : ""   
--------------------
Gracias por elegir una mejor alternativa para consumir tabaco. Ahora podrás empezar a vivir momentos únicos junto a tu <b>IQOS.</b>
--------------------
¿El siguiente paso?<br>Registrar tu dispositivo para poder recibir grandes y exclusivos beneficios: 
--------------------
<span style=\"font-weight: 700;\">¡200 MXN</span> redimibles en accesorios <span style=\"font-weight: 700;\">IQOS!*</span>
--------------------
20.221-3.png
Acceso a nuestro servicio de cobertura extendida, <b>IQOS CARE PLUS**</b>,  para que tu <b>IQOS</b> esté protegido.
--------------------
20.221-4.png
Un <b>agente experto IQOS</b> listo para resolver las dudas que tengas en el momento que lo necesites.
--------------------
20.221-5.png
Mejora tu experiencia con los tips y consejos que tenemos para ti en nuestros diferentes canales de comunicación.
--------------------
Asegúrate de conservar tu ticket, así podrás recibir el servicio exclusivo <b>IQOS CARE PLUS.</b> 
--------------------
Si tienes dudas de cómo obtener este servicio, ponemos a tu disposición los canales de comunicación y <b>Expertos IQOS</b> en nuestras tiendas:
--------------------
--------------------
Nuestros asesores están
listos para atenderte.
--------------------
Visita nuestro perfil,
escríbenos y uno
de nuestros asesores
resolverá tus dudas.
--------------------
800 1 IQOSMX (4767 69)
Llámanos. Estaremos
felices de escucharte.
--------------------
--------------------
*El código de descuento le llegará al usuario una vez que su registro en <b>iqos.com</b> esté completado. Código de descuento redimible solo una vez por usuario registrado (con cuenta creada en www.iqos.com). Válido únicamente en la compra de accesorios IQOS en la República Mexicana. No es válido en la compra de unidades de tabaco para calentar ni en dispositivos IQOS. Solo para fumadores adultos o usuarios adultos de otros productos con nicotina. Vigencia del código del 9 al 30 de septiembre de 2020. Aplicable únicamente en compras realizadas con Asesores Comerciales IQOS, Tiendas IQOS participantes (IQOS Store, IQOS Shop) y compras realizadas en www.iqos.com. Sujeto a disponibilidad de inventario. El código deberá ser canjeado en su totalidad en una sola exhibición. No es acumulable con otros códigos de descuento y no será canjeable por dinero en efectivo ni cualquier otra forma de pago. Consulta <a href=\"https://www.iqos.com/mx/es/care-plus/terminos-condiciones-care-plus.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones.</a><br>**Aplican restricciones. Conoce Términos y Condiciones del programa <b>IQOS CARE PLUS</b> en <b>iqos.com</b><br>En caso de compras hechas en canales de terceros, distintos de www.iqos.com, Tiendas IQOS y Asesores Comerciales IQOS, es necesario conservar y subir al registro el ticket de compra hecha con distribuidores autorizados para poder gozar de los beneficios del Programa IQOS CARE PLUS.
--------------------
--------------------
--------------------
--------------------

<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TEXTO</a>
<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TEXTO</a>
<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TEXTO</a>

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