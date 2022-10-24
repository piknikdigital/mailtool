<?php

require_once("22.m07-common.php");

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
<b>Su experiencia gastronómica en Tapestry es llevada a otro nivel.</b><br><br>Disfrute de deliciosas ofertas culinarias durante su estadía en el restaurante de Treasure Beach. Deleite su paladar con un innovador almuerzo a la carta. Saboree menús para la cena inspirados en la temporada que ofrecen experiencias epicúreas exclusivas cada noche.

-----------------------------------------------------------
-----[DELTA HOTELS RIVIERA NAYARIT]------------------------
-----------------------------------------------------------

<b>Huichol Cocina Artesanal</b><br><br>Deje que sus sensaciones exploten mientras disfruta de su comida con la fusión de ingredientes cultivados localmente. <br><br><b>Teppanyaki Komorebi</b><br><br>Únase a nosotros en Komorebi Teppanyaki y disfrute de la auténtica cocina japonesa recién preparada frente a los comensales, con platos asiáticos disponibles también.
--------------------
<b>Visite Nuestro Nuevo Tonati Beach Club</b><br><br>Nuestro nuevo club de playa Tonati brinda a nuestros huéspedes la oportunidad de disfrutar un toque de la historia indígena de La Cruz de Huanacaxtle. El lugar cuenta con un ambiente moderno, vibrante y único, donde un extenso menú de delicias tradicionales y cócteles exclusivos mejorarán la experiencia del huésped.

-----------------------------------------------------------------
-----[THE BLUE DIAMOND RESORTS’ WORLD-CLASS RESTAURANTS ]--------
-----------------------------------------------------------------
Los restaurantes de clase mundial Hunter Steakhouse y Sunset Strip Steakhouse & Grill de Blue Diamond Resorts en México han sido reconocidos por la publicación especializada en vinos, Wine Spectator, con el Premio a la Excelencia 2022 debido a la excepcional experiencia gastronómica así como a la carta de vinos ofrecida en dichos restaurantes disponibles en Royalton Riviera Cancun, Hideaway at Royalton Riviera Cancun, Royalton CHIC Cancun, Planet Hollywood Cancun Beach Resort y Planet Hollywood Cancun Adult Scene.<br><br><span style=\"color:#ff9662;font-weight:700;\">El Premio a la Excelencia es uno de los tres tipos de premios otorgados a una colección exclusiva de los mejores restaurantes del mundo.</span><br><br>Desde 1981, los Wine Spectator Restaurant Awards han guiado a los amantes del vino a establecimientos que ofrecen un excelente menú y selección de vinos. Los Premios a la Excelencia de este año reconocieron a 3169 restaurantes en más de 70 países, brindando a los entusiastas del vino una selección diversa de los mejores restaurantes para elegir.<br><br><span style=\"color:#ff9662;font-weight:700;\">\"Es un honor para Blue Diamond Resorts saber que la oferta de menú cuidadosamente seleccionada de ambos restaurantes ha sido reconocida y premiada por la calidad y variedad de sus vinos\",</span> mencionó Mauricio Zárate Vicepresidente de Operaciones de Blue Diamond Resorts. <span style=\"color:#ff9662;font-weight:700;\">\"Nuestro enfoque siempre está en nuestros clientes y este reconocimiento es solo una prueba de ello, de lo cual estamos realmente orgullosos y agradecidos\"</span> agregó.<br><br>Los huéspedes pueden saborear una deliciosa variedad de jugosos cortes de carne premium en Hunter Steakhouse, las especialidades del chef y la copa de vino perfecta para acompañar cada una de las ofertas del menú, mientras que en Sunset Strip Steakhouse & Grill, disponible en Planet Hollywood Cancún Beach Resort y Planet Hollywood Cancun Adult Scene, los huéspedes pueden rodearse del glamour de la gran pantalla en un asador temático íntimo con una extensa lista de vinos y una cava de vinos privada.




-----------------------------------------------------------
-----[PLANET HOLLYWOOD COSTA RICA]-------------------------
-----------------------------------------------------------

Cree un recuerdo eterno tan único bajo las estrellas y disfrute de la impresionante vista de la famosa costa del Pacífico de Papagayo, Costa Rica. ¡Descubra las sorpresas que tenemos para usted!<br><br><b>Deje que el amor llene el aire con una cena romántica en la playa,</b> acceso ilimitado a nuestros tratamientos de hidroterapia, fresas cubiertas de chocolate con vino espumoso en la habitación y una suite decorada que hace que su amor sea el centro de atención. Debe reservarse entre el 1 de agosto de 2022 y el 30 de noviembre de 2022 para viajar entre el 16 de agosto de 2022 y el 30 de noviembre de 2022.



