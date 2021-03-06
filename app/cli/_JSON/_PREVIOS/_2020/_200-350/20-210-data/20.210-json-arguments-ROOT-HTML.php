<?php

require_once("20.210-common.php");

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
    "spacer",
    "greeting_negro",
    "spacer",
    "img_Cover_HTML",
    "p300",             // Estamos listos para recibirte.<br><br>Nuestras tiendas <b>IQOS</b> te esperan con una amplia variedad de accesorios, unidades de tabaco para calentar y exclusivos servicios para ti y tu dispositivo.
    "img",              // 2 
    "p700",     // #1d8fcd   // ENCUÉNTRANOS MÁS CERCA DE TI.
    "img",              // 3
    "p700",     // #1d8fcd   // ¡TE ESPERAMOS!
    "p300",             // También puedes visitarnos en las siguientes ubicaciones:
    "m_IMG_IMG_m",      // ANTARA - SANTA FE
    "m_TXT_TXT_m",      // Av. Ejército Nacional 843, Granada, Miguel Hidalgo, 11520, Ciudad de México, CDMX
                        // Vasco de Quiroga 3800, Lomas de Santa Fe, Contadero, 05348, Ciudad de México, CDMX
    "spacer",
    "m_IMG_IMG_m",      // SATELITE - PERISUR
    "m_TXT_TXT_m",      // Circuito Centro Comercial 2251, Cd. Satélite, 53100 Naucalpan de Juárez, Edo. Méx    
                        // Anillo Periférico 4690, Insurgentes Cuicuilco, Coyoacán, 04500 Ciudad de México, CDMX

    "p300",             // Recuerda que también puedes encontrar <b>IQOS</b> en <b>tiendas Sanborns seleccionadas</b> y a través de <b>iqos.com </b>

    "cta1",             // btn-sa-localizar-tienda.png  // https://www.iqos.com/mx/es/tiendas.html

    
    "spacer",   
    "img",              // sinfuego_sinhumo_sinceniza_azul2
    "spacer",   
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
    "cta_share_WA_coupon",
    "graylineframed",
    "shopping_list",
 */

// CODIGO PARA CUPON XXXXXXXX :   %%=v(@voucher_code)=%% 
// "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
// "rawHTML", // %%=ContentBlockbyKey(&quot;Onboarding_Conversion_Check&quot;)=%% 
// "p300",    // f7f7f7   Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.    
// <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>
// $a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";