<?php

$mes        = "pmi2006";
$folder     = "pmi-200611-together-forward";
$filename   = "pmi-200611-ID20.107-together-forward-reapertura-tiendas-HTML";

$subject     = "¡Estamos de vuelta!";
$preheader   = "Nuestras tiendas están listas para recibirte.";
$path        = "Content Builder > Mexico > Commercial > MX_20200615_Together_Forward > 01_HTML";
$nameincrm   = "Together Forward Reopening Stores";
$customerkey = "5045ba6c-5393-4913-aa5c-5d01588c0284";

$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

$target     = "HTML";       // "HTML", "DCE" o "FSH"
$footergrey = "1";          // 1:grey  0:white
$bgColor    = "#FFFFFF";    // "transparent" NOT advised!


$requiredBlocks = array(
    "img_Logo_Header_HTML",
    "img_Cover_HTML", // 1
    "spacer",
    "greeting_negro",
    "p300", // Estamos de vuelta y estamos listos para atenderte en nuestras tiendas <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>. Visítanos hoy y encuentra todos nuestros accesorios, unidades de tabaco para calentar y nuestro servicios disponibles.
    "img",  // 2
    "spacer",
    "p300", // f7f7f7   // Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.
    
    "m_IMG_TXT_m",  // img3 // Tapabocas y guantes para todo el staff y visitantes.
    "spacer",   // f7f7f7

    "m_IMG_TXT_m",  // img4 // Dispensadores de Gel Antibacterial.
    "spacer",   // f7f7f7

    "m_IMG_TXT_m",  // img5 // Marcas de Sana Distancia.
    "spacer",   // f7f7f7

    "m_IMG_TXT_m",  // img6 // Desinfección diaria de toda la tienda.
    "spacer",   // f7f7f7

    "spacer",

    "img",  // img7
    "spacer",
    "img",  // img8
    "spacer",
    "img",  // img9

    "p700", // ¡TE ESPERAMOS!

    "cta1", // btn-sa-localizar-tienda.png

    "p700", // AVANZAMOS JUNTOS.




    // "rawHTML", // %%=ContentBlockbyKey("Onboarding_Conversion_Check")=%% 
    // "spacer",
    // "cta1",
    // "img",
    // "p300",
    // "img",
    // "spacer",
    // "m_TXT_TXT_m",
    // "p700",
    // "legal_extra",
    // "img",
    // "p700",
    // "p300",
    // "img",
    // "p700",
    // "cta1",
    // "spacer",

    "disclaimer_iqos"
);



$a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";