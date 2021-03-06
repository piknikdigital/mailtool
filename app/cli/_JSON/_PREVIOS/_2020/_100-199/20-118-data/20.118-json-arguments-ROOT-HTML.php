<?php

require_once("20.118-common.php");


$target    = "HTML";       // "HTML", "DCE" o "FSH"

$filename  = $filename_base . $target;
$subject   = $subject_base;
$preheader = $preheader_base;

switch ($target)
{
    case "DCE":  $path = $path_DCE; $nameincrm = $name_in_DCE; $customerkey=$customerkey_DCE; break;
    case "FSH":  $path = $path_FSH; $nameincrm = $name_in_FSH; $customerkey=$customerkey_FSH; break;
    default:     $path = "";        $nameincrm = "";           $customerkey="" ; break;
}

$requiredBlocks = array(
    "img_Logo_Header_HTML",
    "img_Cover_HTML",
    "spacer",
    "greeting_negro",
    "p300",             // <b>Dile adiós al humo de cigarro.</b><br>Compra tu <b>IQOS</b> y aprovecha hasta
    "img",              // 
    "spacer",
    "cta1",             // btn-sa-comprar.png       https://www.iqos.com/mx/es/descubre/comprar-dispositivos.html
    "p300",             // Válido hasta el 30 de junio. Al hacer tu compra en línea, el envío corre por nuestra cuenta.
    "img",              // 
    "spacer",
    "sinfuego_sinhumo_sinceniza_dorado_HTML",
    "spacer",
    "legal_extra",      // Válido únicamente en compras online hechas en www.iqos.com. Vigencia hasta el 30 de junio de 2020. En la compra mínima de $899 MXN (ochocientos noventa y nueve 00/00 MXN) que incluya un dispositivo IQOS (IQOS 2.4 PLUS, IQOS 3 MULTI o IQOS 3 DUO), puedes recibir 3, 6 o 12 meses sin intereses al momento del pago y sobre el total de tu compra con tarjetas de crédito de bancos participantes: Afirme, Banbajio, Banca Mifel, Banco Ahorro Famsa, Banorte, Ixe, Banjercito, Banregio, HSBC, Inbursa, Invex Banco, Itaucard, Santander, Liverpool, Scotiabank, Banamex, BBVA, American Express.
    "disclaimer_iqos"
);


// "m_IMG_TXT_m",      // 
// "img_Cover_HTML",
// "p700",             // 
// "img",
// "spacer",
// "pframed",          // 
// "m_IMG_TXT_m",      // 
// "m_TXT_TXT_m",
// "p300", // f7f7f7   Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.    
// "rawHTML", // %%=ContentBlockbyKey("Onboarding_Conversion_Check")=%% 


// <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>
$a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";