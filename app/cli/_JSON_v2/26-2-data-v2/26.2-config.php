<?php

$p_id =  '2';
$p_subject =  '';
$p_preheader =  '';
$p_yy =  '26';
$p_mm =  '01';
$p_dd =  '05';
$p_name4folder =  'crm-estaticos';
$p_name4json =  'laus-day-46-adopter';
$p_name4folderDCE =  'CRM Estaticos';
$p_mailname4DCE =  'LAUS_2024_Abril_DAY-46_Adopter';
$p_customerkey_DCE =  'NA';
$p_name4folderFSH =  'CRM Estaticos';
$p_mailname4FSH =  'LAUS_2024_Abril_DAY-46_Adopter';
$p_customerkey_FSH =  'NA';
$id_FSH_folder =  'NA';


//-----------------------------------------

$companyBrand     = "pmi";

switch ( (string)$companyBrand ){
    case 'zyn':
        // $companyBrand  = "zyn";
        $TwigTemplate     = "zyn-2025-v1.twig";
        $bgColor          = "#FFFFFF";    // Don't use "transparent"
        break;
    case 'cz':
        // $companyBrand  = "cz";
        $TwigTemplate     = "clubzero-2025-v1.twig";
        $bgColor          = "#FFFFFF";    // Don't use "transparent"
        break;
    default:
        // $companyBrand  = "pmi";
        $TwigTemplate     = "iqos-2024-v1.twig";
        $TwigTemplate_OLD = "pmi-Brand-World-B01-600-v01.twig";
        $bgColor          = "#FFFFFF";    // Don't use "transparent"
        break;
}
// $bgColor          = "#0d0c12";    // Dark mode IQOS

//-----------------------------------------

$requiredBlocks = array(
    "iqos24-header-iqos",   // 
    "iqos24-center-img",    // 1
    "iqos24-greeting",      // 
    "iqos24-center-img",    // 2    Ver más                https://www.iqos.com/mx/es/descubrir.html#howtouseyouriqos
    "iqos24-center-img",    // 3
    "iqos24-center-img",    // 4    Localizar tienda       https://conoce-iqos.com/localizador-tiendas/
    "iqos24-center-img",    // 5    Localizar tienda       https://conoce-iqos.com/localizador-tiendas/
    "iqos24-center-img",    // 6
    "iqos24-center-img",    // 7    Llámanos               tel:8001476769
    "iqos24-center-img",    // 8
    "iqos24-canales-de-comunicacion-3",
   
// Ver más                https://www.iqos.com/mx/es/descubrir.html#howtouseyouriqos
// Localizar tienda       https://conoce-iqos.com/localizador-tiendas/
// Localizar tienda       https://conoce-iqos.com/localizador-tiendas/
// Llámanos               tel:8001476769

// Teléfono               tel:8001476769
// Chat en vivo           https://www.iqos.com/mx/es/ayuda/contacto.html#openchat
// SMS                    sms:5592253374
// Instagram              https://www.instagram.com/iqos_mx/

    'iqos24-spacer',
    "iqos24-footer-iqos-forever-curious",
    ""
);

