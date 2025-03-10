<?php

require_once("22.m02-common.php");

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

    // BLOCK - PLANET HOLLYWOOD COSTA RICA
    "img",
    "spacer",   
    "img",
    "p300_BW",
    "img",
    "p300_BW",
    "cta1_v2",

    // BLOCK - WESTIN CONCHAL
    "img",
    "columns",
    "spacer",   
    "img",
    "p300_BW",
    "cta1_v2",

    // BLOCK - RIVIERA NAYARIT
    "img",
    "img",
    "p300_BW",
    "cta1_v2",

    // BLOCK - TURTLE BEACH
    "img",
    "p300_BW",
    "columns",
    "spacer",   
 
    // BLOCK - 8 FAMILY VACATIONS
    "img",
    "p300_BW",
    "cta1_v2",

    // BLOCK - OUR ALL-INCLUSIVE TEAM
    "img",
    "img",
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
Starting from 10 rooms you'll have a star worthy stay, <br>with A-List attentions**:<br><span style=\"color:#ff9662;\">1.</span> Complimentary welcome drink.<br><span style=\"color:#ff9662;\">2.</span> Private group registration.<br><span style=\"color:#ff9662;\">3.</span> Group's coordinator.<br><span style=\"color:#ff9662;\">4.</span> 20% discount on spa treatments.<br><span style=\"color:#ff9662;\">5.</span> Complimentary meeting and function space.
--------------------
--------------------
Special conditions:<br><span style=\"color:#ff9662;\">•</span> Up to 2 kids free (3 to 12 years old) per room based on the season.<br><span style=\"color:#ff9662;\">•</span> Star Kids Club (4 to 12 years old)<br><span style=\"color:#ff9662;\">•</span> 1 complimentary room for every 15 paid daily.<br><span style=\"color:#ff9662;\">•</span> 1 upgrade to Star Class for the group's VIP.<br><span style=\"color:#ff9662;\">•</span> Check-in from 12:00<br><span style=\"color:#ff9662;\">•</span> Lunch included for check-in and check-out dates<br><span style=\"color:#ff9662;\">•</span> 1 complimentary daily coffee break for corporate groups<br><br>** Valid for new reservations confirmed between February 22 to April 30, 2022; for travel dates between February 22, 2022 to December 23, 2023. (blackout dates apply).<br><br>Contact:<br><span style=\"color:#ff9662;\">Tel: +506 8858-3609 , email:<br> sales1pcr-lir@planethollywoodhotels.com</span>
--------------------
--------------------
--------------------
The Westin Reserva Conchal, <br>an All-Inclusive Golf Resort & <br>Spa offers a unique concept, <br>the &quot;Family Concierge Club <br>Service.&quot; Starting upon <br>arrival, families will enjoy a <br>private check-in area, specially <br>appointed suites and <br>assistance of a Family <br>Concierge who will coordinate <br>needs and entertainment for <br>the family's vacation.
--------------------
--------------------
--------------------
<span style=\"color:#ff9662;\">1.</span> Private family check-in area<br><span style=\"color:#ff9662;\">2.</span> Westin Kids Beach-kit with logo hat, puzzle, coloring book and coloring pencils.<br><span style=\"color:#ff9662;\">3.</span> Specially appointed Family Club Suites<br><span style=\"color:#ff9662;\">4.</span> All day assistance of a Family Concierge<br><span style=\"color:#ff9662;\">5.</span> Exclusive family activities and sports<br><span style=\"color:#ff9662;\">6.</span> Personalized mini-bar contents for kids & adults<br><span style=\"color:#ff9662;\">7.</span> Children's mini bathrobes and slippers<br><span style=\"color:#ff9662;\">8.</span> Children's bathroom amenities kit<br><span style=\"color:#ff9662;\">9.</span> Children's beach towels and pillows<br><span style=\"color:#ff9662;\">10.</span> Adult bathrobes and slippers<br><span style=\"color:#ff9662;\">11.</span> Luxury Heavenly® Bath amenities<br><span style=\"color:#ff9662;\">12.</span> Complimentary internet access in the Lounge and guest rooms
--------------------
--------------------
--------------------
At Delta Hotels Riviera Nayarit, An All-Inclusive Resort families  experience a relaxing secluded stay in the town of La Cruz de Huanacaxtle.<br><br>Relax in one of our two resort swimming pools while kids splash and enjoy entertainment options.<br>Enjoy a variety of on-site dining options ranging from teppanyaki to casual beach fare.<br><br><span style=\"color:#ff9662;\">Kids under 12 years old stay for free!</span>
--------------------
--------------------
--------------------
Fun for All at Turtle Beach by Elegant Hotels - All-Inclusive
--------------------
--------------------
Enjoy a lively atmosphere with <br>gracious hospitality, spacious <br>accommodations, complimentary <br>non-motorised watersports and <br>the interactive Flying Fish Kids <br>Club. Take a gastronomical <br>journey or relax on a scenic <br>island tour. All complimentary <br>bespoke activities make for the <br>best holiday memories!
--------------------
--------------------
Check out these eight summer travel ideas and get ready for a memory-making trip you and your whole crew will love.
--------------------
--------------------
--------------------
Gayle Talma, Multi-Property General Manager Elegant Hotels
--------------------
--------------------
--------------------
<span style=\"color:#ff9662;\">In your perspective, what is the impact of a woman in a leadership role?</span>  In Elegant Hotels, women make up 70+% of the workforce which is one of the highest percentages.  Women are gaining more leadership roles within the hotels.<br><br><span style=\"color:#ff9662;\">How do you balance work and personal life?</span>  It is always great to be passionate about your job (any job).  However, you have to find a balance with family, time for yourself, and a hobby.  I like to go to the gym before I start my day, at least three times a week.  I love to enjoy the beach and a great restaurant (which can be a local shop) on my day off.<br><br><span style=\"color:#ff9662;\">What is your advice for other women wanting to pursue business leadership roles?</span>  Never stop learning.  Set yourself goals that you want to achieve.  Always find a mentor that continues to give you good advice on your career (besides your immediate supervisor).  Ensure to create a balance between work and family.

