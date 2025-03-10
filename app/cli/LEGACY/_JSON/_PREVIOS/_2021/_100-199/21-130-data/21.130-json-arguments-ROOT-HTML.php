<?php

require_once("21.130-common.php");

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
    "spacer",
    "greeting_negro",
    "p300_BW",

    "spacer",
    "m_IMG_TXT_m",
    "m_TXT_IMG_m",
    "spacer",
    "img",

    "p300_BW",
    "p300_BW",
    "disclaimer_iqos",
    "spacer",   

    "spacer",   
    "m_IMG_TXT_m",
    "m_IMG_IMG_m",

    "p300_BW",
    "pframed",
    "p300_BW",
    "pframed",
    "img",
    "cta1",
    "p300_BW",

    "p700_BW",
    "legal_extra",
    "disclaimer_iqos",
    "footer_brand_world"
);


/* 
    "img",
    "spacer",
    "pframed",
    "cta1",
    "p300_BW",
    "p700_BW",
    "greeting_negro",
    "greeting_dorado",
    "footer_brand_world",
    "header_brand_world",

    
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
--------------------
¿Puedes creer que ya pasaron 70 días desde que le dijiste adiós al humo de cigarro? <br>¿Ya notaste los cambios?
--------------------
--------------------
Tienes más momentos inolvidables
Gracias a IQOS, tus amigos ya no se mantienen alejados por culpa del humo de cigarro.
--------------------
Te olvidaste de los ceniceros
Tu casa se mantiene limpia y libre de ceniza ya que IQOS calienta el tabaco en lugar de quemarlo.
--------------------
--------------------
<b>Y hay sonrisas más amplias</b><br>Con <b>IQOS,</b> sonríes sin manchas <br>amarillas en tus dientes.
--------------------
*Fuente: estudio de laboratorio no clínico realizado en Suiza con dientes humanos y los composites dentales más utilizados. Contrariamente a las condiciones del mundo real, los dientes no se expusieron a otras sustancias colorantes como café, té o vino, que pueden influir en los resultados.
--------------------
Información importante: si los dientes ya están manchados, cambiar a IQOS no revertirá el color de esas manchas.
--------------------
--------------------
Gracias a la <b>Tecnología HeatControl™</b>, IQOS no produce humo, ceniza ni olor a cigarro, en su lugar genera vapor de tabaco el cual brinda el sabor del tabaco real.
--------------------
--------------------
¿Tienes amigos fumadores adultos<span style=\"font-size:12px;\"><sup>(1)</sup></span>? Invítalos a conocer <b>IQOS,</b> compárteles tu código único y ambos obtendrán <b>beneficios.</b>
--------------------
--------------------
$300 MXN en beneficios(2)
--------------------
--------------------
--------------------
Conoce Términos y Condiciones del programa Refiere a un amigo aquí.
Te recomendamos hacerlo desde tu celular.<br>Conoce Términos y Condiciones del programa Refiere a un amigo <a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html\" style=\"text-decoration:underline;\" target=\"_blank\">aquí.</a>
--------------------
--------------------
--------------------
#ElijoIQOS
00d1d2
--------------------
--------------------
--------------------
(1) Solo para fumadores adultos.<br>(2) Recompensa no canjeable por dinero en efectivo y redimible en Tiendas IQOS, iqos.com, IQOS Corners en Sanborns seleccionados y/o través de un Experto IQOS. Aplican restricciones. No canjeable por productos de tabaco. Limitado a los primeros 5 amigos referidos que compren y registren su primer Kit IQOS con tu código único.
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