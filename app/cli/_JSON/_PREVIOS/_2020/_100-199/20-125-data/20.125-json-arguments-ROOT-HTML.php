<?php

require_once("20.125-common.php");

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
    "p300",             // Si no has redimido tu recompensa, un Experto <b>IQOS</b> te entregará el producto que selecciones personalmente. El Experto <b>IQOS</b> portará tapabocas y guantes. Ten a la mano tu cupón para poder canjearlo.
    "p300",             // Llámanos para agendar tu cita.
    "cta1",             // redimir-codigo       tel:8001476769
    "p300",             // Aquí te mostramos algunas opciones en las que puedes hacer válida tu recompensa.
    "shopping_list",    // mgm-iqos-multi-item-1.jpg  
                        // FUNDA DE SILICON<br>IQOS 3 MULTI MARINO 
                        // $169
    "spacer",           
    "shopping_list",    // mgm-iqos-multi-item-2.jpg  
                        // DEPÓSITO CON<br>CLIP IQOS ÁMBAR
                        // $139
    "spacer",           
    "shopping_list",    // mgm-iqos-multi-item-3.jpg  
                        // FUNDA DE SILICON<br>IQOS 3 MULTI PÚRPURA
                        // $169
    "spacer",           
    "shopping_list",    // mgm-iqos-multi-item-4.jpg  
                        // TAPA IQOS 3 MULTI ROSA
                        // $289
    "spacer",           
    "m_IMG_TXT_m",      // plus.png
                        // Conoce nuestra gama de colores en <b>iqos.com</b>
    "spacer",
    "legal_extra",      // (1) Recompensa no canjeable por dinero en efectivo y redimible en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y/o a través de un Experto IQOS. Aplican restricciones. No canjeable por productos de tabaco. Limitado a los primeros 5 amigos referidos que compren y registren su primer kit IQOS con tu código único. Si el valor de el/los productos es mayor al monto de la recompensa, el usuario deberá cubrir la diferencia.
    "disclaimer_iqos"

);


// "sinfuego_sinhumo_sinceniza_dorado_HTML",
// "spacer",
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
// $a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";