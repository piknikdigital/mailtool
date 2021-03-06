<?php

$mes        = "pmi2006";
$folder     = "pmi-200605-heets";
$filename   = "pmi-200605-ID20.105-heets-HTML";

$subject     = "Información de tus unidades de tabaco para calentar.";
$preheader   = "Puedes ordenarlas para recibirlas y pagarlas en tu domicilio.";
$path        = "Content Builder > Mexico > Commercial > MX_20200605_Heets > 01_HTML";
$nameincrm   = "HEETS";
$customerkey = "371eae5e-4a93-40df-aea7-2dd4f1464671";

$TwigTemplate = "pmi-blocks-mod-B01-600-v01.twig";

$target     = "HTML";       // "HTML", "DCE" o "FSH"
$footergrey = "1";          // 1:grey  0:white
$bgColor    = "#FFFFFF";    // "transparent" NOT advised!


$requiredBlocks = array(
    "img_Logo_Header_HTML",
    //"img_Cover_HTML",
    "spacer",
    "greeting_negro",
    "p300",
    "p300",
    "cta1",
    "img",
    "p300",
    "img",
    "spacer",
    "m_TXT_TXT_m",
    "spacer",
    "p700",
    "legal_extra",
    // "img",
    // "p700",
    // "p300",
    // "img",
    // "p700",
    // "cta1",
    // "spacer",
    "disclaimer_iqos"
);



