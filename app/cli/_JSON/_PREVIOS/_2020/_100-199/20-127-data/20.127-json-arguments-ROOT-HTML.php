<?php

require_once("20.127-common.php");

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
    "p700",             // Ahora es momento de disfrutar de las recompensas. 
    "p300",             // En cumplimiento de las reglas de distanciamiento social, nuestras tiendas <b>IQOS</b> se encuentran cerradas, pero no te preocupes, para redimir estos $300 MXN<sup>(1)</sup> un Experto IQOS te entregará el producto que selecciones personalmente.<br><br>El Experto IQOS portará tapabocas y guantes. Ten a la mano el siguiente cupón para poder canjearlo.
    "mgm_coupon_1",    
    "p300",             // Llámanos para agendar tu cita.
    "cta1",             // btn-sa-redimir-codigo.png       tel:8001476769
    "spacer",           
    "legal_extra",      // (1) Recompensa no canjeable por dinero en efectivo y redimible en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y/o a través de un Experto IQOS. Aplican restricciones. No canjeable por productos de tabaco. Limitado a los primeros 5 amigos referidos que compren y registren su primer kit IQOS con tu código único. Si el valor de el/los productos es mayor al monto de la recompensa, el usuario deberá cubrir la diferencia.

    "disclaimer_iqos"
    
);


// "img",              // 
// "p300",             // 
// "cta1",             // 
// "sinfuego_sinhumo_sinceniza_dorado_HTML",
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