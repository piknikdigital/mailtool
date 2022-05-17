<?php

require_once("22.m03-common.php");

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
    "img",

    // BLOCK - ROYALTON GRENADA
    "img",
    "p300_BW",
    "cta1_v2",

    // BLOCK - WESTIN PORTO DE GALINHAS
    "img",
    "p300_BW",
    "img",
    "p300_BW",
    "cta1_v2",

    // BLOCK - WESTIN RESERVA CONCHAL
    "img",
    "columns",

    // BLOCK - WAVES HOTEL & SPA
    "spacer",   
    "img",
    "spacer",   
    "img",
    "p300_BW",
    "cta1_v2",

    // BLOCK - DELTA RIVIERA NAYARIT
    "img",
    "img",
    "p300_BW",
    "cta1_v2",


    // BLOCK - OUR ALL-INCLUSIVE TEAM
    "img",
    "img",
    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p300_BW",

    
    // BLOCK - END
    "img",
    "p700_BW",
    "img",
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
[ROYALTON]--------------------
Host your special events in the midst of stunning white beaches and turquoise waters at Royalton Grenada, An Autograph Collection All-Inclusive Resort and receive 10% commission, complimentary room nights, kids free for social groups, and much more! Our breathtaking location offers exclusive event venues and world-class service.<br><br>Whether you want to host an incentive meeting, a business presentation, a conference or a private party, our event planners will take care of all the planning for you. Contact us to plan a memorable event at our All-Inclusive by Marriott resort.
--------------------
--------------------
[PORTO DE GALINHAS]--------------------
Keep up your health and fitness even on holiday. Our state-of-the-art gym and other sports facilities ensure you don't miss your regular workouts.<br><br><span style=\"color:#ff9662;\">Begin your days with an energetic workout</span><br>in our fully-equipped gym. Our hotel also offers a beach volleyball court, beach tennis court and other exciting fitness activities like aquarobics, aqua yoga and running.
--------------------
--------------------
<span style=\"color:#ff9662;\">•</span> Fitness Center<br><span style=\"color:#ff9662;\">•</span> Beach Volleyball Court<br><span style=\"color:#ff9662;\">•</span> Beach Tennis Court<br><span style=\"color:#ff9662;\">•</span> Aquarobics<br><span style=\"color:#ff9662;\">•</span> Aqua Yoga<br><span style=\"color:#ff9662;\">•</span> Running Activity at the Beach
--------------------
--------------------
--------------------
[WESTIN RESERVA CONCHAL]--------------------
Allow your body to reset at Westin Playa Conchal. Eliminate toxins with a Jojoba Body Polish and your choice of hydrotherapy followed by a holistic, toxin and cellulite-clearing Green Coffee Wrap and a purifying Lymphatic Drain Massage.<br><br>Leave feeling deeply cleansed, re-balanced and renewed. All this and more at the Heavenly Spa by Westin.
--------------------
--------------------
--------------------
[WAVES HOTEL]--------------------

The Waves Hotel & Spa is located on the Platinum West Coast of Barbados, making it an ideal spot to indulge in water activities. Our luxury hotel offers a wide range of motorized and non-motorized water sports that you can try.<br><br>Whether you love adventure on the water or are new to the world of water sports, you are sure to enjoy the host of activities designed to give you a memorable experience. Our Aqua school instructors will always be there to help you and instruct you if this is your first time.
--------------------
--------------------
--------------------
--------------------
[RIVIERA NAYARIT]--------------------
Immerse yourself on a weekend of yoga and meditation to renew your energy in an oasis of relaxation and nature. <br><br>From relaxation to meditation and yoga, allow yourself to disconnect and reset at Delta Riviera Nayarit. 
--------------------
--------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
<b>Yazna Collao</b> <br>(The Westin Reserva Conchal, An All-Inclusive Golf Resort & Spa Manager)
--------------------
[Q1]----------------------------------------
<span style=\"color:#ff9662;font-weight:700;\">1. What does wellness mean to you?</span><br><br>Wellness is a decision that we make every day to find our bet and feel good from the inside out. <span style=\"color:#ff9662;\">It is taking deep breath and being present to ourselves,</span> giving ourselves the opportunity to better understand what we need and what we want and finding that balance that  gives us peace of mind and satisfaction.

[Q2]----------------------------------------
 
<span style=\"color:#ff9662;font-weight:700;\">2. How did you initiate in the wellness/spa industry?</span><br><br>Well, it's an interesting question since it was an unexpected growth opportunity, <span style=\"color:#ff9662;\">I wanted to make a change</span>, get out of the comfort zone and offer refreshing experiences.

[Q3]----------------------------------------
 
<span style=\"color:#ff9662;font-weight:700;\">3. How do you balance your wellbeing with your career?</span><br><br>Balance is my daily task!<br><br>I believe that being aware that in order to give my best and be present for my family, my associates and my clients I need to be well physically, mentally and emotionally.<span style=\"color:#ff9662;\">I organize my recovery and refocus times</span> according to how I see the week ahead and if something unexpected slips into the week, I just try to rearrange, modify the time or frequency. I've learned that I don't need a lot of time to reconnect with myself, sometimes all I need is just 5 minutes to breath, breathwork is a return to our body’s most instinctive stress-reducing response and I start from that basic exercise.

[Q4]----------------------------------------
 
<span style=\"color:#ff9662;font-weight:700;\">4. How long have you been with Westin Playa Conchal?</span><br><br>It has been a <span style=\"color:#ff9662;\">15-year journey</span> surrounded by wonderful people and amazing experiences.

[Q5]----------------------------------------
 
<span style=\"color:#ff9662;font-weight:700;\">5. Why is it important for people to mediate or unwind?</span><br><br>Because we are always very busy... connected, rushed, stressed and we deserve more.<br><br>Taking time and care about our well-being, it is a need of which we are not always aware and sometimes we are not even able to understand the messages of our body, until we are already sore or in a very bad mood and we are much better than that, listen to our breath, be gentle with our body and recharge. <span style=\"color:#ff9662;\">It will help us achieve a better state of emotional well-being</span> that will help us to better deal with any situation.

----------------------------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
©2022 Marriott International, Inc. 

To unsubscribe: Select Hotel & Destination specials on our unsubscribe page. 
If you unsubscribe from Marriott promotional emails like this, we will continue to send only transactional messages such as reservation confirmation emails. 

You can also unsubscribe by writing to: 
Internet Customer Care - Unsubscribe
1818 North 90 Street Omaha, Nebraska 68114-1315 USA
--------------------
--------------------
--------------------
--------------------

1 - https://www.marriott.com/en-us/hotels/gndro-royalton-grenada-an-autograph-collection-all-inclusive-resort/experiences/

2 - https://all-inclusive.marriott.com/westin-porto-de-galinhas/inclusions/fitness-wellness

3 - https://all-inclusive.marriott.com/the-westin-reserva-conchal-an-all-inclusive-golf-resort-spa/spa-wellness/heavenly-spa-by-westin

4 - https://all-inclusive.marriott.com/waves-hotel-spa-by-elegant-hotels/things-to-do/on-water

5 - https://hotel-deals.marriott.com/es-XM/retiro-renewal-riviera-nayarit/

--------------------
--------------------
--------------------
--------------------
<span style=\"color:#ff9662;\">•</span> 
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