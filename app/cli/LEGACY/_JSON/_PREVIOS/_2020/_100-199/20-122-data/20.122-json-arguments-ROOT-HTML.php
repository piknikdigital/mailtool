<?php

require_once("20.122-common.php");

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
    "img_Logo_Header_HTML",
    "img_Cover_HTML",
    "spacer",
    "greeting_negro",
    "spacer",
    "img",              // 2 
    "spacer",
    "cta1",             // quiero-saber-mas                 https://www.iqos.com/mx/es/refiere-a-un-amigo.html
    "p300",             // ¿Cómo tus amigos pueden formar parte de <b>IQOS</b>?<br><br>¡Muy fácil! Puede elegir cualquiera de estas opciones:
    "pframed",          // e2aa68
    "m_IMG_TXT_m",      // e2aa68   // mgm-number-1.png // PROBAR IQOS GRATIS EN CASA
    "graylineframed",   // grey-line
    "pframed",          // e2aa68   // Donde podrá probar un <b>IQOS</b> totalmente nuevo y gratis durante 15 días sin necesidad de salir de su casa. Si lo desea, podrá comprar es mismo dispositivo con ayuda de un <b>Experto IQOS</b> y recibir un <b>descuento de $300 MXN</b> al utilizar tu código único.<sup>(2)</sup>
    "m_IMG_TXT_m",      // e2aa68   // mgm-number-2.png // COMPRAR EN IQOS.com
    "graylineframed",   // grey-line
    "pframed",          // e2aa68   // Si tu amigo ya está convencido, podrá adquirir su <b>IQOS</b> desde <b>iqos.com</b> en donde, al utilizar tu código único, <b>recibirá $300 MXN de descuento.<sup>(3)</sup></b>
    "pframed",          // e2aa68
    "p300",             // Si tu amigo está listo para ser parte de este cambio, compártele tu código.<br><br>Tu código único es:
    "mgm_coupon_1",    
    "spacer",           // 
    "cta_share_WA_coupon",  // Te recomendamos hacerlo desde tu celular.<br><br><br>Recuerda, si tu amigo adquiere su primer <b>IQOS</b> con tu código único <b>recibirá $300 MXN de descuento<sup>(3)</sup></b> en su compra. Cuando haya finalizado su compra y registrado su dispositivo, ¡<b>tú recibirás $300 MXN<sup>(4)</sup></b> redimibles en artículos <b>IQOS</b>!<br><br>El registro del dispositivo se puede realizar por medio de <b>IQOS.com</b> o llamando al <b>800 1 4767 69</b>.
    "p300",             // Te recomendamos hacerlo desde tu celular.<br><br>Recuerda, si tu amigo adquiere su primer <b>IQOS</b> con tu código único <b>recibirá $300 MXN de descuento<sup>(3)</sup></b> en su compra. Cuando haya finalizado su compra y registrado su dispositivo, ¡<b>tú recibirás $300 MXN<sup>(4)</sup></b> redimibles en artículos <b>IQOS!</b><br><br>El registro del dispositivo se puede realizar por medio de <b>IQOS.com</b> o llamando al <b>800 1 4767 69</b>.
    "cta1",             // conocer-mas                 https://www.iqos.com/mx/es/refiere-a-un-amigo.html
    "spacer",           // 
    "legal_extra",      // (1) Solo para fumadores adultos.
    "legal_extra",      // (2) El período de prueba del Programa de Préstamo IQOS es de hasta 15 días naturales a partir de la entrega del dispositivo. Al cabo de dicho período, el usuario puede optar por comprar el dispositivo o devolverlo. Sujeto a disponibilidad de inventario. Programa exclusivo para fumadores adultos en la Ciudad de México y área metropolitana. Consulta requisitos y <a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html\" target=\"_blank\">Términos y Condiciones</a> del programa.
    "legal_extra",      // (3) Consulta términos y condiciones. Válido en la compra y registro del primer kit IQOS (IQOS Holder + Cargador IQOS) de cada amigo referido. Para obtener su descuento, el amigo referido debe registrarse y registrar su dispositivo en iqos.com, y hacerlo válido en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y/o iqos.com. Aplican restricciones. Descuento no válido en productos de tabaco.
    "legal_extra",      // (4) Recompensa no canjeable por dinero en efectivo y redimible en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y/o a través de un Experto IQOS. Aplican restricciones. No canjeable por productos de tabaco. Limitado a los primeros 5 amigos referidos que compren y registren su primer kit IQOS con tu código único.
    "disclaimer_iqos"    
);


// "p700",             // 
// "img",              // 
// "p300",             // 
// "spacer",
// "p300",             // 
// "cta1",             // 
// "spacer",           // 
// "p700",             // 
// "legal_extra",      // 
// "disclaimer_iqos"
// "sinfuego_sinhumo_sinceniza_dorado_HTML",
// "spacer",
// "m_IMG_TXT_m",      // 
// "img_Cover_HTML",
// "p700",             // 
// "img",
// "spacer",
// "pframed",          // 
// "m_IMG_TXT_m",      // 
// "m_TXT_TXT_m",
// "p300", // f7f7f7   Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.    
// "rawHTML", // %%=ContentBlockbyKey("Onboarding_Conversion_Check")=%% 
// <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>
// $a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";