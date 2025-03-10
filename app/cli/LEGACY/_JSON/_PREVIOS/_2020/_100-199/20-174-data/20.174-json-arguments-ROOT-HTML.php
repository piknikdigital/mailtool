<?php

require_once("20.174-common.php");

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
    "p300",             // ¡Gracias por registrarte en IQOS!
    "p300",             // En breve uno de nuestros agentes expertos IQOS se pondrá en contacto contigo para que empieces tu experiencia con IQOS.<br><br>Si ya estás listo para empezar el cambio, tenemos algo para ti.<br><br>Adquiere tu primer <span style=\"color: #e4ab68; font-weight: 700;\">Kit IQOS</span> con el siguiente código* y recibirás <span style=\"color: #e4ab68; font-weight: 700;\">$150 MXN de descuento</span> en tu compra.
    "img",              // 2
    "spacer",
    "pframed",          // XXXXXXXX
    "spacer",
    "cta1",             // btn-sa-comprar-ahora.png  // https://www.iqos.com/mx/es/descubre/comprar-dispositivos.html
    "spacer",
    "sinfuego_sinhumo_sinceniza_dorado_HTML",
    "spacer",
    "legal_extra",      // *Cupón válido para la compra de tu primer Kit IQOS (IQOS 2.4 PLUS, IQOS 3 Multi o IQOS 3 DUO). No válido en la compra de unidades de tabaco para calentar ni accesorios IQOS. Válido únicamente para nuevos usuarios, fumadores adultos. Restringido a un cupón por usuario registrado. Válido para compras hasta el 30 de agosto del 2020. Aplicable en compras realizadas en tiendas IQOS participantes, compras realizadas en iqos.com y/o compras realizadas con Asesores Comerciales IQOS. Sujeto a disponibilidad de inventario. Este cupón deberá ser canjeado en su totalidad en una sola exhibición. No es transferible ni acumulable con otras promociones y no será canjeable por dinero en efectivo ni cualquier otra forma de pago. Comunicación dirigida exclusivamente para fumadores adultos.
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

// "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
// "rawHTML", // %%=ContentBlockbyKey(&quot;Onboarding_Conversion_Check&quot;)=%% 
// "p300",    // f7f7f7   Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.    
// <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>
// $a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";