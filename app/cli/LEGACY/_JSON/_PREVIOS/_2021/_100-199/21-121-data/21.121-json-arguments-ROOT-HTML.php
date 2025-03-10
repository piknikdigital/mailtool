<?php

require_once("21.121-common.php");

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

    "m_IMG_TXT_m",
    "m_IMG_TXT_m",
    "m_IMG_TXT_m",
    "m_IMG_TXT_m",
    "m_IMG_TXT_m",

    "p300_BW",
    "p300_BW",
    "pframed",
    "p300_BW",
    "pframed",
    "spacer",   
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
En IQOS pensamos que las experiencias si pueden mejorarse por esto te presentamos.<br><br><b>5 sencillos pasos para mejorar<br>el rendimiento de tu IQOS</b>
--------------------
--------------------
--------------------
--------------------
Limpia cuidadosamente tu dispositivo con los Hisopos Limpiadores sin tocar la Lámina de Calentamiento.
--------------------
Espera a que tu dispositivo esté frío para realizar una mejor limpieza y evitar dañar la Lámina de Calentamiento.
--------------------
Limpia tu dispositivo después de 20 usos. 
--------------------
Recuerda cargarlo de noche, así podrás disfrutar de tu IQOS durante el día.
--------------------
Algunos usuarios cuentan con un segundo dispositivo para evitar espera entre uso y uso, como IQOS 3 MULTI*, el cual permite hasta 10 usos consecutivos.
--------------------
--------------------
--------------------
--------------------
*10 usos consecutivos no significa más usos,<br>sino menor tiempo de espera entre usos
--------------------
--------------------
--------------------
Invita a tus amigos fumadores adultos<span style=\"font-size:12px;\"><sup>(1)</sup></span> <br> a conocer IQOS, con tu código único ambos obtendrán beneficios.
--------------------
--------------------
--------------------
$300 MXN en beneficios<span style=\"font-size:12px;\"><sup>(2)</sup></span>
--------------------
Tu código único es:
--------------------
Te recomendamos hacerlo desde tu celular.
--------------------
#ElijoIQOS
00d1d2
--------------------
--------------------
(1) Solo para fumadores adultos.<br>(2) Consulta términos y condiciones. Válido en la compra y registro del primer dispositivo (IQOS Holder + Cargador IQOS) de cada amigo referido. Para obtener su descuento, el amigo referido debe registrarse y registrar su dispositivo en iqos.com, y hacerlo válido en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y iqos.com. Descuento no válido en productos de tabaco.<br>(3) Recompensa no canjeable por dinero en efectivo y redimible en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y iqos.com. No canjeable por productos de tabaco. Limitado a los primeros 5 amigos referidos que compren y registren su primer dispositivo con tu código único.
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