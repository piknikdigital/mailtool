<?php

//Data of target to be created
$mes        = "pmi2006";
$folder     = "pmi-200622-together-forward";
$filename   = "pmi-200622-ID20.115-DAY08-Together-Forward-Care-Services-HTML";

//Texts for CRM
$subject     = "Avancemos juntos, estamos de vuelta.";
$preheader   = "¡Visítanos hoy!";
$path        = "Content Builder > Mexico > Commercial > MX_20200622_Together_Forward > 01_HTML";
$nameincrm   = "Together Forward DAY08 - Care Services";
$customerkey = "";

$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

$target     = "HTML";       // "HTML", "DCE" o "FSH"
$footergrey = "1";          // 1:grey  0:white
$bgColor    = "#FFFFFF";    // "transparent" NOT advised!


$requiredBlocks = array(
    "img_Logo_Header_HTML",
    "img",              //  20.115-1.jpg
    "spacer",
    "greeting_negro",
    "p300",             // Estamos de vuelta y estamos listos para atenderte en nuestras tiendas <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>. Visítanos hoy y encuentra todos nuestros accesorios, unidades de tabaco para calentar y nuestro servicios disponibles.
    "img",              //  20.115-2.png
    "spacer",
    "cta1",             // btn-sa-localizar-tienda.png         https://www.iqos.com/mx/es/localizador-tiendas.html
    "spacer",
    "pframed",          // #f7f7f7      Además te recordamos que nuestros canales online continúan disponibles para ti.
    "m_IMG_TXT_m",      // #f7f7f7      20.115-3.png            Encuentra nuestros productos a través de nuestra <span style=\"color: #e4ab68; font-weight: 700;\">Tienda en línea</span> en el momento que lo necesites.
                        // btn-frameless-visitar-tienda-en-linea.png    https://www.iqos.com/mx/es/descubre/comprar-dispositivos.html
    "spacer",           // #f7f7f7 
    "spacer",
    "cols_33_33_33",
    "p700",             // AVANZAMOS JUNTOS.
    "disclaimer_iqos"

    
    // "spacer",
    // "m_IMG_TXT_m",      // 20.112-2.png  En caso de adquirir tu <b>IQOS</b> y registrarlo en tu cuenta, tendrás acceso a <b>IQOS CARE PLUS*</b>, nuestro servicio de cobertura extendida para que tu <b>IQOS</b> esté protegido.
    // "m_IMG_TXT_m",      // 20.112-3.png  Un agente experto <b>IQOS</b> listo para resolver cualquier duda en el momento que lo necesites.
    // "spacer",
    // "sinfuego_sinhumo_sinceniza_dorado_HTML",
    // "spacer",
    // "legal_extra",      // *Conoce términos y condiciones del programa IQOS CARE PLUS en www.iqos.com
    // "m_TXT_TXT_m",
    // "spacer",
    // "img",
    // "img_Cover_HTML",
    // "p300", // f7f7f7   Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.    
    // "spacer",
    // "rawHTML", // %%=ContentBlockbyKey("Onboarding_Conversion_Check")=%% 

);


// <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>
// <span style=\"color: #e4ab68; font-weight: 700;\">Tienda en línea</span>


$a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";

