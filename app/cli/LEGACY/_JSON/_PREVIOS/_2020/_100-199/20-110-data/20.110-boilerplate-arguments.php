<?php

$mes        = "pmi2006";
$folder     = "pmi-200616-lending-AB-testing";
$filename   = "pmi-200616-ID20.110-lending-AB-testing-call-now-HTML";

$subject     = "Tenemos información importante para ti.";
$preheader   = "Tu período de prueba está por comenzar.";
$path        = "";
$nameincrm   = "Lending AB Test - Call Now";
$customerkey = "";

$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

$target     = "HTML";       // "HTML", "DCE" o "FSH"
$footergrey = "1";          // 1:grey  0:white
$bgColor    = "#FFFFFF";    // "transparent" NOT advised!


$requiredBlocks = array(
    "img_Logo_Header_HTML",
    "spacer",
    "greeting_negro",
    "p300",             // No hemos podido contactarte para el seguimiento a tu solicitud en el <span style=\"color: #e4ab68; font-weight: 700;\">Programa de Préstamo IQOS.</span><br><br><b>¡Estás por comenzar tu período de prueba!</b><br><br>Te llamaremos más tarde para coordinar <span style=\"color: #e4ab68; font-weight: 700;\">la entrega de tu dispositivo</span>, o si lo prefieres, llámanos.
    "cta1",             // btn-sa-llamar-ahora.png     tel:5552695190
    "spacer",
    "sinfuego_sinhumo_sinceniza_dorado_HTML",
    "spacer",
    "legal_extra",      // El período de prueba del Programa de Préstamo IQOS es de hasta 15 días naturales a partir de la entrega del dispositivo. Al cabo de dicho período, el usuario puede optar por comprar el dispositivo o devolverlo. Sujeto a disponibilidad de inventario. Programa exclusivo para fumadores adultos en la Ciudad de México y área metropolitana. Consulta requisitos y <a href="https://www.probar-iqos.com/terminos-y-condiciones" target="_blank">Términos y Condiciones</a> del programa.</span> 
                        

    // "img_Cover_HTML", // 1
    // "img",  // 2
    // "p300", // f7f7f7   // Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.    
    // "spacer",
    // "p700", // AVANZAMOS JUNTOS.
    // "rawHTML", // %%=ContentBlockbyKey("Onboarding_Conversion_Check")=%% 
    // "m_TXT_TXT_m",

    "disclaimer_iqos"
);



$a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";