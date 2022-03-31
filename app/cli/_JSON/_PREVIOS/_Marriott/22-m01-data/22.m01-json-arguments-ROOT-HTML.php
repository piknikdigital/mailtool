<?php

require_once("22.m01-common.php");

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


    // BLOCK - IMMERSE IN RELAXATION
    "img",
    "spacer",   
    "img",
    "p300_BW",
    "cta1_v2",
    "img",
    "spacer",   

    // BLOCK - IMG HOUSE BY ELEGANT HOTELS 
    "img",
    "p300_BW",
    "img",
    "p300_BW",
    "cta1_v2",

    // BLOCK - TXT RESERVA CONCHAL
    "spacer",   
    "p300_BW",
    
    // BLOCK - COLUMN
    "columns",

    // BLOCK - TXT ROYALTON
    "spacer",   
    "img",
    "spacer",   

    // BLOCK - IMG ROYALTON
    "img",
    "p300_BW",
    "cta1_v2",

    // BLOCK - ALL INCLUSIVE
    "img",
    "img",
    "p300_BW",

    // BLOCK - ALL INCLUSIVE(2)
    "img",
    "p300_BW",
    "cta1_v2",

    // BLOCK - BONVOY
    "img",
    "spacer",   

    // BLOCK - LINKS
    "p300_BW",
    "img",

    // BLOCK - FOOTER
    "p300_BW"
    
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
--------------------
--------------------
Reconnect with yourself at Tzicuri Spa, your mountain retreat. Our resort features 10 spa rooms and a full menu of nature-inspired treatments, including facials, couple's massages and body scrubs, providing everything you need for a day of indulgence.<br><br>Hours: Mon-Sun: 09:00 AM - 05:00 PM<br>Appointment is Required.<br><span style=\"color:#ff9662;\">Services, Treatments and Amenities</span>
--------------------
At The House by Elegant Hotels – All-Inclusive Adults-Only, planning the moment of a lifetime is simple.<br><br>Work with our Romance Concierge for a customized experience: engagement packages, sunrise picnics, in-room decorations and amenities, spa services, and private tours. 
--------------------
<span style=\"color:#ff9662;\">1.</span> Meet our Romance Concierge Ambassador<br><span style=\"color:#ff9662;\">2.</span> Envision your ideal romantic event<br><span style=\"color:#ff9662;\">3.</span> Select the date and time<br><span style=\"color:#ff9662;\">4.</span> Leave the rest to us!
--------------------
Explore Costa Rica from this eco-friendly hotel on the pristine beaches of Playa Conchal. This hotel offers several stimulating activities. 
--------------------
Go for a swim in our lagoon-style <br>pools, enjoy a friendly round <br>of tennis or golf, indulge<br>in a refreshing spa treatment <br>or savor local flavors in one <br>of our restaurants. 
--------------------
Experience an upscale adults-only retreat. Nestled on a stunning private beach with breathtaking clear waters, guests can relax in an upscale setting and explore everything this resort has to offer. Royalton Antigua is perfect for discerning travelers in search of the ultimate romantic getaway.
--------------------
Interviewing Nansi Lopez<br><br><span style=\"color:#ff9662;\">What do you consider a perfect Wedding?</span><br><br>For me, it’s about creating all the details to make a beautiful and memorable wedding day exactly the way you imagined it.<br>It's about fulfilling your dreams.
--------------------
<span style=\"color:#ff9662;\">Do couples prefer to create their own concept or pre-arranged packages?</span><br><br>Both, we have couples that prefer a set-up menu and also, we have unique weddings that are not included in any of our packages: multicultural weddings, traditional ceremonies. But is not one size fits-all.
--------------------
--------------------
UNSUBSCRIBE   *   TERMS OF USE   *   PREFERENCES
PRIVACY POLICY   *   FIND HOTEL
--------------------
--------------------
©2022 Marriott International, Inc. 
<br><br>To unsubscribe: Select Hotel & Destination specials on our unsubscribe page. 
<br>If you unsubscribe from Marriott promotional emails like this, we will continue to send only transactional messages such as reservation confirmation emails. 
<br><br>You can also unsubscribe by writing to: 
<br>Internet Customer Care - Unsubscribe
<br>1818 North 90 Street Omaha, Nebraska 68114-1315 USA
--------------------
--------------------
--------------------
--------------------
--------------------
CTA 1 DELTA RIVERA NAYARIT
https://www.marriott.com/hotels/hotel-information/fitness-spa-services/pvrde-delta-hotels-riviera-nayarit-an-all-inclusive-resort/

--------------------
CTA 2 THE HOUSE BY ELEGANT HOTELS
https://www.marriott.com/hotels/travel/bgiah-the-house-by-elegant-hotels-all-inclusive-adults-only/

--------------------
CTA 3 CONCHAL
https://www.marriott.com/en-us/hotels/lirwi-the-westin-reserva-conchal-an-all-inclusive-golf-resort-and-spa/overview/

--------------------
CTA 4 ROYALTON ANTIGUA
https://www.marriott.com/hotels/travel/anuro-royalton-antigua-an-autograph-collection-all-inclusive-resort-and-casino/

--------------------
CTA 5 WEDDINGS
https://all-inclusive.marriott.com/weddings-honeymoons

