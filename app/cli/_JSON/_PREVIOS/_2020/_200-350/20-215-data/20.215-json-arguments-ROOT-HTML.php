<?php

require_once("20.215-common.php");

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
    "greeting_dorado",
    "p300",             // 
    "pframed",
    "spacer",   


    "img",
    "spacer",
    "img",
    "spacer",
    "img",
    "spacer",
    "img",
    "spacer",
    "img",
    "spacer",

    "p300",             // 

    "img",
    "spacer",
    "img",


   // RGMSEPT20

    
    "spacer",   
    "sinfuego_sinhumo_sinceniza_dorado_HTML",
    "spacer",   
    "legal_extra",
    "disclaimer_iqos"    
);


/* 
    "img_Logo_Header_HTML",
    "img_Cover_HTML",
    "img",
    "spacer",
    "greeting_negro",
    "greeting_dorado",
    "p300",
    "p700",
    "rawHTML",
    "m_TXT_TXT_m",
    "m_TXT_IMG_m",
    "m_IMG_TXT_m",
    "m_IMG_IMG_m",
    "btn_sa_comprar_HTML",
    "cta1",
    "one_rs",
    "two_rs",
    "sinfuego_sinhumo_sinceniza_negro_HTML",
    "sinfuego_sinhumo_sinceniza_dorado_HTML",
    "legal_extra",
    "disclaimer_iqos",
    "pframed",
    "cols_33_33_33",
    "form",
    "mgm_coupon_1",
    "rgm_coupon_2cols",
    "cta_share_WA_coupon",
    "graylineframed",
    "shopping_list",
 */



/*
Si ya estás decidido, puedes realizar la compra de tu primer IQOS en iqos.com. Recuerda que tienes $400 pesos<sup>(1)</sup> de descuento:<br><br>Usa el código: 
--
Checa lo que la <span style=\"color: #e4ab68; font-weight: 700;\">omunidad IQOS</span> opina sobre su experiencia.
--

(1) Cupón redimible únicamente en la compra de tu primer Kit IQOS. Restringido a un cupón por usuario registrado. No es válido en la compra de unidades de tabaco para calentar ni en accesorios IQOS. Descuento válido únicamente para fumadores adultos, usuarios adultos IQOS o usuarios adultos de otros productos con nicotina. Vigencia del cupón hasta el 31 de octubre de 2020. Aplicable únicamente en compras realizadas con Asesores Comerciales IQOS, Tiendas IQOS participantes y compras realizadas en iqos.com. Sujeto a disponibilidad de inventario. Este cupón deberá ser canjeado en su totalidad en una sola exhibición. No es acumulable con otros códigos de descuento y no será canjeable por dinero en efectivo ni cualquier otra forma de pago. Consulta Términos y Condiciones en iqos.com<br><br>(2) En la compra mínima de $899.00 M.N (Ochocientos noventa y nueve pesos 00/100 M.N) que incluya un KIT IQOS (IQOS 2.4 Plus, IQOS 3 MULTI o IQOS 3 DUO) recibes 3 o 6 meses sin intereses al momento del pago y sobre el total de tu compra con tarjetas de crédito de bancos participantes. Bancos participantes: Afirme, Banbajio, Banca Mifel, Banco ahorro Famsa, Banorte, IXE, Banjercito, Barnregio, HSBC, Inbursa, Invex Banco, Itaucard, Santander, Liverpool, Sctotiabank, Banamex, BBVA, American Express. Válido a partir del 1º de agosto de 2020 al 31 de diciembre de 2020. Aplicable en tiendas participantes:<br>-IQOS Shops: https://www.iqos.com/mx/es/localizador-tiendas.html<br>-IQOS Corner Sanborns: https://www.iqos.com/mx/es/localizador-tiendas.html<br>-A través de Asesores Comerciales IQOS<br>-Compras realizadas en https://www.iqos.com/.<br><br>(3) El periodo de prueba del Programa de Préstamo IQOS es de hasta 15 días naturales a partir de la entrega del dispositivo. Al cabo de dicho período, el usuario puede optar por comprar el dispositivo o devolverlo. Sujeto a disponibilidad de inventario. Programa exclusivo para fumadores adultos en la Ciudad de México y área metropolitana. Consulta requisitos y <a href=\"https://www.iqos.com/mx/es/terminos-condiciones.html\" style=\"text-decoration:underline;\"  target=\"_blank\">Términos y Condiciones</a> del programa.
--





Consulta requisitos y <a href=\"https://www.iqos.com/mx/es/terminos-condiciones.html\" style=\"text-decoration:underline;\"  target=\"_blank\">Términos y Condiciones</a> del programa.

<br>
<br><br>
<sup>(1)</sup>
<sup>(2)</sup>
<sup>(3)</sup>
<sup>(4)</sup>
<span style=\"color: #e4ab68; font-weight: 700;\">IQOS EL RETO</span>
<span style=\"color: #e4ab68; font-weight: 700;\">IQOS EL RETO<sup>(1)</sup></span>
<span style=\"color: #e4ab68; font-weight: 700;\">KIT IQOS</span>
<span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>
<span style=\"color: #e4ab68; font-weight: 700;\">iqos.com</span>
<span style=\"color: #e4ab68; font-weight: 700;\">350&deg;C</span>
<span style=\"color: #e4ab68; font-weight: 700;\">¡$300 MXN de descuento!</span>
<span style=\"color: #e4ab68; font-weight: 700;\">$300 MXN de descuento</span>
<span style=\"color: #e4ab68; font-weight: 700;\">$300 MXN</span>
<span style=\"color: #e4ab68; font-weight: 700;\">HeatControl&trade; Technology</span>
<span style=\"color: #e4ab68; font-weight: 700;\">¿Aún no te has convencido?</span>
<span style=\"color: #e4ab68; font-weight: 700;\">¿Todavía lo estás pensando?</span>
<span style=\"color: #e4ab68; font-weight: 700;\">gratis</span>
<span style=\"color: #e4ab68; font-weight: 700;\">omunidad IQOS</span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>

*/