// MODULOS PARA TEMPLATE iqos-2024-v1.twig
$requiredBlocks__IQOS = array(
    "iqos24-header-iqos-DARK",
    "iqos24-footer-iqos-forever-curious-DARK",

    "iqos24-header-iqos",   // REEMPLAZA A: "header_brand_world", 
    "iqos24-center-img",    // REEMPLAZA A: "img", "stageIMG",
    "iqos24-greeting",      // REEMPLAZA A: "greeting_v2",
    
    "iqos24-greeting-with-bgimg",
    "iqos24-center-img-with-bgimg",
    
    "iqos24-center-img",    // REEMPLAZA A: "img", "stageIMG",
    "iqos24-center-img",    // REEMPLAZA A: "img", "stageIMG",
    "iqos24-center-img",    // REEMPLAZA A: "img", "stageIMG",

    "iqos24-center-img",    // REEMPLAZA A: "img", "stageIMG",
    "iqos24-center-img",    // REEMPLAZA A: "img", "stageIMG",
    "iqos24-center-img",    // REEMPLAZA A: "img", "stageIMG",
    
    "iqos24-center-img",    // REEMPLAZA A: "img", "stageIMG",
    "iqos24-center-img",    // REEMPLAZA A: "img", "stageIMG",
    "iqos24-center-img",    // REEMPLAZA A: "img", "stageIMG",


    "iqos24-columns-img-img-img",
    "iqos24-columns-img-greeting-img",

    //Hacen lo mismo:
    'iqos24-columns-img-xxxxx-img',         //  Columna 1: IMG1 margen izq, Columna 2: CODIGO-MGM, columna 3: margen derecho  
    "iqos24-columns-img-referralcode-img",
    

    'iqos24-IQOS-Wallet',                //  IMG: texto descarga tu wallet  IMG WALLET COLUMNA1, IMG WALLET COLUMNA2 
    'iqos24-img-sharemycode',            //  IMG con MSG WA: "Te regalo XX% de descuento en la compra de tu primer Kit IQOS ILUMA, exclusivo en iqos.com. No olvides utilizar mi código %%referral_code%% al comprar."
    'iqos24-columns-multirows-img-img',  //  Tarjeta IMG SUP/IMG INF

      
    "iqos24-cta",           // REEMPLAZA A: "cta1_v2",
    'iqos24-p700',          // REEMPLAZA A: "p700_BW",
    'iqos24-p300',          // REEMPLAZA A: "p300_BW",
    'iqos24-columns',       // REEMPLAZA A: "columns",
    'iqos24-spacer',        // REEMPLAZA A: "spacer",
    
    "iqos24-canales-de-comunicacion-2",

    'iqos24-Tu-Equipo-IQOS',// REEMPLAZA A: "Tu_Equipo_IQOS",
    
    "iqos24-legales-iluma", // REEMPLAZA A: "bloque_legales_iluma",
    "iqos24-footer-iqos",    // REEMPLAZA A: "footer_bw_v1_lowercase",

    "iqos24-footer-iqos-forever-curious",    // REEMPLAZA A: "iqos24-footer-iqos",

    ""
);




