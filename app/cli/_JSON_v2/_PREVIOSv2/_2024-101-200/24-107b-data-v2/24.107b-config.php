<?php

$p_id =  '107b';
$p_subject =  '';
$p_preheader =  '';
$p_yy =  '24';
$p_mm =  '10';
$p_dd =  '24';
$p_name4folder =  'ajustes-laus';
$p_name4json =  'laus-iluma-hesitator-day-45';
$p_name4folderDCE =  'Ajustes LAUS';
$p_mailname4DCE =  'LAUS_2024_Abril_DAY-45_Hesitator';
$p_customerkey_DCE =  'NA';
$p_name4folderFSH =  'NA';
$p_mailname4FSH =  'NA';
$p_customerkey_FSH =  'NA';
$id_FSH_folder =  'NA';


//-----------------------------------------

$companyBrand     = "pmi";
$TwigTemplate     = "pmi-Brand-World-B01-600-v01.twig";
$bgColor          = "#FFFFFF";    // Don't use "transparent"

$TwigTemplate_new     = "iqos-2024-v1.twig";

//-----------------------------------------


$requiredBlocks = array(
    "header_brand_world",
    "img",
    "cta1_v2",
    "p300_BW",
    "stageIMG",
    "pframed",
    "cta1",
    "p300_BW",
    "stageIMG",
    "cta1_v2",
    "IQOS-Wallet-Iluma-Gray",  // 24.50
    "spacer",

    "canales_de_comunicacion",
    "Tu_equipo_IQOS",
    "legal_extra",
    "legales-iluma",
    "footer_bw_v1_lowercase"
);



// MODULOS PARA TEMPLATE iqos-2024-v1.twig
$requiredBlocks_iqos24 = array(
    "iqos24-header-iqos",   // REEMPLAZA A: "header_brand_world", 


    "iqos24-center-img",    // REEMPLAZA A: "img", "stageIMG",
    "iqos24-greeting",      // REEMPLAZA A: "greeting_v2",
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
    'iqos24-Tu-Equipo-IQOS',// REEMPLAZA A: "Tu_Equipo_IQOS",
    "iqos24-legales-iluma", // REEMPLAZA A: "bloque_legales_iluma",
    "iqos24-footer-iqos"    // REEMPLAZA A: "footer_bw_v1_lowercase",

);


// MODULOS PARA TEMPLATE zyn-2025-v1.twig
$requiredBlocks__ZYN = array(
    "zyn25-header-zyn",
    "iqos24-center-img",    // REEMPLAZA A: "img", "stageIMG",
    "zyn25-greeting",       // REEMPLAZA A: "greeting_v2",
    "iqos24-center-img",    // REEMPLAZA A: "img", "stageIMG",
    "iqos24-center-img",    // REEMPLAZA A: "img", "stageIMG",
    "zyn25-legales",
    "zyn25-footer"
);


// MODULOS PARA OLD_TEMPLATE pmi-Brand-World-B01-600-v01.twig
$requiredBlocks2 = array(
    "header_brand_world",

    "stageIMG",
    "img",
    "img",
    "img",
    "img",
    "greeting_v2",
    "cta1_v2",
    "cta1_v2",
    "cta1_v2",
    "cta1_v2",
    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p300_BW",
    "p700_BW",
    "p700_BW",
    "p700_BW",
    "p700_BW",
    "columns",
    "spacer",
    "canales_de_comunicacion",
    "IQOS-Wallet-Iluma-Gray",  // 24.50
    "IQOS-Wallet-Iluma-Turquesa", // 24.165
    "ElijoIQOS",
    "Solo_con_IQOS",

    "Tu_equipo_IQOS",
    "Tu_Equipo_IQOS",

    "bloque_legales_iluma",
    "footer_bw_v1_lowercase",
);


/* 

    FONDO GRIS CLARO - Iluma, borde redondo
    "IQOS-Wallet-Iluma-Gray",


    FONDO GRIS CLARO:
    "get_iqos_wallet_app",
    FONDO TURQUESA:
    "get_iqos_wallet_app_turquoise",
    FONDO SLATE
    "get_iqos_wallet_app_slate",


    "header_mgm_tu_codigo_unico",

    "stageIMG",
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
    "canales_de_comunicacion",
    
    "disclaimer_iqos",    DTI - DUTY TO INFORM ----> CON RECUADRO
    
    "ElijoIQOS",
    "legal_extra",
    "legales-iluma",

    "Tu_equipo_IQOS",
    "Solo_con_IQOS",
    "footer_bw_v1",
    
    PARA FUTURO SIN HUMO USAR:
    "disclaimer_fsh",
    "footer_fsh"
    
    PARA IQOS USAR
    "ElijoIQOS",
    "legal_extra",
    "disclaimer_iqos",
    "footer_bw_v1_lowercase"
    
    
    
    "legales-terea",
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
    "form_v2",
    "mgm_coupon_1",
    "mgm_coupon_2cols",
    "rgm_coupon_2cols",
    "cta_share_WA_coupon",
    "graylineframed",
    "shopping_list",
    "3cols_chat_fb_phone",

    PREVIO, YA NO USAR: "footer_brand_world"
    CODIGO PARA CUPON 107b107bXX :   %%=v(@voucher_code)=%% 
    CODIGO PARA CUPON 107b107bXX :   %%referral_code%%

    "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
    "rawHTML", // %%=ContentBlockbyKey(&quot;Onboarding_Conversion_Check&quot;)=%% 


*/


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

(1) Solo para fumadores adultos o usuarios adultos de otros productos con nicotina.  <br><br>  (2) Consulta Términos y Condiciones. Válido en la compra y registro del primer dispositivo (IQOS Holder + Cargador IQOS) de cada amigo referido. Para obtener su descuento, el amigo referido debe registrarse y registrar su dispositivo en <a href=\"https://www.iqos.com/mx/es/home.html\" style=\"text-decoration:underline;\" target=\"_blank\">iqos.com</a>, y hacerlo válido en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y <a href=\"https://www.compraiqos.com.mx\" style=\"text-decoration:underline;\" target=\"_blank\">compraiqos.com.mx</a>. Descuento no válido en productos de tabaco.  <br><br>  (3) Cada recompensa equivale a $150 MXN en dinero electrónico, no canjeable por dinero en efectivo, válido solo en <a href=\"https://recompensasiqos.plandereconocimientos.com/\" style=\"text-decoration:underline;\" target=\"_blank\">recompensasiqos.plandereconocimientos.com</a>. Por cada amigo que utilice tu código, obtendrás $150 MXN en beneficios, teniendo la oportunidad de recibir hasta $1,500 MXN en beneficios. Limitado a los primeros 10 amigos referidos que compren y registren su dispositivo con tu código único. Consulta <a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a> del programa.



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

==== [Términos y Condiciones (MGM)] ========================
<a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a>
============================================================

==== [Términos y Condiciones (Programa de Prestamo)] =======
<a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-prestamo-iqos.html\" style=\"text-decoration:underline;\" target=\"_blank\">Términos y Condiciones</a>
============================================================

======= Códigos de Descuento | IQOS México. ​================
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