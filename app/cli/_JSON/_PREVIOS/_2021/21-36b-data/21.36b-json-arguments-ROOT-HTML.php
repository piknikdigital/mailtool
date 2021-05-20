<?php

require_once("21.36-common.php");

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
    "img",
    "p300",
    "p300",
    "p300",
    "m_IMG_TXT_m",
    "m_IMG_TXT_m",
    "m_IMG_TXT_m",
    "p300",
    "p300",
    "cta1",
    "p700",
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
Sabemos que cambiar hábitos suele ser complicado, pero no te preocupes existen alternativas para cambiar. 
--------------------
Te invitamos a conocer IQOS, un dispositivo que calienta tabaco, sin quemarlo, reduciendo hasta en un 95% la generación de componentes tóxicos y potencialmente tóxicos en comparación con el humo de cigarro.*
--------------------
*Reducciones promedio en niveles de una variedad de sustancias químicas nocivas (excluyendo la nicotina) en comparación con el humo de un cigarrillo de referencia (3R4F).
--------------------
<b>Información importante:</b> No necesariamente equivale a una reducción del riesgo del 95%. IQOS no está libre de riesgos.
--------------------
Ofreciendo los siguientes beneficios
--------------------
Sin olor en tu cabello, ropa y manos.
--------------------
Sin manchas en tus dedos y deja significativamente menos manchas en los dientes que los cigarrillos.*
--------------------
Menos molestias para los que te rodean.
--------------------
* Fuente: estudio de laboratorio no clínico realizado en Suiza con dientes humanos y los composites dentales más utilizados. Contrariamente a las condiciones del mundo real, los dientes no se expusieron a otras sustancias colorantes como café, té o vino, que pueden influir en los resultados.
--------------------
<b>Información importante:</b> si los dientes ya están manchados, cambiar a IQOS no revertirá el color de esas manchas.
--------------------
Agenda tu cita al <b>800 1 IQOSMX (476769)</b><br>y conoce una nueva forma<br>de consumir tabaco real.
--------------------
btn-sa-agendar-cita.png
tel:8001476769
--------------------
CALIENTA TABACO REAL.<br>MENOS OLOR. SIN HUMO. SIN CENIZA.
ee5100
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