/*
BAD CHR : "", "	"
" ",
--------------------
--------------------
url para mandar SMS:
    https://cutt.ly/59uY4Ga
Shortlink points to:
    sms://+525592253374
--------------------
PRECIO TACHADO:
<span style=\"text-decoration:line-through;color:#00d1d2;\">
   <span style=\"color:#34303d;\">
   &nbsp;$1,399 MXN&nbsp;
   </span>
</span>
********************************************************************
********************************************************************

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
<span style=\"font-size:12px;\"><sup>MXN</sup></span>
===================================================================
<span style=\"font-size:12px;\"><sup class=\"sup_20\">(1)</sup></span>
<span style=\"font-size:12px;\"><sup class=\"sup_20\">(2)</sup></span>
<span style=\"font-size:12px;\"><sup class=\"sup_20\">(3)</sup></span>
<span style=\"font-size:12px;\"><sup class=\"sup_20\">(4)</sup></span>
<span style=\"font-size:12px;\"><sup class=\"sup_20\">MXN</sup></span>
===================================================================
    LINKS COMUNES IQOS
Conoce más               https://www.iqos.com/mx/es/descubrir.html
Comprar ahora            https://www.iqos.com/mx/es/discover-heated-tobacco/comprar-dispositivos.html
Probar IQOS              https://www.iqos.com/mx/es/prueba-iqos.html
Siguenos IG              https://www.instagram.com/iqos_mx/
Localizador de tiendas   DESDE JUN 2025
                         https://conoce-iqos.com/localizador-tiendas/
~~~~~~~~~~~~~~~~~~~~~~~~~
IQOS wallet - android    https://play.google.com/store/apps/details?id=com.iqos.referral&pli=1
IQOS wallet - iOS        https://api.iqoswalletmx.com/wallet/passes/download/%%identity_identifier%%
~~~~~~~~~~~~~~~~~~~~~~~~~
TyC Trade In             https://www.iqos.com/mx/es/codigos-de-descuento.html
TyC MGM                  https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html
TyC Programa de Prestamo https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-prestamo-iqos.html
TyC Entrega en 1 hora    https://www.iqos.com/mx/es/terminos-condiciones-para-entrega-por-pari.html
~~~~~~~~~~~~~~~~~~~~~~~~~
Códigos de Descuento     https://www.iqos.com/mx/es/codigos-de-descuento.html
www.iqos.com             https://www.iqos.com/mx/es/home.html
información importante   https://www.iqos.com/mx/es/Noticias/informacion-importante.html
privacy - aqui           https://www.pmiprivacy.com/es-la/consumer
===================================================================
===================================================================
===================================================================
    LINKS COMUNES ZYN
Home                    https://www.zyn.com/mx/es/home.html
Comprar ahora           https://www.zyn.com/mx/es/compra-zyn.html
Conocer más             https://www.zyn.com/mx/es/descubre-zyn.html
==== [zyn.com] ============================================
<a href=\"https://www.zyn.com/mx/es/home.html\" style=\"text-decoration:underline;\" target=\"_blank\">zyn.com</a>

===================================================================
    LINKS TOGETHER CLUB
---------------------------
https://together-club.com/
===================================================================

--------------------
--------------------
--------------------
--------------------
No ingerir ni desmontar las unidades de tabaco para calentar con la tecnología SMARTCORE.  Este producto contiene una pieza metálica afilada que puede causar lesiones graves si se ingiere.  Mantener fuera del alcance de niños y mascotas.

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

--------------------
--------------------
--------------------
#### [ WALLETS ] ###########################################
IQOS wallet - android
https://play.google.com/store/apps/details?id=com.iqos.referral&pli=1

IQOS wallet - iOS
https://api.iqoswalletmx.com/wallet/passes/download/%%identity_identifier%%
############################################################


==== [LOCALIZADOR TIENDAS] =================================
https://conoce-iqos.com/localizador-tiendas/
============================================================

==== [iqos.com] ============================================
<a href=\"https://www.iqos.com/mx/es/home.html\" style=\"text-decoration:underline;\" target=\"_blank\">iqos.com</a>
============================================================

==== [ www.iqos.com ] ======================================
<a href=\"https://www.iqos.com/mx/es/home.html\" style=\"text-decoration:underline;\" target=\"_blank\">www.iqos.com</a>
============================================================



==== [TRADE IN] ============================================
Consulta <a href=\"https://www.iqos.com/mx/es/codigos-de-descuento.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a> del Programa Trade in en <a href=\"https://www.iqos.com/mx/es/home.html\" style=\"text-decoration:underline;\" target=\"_blank\">www.iqos.com</a>.
============================================================



==== [Términos y Condiciones (trade in)] ===================
<a href=\"https://www.iqos.com/mx/es/codigos-de-descuento.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a>
============================================================

==== [Términos y Condiciones (MGM)] ========================
<a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a>
============================================================

==== [Términos y Condiciones (Programa de Prestamo)] =======
<a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-prestamo-iqos.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a>
============================================================

==== [Términos y Condiciones (Entrega en 1 hora)] ===================
<a href=\"https://www.iqos.com/mx/es/terminos-condiciones-para-entrega-por-pari.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones.</a>
=====================================================================





======= Códigos de Descuento | IQOS México. ================
<a href=\"https://www.iqos.com/mx/es/codigos-de-descuento.html\" style=\"text-decoration:underline;\" target=\"_blank\">Códigos de Descuento | IQOS México.</a>
============================================================

==== [recompensasiqos.plandereconocimientos.com] ============
<a href=\"https://recompensasiqos.plandereconocimientos.com/\" style=\"text-decoration:underline;\" target=\"_blank\">recompensasiqos.plandereconocimientos.com</a>
=============================================================

==== [www.compraiqos.com.mx] ================================
<a href=\"https://www.compraiqos.com.mx\" style=\"text-decoration:underline;\" target=\"_blank\">www.compraiqos.com.mx</a>
=============================================================

==== [ información importante ] ==========
<a href=\"https://www.iqos.com/mx/es/Noticias/informacion-importante.html\" style=\"text-decoration:underline;\" target=\"_blank\">información importante</a>
==========================================

==== [ aqui (privacy) ] ==================
<a href=\"https://www.pmiprivacy.com/es-la/consumer\" alias=\"footer_pmi_privacy\" style=\"text-decoration:underline;\" target=\"_blank\">aquí</a>
==========================================










===================================================================
SHARE MSG FSH:

fb
Hablemos para que 15 millones de fumadores puedan elegir. Hablemos de alternativas para los que fuman. Únete al movimiento. https://futurosinhumo.com.mx 
http://www.facebook.com/share.php?u=https://futurosinhumo.com.mx&quote=Hablemos%20para%20que%2015%20millones%20de%20fumadores%20puedan%20elegir.%20Hablemos%20de%20alternativas%20para%20los%20que%20fuman.%20%C3%9Anete%20al%20movimiento.

tw
Hablemos para que 15 millones de fumadores puedan elegir. Hablemos de alternativas para los que fuman. Únete al movimiento. https://futurosinhumo.com.mx 
https://twitter.com/intent/tweet?text=Hablemos%20para%20que%2015%20millones%20de%20fumadores%20puedan%20elegir.%20Hablemos%20de%20alternativas%20para%20los%20que%20fuman.%20%C3%9Anete%20al%20movimiento.%20https%3A%2F%2Ffuturosinhumo.com.mx
ya no es necesario: https://ctt.ac/z13Mr

wa
Hablemos para que 15 millones de fumadores puedan elegir. Hablemos de alternativas para los que fuman. Únete al movimiento. https://futurosinhumo.com.mx 
https://wa.me/?text=Hablemos%20para%20que%2015%20millones%20de%20fumadores%20puedan%20elegir.%20Hablemos%20de%20alternativas%20para%20los%20que%20fuman.%20%C3%9Anete%20al%20movimiento.%20https%3A%2F%2Ffuturosinhumo.com.mx

===================================================================


ESTO ES PARA ILUMA DESDE JUL 2025:

"donde_codificar_la_siguiente url" : "https://www.urlencoder.org/",
"url_ctaDECODED"       : "whatsapp://send?text=",

"txt2Encode_ILUMA20pc" : "Te regalo 20% de descuento en la compra de tu primer Kit IQOS ILUMA, exclusivo en iqos.com. No olvides utilizar mi código %%referral_code%% al comprar.",
"txtEncoded_ILUMA20pc" : "Te%20regalo%2020%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS%20ILUMA%2C%20exclusivo%20en%20iqos.com.%20No%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25referral_code%25%25%20al%20comprar.",

"txt2Encode_ILUMA25pc" : "Te regalo 25% de descuento en la compra de tu primer Kit IQOS ILUMA, exclusivo en iqos.com. No olvides utilizar mi código %%referral_code%% al comprar.",
"txtEncoded_ILUMA25pc" : "Te%20regalo%2025%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS%20ILUMA%2C%20exclusivo%20en%20iqos.com.%20No%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25referral_code%25%25%20al%20comprar.",

"txt2Encode_ILUMA30pc" : "Te regalo 30% de descuento en la compra de tu primer Kit IQOS ILUMA, exclusivo en iqos.com. No olvides utilizar mi código %%referral_code%% al comprar.",
"txtEncoded_ILUMA30pc" : "Te%20regalo%2030%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS%20ILUMA%2C%20exclusivo%20en%20iqos.com.%20No%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25referral_code%25%25%20al%20comprar.",

"txt2Encode_ILUMA35pc" : "Te regalo 35% de descuento en la compra de tu primer Kit IQOS ILUMA, exclusivo en iqos.com. No olvides utilizar mi código %%referral_code%% al comprar.",
"txtEncoded_ILUMA35pc" : "Te%20regalo%2035%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS%20ILUMA%2C%20exclusivo%20en%20iqos.com.%20No%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25referral_code%25%25%20al%20comprar.",

"url_NOK"       : " [whatsapp://send?text=] [https://web.whatsapp.com/send?text=]",
"url_OK"        : "https://wa.me/?text=",
"url"           : "https://wa.me/?text=Te%20regalo%2030%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS%20ILUMA.%20No%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25referral_code%25%25%20al%20comprar.",

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