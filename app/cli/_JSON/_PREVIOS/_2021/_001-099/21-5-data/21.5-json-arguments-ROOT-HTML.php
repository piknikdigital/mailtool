<?php

require_once("21.5-common.php");

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
    "3cols_chat_fb_phone",
    "spacer",
    "img",
    "spacer",
    "p300",
    "cta1",
    "spacer",
    "p700",
    "p700",
    "cols_33_33_33",
    "spacer",   
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
--------------------------------------------------------------------------------


--------------------------------------------------------------------------------


--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------
<b>Si seguir dejando el humo atrás es uno de tus propósitos, ¡cuentas con IQOS!</b><br><br>Tú, al igual que millones de personas alrededor del mundo, decidiste cambiar. ¡Sigue así!<br><br><b>¿Necesitas ayuda?</b><br>Si requieres asesoría con cualquier tema relacionado con tu IQOS, estamos para ayudarte. 
--------------------

contact-ico-1-inspection.png
INSPECCIÓN EN LÍNEA
Descubre qué necesitas hacer para evitar fallas en tu dispositivo.
btn-frameless-visitar.png
https://www.iqos.com/mx/es/ayuda/inicio-rapido.html

contact-ico-2.iqoscareplus.png
IQOS CARE PLUS*
Regístrate al programa IQOS CARE PLUS y disfruta de exclusivos servicios para mejorar tu experiencia con IQOS.
btn-frameless-visitar.png
https://www.iqos.com/mx/es/ayuda.html

contact-ico-3-fb.png
FACEBOOK
Visita nuestro perfil, escríbenos y uno de nuestros asesores resolverá tus dudas.
btn-frameless-visitar.png
https://www.facebook.com/iqosmx

--------------------
<b>¿Te quedaste sin unidades de tabaco para calentar?</b><br>Localiza los puntos de venta seleccionados en la Ciudad de México y el interior de la República Mexicana.
--------------------
LOCALIZAR TIENDA
btn-sa-localizar-tienda.png
https://mxiqos.com/tiendasunidades


--------------------
Con un solo propósito cumples muchos.

--------------------
#IQOSLOCAMBIATODO
--------------------
rs-fb-oblicuo-rojo.png
https://www.facebook.com/iqosmx

rs-ig-oblicuo-rojo.png
https://www.instagram.com/iqos_mx/

rs-yt-oblicuo-rojo.png
https://www.youtube.com/channel/UCQ0NR6SLSmgfrV5TicZXqaA


--------------------
*Aplican restricciones.<br>Consulta términos y condiciones de IQOS CARE PLUS en iqos.com
--------------------
--------------------
--------------------
--------------------
--------------------
<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TEXTO</a>

<br>
<br><br>
<sup>(1)</sup>
<sup>(2)</sup>
<sup>(3)</sup>
<sup>(4)</sup>
<b></b>

<b>IQOS</b>
<b>Kit IQOS</b>
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