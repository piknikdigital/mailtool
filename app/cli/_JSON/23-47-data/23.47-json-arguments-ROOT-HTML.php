<?php

require_once("23.47-common.php");

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
    "greeting_v2",
    "p300_BW",

    "columns",
    "columns",
    "columns",
    "columns",

    "p300_BW",

    "cta1_v2",

    "p300_BW",
    "p300_BW",

    "columns",

    "spacer",

    "ElijoIQOS",
    "legal_extra",
    "disclaimer_iqos",
    "footer_bw_v1_lowercase"
);


/* 
    "img",
    "spacer",
    "pframed",
    "cta1",
    "p_v2",
    "p300_BW",
    "p700_BW",
    "greeting_v2",
    "columns",
    "cta1_v2",
    "spacer_v2",

    "footer_bw_v1",
    "footer_fsh",
    "disclaimer_fsh",

    "greeting_negro",
    "greeting_dorado",
    "footer_brand_world",
    "header_brand_world",

    "FSH_Yellow_Share",
    "FSH_Yellow_Share_2",
    "FSH_Framed_Card",


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

    PREVIO, YA NO USAR: "footer_brand_world"



    CODIGO PARA CUPON X X X X X X X X :   %%=v(@voucher_code)=%% 

    "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
    "rawHTML", // %%=ContentBlockbyKey(&quot;Onboarding_Conversion_Check&quot;)=%% 


*/


