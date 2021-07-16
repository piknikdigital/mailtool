<?php

require_once("21.64-common.php");

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
    "img",
    "spacer",
    "spacer",
    "greeting_negro",
    "p300",

    "spacer",
    "m_IMG_TXT_m",
    "m_IMG_TXT_m",
    "m_IMG_TXT_m",
    "m_IMG_TXT_m",
    "m_IMG_TXT_m",
    "m_IMG_TXT_m",
    "m_IMG_TXT_m",
    "m_IMG_TXT_m",
    "spacer",

    "p300",

    "p700",


    "p300",
    "p300",
    "spacer",   

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
--------------------
En respuesta a su solicitud relacionada con su información, confirmamos que nosotros y nuestras empresas afiliadas actualmente procesamos y hemos procesado información suya de conformidad con lo descrito en nuestro aviso de privacidad. En este detallamos lo siguiente:
--------------------

--------------------
--------------------
Los propósitos del procesamiento
--------------------
Los tipos de información que se procesan
--------------------
Los tipos de destinatarios de la información
--------------------
(cuando no obtengamos la información directamente de usted) las fuentes de información
--------------------
El periodo previsto durante el cual se almacenará la información (o los criterios que usamos para determinar dicho periodo
--------------------
La existencia del derecho de acceso, rectificación, cancelación de información u oposición de procesamiento
--------------------
El derecho de presentar una queja con una autoridad de control 
--------------------
La existencia de toma de decisiones automatizadas en caso de que tales decisiones generen efectos legales que le conciernan o afecten de manera importante
--------------------
--------------------

--------------------
Además de los datos del informe, revisamos publicaciones de redes sociales, por lo que podríamos tener información relacionada con usted de varias plataformas de redes sociales que use. Sin embargo, no podemos vincular esa información a individuos específicos y tampoco lo integramos a nuestra base de datos de consumidores. <br><br>Si quisiera saber si tenemos información de esta índole sobre usted, deberá proporcionarnos su nombre de usuarios de las plataformas de redes sociales en cuestión que le interesen y podremos buscar por usted.

--------------------
--------------------
--------------------
Atentamente.<br><br>Philip Morris México <br>Productos y Servicios, S. De R.L. de C.V.
--------------------
--------------------
--------------------
--------------------
Este correo se envió únicamente a USERNAME. <br>Si usted no es esta persona, recibió este correo por error. <br>Si es el caso, notifiquemos inmediatamente a <br>contact.mx@iqos.com y borre este correo de su sistema. <br>Este correo no deberá ser modificado. 
--------------------
Para saber más sobre como usamos su información, actualizar sus preferencias de suscripción o abandonar nuestra base de datos, consulte nuestro aviso de privacidad disponible en https://www.pmiprivacy.com/

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