<?php

//Data of target to be created
$mes        = "pmi2006";
$folder     = "pmi-200618-leads-welcome";
$filename   = "pmi-200618-ID20.112-leads-welcome-HTML";

//Texts for CRM
$subject     = "Una cuenta con tu correo te está esperando en iqos.com";
$preheader   = "Conoce los beneficios que te da el activar tu cuenta.";
$path        = "Content Builder > Mexico > Commercial > MX_20200618_Leads_Welcome > 01_HTML";
$nameincrm   = "Leads Welcome";
$customerkey = "";

$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

$target     = "HTML";       // "HTML", "DCE" o "FSH"
$footergrey = "1";          // 1:grey  0:white
$bgColor    = "#FFFFFF";    // "transparent" NOT advised!


$requiredBlocks = array(
    "img_Logo_Header_HTML",
    "spacer",
    "greeting_negro",
    "p300",             // ¡Gracias por registrarte en IQOS!<br><br>Para tener una mejor experiencia, se ha creado una cuenta con tu correo en iqos.com.<br>Para usarla, debes primero establecer tu contraseña, haciendo clic aquí:
    "cta1",             // btn-sa-establecer-contrasena.png         #
    "spacer",
    "pframed",          // ¿Qué beneficios te da el activar tu cuenta?
    "m_IMG_TXT_m",      // 20.112-1.png  No tendrás que registrarte de nuevo, por cada <b>IQOS</b> que compres y asocies a tu cuenta.
    "m_IMG_TXT_m",      // 20.112-2.png  En caso de adquirir tu <b>IQOS</b> y registrarlo en tu cuenta, tendrás acceso a <b>IQOS CARE PLUS*</b>, nuestro servicio de cobertura extendida para que tu <b>IQOS</b> esté protegido.
    "m_IMG_TXT_m",      // 20.112-3.png  Un agente experto <b>IQOS</b> listo para resolver cualquier duda en el momento que lo necesites.
    "spacer",
    "sinfuego_sinhumo_sinceniza_dorado_HTML",
    "spacer",
    "legal_extra",      // *Conoce términos y condiciones del programa IQOS CARE PLUS en www.iqos.com
    "disclaimer_iqos"

    // "img",
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