--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
<span style=\"color:#ff9662;\"></span>
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
LINKS FALTANTES
- Call to Action para The House by Elegant Hotels
- Unsubscribe
- Terms of Use
- Preferences
- Privacy Policy
- Find Hotel
- Web View
--------------------
- Call to Action para The House by Elegant Hotels: 
https://www.marriott.com/hotels/travel/bgiah-the-house-by-elegant-hotels-all-inclusive-adults-only/

- Unsubscribe: 
xavier.pineda@marriott.com



- Unsubscribe: 
mailto:xavier.pineda@marriott.com?subject=Unsubscribe from emails&body=Hello, I would like to stop receiving emails and newsletters from you. Thank you

<a href=\"mailto:xavier.pineda@marriott.com?subject=Unsubscribe from emails&body=Hello, I would like to stop receiving emails and newsletters from you. Thank you\" style=\"text-decoration:none;\" target=\"_blank\">UNSUBSCRIBE</a>



mailto:xavier.pineda@marriott.com?subject=Unsubscribe%20from%20emails&amp;body&#61;Hello,%20I%20would%20like%20to%20stop%20receiving%20emails%20and%20newsletters%20from%20you.%20Thank%20you





eliminar
- Terms of Use: 
- Preferences: 
- Privacy Policy: 
- Find Hotel: 
- Web View: 
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
COLOR AQUA Brand World
00d1d2
--------------------
--------------------
"donde_codificar_la_siguiente url" : "https://www.urlencoder.org/",
"url_ctaDECODED"     : "whatsapp://send?text=",
"text2encode"        : "Te regalo 20% de descuento en la compra de tu primer Kit IQOS. No olvides utilizar mi código %%=v(@voucher_code)=%% al comprar.",
"imgulr1"            : "whatsapp://send?text=",
"imgulr2"            : "https://wa.me/?text=",
"imgulr3"            : "https://web.whatsapp.com/send?text=",
"imgulr"             : "https://wa.me/?text=Te%20regalo%2020%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS.%0ANo%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25%3Dv%28%40voucher_code%29%3D%25%25%20al%20comprar.",
--------------------
--------------------
--------------------
LEGAL FSH  - Brand World
&copy; 2021 %%Member_Busname%% Todos los derechos reservados.<br>%%Member_Addr%%,<br>%%Member_City%%, %%Member_PostalCode%%, %%Member_State%%, %%Member_Country%%<br><a href=\"%%unsub_center_url%%\"><span style=\"text-decoration:underline;color:blue;\">Darme de baja</span></a> | <a href=\"%%profile_center_url%%\"><span style=\"text-decoration:underline;color:blue;\">Actualizar perfil</span></a>
--------------------
--------------------

--------------------
<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TEXTO</a>
--------------------
--------------------

<br>
<br><br>
<b></b>


<span style=\"font-size:12px;\"><sup>(1)</sup></span>
<span style=\"font-size:12px;\"><sup>(2)</sup></span>
<span style=\"font-size:12px;\"><sup>(3)</sup></span>
<span style=\"font-size:12px;\"><sup>(4)</sup></span>


<b>IQOS</b>
<b>Kit IQOS</b>
<b>Tiendas IQOS</b>
<b>IQOS 2.4 PLUS</b>
<b>iqos.com</b>


<b></b>
<b></b>
<b></b>

<span style=\"color:#00d1d2;font-weight:700;\">IQOS</span>
<span style=\"color:#00d1d2;font-weight:700;\">Kit IQOS</span>
<span style=\"color:#00d1d2;font-weight:700;\">Tiendas IQOS</span>
<span style=\"color:#00d1d2;font-weight:700;\">Experto IQOS</span>


<span style=\"color:#00d1d2;font-weight:700;\">IQOS EL RETO</span>
<span style=\"color:#00d1d2;font-weight:700;\">IQOS EL RETO<sup>(1)</sup></span>
<span style=\"color:#00d1d2;font-weight:700;\">KIT IQOS</span>
<span style=\"color:#00d1d2;font-weight:700;\">IQOS</span>
<span style=\"color:#00d1d2;font-weight:700;\">iqos.com</span>
<span style=\"color:#00d1d2;font-weight:700;\">350&deg;C</span>
<span style=\"color:#00d1d2;font-weight:700;\">¡$300 MXN de descuento!</span>
<span style=\"color:#00d1d2;font-weight:700;\">$300 MXN de descuento</span>
<span style=\"color:#00d1d2;font-weight:700;\">$300 MXN</span>
<span style=\"color:#00d1d2;font-weight:700;\">HeatControl&trade; Technology</span>
<span style=\"color:#00d1d2;font-weight:700;\">¿Aún no te has convencido?</span>
<span style=\"color:#00d1d2;font-weight:700;\">¿Todavía lo estás pensando?</span>
<span style=\"color:#00d1d2;font-weight:700;\">gratis</span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>

<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>

<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>

<span style=\"font-size:24px;font-weight:700;\"></span>
<span style=\"font-size:24px;font-weight:700;\"></span>
<span style=\"font-size:24px;font-weight:700;\">35% de descuento</span>
<span style=\"font-size:24px;font-weight:700;\">IQOS 2.4 PLUS</span>



*/