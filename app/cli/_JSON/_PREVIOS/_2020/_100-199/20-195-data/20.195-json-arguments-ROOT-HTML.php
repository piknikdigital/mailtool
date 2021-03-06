<?php

require_once("20.195-common.php");

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
    "p300",             // ¿Te has <span style=\"color: #e4ab68; font-weight: 700;\">perdido</span> momentos por fumar?<br><br>¿Amistades han mantenido distancia por el <span style=\"color: #e4ab68; font-weight: 700;\">humo de cigarro</span>?<br><br>¿Ya te cansaste de limpiar la <span style=\"color: #e4ab68; font-weight: 700;\">ceniza</span> de cigarro?<br><br>        Si respondiste, sí, a una o más de estas preguntas, tal vez es momento de cambiarte a <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>.<br><br><span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span> disminuye las molestias ocasionadas por el humo de cigarro.
    "img",              // 2 
    "spacer",
    "pframed",  // Cambia a <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span> y forma parte de los más de <span style=\"color: #e4ab68; font-weight: 700;\">10 millones de usuarios<sup>(1)</sup></span> que ya usan esta alternativa.<br><br>Usa el siguiente código<sup>(2)</sup> para obtener <span style=\"color: #e4ab68; font-weight: 700;\">$300 MXN de descuento</span> en la compra de tu primer <span style=\"color: #e4ab68; font-weight: 700;\">kit IQOS</span>.
    "spacer",
    "pframed",  // %%=v(@voucher_code)=%%
    "spacer",
    "cta1",   // btn-sa-comprar-ahora.png  // https://www.iqos.com/mx/es/descubre/comprar-dispositivos.html
    "spacer",
    "pframed",  // <span style=\"color: #e4ab68; font-weight: 700;\">¿Aún no te has convencido?</span><br><br>Solicita una prueba y únete a <span style=\"color: #e4ab68; font-weight: 700;\">Solicita una prueba y únete a  IQOS EL RETO<sup>(3)</sup></span>.<br><br>Podrás probar uno de nuestros dispositivostotalmente <span style=\"color: #e4ab68; font-weight: 700;\">gratis</span> durante 15 días.
    "spacer",
    "cta1",   // btn-sa-unete-a-iqos-el-reto.png  // https://www.probar-iqos.com/
    "spacer",
    "sinfuego_sinhumo_sinceniza_dorado_HTML",
    "spacer",           
    "legal_extra",   // (1) Fuente: Datos financieros de PMI y estimaciones internas, paneles de usuarios IQOS y Estudios de Mercado de PMI. Información actualizada a marzo de 2020. Usuarios IQOS que han dejado completamente los cigarros y para quienes las unidades de tabaco para calentar de PMI representan, cuando menos, un 70% de su consumo de tabaco calentado en los últimos 7 días.<br><br>(2) Cupón redimible únicamente en la compra de tu primer Kit IQOS. Restringido a un cupón por usuario registrado. No es válido en la compra de unidades de tabaco para calentar ni en accesorios IQOS. Descuento válido únicamente para fumadores adultos, usuarios adultos IQOS o usuarios adultos de otros productos con nicotina. Vigencia del cupón hasta el 31 de octubre de 2020. Aplicable únicamente en compras realizadas con Asesores Comerciales IQOS, Tiendas IQOS participantes y compras realizadas en iqos.com. Sujeto a disponibilidad de inventario. Este cupón deberá ser canjeado en su totalidad en una sola exhibición. No es acumulable con otros códigos de descuento y no será canjeable por dinero en efectivo ni cualquier otra forma de pago.<br><br>(3) El periodo de prueba del Programa de Préstamo IQOS es de hasta 15 días naturales a partir de la entrega del dispositivo. Al cabo de dicho período, el usuario puede optar por comprar el dispositivo o devolverlo. Sujeto a disponibilidad de inventario. Programa exclusivo para fumadores adultos en la Ciudad de México y área metropolitana. Consulta requisitos y Términos y Condiciones del programa.
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