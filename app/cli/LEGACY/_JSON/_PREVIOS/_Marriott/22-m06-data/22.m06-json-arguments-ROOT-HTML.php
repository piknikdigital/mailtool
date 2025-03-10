<?php

require_once("22.m06-common.php");

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

    // BLOCK - TAPESTRY RESTAURANT
    "img",          // 3  TITLE
    "img",          // 4  COVER
    "p300_BW",
    "cta1_v2",      // CTA1  LEARN MORE

    // BLOCK - DELTA HOTELS RIVIERA NAYARIT
    "img",          // 5 TITLE
    "columns",      // 6 COVER (RIGHT)
    "p300_BW",
    "p300_BW",
    "cta1_v2",      // CTA2  LEARN MORE

    // BLOCK - THE BLUE DIAMOND RESORTS' WORLD-CLASS RESTAURANTS 
    "img",          // 7 TITLE
    "img",          // 8 COVER
    "p300_BW",
    "cta1_v2",      // CTA3 EXPLORE MORE

    // BLOCK - PLANET HOLLYWOOD COSTA RICA
    "img",          // 9 TITLE
    "img",          // 10 COVER
    "p300_BW",
    "cta1_v2",      // CTA4 DISCOVER MORE

    // BLOCK - INTIMATE DINNING BY THE BEACH AT THE HOUSE BARBADOS
    "img",          // 11 TITLE
    "columns",      // 12 COVER (RIGHT)
    "cta1_v2",      // CTA5 LEARN MORE

    // BLOCK - INTERVIEW: CHEF SHONTEL @ CRYSTAL COVE
    "img",          // 13 TITLE
    "img",          // 14 COVER

    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p300_BW",

    "cta1_v2",      // CTA6 LEARN MORE

    
    // BLOCK - END
    "img",                  // 15 Logo Bonvoy
    "p700_BW",              // Unsubscribe
    "img",                  // 16 Logos All-Inclusive
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
++---------------------------------++
||   COLOR TURQUESA Brand World    ||
||   00d1d2                        ||
||   COLOR SLATE  Brand World      ||
||   34303d                        ||
||   Naranja                       ||
||   e3813b                        ||
++---------------------------------++


MARRIOT NARANJA
ff9662

===================================================================
<span style=\"color:#ff9662;font-weight:700;\"></span>
===================================================================
<span style=\"color:#ff9662;font-weight:700;font-size:24px;\"></span>
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

-----------------------------------------------------------
-----[TAPESTRY RESTAURANT]---------------------------------
-----------------------------------------------------------

<b>Your dining experience at Tapestry is taken to another level.</b><br><br>Enjoy delicious culinary offerings during your stay at Tapestry restaurant. Indulge in an innovative à la carte lunch to tickle your taste buds. Savor seasonally inspired dinner menus featuring signature epicurean experiences each night.


-----------------------------------------------------------
-----[DELTA HOTELS RIVIERA NAYARIT]------------------------
-----------------------------------------------------------

<b>Huichol Cocina Artesanal</b><br><br>Let all your sensations explode while enjoying your meal with the fusion of locally grown ingredients. Weekly hours of operation will be available upon arrival.<br><br><b>Komorebi Teppanyaki</b><br><br>Join us at Komorebi Teppanyaki and enjoy authentic Japanese cuisine cooked fresh in front of the diners, with Asian dishes available as well. Weekly hours of operation will be available upon arrival. Reservation required.  
--------------------
<b>Visit Our New Tonati Beach Club</b><br><br>Our new beach club Tonati gives our guests the opportunity to enjoy a touch of the indigenous story of the La Cruz de Huanacaxtle. The venue features a modern, vibrant and unique atmosphere, where an extended traditional delights menu and signature cocktails will enhance the guest experience.



-----------------------------------------------------------------
-----[THE BLUE DIAMOND RESORTS’ WORLD-CLASS RESTAURANTS ]--------
-----------------------------------------------------------------

The Blue Diamond Resorts' world-class restaurants Hunter Steakhouse and Sunset Strip Steakhouse & Grill in Mexico have been recognized by the specialized wine publication, Wine Spectator, with the 2022 Award of Excellence due to the exceptional dining experience as well as the wine list offered in such restaurants available at Royalton Riviera Cancun, Hideaway at Royalton Riviera Cancun, Royalton CHIC Cancun, Planet Hollywood Cancun Beach Resort and Planet Hollywood Cancun Adult Scene.<br><br> <span style=\"color:#ff9662;font-weight:700;\">The Award for Excellence is one of three types of awards given to an exclusive collection of the best restaurants in the world.</span><br><br>Since 1981, the Wine Spectator Restaurant Awards have guided wine lovers to establishments that offer an excellent menu and wine selection. This year's Excellence Awards recognized 3,169 restaurants in more than 70 countries, giving wine enthusiasts a diverse selection of the best restaurants to choose from.<br><br><span style=\"color:#ff9662;font-weight:700;\">\"It is an honor for Blue Diamond Resorts to know that the carefully selected menu offering of both restaurants has been recognized and acknowledged for the quality and variety of its wines\",</span> mentioned Mauricio Zarate Vice President of Operations of Blue Diamond Resorts. <span style=\"color:#ff9662;font-weight:700;\">\"Our focus is always on our customers and this recognition is just proof of it, to which we are really proud and thankful\"</span> he added.<br><br>Guests can savor a delicious variety of premium juicy meat cuts at the Hunter Steakhouse, chef's specialties, and the perfect glass of wine to pair each of the menu offerings, while at Sunset Strip Steakhouse & Grill, available at Planet Hollywood Cancun Beach Resort and Planet Hollywood Cancun Adult Scene, guests can surround themselves the glamor of the silver screen in an intimate themed steakhouse with an extensive wine list and a private wine cava.



