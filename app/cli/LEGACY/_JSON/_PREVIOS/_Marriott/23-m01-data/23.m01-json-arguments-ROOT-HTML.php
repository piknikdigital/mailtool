<?php

require_once("23.m01-common.php");

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
    "img",          // 1    ALL INCLUSIVE
    "img",          // 2    COVER

    // BLOCK - BARBADOS
    "img",          // 3  TITLE
    "img",          // 4  COVER
    "p300_BW",
    "cta1_v2",      // CTA1  LEARN MORE

    // BLOCK - DELTA HOTELS RIVIERA NAYARIT
    "img",          // 5 TITLE
    "img",          // 6 COVER
    "p300_BW",
    "cta1_v2",      // CTA2  BOOK NOW

    // BLOCK - ROYALTON RIVIERA CANCUN
    "img",          // 7 TITLE
    "img",          // 8 COVER
    "p300_BW",
    "cta1_v2",      // CTA3 EXPLORE MORE

    // BLOCK - ROYALTON CHIC PUNTA CANA
    "img",          // 9 TITLE
    "img",          // 10 COVER
    "p300_BW",
    "cta1_v2",      // CTA4 DISCOVER MORE

    // BLOCK - THE HOUSE BARBADOS
    "img",          // 11 TITLE
    "img",          // 12 COVER
    "p300_BW",
    "cta1_v2",      // CTA5 LEARN MORE

    // BLOCK - END
    "img",          // 13 Logo Bonvoy
    "p700_BW",      // Unsubscribe
    //"img",        // 16 Logos All-Inclusive
    "p300_BW"       // copyrights
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
<b>Experience one of the first all-inclusive wellness boutique hotels in Barbados.</b> Wellness is at the core of Waves Hotel & Spa, All-Inclusive, which features tranquil surroundings and exceptional service, tranquil surroundings and exceptional service, a stunning backdrop for a tropical mind and body retreat.
--------------------
--------------------
Reconnect with yourself at Tzicuri Spa, your mountain retreat in Mexico's Pacific Coast. <b>Our resort features 10 private cabanas and nature-inspired treatments,</b> including facials, couple's massages, and body scrubs, providing everything you need for a day of indulgence.
--------------------
--------------------
Our all-inclusive Riviera Cancun resort welcomes you to <b>discover a spectrum of revitalizing experiences</b> that stir the senses and energize the spirit.<br><br>With over 30 different services offered in this modern and luxurious wellness facility, <b>The Royal Spa at this resort has a recently renewed hydrotherapy area with different water temperatures</b> to sooth your skin while the over twenty massage and treatment private booths will hypnotize anyone into an ultimate relaxation experience.<br><br>Our certified wellness professionals will guarantee that your visit at <b>The Royal Spa will be exactly like nothing else.</b><br><br>The Royal Spa is a full-service health and wellness facility complete with a <b>comprehensive menu of treatments as well as hydrotherapy circuits</b> and spa packages to meet your needs, including:<br><br><span style=\"color:#ff9662;\">•</span> Body treatments<br><span style=\"color:#ff9662;\">•</span> Signature treatments<br><span style=\"color:#ff9662;\">•</span> Massages<br><span style=\"color:#ff9662;\">•</span> Facials<br><span style=\"color:#ff9662;\">•</span> Manicures and pedicures
--------------------
--------------------
--------------------
--------------------
Relax your way at Royalton CHIC Punta Cana, where our wellness facilities have been <b>built and designed for an ultimate relaxation experience.</b><br><br>The Royal Spa is an independent building from the whole resort, including a <b>hydrotherapy circuit in the shape of an arena</b> that is surrounded by private and luxurious massage booths that feature bathtubs, showers and independent music system and aromatherapy.<br><br>Each booth represents a different way to relax while in paradise. <b>Take time out for wellness with an energy-boosting workout on the beach or a relaxing spa day</b> during your Punta Cana getaway. Recharge in a revitalizing oasis. Unwind with our hydrotherapy circuit, let go of tensions with a massage, or get glam with a mani-pedi or blowout.<br><br><b>A full range of massage, face, and body treatments</b> featuring time-honored healing practices are available for your enjoyment.<br><br><span style=\"color:#ff9662;\">•</span> Body treatments<br><span style=\"color:#ff9662;\">•</span> Signature treatments<br><span style=\"color:#ff9662;\">•</span> Massages<br><span style=\"color:#ff9662;\">•</span> Facials<br><span style=\"color:#ff9662;\">•</span> Manicures and pedicures
--------------------
--------------------
--------------------
<b>Experience the ultimate relaxation</b> at our resort's on-site day spa. Featuring two treatment rooms, including a couple's massage room, The Spa at The House offers a <b>variety of healing and wellness services</b> in St. James, including a complimentary jet lag massage for guests based on length of stay.<br><br><b>Rejuvenate your senses</b> with our bespoke spa scent, an essential oil blend of gardenia, neroli, petitgrain and sweet orange. <b>Our Barbados day spa focuses on restoring the balance of your body, mind and skin.</b> Trust our skilled therapists to guide you on this journey using the Five Elements theory: wood for rejuvenation, fire for energy, earth for balance, metal to detox and water to soothe. <b>Our solution-driven spa treatments work to minimize the effects of season, lifestyle and environmental change</b> by combining innovative technologies and natural botanicals to improve skin nutrition and the well-being of our guests in Barbados.<br><br><b>Our St. James spa uses award-winning Elemental Herbology products,</b> which are 100% natural, ensuring your skin is cared for inside and out.
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