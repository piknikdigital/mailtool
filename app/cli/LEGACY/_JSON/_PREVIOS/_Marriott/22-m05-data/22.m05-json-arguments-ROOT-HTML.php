<?php

require_once("22.m05-common.php");

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
    "img",     // 1    ALL INCLUSIVE
    "img",     // 2    COVER

    // BLOCK - THE HOUSE, BARBADOS
    "img",     // 3
    "img",     // 4
    "p300_BW",             
    "cta1_v2", //CTA1

    // BLOCK - HIDEAWAY AT ROYALTON NEGRIL
    "img",    // 5
    "img",    // 6
    "p300_BW",             
    "p300_BW",             
    "cta1_v2", //CTA2

    // BLOCK - HIDEAWAY AT ROYALTON SAINT LUCIA
    "img",    // 7
    "img",    // 8
    "p300_BW",             
    "cta1_v2", //CTA3

    // BLOCK - CRYSTAL COVE
    "img",    // 9
    "img",    // 10
    "p300_BW",             
    "cta1_v2", //CTA4

    // BLOCK - PORTO DE GALINHAS
    "img",    // 11
    "img",    // 12
    "p300_BW",             
    "cta1_v2", //CTA5

    // BLOCK - INTERVIEW: THE RUM VAULT @ COLONY CLUB
    "img",    // 13
    "img",    // 14

    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p300_BW",

    "cta1_v2", //CTA6

    
    // BLOCK - END
    "img",                  // Logo Bonvoy
    "p700_BW",              // Unsubscribe
    "img",                  // Logos All-Inclusive
    "p300_BW"               // copyrights
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
<span style=\"color:#00d1d2;font-weight:700;\"></span>
--------------------

-----------------------------------------------------------
--[THE HOUSE, BARBADOS]------------------------------------
-----------------------------------------------------------

Looking for that special way to celebrate your love? <strong>At The House there&rsquo;s something for everyone.</strong> The House offers a gateaway that epitomizes romance with a twist, providing an array of experiences and unique offerings that are beyond the ordinary.<br><br>From complimentary champagne, to candlelit dinners on the beach, to our beach ambassadors, <strong>we will help you create memories that will last a lifetime.</strong> With only 34 rooms in this adult&rsquo;s only haven, the intimate, romantic atmosphere of <strong>The House can be felt from the moment you arrive,</strong> setting the scene for the romantic experience of a lifetime.

-----------------------------------------------------------
--[HIDEAWAY AT ROYALTON NEGRIL]----------------------------
-----------------------------------------------------------

The ultimate premium all-inclusive experience <strong>is a dream honeymoon at Hideaway at Royalton Negril.</strong> This resort thought for couples and romance offers a host of luxury facilities and services to ensure your first few days as a newly married couple are truly memorable.<br><br><strong>We have for you our Luxury Honeymoon package</strong> starting from complimentary* or $299 USD, designed for the bride and groom who have been married within the last six months and are <strong>looking for some peaceful romance.</strong>
--------------------
<span style=\"color:#ff9662;\">•</span> VIP welcome<br><span style=\"color:#ff9662;\">•</span> Newlywed room upgrade (based on availability at the time of check in - not guaranteed)<br><span style=\"color:#ff9662;\">•</span> Ocean View Suite with a king size bed<br><span style=\"color:#ff9662;\">•</span> Sparkling wine and fruit tray<br><span style=\"color:#ff9662;\">•</span> 10% discount in spa treatments<br><span style=\"color:#ff9662;\">•</span> Romantic private dinner setting for two on the beach<br><br><span style=\"color:#ff9662;\">*</span> Based on a minimum four-night stay at the hotel for the bride and groom. Copy of marriage certificate required at the time of booking.

-----------------------------------------------------------
-----[HIDEAWAY AT ROYALTON SAINT LUCIA]--------------------
-----------------------------------------------------------
Saint Lucia was named the <strong>&ldquo;Caribbean&rsquo;s Leading Honeymoon Destination&rdquo;</strong> at the World Travel Awards for the eighth consecutive year and the 12th in its history.<br><br>This island is a magical place where <strong>turquoise waters crash onto breathtaking white-sand beaches,</strong> lush tropical jungles are home to exotic wildlife and stunning waterfalls, and the majestic Pitons overlook the island&rsquo;s beauty in its entirety.<br><br>Whether you&rsquo;re celebrating the start of your happily ever after or rekindling the bonds that brought you together, <strong>you can bask in Saint Lucia&rsquo;s magic together when you stay at Hideaway at Royalton Saint Lucia,</strong> An Autograph Collection All-Inclusive Resort - Adults Only.<br><br>At this luxurious adults-only resort, you can spend your days hand-in-hand <strong>exploring a world of opportunities for romance,</strong> the perfect backdrop for an unforgettable romantic escape.