-----------------------------------------------------------
-----[PLANET HOLLYWOOD COSTA RICA]-------------------------
-----------------------------------------------------------

Create an everlasting memory so unique under a canopy of stars with your loved one and enjoy the breathtaking view on the famed Pacific coast of Papagayo, Costa Rica. Discover the surprises we have for you!<br><br><b>Let love fill the air with a romantic dinner on the beach,</b> unlimited access to our hydrotherapy treatments, in-room chocolate-covered strawberries with sparkling wine and a decorated suite that let's your love take center stage. Must be booked between August 1, 2022 and November 30, 2022 for travel between August 16, 2022 and November 30, 2022.



------------------------------------------------------------------------
-----[INTIMATE DINNING BY THE BEACH AT THE HOUSE BARBADOS]--------------
------------------------------------------------------------------------

You will get to enjoy a private St. James Barbados dining experience when you stay at The House. Make special memories under a star-lit sky in a private setting on the beach.<br><br>With soft candlelight, lighted torches, and a personal waiter, you are sure to enjoy the intimacy of a private dinner.<br><br><b>Dinner is served from a seasonal menu featuring outstanding cuisine and paired with a pleasing variety of fine wines.</b><br><br> You can even enjoy your private dinner in the comfort of your suite. Romantic dining under the stars offers a four-course a la carte meal with a bottle of Prosecco.




-----------------------------------------------------------
-----[INTERVIEW: CHEF SHONTEL @ CRYSTAL COVE]--------------
-----------------------------------------------------------

-----[Q1]----------------------
<span style=\"color:#ff9662;font-weight:700;\">1. </span>What makes the dinning experiences at Crystal Cove so unique?
-------------------------------
<span style=\"color:#ff9662;font-weight:700;\">Our dining experience is unique as it combines  beautiful food with brilliant service.</span> Our aim is to encourage diners to experience Barbados in totality.<br><br>There is always something for everyone, they are comfort foods, traditional foods and of course Barbados local foods. Our slogan is \"Meals and memories are made here\".


-----[Q2]----------------------
<span style=\"color:#ff9662;font-weight:700;\">2. </span>How do you get inspired to create a menu?
-------------------------------
Creating menus are always exciting for me. <span style=\"color:#ff9662;font-weight:700;\">I am constantly doing research to see what ingredients are trendy, healthy, new to the market and sustainable.</span> It is very important to ensure they are local elements in the meals however I try to present in untraditional ways. I've always found some guests are willing to try local foods but it has to be interesting and appeal to all of the senses. <span style=\"color:#ff9662;font-weight:700;\">Pairing foods with liquor also enhances and adds a different element to the taste especially using Caribbean rums and liqueurs such as Mount Gay Rum, Banks Beer , Malibu and  Falernum.</span>


-----[Q3]----------------------
<span style=\"color:#ff9662;font-weight:700;\">3. </span>What is your favorite local ingredient to use? Do you have a favorite Bajan dish?
-------------------------------
I would have to say I can't choose between salted codfish and breadfruit. <span style=\"color:#ff9662;font-weight:700;\">Breadfruit is a starchy fruit however it grows on a tree. I have used in in many applications such as creamy breadfruit soup, breadfruit gratin, breadfruit cou-cou the most popular would be the breadfruit and salt fish balls featured in the \"Taste\" cook book.</span> Salted cod can be found on many menu elements at Crystal from Frizzled saltfish at breakfast, salt fish spring rolls at Drifters , Bajan fish cakes, Buljol and Creole saltfish with plantain on our Sunday wide spread buffet.
 

-----[Q4]----------------------
<span style=\"color:#ff9662;font-weight:700;\">4. </span>What is the most popular dish served at Crystal Cove?
-------------------------------
Bajan Fish cakes; the guests never gets tired of these spicy fish fritters.


-----[Q5]----------------------
<span style=\"color:#ff9662;font-weight:700;\">5. </span>How do you cater to guests from different locations and different dietary preferences and needs?
-------------------------------
At Crystal we pride ourselves on meeting everyone's dietary needs. Guests are met on arrival to discuss their dietary restrictions whether it is allergies, intolerance, religion or just personal choice. <span style=\"color:#ff9662;font-weight:700;\">We ensure we have their specific ingredients on hand and prepare all meals separately for the diner.</span> Special requests are treated as priority at Crystal. <span style=\"color:#ff9662;font-weight:700;\">We have also changed the preparations of food items to ensure allergens are highlighted on menus and continue to train our associates on allergens and cross contamination.</span>
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