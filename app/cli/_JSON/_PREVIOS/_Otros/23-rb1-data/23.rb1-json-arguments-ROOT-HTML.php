<?php

require_once("23.rb1-common.php");

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
    "p700_BW",
    "p700_BW",
    
    "p300_BW",
    "columns",
    "cta1_v2"

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
--------------------
--------------------
--------------------
Es tiempo de convertirnos en los maestros de las ventas.<br>Es momento de un reencuentro y cambiar las reglas de la industria.
--------------------
¡Hagámoslo juntos!
--------------------
YA NO -- Redescubre el mercado con asesorías personalizadas de la nueva línea de productos Rubbermaid Commercial Products.

ESTO SI
Es un nuevo año, con nuevos retos y nuevas herramientas para ti. Te invitamos a hacer parte de esta gran experiencia junto a Rubbermaid Commercial Products.


--------------------
27 de enero 2023<br>19:00 hrs - 21:00 hrs
--------------------
Hotel Auténtico Monterrey
Av. Manuel Gómez Morín 285, San Pedro Garza García.


Asistir (botón Call to action)


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
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
Copy invitación 3
Es tiempo de convertirnos en los maestros de las
ventas.
Es momento de un reencuentro y cambiar las
reglas de la industria. ¡Hagámoslo juntos!
Redescubre el mercado con asesorías
personalizadas de la nueva línea de productos
Rubbermaid Commercial Products.
-27 de enero 2023, (19:00 hrs - 21:00 hrs)
-Hotel Auténtico Monterrey - Av. Manuel Gómez Morín 285, San Pedro Garza García.
Asistir (botón Call to action)

Es momento de un reencuentro y cambiar las reglas de la industria. ¡Hagámoslo juntos! Redescubre el mercado con asesorías personalizadas de la nueva línea de productos Rubbermaid Commercial Products.


Google Calendar
https://calendar.google.com/calendar/render?action=TEMPLATE&dates=20230128T003000Z%2F20230128T030000Z&details=Es%20momento%20de%20un%20reencuentro%20y%20cambiar%20las%20reglas%20de%20la%20industria.%20%C2%A1Hag%C3%A1moslo%20juntos%21%20Redescubre%20el%20mercado%20con%20asesor%C3%ADas%20personalizadas%20de%20la%20nueva%20l%C3%ADnea%20de%20productos%20Rubbermaid%20Commercial%20Products.&location=Hotel%20Aut%C3%A9ntico%20Monterrey%20-%20Av.%20Manuel%20G%C3%B3mez%20Mor%C3%ADn%20285%2C%20San%20Pedro%20Garza%20Garc%C3%ADa.&text=Maestros%20de%20las%20ventas

Microsoft Outlook
https://outlook.live.com/calendar/0/deeplink/compose?allday=false&body=Es%20momento%20de%20un%20reencuentro%20y%20cambiar%20las%20reglas%20de%20la%20industria.%20%C2%A1Hag%C3%A1moslo%20juntos%21%20Redescubre%20el%20mercado%20con%20asesor%C3%ADas%20personalizadas%20de%20la%20nueva%20l%C3%ADnea%20de%20productos%20Rubbermaid%20Commercial%20Products.&enddt=2023-01-28T03%3A00%3A00%2B00%3A00&location=Hotel%20Aut%C3%A9ntico%20Monterrey%20-%20Av.%20Manuel%20G%C3%B3mez%20Mor%C3%ADn%20285%2C%20San%20Pedro%20Garza%20Garc%C3%ADa.&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2023-01-28T00%3A30%3A00%2B00%3A00&subject=Maestros%20de%20las%20ventas

Office 365
https://outlook.office.com/calendar/0/deeplink/compose?allday=false&body=Es%20momento%20de%20un%20reencuentro%20y%20cambiar%20las%20reglas%20de%20la%20industria.%20%C2%A1Hag%C3%A1moslo%20juntos%21%20Redescubre%20el%20mercado%20con%20asesor%C3%ADas%20personalizadas%20de%20la%20nueva%20l%C3%ADnea%20de%20productos%20Rubbermaid%20Commercial%20Products.&enddt=2023-01-28T03%3A00%3A00%2B00%3A00&location=Hotel%20Aut%C3%A9ntico%20Monterrey%20-%20Av.%20Manuel%20G%C3%B3mez%20Mor%C3%ADn%20285%2C%20San%20Pedro%20Garza%20Garc%C3%ADa.&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2023-01-28T00%3A30%3A00%2B00%3A00&subject=Maestros%20de%20las%20ventas

Yahoo Calendar
https://calendar.yahoo.com/?desc=Es%20momento%20de%20un%20reencuentro%20y%20cambiar%20las%20reglas%20de%20la%20industria.%20%C2%A1Hag%C3%A1moslo%20juntos%21%20Redescubre%20el%20mercado%20con%20asesor%C3%ADas%20personalizadas%20de%20la%20nueva%20l%C3%ADnea%20de%20productos%20Rubbermaid%20Commercial%20Products.&dur=&et=20230128T030000Z&in_loc=Hotel%20Aut%C3%A9ntico%20Monterrey%20-%20Av.%20Manuel%20G%C3%B3mez%20Mor%C3%ADn%20285%2C%20San%20Pedro%20Garza%20Garc%C3%ADa.&st=20230128T003000Z&title=Maestros%20de%20las%20ventas&v=60


FORMULARIO
https://forms.gle/1i8xmsxgwdnkStic6


--------------------
--------------------
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