--------------------
--------------------
<a href=\"#\" style=\"text-decoration:none;\" target=\"_blank\">UNSUBSCRIBE</a>
--------------------
--------------------
--------------------
©2022 Marriott International, Inc. <br><br>To unsubscribe: Select Hotel & Destination specials on our unsubscribe page.<br> If you unsubscribe from Marriott promotional emails like this, we will continue to send only transactional messages such as reservation confirmation emails.<br><br> You can also unsubscribe by writing to: <br>Internet Customer Care - Unsubscribe<br>1818 North 90 Street Omaha, Nebraska 68114-1315 USA
--------------------
--------------------
--------------------
--------------------
#1 Planet Hollywood (no cambia) 
https://all-inclusive.marriott.com/planet-hollywood-costa-rica

#2 Wonder Awaits at the westin reserve Conchal: 
https://www.marriott.com/setSCtracking.mi?scid=e464e64a-32da-4c0d-af0e-d5d9b4853691&mid=/en-us/hotels/lirwi-the-westin-reserva-conchal-an-all-inclusive-golf-resort-and-spa/rooms/

#3 Kids Stay Free at Delta Riviera Nayarit: 
https://www.marriott.com/setSCtracking.mi?scid=f49dbf3f-368c-4748-b5cf-73b1157a0c9b&mid=/hotels/travel/pvrde-delta-hotels-riviera-nayarit-an-all-inclusive-resort/

#4 The Ultimate All-Inclusive Family Vacation: 
https://www.marriott.com/setSCtracking.mi?scid=8b02a3aa-68d4-4f9b-aac8-b49cc72fd60c&mid=/hotels/travel/bgiau-turtle-beach-by-elegant-hotels-all-inclusive/

#5 Traveller (No cambia): 
https://traveler.marriott.com/kid-friendly/best-summer-family-vacations/


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