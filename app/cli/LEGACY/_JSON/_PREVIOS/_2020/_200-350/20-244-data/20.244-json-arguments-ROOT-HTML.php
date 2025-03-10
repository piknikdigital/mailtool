<?php

require_once("20.244-common.php");

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
    "p700",
    "mgm_coupon_1",
    "spacer",
    "cta1",
    "p300",
    "spacer",
    "img",
    "spacer",
    "img",
    "spacer",
    "pframed",
    "spacer",
    "img",
    "p300",
    "three_rs",
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

    CODIGO PARA CUPON 244244XX :   %%=v(@voucher_code)=%% 
    "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
    "rawHTML", // %%=ContentBlockbyKey(&quot;Onboarding_Conversion_Check&quot;)=%% 
    $a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";
*/


/*
BAD CHR : "", "	"
--------------------
Tú, que eres <b>IQOS LOVER</b>, sabes lo que significa la comunidad IQOS. Queremos agradecerte por ayudar a que más fumadores conozcan una mejor alternativa. ¡Cada vez somos más!<br><br>Sigue compartiendo tu Código Único con ellos e invítalos a conocer una mejor alternativa para consumir tabaco.
--------------------
bkg gris e4e5e6
bkg blu  0abbef
Tu código único es:
Te recomendamos hacerlo desde tu celular.
"Te regalo $600 MXN de descuento para tu primer Kit IQOS.
Puedes probar IQOS sin costo antes de comprarlo en https://mxiqos.com/lending 
No olvides utilizar mi código al comprar:"
--------------------
Recuerda que si tu amigo o familiar quiere probar IQOS antes de comprarlo, puede unirse a <br><br><span style=\"font-size:28px; font-weight: 700;\">IQOS EL RETO</span><br><br>y conocer un <b>IQOS 2.4 Plus</b> totalmente gratis durante 15 días y desde su casa. En este momento solo aplica en la Ciudad de México.
--------------------
Siguenos en nuestras redes sociales y conoce más sobre miembros de la comunidad IQOS.
--------------------
IQOS LO CAMBIA TODO
--------------------
(1) Solo para fumadores adultos o usuarios adultos de otros productos con nicotina.<br><br>(2) Descuento válido del 1º de octubre al 30 de noviembre de 2020. Válido en la compra y registro del primer Kit IQOS de cada amigo referido. Consulta <a href=\"http://pmichlauapp503:8182/servlet/CheckSecurity/JSP/sse_g2/Terminos_y_Condiciones_IQOS_Lovers.pdf\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a> del programa EGM.
--------------------
--------------------
--------------------

<a href=\"http://pmichlauapp503:8182/servlet/CheckSecurity/JSP/sse_g2/Terminos_y_Condiciones_IQOS_Lovers.pdf\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a>

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