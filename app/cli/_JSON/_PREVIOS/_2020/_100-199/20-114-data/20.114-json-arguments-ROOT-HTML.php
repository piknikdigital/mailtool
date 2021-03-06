<?php

//Data of target to be created
$mes        = "pmi2006";
$folder     = "pmi-200622-together-forward";
$filename   = "pmi-200622-ID20.114-DAY03-Together-Forward-New-Togetherness-HTML";

//Texts for CRM
$subject     = "Vivamos momentos únicos sin interrupciones.";
$preheader   = "Descubre una nueva forma de consumir tabaco con IQOS.";
$path        = "Content Builder > Mexico > Commercial > MX_20200622_Together_Forward > 01_HTML";
$nameincrm   = "Together Forward DAY03 - New Togetherness";
$customerkey = "";

$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

$target     = "HTML";       // "HTML", "DCE" o "FSH"
$footergrey = "1";          // 1:grey  0:white
$bgColor    = "#FFFFFF";    // "transparent" NOT advised!


$requiredBlocks = array(
    "img_Logo_Header_HTML",
    "img",              // 20.114-1.jpg
    "spacer",
    "greeting_negro",
    "p300",             // Hemos descubierto una nueva forma de estar juntos y con IQOS podrás seguir consumiendo tabaco, eliminando las molestias a tu alrededor. Sigamos viviendo momentos únicos sin interrupciones.
    "img",              // 20.114-2.jpg
    "spacer",
    "m_TXT_IMG_m",      // Tus espacios favoritos libres de humo de cigarro y sin rastros de ceniza.        20.114-3.jpg
    "spacer",
    "m_IMG_TXT_m",      // 20.114-4.jpg  Momentos inolvidables sin interrupciones.
    "spacer",
    "m_TXT_IMG_m",      // Siéntete cómodo en compañía de los demás.   20.114-5.jpg
    "spacer",
    "cta1",             // btn-sa-solicitar-demostracion.png     tel:5552695190
    "p700",             // AVANZAMOS JUNTOS.
    "disclaimer_iqos"

    // "spacer",
    // "pframed",          // ¿Qué beneficios te da el activar tu cuenta?
    // "m_IMG_TXT_m",      // 20.112-1.png  No tendrás que registrarte de nuevo, por cada <b>IQOS</b> que compres y asocies a tu cuenta.
    // "m_IMG_TXT_m",      // 20.112-2.png  En caso de adquirir tu <b>IQOS</b> y registrarlo en tu cuenta, tendrás acceso a <b>IQOS CARE PLUS*</b>, nuestro servicio de cobertura extendida para que tu <b>IQOS</b> esté protegido.
    // "m_IMG_TXT_m",      // 20.112-3.png  Un agente experto <b>IQOS</b> listo para resolver cualquier duda en el momento que lo necesites.
    // "spacer",
    // "sinfuego_sinhumo_sinceniza_dorado_HTML",
    // "spacer",
    // "legal_extra",      // *Conoce términos y condiciones del programa IQOS CARE PLUS en www.iqos.com
    // "m_TXT_TXT_m",
    // "spacer",
    // "img",
    // "p700",
    // "img_Cover_HTML",
    // "p300", // f7f7f7   Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.    
    // "spacer",
    // "rawHTML", // %%=ContentBlockbyKey("Onboarding_Conversion_Check")=%% 

);



$a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";