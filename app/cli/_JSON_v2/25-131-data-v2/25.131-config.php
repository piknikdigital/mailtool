<?php

$p_id =  '131';
$p_subject =  '';
$p_preheader =  '';
$p_yy =  '25';
$p_mm =  '05';
$p_dd =  '12';
$p_name4folder =  'transaccionales';
$p_name4json =  'cz-certificados-digitales';
$p_name4folderDCE =  'NA';
$p_mailname4DCE =  'CZ_Certificados_digitales';
$p_customerkey_DCE =  'NA';
$p_name4folderFSH =  'NA';
$p_mailname4FSH =  'CZ_Certificados_digitales';
$p_customerkey_FSH =  'NA';
$id_FSH_folder =  'NA';

//-----------------------------------------

$companyBrand     = "cz";
$TwigTemplate     = "clubzero-2025-v1.twig";
$bgColor          = "#FFFFFF";    // Don't use "transparent"

//-----------------------------------------


// MODULOS PARA TEMPLATE clubzero-2025-v1.twig
$requiredBlocks = array(
    "tc25-header",          // REEMPLAZA A: "iqos24-header-iqos", 
    "iqos24-center-img",    // REEMPLAZA A: "img", "stageIMG",
    'cz25-p700',            // REEMPLAZA A: "p700_BW",

    // saludo
    "cz25-greeting",        // REEMPLAZA A: "iqos24-greeting",


    'cz25-p300',            // REEMPLAZA A: "p300_BW",
    'iqos24-columns',       // REEMPLAZA A: "columns",
    'cz25-p300',            // REEMPLAZA A: "p300_BW",
    
    "tc25-dudas-contactanos",
    "tc25-siguenos-rs-2",
    "tc25-footer"
);



// MODULOS PARA TEMPLATE iqos-2024-v1.twig
$requiredBlocks_iq = array(
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
Localizador de tiendas   https://conoce-iqos.com/wp-content/localizador-tiendas.html
                         https://www.iqos.com/mx/es/localizador-tiendas.html
~~~~~~~~~~~~~~~~~~~~~~~~~
IQOS wallet - android    https://play.google.com/store/apps/details?id=com.iqos.referral&pli=1
IQOS wallet - iOS        https://api.iqoswalletmx.com/wallet/passes/download/%%referral_code%%
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
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
e6177a
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
Ser parte de Together Club es decirle <br> SÍ a las recompensas.​
Ser parte de Together Club es decirle SÍ a las recompensas.​
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
https://api.iqoswalletmx.com/wallet/passes/download/%%referral_code%%
############################################################


==== [LOCALIZADOR TIENDAS] =================================
https://conoce-iqos.com/wp-content/localizador-tiendas.html
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

NO ILUMA - NO ILUMA - NO ILUMA

"donde_codificar_la_siguiente url" : "https://www.urlencoder.org/",
"url_ctaDECODED"     : "whatsapp://send?text=",
"text2encode"        : "Te regalo 20% de descuento en la compra de tu primer Kit IQOS. No olvides utilizar mi código %%=v(@voucher_code)=%% al comprar.",
"imgulr1"            : "whatsapp://send?text=",
"imgulr2"            : "https://wa.me/?text=",
"imgulr3"            : "https://web.whatsapp.com/send?text=",
"imgulr"             : "https://wa.me/?text=Te%20regalo%2020%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS.%0ANo%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25%3Dv%28%40voucher_code%29%3D%25%25%20al%20comprar.",

===================================================================

ESTO ES PARA ILUMA, 20% de descuento

"donde_codificar_la_siguiente url" : "https://www.urlencoder.org/",
"url_ctaDECODED"       : "whatsapp://send?text=",
"txt2Encode_ILUMA20pc" : "Te regalo 20% de descuento en la compra de tu primer Kit IQOS ILUMA. No olvides utilizar mi código %%referral_code%% al comprar.",
"txtEncoded_ILUMA20pc" : "Te%20regalo%2020%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS%20ILUMA.%20No%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25referral_code%25%25%20al%20comprar.",
"ulr_NOK"              : " [whatsapp://send?text=] [https://web.whatsapp.com/send?text=]",
"ulr_OK"               : "https://wa.me/?text=",
"imgulr"               : "https://wa.me/?text=Te%20regalo%2020%25%20de%20descuento%20en%20la%20compra%20de%20tu%20primer%20Kit%20IQOS%20ILUMA.%20No%20olvides%20utilizar%20mi%20c%C3%B3digo%20%25%25referral_code%25%25%20al%20comprar.",

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