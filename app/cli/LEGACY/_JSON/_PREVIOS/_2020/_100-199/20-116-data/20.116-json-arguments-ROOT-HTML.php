<?php

//Data of target to be created
$mes        = "pmi2006";
$folder     = "pmi-200622-together-forward";
$filename   = "pmi-200622-ID20.116-DAY10-Together-Forward-UGC-HTML";

//Texts for CRM
$subject     = "Es momento de un nuevo comienzo.";
$preheader   = "Una mejor alternativa para consumir tabaco te espera.";
$path        = "Content Builder > Mexico > Commercial > MX_20200622_Together_Forward > 01_HTML";
$nameincrm   = "DAY10 Together Forward - UGC";
$customerkey = "";

$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

$target     = "HTML";       // "HTML", "DCE" o "FSH"
$footergrey = "1";          // 1:grey  0:white
$bgColor    = "#FFFFFF";    // "transparent" NOT advised!


$requiredBlocks = array(
    "img_Logo_Header_HTML",
    "img",              // 20.116-1.jpg
    "spacer",
    "greeting_negro",
    "p300",             // El momento de cambiar a una mejor alternativa para consumir tabaco es ahora. Olvídate de las molestias provocadas por el olor a cigarro y empieza a vivir momentos únicos con tus seres queridos.<br><br><br>Existen 10 millones de usuarios en el mundo y estas son algunas de sus historias:
    "m_IMG_TXT_m",      // 20.116-2.jpg
                        // #f7f7f7 \"Genial, espectacular. IQOS es lo mejor.\"<br><br>Claudia
    "spacer",
    "m_TXT_IMG_m",      // #f7f7f7 \"Creo que es lo mejor. Usar IQOS ha cambiado muchas cosas, lo uso diario y es excelente.\"<br><br>Victor
                        // 20.116-3.jpg
    "spacer",
    "m_IMG_TXT_m",      // 20.116-4.jpg
                        // #f7f7f7 \"No dependo de un encendedor y mi ropa ya no huele a cigarro.\"<br><br>Héctor
    "p300",              // No solo es nuestra palabra, es la de ellos.
    "cta1",             // btn-sa-conocer-iqos.png      https://www.iqos.com/mx/es/descubre.html
    "p700",             // AVANZAMOS JUNTOS.
    "disclaimer_iqos"

);

    // "pframed",          // 
    // "m_IMG_TXT_m",      // 
    // "m_IMG_TXT_m",      // 
    // "spacer",
    // "sinfuego_sinhumo_sinceniza_dorado_HTML",
    // "spacer",
    // "legal_extra",      // 
    // "img",
    // "m_TXT_TXT_m",
    // "spacer",
    // "img",
    // "img_Cover_HTML",
    // "p300",
    // "spacer",
    // "rawHTML",

// %%=ContentBlockbyKey("Onboarding_Conversion_Check")=%% 
// <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>
$a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";