------------------------------------------------------------------------
-----[INTIMATE DINNING BY THE BEACH AT THE HOUSE BARBADOS]--------------
------------------------------------------------------------------------

Podrá disfrutar de una experiencia gastronómica privada en St. James, Barbados cuando se hospede en The House by Elegant Hotels. Cree recuerdos especiales bajo un cielo iluminado por estrellas en un entorno privado en la playa.<br><br>Con velas suaves, antorchas encendidas y un mesero personal, seguramente disfrutará de la intimidad de una cena privada. <br><br><b>La cena se sirve de un menú de temporada que ofrece una excelente cocina y se combina con una agradable variedad de vinos finos.</b><br><br>Incluso puede disfrutar de su cena privada en la comodidad de su suite.



-----------------------------------------------------------
-----[INTERVIEW: CHEF SHONTEL @ CRYSTAL COVE]--------------
-----------------------------------------------------------

-----[Q1]----------------------
<span style=\"color:#ff9662;font-weight:700;\">1. </span>¿Qué hace que las experiencias gastronómicas en Crystal Cove sean tan únicas?
-------------------------------
<span style=\"color:#ff9662;font-weight:700;\">Nuestra experiencia gastronómica es única porque combina una deliciosa comida con un excelente servicio.</span> Nuestro objetivo es alentar a los comensales a experimentar Barbados en su totalidad.<br><br>Siempre hay algo para todos, son comidas reconfortantes, comidas tradicionales y, por supuesto, comidas locales de Barbados. Nuestro lema es \"Aquí se hacen comidas y recuerdos\".


-----[Q2]----------------------
<span style=\"color:#ff9662;font-weight:700;\">2. </span> ¿Cómo te inspiras para crear un menú?
-------------------------------
Crear menús siempre es emocionante para mí. <span style=\"color:#ff9662;font-weight:700;\">Estoy constantemente investigando para ver qué ingredientes son modernos, saludables, nuevos en el mercado y sostenibles.</span> Es muy importante asegurarse de que sean elementos locales en las comidas, sin embargo, trato de presentarlos de manera no tradicional. Siempre he encontrado que algunos invitados están dispuestos a probar la comida local, pero tiene que ser interesante y atractivo para todos los sentidos. <span style=\"color:#ff9662;font-weight:700;\">El maridaje de alimentos con licor también realza y agrega un elemento diferente al sabor, especialmente al usar rones y licores caribeños como Mount Gay Rum, Banks Beer, Malibu y Falernum.</span>





-----[Q3]----------------------
<span style=\"color:#ff9662;font-weight:700;\">3. </span>¿Cuál es tu ingrediente local favorito para usar? ¿Tienes un plato favorito de Bajan?
-------------------------------
Debo decir que no puedo elegir entre bacalao salado y fruta del pan. <span style=\"color:#ff9662;font-weight:700;\">La fruta del pan es una fruta rica en almidón, sin embargo, crece en un árbol. Lo he usado en muchas aplicaciones, como sopa cremosa de fruta del pan, gratinado de fruta del pan, cou-cou de fruta del pan, las más populares serían las bolas de fruta del pan y pescado salado que aparecen en el libro de cocina \"Taste\".</span> El bacalao salado se puede encontrar en muchos elementos del menú en Crystal de Frizzled saltfish en el desayuno, rollitos de primavera de pescado salado en Drifters, pasteles de pescado de Bajan, Buljol y pescado salado criollo con plátano en nuestro amplio buffet dominical.


-----[Q4]----------------------
<span style=\"color:#ff9662;font-weight:700;\">4. </span>¿Cuál es el plato más popular que se sirve en Crystal Cove?
-------------------------------
Los pasteles de pescado bajan; los comensales nunca se cansan de estos buñuelos de pescado especiados.


-----[Q5]----------------------
<span style=\"color:#ff9662;font-weight:700;\">5. </span>¿Cómo atiende a los huéspedes de diferentes lugares y diferentes preferencias y necesidades dietéticas?
-------------------------------
En Crystal nos enorgullecemos de satisfacer las necesidades dietéticas de todos. Los huéspedes se reúnen a su llegada para discutir sus restricciones dietéticas, ya sean alergias, intolerancia, religión o simplemente una elección personal. <span style=\"color:#ff9662;font-weight:700;\">Nos aseguramos de tener a mano sus ingredientes específicos y preparamos todas las comidas por separado para el comensal.</span> Las solicitudes especiales se tratan como prioridad en Crystal. <span style=\"color:#ff9662;font-weight:700;\">También hemos cambiado la preparación de los alimentos para garantizar que los alérgenos se destaquen en los menús y continuamos capacitando a nuestros asociados sobre alérgenos y contaminación cruzada.</span>


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