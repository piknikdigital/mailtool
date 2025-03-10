<?php

$mes        = "pmi2006";
$folder     = "pmi-200605-onboarding";
$filename   = "pmi-200605-ID20.106-Day30-onboarding-conversion-check-HTML";

$subject     = "¡Felicidades por tus primeros días con IQOS!";
$preheader   = "Comparte tu experiencia con nosotros.";
$path        = "Content Builder > Mexico > Commercial > MX_20191018_Onboarding > 01_HTML";
$nameincrm   = "Email_Day30_Conversion_ver3_FORM_CONTENT_BLOCK";
$customerkey = "0f21fee7-d086-4990-954c-a4407f9706b3";

$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

$target     = "HTML";       // "HTML", "DCE" o "FSH"
$footergrey = "1";          // 1:grey  0:white
$bgColor    = "#FFFFFF";    // "transparent" NOT advised!


$requiredBlocks = array(
    "img_Logo_Header_HTML",
    "img_Cover_HTML", // https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/57f1deda-952a-47da-a52e-d84137a7bcbd.jpg
    "spacer",
    "greeting_negro",
    "p300", // ¡Hoy se cumplen 30 días desde que incluiste IQOS a tu vida! Nos encantará saber cómo ha sido tu experiencia.
    "rawHTML", // %%=ContentBlockbyKey("Onboarding_Conversion_Check")=%% 
    "spacer",
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



