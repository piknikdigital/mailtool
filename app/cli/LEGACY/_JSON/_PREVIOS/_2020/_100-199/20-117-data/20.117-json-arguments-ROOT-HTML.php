<?php

//Data of target to be created
$mes        = "pmi2006";
$folder     = "pmi-200622-together-forward";
$filename   = "pmi-200622-ID20.117-DAY15-Together-Forward-Pop-Science-HTML";

//Texts for CRM
$subject     = "Conoce el secreto detrás de IQOS.";
$preheader   = "Más que un dispositivo, es ciencia.";
$path        = "Content Builder > Mexico > Commercial > MX_20200622_Together_Forward > 01_HTML";
$nameincrm   = "Together Forward DAY15 - Pop Science";
$customerkey = "";

$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

$target     = "HTML";       // "HTML", "DCE" o "FSH"
$footergrey = "1";          // 1:grey  0:white
$bgColor    = "#FFFFFF";    // "transparent" NOT advised!


$requiredBlocks = array(
    "img_Logo_Header_HTML",
    "img_Cover_HTML",   // 20.117-1.jpg
    "spacer",
    "greeting_negro",
    "p300",             // ¿Sabías que la mayoría de los fumadores adultos que cambian a IQOS, dejan por completo los cigarros?
    "img",              // 20.117-2.gif
    "p300",             // IQOS cambiará la forma en que consumes tabaco.<br><br>Su tecnología de calentamiento de tabaco eliminará las molestias provocadas por el humo y la ceniza del cigarro .
    "m_IMG_TXT_m",      // 20.117-3.gif
                        // Al calentar el tabaco a una temperatura de hasta 350ºC, IQOS garantiza un sabor consistente a tabaco sin necesidad de quemarlo. 
    "p700",             // ¿Quieres saber más sobre la tecnología con la que funciona IQOS?
    "cta1",             // btn-sa-conocer-mas.png          https://www.iqos.com/mx/es/tecnologia.html 
    "p700",             // AVANZAMOS JUNTOS.
    "disclaimer_iqos"
);

// "img",
// "spacer",
// "pframed",          // 
// "m_IMG_TXT_m",      // 
// "m_IMG_TXT_m",      // 
// "spacer",
// "sinfuego_sinhumo_sinceniza_dorado_HTML",
// "spacer",
// "legal_extra",      // 
// "m_TXT_TXT_m",
// "spacer",
// "img",
// "img_Cover_HTML",
// "p300", // f7f7f7   Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.    
// "spacer",
// "rawHTML", // %%=ContentBlockbyKey("Onboarding_Conversion_Check")=%% 

// <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>

$a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";