/*
BAD CHR : "", "	"
" ",
--------------------
++---------------------------------++
||   COLOR TURQUESA Brand World    ||
||   00d1d2                        ||
||   COLOR SLATE  Brand World      ||
||   34303d                        ||
||   Naranja                       ||
||   e3813b                        ||
||   GRIS CLARO                    ||
||   faf7f4                        ||
++---------------------------------++
--------------------
===================================================================
<span style=\"color:#00d1d2;font-weight:700;\"></span>
===================================================================
<span style=\"color:#00d1d2;font-weight:700;font-size:24px;\"></span>
===================================================================
<span style=\"font-size:24px;font-weight:700;\"></span>
===================================================================
<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TEXTO</a>
===================================================================
<span style=\"font-size:12px;\"><sup>(1)</sup></span>
<span style=\"font-size:12px;\"><sup>(2)</sup></span>
<span style=\"font-size:12px;\"><sup>(3)</sup></span>
<span style=\"font-size:12px;\"><sup>(4)</sup></span>


===================================================================
--------------------
url para mandar SMS:
    https://cutt.ly/59uY4Ga
Shortlink points to:
    sms://+525592253374
--------------------
--------------------
--------------------
--------------------
Queremos conocer tu opinión y punto de vista sobre los productos de <b>tabaco calentado,</b> cigarros electrónicos y cigarros.<br><br><b>Ya que tú eres propietario de un dispositivo IQOS,</b> nos gustaría que participaras en la encuestas de IPSOS Viewpoint y nos compartas tu experiencia.
--------------------
--------------------
--------------------
--------------------
--------------------
Para participar <b>no es necesario que estés<br>usando actualmente tu dispositivo IQOS.</b>
--------------------
--------------------
Contestar la encuesta te tomará <b>menos<br> de 20 minutos.</b>
--------------------
--------------------
Cuando hayas terminado, recibirás otro<br> correo electrónico con un enlace para obtener<br> un <b>cupón con valor de $200<span style=\"font-size:12px;\"><sup>MXN</sup></span>*</b> canjeable en<br> la lista de tiendas seleccionadas.
--------------------
--------------------
--------------------
<b>La encuesta estará disponible hasta el<br> 16/04/2023.</b> Una vez que la encuesta se<br> haya cerrado, ya no podrás realizarla ni ganar<br> el cupón de MXN como recompensa.
--------------------
--------------------
--------------------
¡Haz clic en el botón inferior y responde la encuesta hoy mismo!
--------------------
--------------------
--------------------
¿No funciona el enlace?<br>Cópialo y pégalo en tu navegador. 
--------------------
https://ipsosviewpoint.com/gto.php3?syid=66961&code=bff133e82b04c4e7&a=1
--------------------
--------------------
-----------------------------------
¡Esperamos pronto tus respuestas!
-----------------------------------
Gracias.
-----------------------------------
<i>El Equipo Ipsos Viewpoint</i>
-----------------------------------
--------------------
--------------------
--------------------
--------------------
Si tiene alguna duda o pregunta en relación con esta encuesta o con la recompensa, contacte con: IQOS_MXES@ipsosviewpoint.com<br><br>*Tenga en cuenta que, para recibir la recompensa, tendrá que responder antes a unas preguntas clasificatorias.<br><br>Si cumple los requisitos, podrá finalizar la encuesta y recibir su cupón de $200 MXN como recompensas.<br><br>Si no los cumple, se le notificará inmediatamente y desafortunadamente, no podrá recibir el cupón de $200 MXN como recompensa.<br><br>**Todas las fechas se indican en formato dd/mm/aa.<br><br>Este correo electrónico fue enviado a XXXXXX por Ipsos y en nombre PMMPS, S. de R.L. de C.V.<br><br>No está permitido reenviar este correo electrónico a otras personas y, en particular, a no fumadores menores de 19 años. El contenido de este correo electrónico no puede ser alterado ni copiado. Si usted no es el destinatario de este correo electrónico, por favor, notifique al remitente y luego borre este correo electrónico.<br><br>Si no desea recibir más encuestas del equipo de Ipsos Viewpoint, puede CANCELAR SU SUSCRIPCIÓN AQUÍ.<br><br>Si no desea recibir más comunicación de IQOS (incluyendo invitaciones para eventos, boletines, etc.), por favor envíe un correo a contact.mx@iqos.com.<br><br>Nos tomamos muy en serio la protección de su privacidad. Para revisar nuestra POLÍTICA DE PRIVACIDAD, haga clic AQUÍ.<br><br>PMMPS, S. de R.L, de C.M., Lago Zurich, nº 245, Edificio Presa Falcón, puso 3, Ampliación Granada, Miguel Hidalgo, 11529, Ciudad de México.
--------------------
--------------------
--------------------
===================================================================

"donde_codificar_la_siguiente url" : "https://www.urlencoder.org/",
"url_ctaDECODED"     : "whatsapp://send?text=",
"text2encode"        : "Te regalo 20% de descuento en la compra de tu primer Kit IQOS. No olvides utilizar mi código %%=v(@voucher_code)=%% al comprar.",
"imgulr1"            : "whatsapp://send?text=",
"imgulr2"            : "https://wa.me/?text=",
"imgulr3"            : "https://web.whatsapp.com/send?text=",
"imgulr"             : "https://wa.me/?text=Te%20regalo%2020%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS.%0ANo%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25%3Dv%28%40voucher_code%29%3D%25%25%20al%20comprar.",

===================================================================

LEGAL FSH  - Brand World
&copy; 2021 %%Member_Busname%% Todos los derechos reservados.<br>%%Member_Addr%%,<br>%%Member_City%%, %%Member_PostalCode%%, %%Member_State%%, %%Member_Country%%<br><a href=\"%%unsub_center_url%%\"><span style=\"text-decoration:underline;color:blue;\">Darme de baja</span></a> | <a href=\"%%profile_center_url%%\"><span style=\"text-decoration:underline;color:blue;\">Actualizar perfil</span></a>

===================================================================
--------------------
--------------------
--------------------
--------------------
--------------------

<br>
<br><br>
<b></b>



<b>IQOS</b>
<b>Kit IQOS</b>
<b>Tiendas IQOS</b>
<b>IQOS 2.4 PLUS</b>
<b>iqos.com</b>





*/