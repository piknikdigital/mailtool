<?php

require_once("20.121-common.php");

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
    "p300",             // Comparte el cambio con tus seres queridos. Ayúdalos a eliminar las molestias del humo de cigarro y a mejorar su entorno.<br><br><b>Invítalos a conocer IQOS</b> y a ser parte de esta comunidad que está revolucionando la forma de consumir tabaco.
    "p700",             // ¿Cómo?, ¡Muy fácil!
    "m_IMG_TXT_m",      // 1) Invita a un amigo <b>a que conozca o compre IQOS ¡sin salir de su casa!</b>
    "m_IMG_TXT_m",      // 2) Tu amigo podrá probar <b>IQOS</b> antes de comprarlo, totalmente gratis y desde casa, durante 15 días con un dispositivo completamente nuevo a través del <b>Programa de Préstamo IQOS.<sup>(2)<sup></b>
    "m_IMG_TXT_m",      // 3) Si tu amigo ya está convencido, puede adquirir su <b>IQOS</b> en <b>iqos.com.</b>
    "m_IMG_TXT_m",      // 4) En caso de que <b>tu amigo adquiera</b> su primer <b>IQOS</b> con tu código único recibirá $300 MXN de descuento en su compra.<sup>(3)</sup>
    "m_IMG_TXT_m",      // 5) Cuando tu amigo haya finalizado su compra y registrado su dispositivo <b>¡tú recibirás $300 MXN!<sup>(4)</sup></b>
    "pframed",          // El registro del dispositivo se puede realizar por medio de IQOS.com o llamando al 800 1 4767 69.
    "p300",             // Tu código único es:
    "pframed",          // %%=v(@voucher_code)=%%
    "spacer",           // 
    "cta1",             // btn-sa-compartir.png       MENSAJE WHATSAPP
    "p300",             // Te recomendamos hacerlo desde tu celular.
    "p300",             // Para más información sobre cómo compartir tu código, haz click aquí.
    "cta1",             // btn-sa-conocer-mas.png       https://www.iqos.com/mx/es/refiere-a-un-amigo.html
    "spacer",
    "legal_extra",      // (1) Solo para fumadores adultos.
    "legal_extra",      // (2) El período de prueba del Programa de Préstamo IQOS es de hasta 15 días naturales a partir de la entrega del dispositivo. Al cabo de dicho período, el usuario puede optar por comprar el dispositivo o devolverlo. Sujeto a disponibilidad de inventario. Programa exclusivo para fumadores adultos en la Ciudad de México y área metropolitana. Consulta requisitos y <a href=\"https://www.iqos.com/mx/es/terminos-y-condiciones-del-programa-refiere-a-un-amigo.html\" target=\"_blank\">Términos y Condiciones</a> del programa.
    "legal_extra",      // (3) Consulta términos y condiciones. Válido en la compra y registro del primer kit IQOS (IQOS Holder + Cargador IQOS) de cada amigo referido. Para obtener su descuento, el amigo referido debe registrarse y registrar su dispositivo en iqos.com, y hacerlo válido en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y/o iqos.com. Aplican restricciones. Descuento no válido en productos de tabaco.
    "legal_extra",      // (4) Recompensa no canjeable por dinero en efectivo y redimible en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y/o a través de un Experto IQOS. Aplican restricciones. No canjeable por productos de tabaco. Limitado a los primeros 5 amigos referidos que compren y registren su primer kit IQOS con tu código único.
    "disclaimer_iqos"


);


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