<?php

require_once("21.65-common.php");

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
    "p300",

    "p300",
    "p300",
    "p300",
    "p300",


    "p700",

    "p300",
    "p300",
    "spacer",   
    "disclaimer_iqos",
    "footer_brand_world"

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
Hemos recibido tu solicitud de borrar la información que tenemos sobre ti. Tomamos muy seriamente la privacidad de nuestros consumidores adultos.<br><br>Borraremos tu perfil de nuestra base de datos de mercadeo dentro de los próximo 15 días. <br><br>Esto significa que no podrás acceder a tu cuenta.<br><br>En caso de que prefieras no proceder con tu solicitud, contáctanos dentro de las próximas 72 horas a unos de los canales mostrados debajo. <br><br>A raíz de nuestra relación contigo, tenemos información acerca de ti con diferentes propósitos y en este sentido, retendremos tu información en los siguientes casos, siempre y cuando te apliquen:
--------------------



--------------------
Para asuntos administrativos relacionados con tu dispositivo en préstamo.
--------------------
Para la entrega de ordenes en transito.
--------------------
Mantendremos en record las transacciones contigo (). Cualquier contacto realizado a través de servicio al cliente será guardado por 3 años a partir de la fecha de contacto inicial.
--------------------
--------------------
Durante estos periodos de retención, <br>mantendremos tu información seguro y<br>solo para los propósitos aquí descritos.
--------------------


En algunos casos podemos tener información sobre ti obtenida a través de lasredes sociales. En estos casos, donde hayas asociado tus perfiles de redes sociales con tu cuenta con PMI, también borraremos la información que tengamos sobre ti. 
--------------------

En caso contrario, de que tus cuentas de redes sociales no estén asociadas a tu cuenta con nosotros, continuaremos reteniendo la información de redes sociales que tengamos sobre ti, ya que no tenemos forma de relacionarla con tu solicitud de eliminación de datos. 
--------------------

De ser este el caso, puedes contactarnos a través de las redes sociales de tu relevancia y realizar la solicitud de eliminación de tus datos de redes sociales.
--------------------

Para más información sobre como procesamos tu información, que información obtenemos, para cuales propósitos la utilizamos, con quien la compartimos y como puedes proteger tu privacidad o actualizar tus preferencias de contacto o darte de baja de nuestra base de datos visítanos en PMI Privacy Notice.


--------------------
--------------------
--------------------
Atentamente.<br><br>Philip Morris México <br>Productos y Servicios, S. De R.L. de C.V.
--------------------
--------------------
--------------------
Este correo electrónico fue enviado a (user). Si no eres el destinatario, has recibido este correo electrónico por error. Si es el caso, por favor notificamos inmediatamente a contact.mx@iqos.com y elimina este correo de tu sistema.

--------------------
Este correo electrónico no debe ser modificado.
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