-----------------------------------------------------------
-----[CRYSTAL COVE]----------------------------------------
-----------------------------------------------------------
Crystal Cove&#39;s pristine white sand beach and lush gardens <strong>create the perfect tropical setting for a romantic celebration.</strong> Begin your forever in paradise with a romantic experience. Swim with the turtles, <strong>enjoy a romantic candlelit dinner</strong> or a leisurely sail on a luxury catamaran.<br><br><strong>From birthday wishes to proposals or wedding announcements,</strong> our guests love the unique message rock pool at Crystal Cove. It&rsquo;s a great way to surprise your significant other with a lovely sentiment upon arrival or after the wedding ceremony.

-----------------------------------------------------------
-----[PORTO DE GALINHAS]-----------------------------------
-----------------------------------------------------------

Celebrate your love and happiness, and <strong>make your dream destination wedding a reality at our beachfront resort.</strong> With stunning locations, elegant decor, and other planning services, our resort offers precisely what you need for your big day.<br><br>We&#39;ll do our best to <strong>ensure you get a beautiful and memorable wedding day.</strong>

-----------------------------------------------------------
-----[INTERVIEW: THE RUM VAULT @ COLONY CLUB]--------------
-----------------------------------------------------------

The Rum Vault is <strong>the first Barbados bar of its kind and features 150 rums from around the globe.</strong> Today we talk to Hein Broek, Vault Chef, about what makes the Rum Vault the ideal venue for an intimate experience.
-[Q1]-------------------
<span style=\"color:#ff9662;font-weight:700;\">1) Why is the Rum Vault perfect for a romantic experience?</span><br><br>The Rum Vault is perfect for a romantic experience mainly because of <strong>the private setting of the room.</strong>
-[Q2]-------------------
<span style=\"color:#ff9662;font-weight:700;\">2) What kind of celebrations are usually held at The Rum Vault/Do you have a favorite?</span><br><br>The Rum Vault is very popular for birthdays.<br> <b>Birthdays are my favorite because RUM is a PRESERVATIVE.</b>
-[Q3]-------------------
<span style=\"color:#ff9662;font-weight:700;\">3) Who can book The Rum Vault and how?</span><br><br>The Rum Vault <b>is an adult private food and beverage dining experience fully focused on rum.</b> It can be reserved by calling Colony Club Hotel at (246) 422-2335.
-[Q4]-------------------
<span style=\"color:#ff9662;font-weight:700;\">4) What kind of menu is offered by The Rum Vault?</span><br><br><b>A mixture of international and local cuisine</b> with rum pairing.
-[Q5]-------------------
<span style=\"color:#ff9662;font-weight:700;\">5) Any additional tips for an unforgettable romantic experience in Barbados</span><br><br>The Rum Vault <b>is the only one of its kind in Barbados.</b> The ultimate private setting of the Rum Vault <b>is ideal for an unforgettable romantic experience.</b>

--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
php /Users/armandoromero/Documents/devF1/mailtool.lan/app/cli/mklist.php > 22.m05-replacements.json
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
<span style=\"font-size:12px;\"><sup>(1)</sup></span>
<span style=\"font-size:12px;\"><sup>(2)</sup></span>
<span style=\"font-size:12px;\"><sup>(3)</sup></span>
<span style=\"font-size:12px;\"><sup>(4)</sup></span>

<span style=\"color:#ff9662;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
--------------------
COLOR TURQUESA Brand World
00d1d2
COLOR SLATE  Brand World
34303d
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

<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>

<b>IQOS</b>
<b>Kit IQOS</b>
<b>Tiendas IQOS</b>
<b>IQOS 2.4 PLUS</b>
<b>iqos.com</b>


<b></b>
<b></b>
<b></b>




<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>

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