<?php

$mes        = "pmi2006";
$folder     = "pmi-200617-heets-reinforcement";
$filename   = "pmi-200617-ID20.111-heets-reinforcement-HTML";

$subject     = "¿Te quedaste sin unidades de tabaco para calentar?";
$preheader   = "Tenemos información importante para ti.";
$path        = "";
$nameincrm   = "Heets Reinforcement";
$customerkey = "";

$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

$target     = "HTML";       // "HTML", "DCE" o "FSH"
$footergrey = "1";          // 1:grey  0:white
$bgColor    = "#FFFFFF";    // "transparent" NOT advised!


$requiredBlocks = array(
    "img_Logo_Header_HTML",
    "spacer",
    "greeting_negro",
    "p300",             // Encuentra las <b>unidades de tabaco para calentar</b> disponibles en puntos de venta seleccionados de las siguientes cadenas comerciales.
    "img",              // 1
    "spacer",
    "m_TXT_TXT_m",      // COL-1-TXT Encuentra el punto de<br>venta más cercano.    COL-1-CTA btn-sa-localizar-tienda.png       https://www.iqos.com/mx/es/localizador-tiendas.html
                        // COL-2-TXT ¿Tienes dudas?<br>Contáctanos.                 COL-2-CTA btn-sa-llamar.png                 tel:8001476769
    "spacer",
    "img",              // 2   https://www.ordenar-unidades.com/?utm_source=crm&utm_medium=email&utm_campaign=launch
    "p700",             // Tu equipo IQOS Care
    "legal_extra",      // *Entregas únicamente en Ciudad de México y Área Metropolitana. Sólo para mayores de edad con identificación oficial. Este servicio es exclusivo para usuarios adultos de IQOS registrados en nuestra base de datos.

    // "cta1",             // 
    // "sinfuego_sinhumo_sinceniza_dorado_HTML",
    // "img_Cover_HTML", // 1
    // "p300", // f7f7f7   // Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.    
    // "spacer",
    // "rawHTML", // %%=ContentBlockbyKey("Onboarding_Conversion_Check")=%% 

    "disclaimer_iqos"
);



$a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";