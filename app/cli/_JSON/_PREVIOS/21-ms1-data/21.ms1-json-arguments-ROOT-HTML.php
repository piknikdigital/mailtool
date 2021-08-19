<?php

require_once("21.ms1-common.php");

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
    "spacer",
    "img",
    "spacer",
    
    "m_TXT_TXT_m",

    "p700",
    "p300",

    "m_TXT_TXT_m",
    
    "spacer",
    "cta1",
    "spacer",

    "spacer",
    "m_IMG_IMG_m",
    "p300",
    "m_IMG_IMG_m",
    "spacer"

);


/* 
    "img",
    "spacer",
    "pframed",
    "cta1",
    "p300_BW",
    "p700_BW",
    "greeting_negro",
    "greeting_dorado",
    "footer_brand_world",
    "header_brand_world",

    "FSH_Yellow_Share",
    "FSH_Framed_Card",

    "p300",
    "p700",
    "img_Logo_Header_HTML",
    "img_Cover_HTML",
    "rawHTML",
    "m_TXT_TXT_m",
    "m_TXT_IMG_m",
    "m_IMG_TXT_m",
    "m_IMG_IMG_m",
    "btn_sa_comprar_HTML",
    "one_rs",
    "two_rs",
    "three_rs",
    "sinfuego_sinhumo_sinceniza_negro_HTML",
    "sinfuego_sinhumo_sinceniza_dorado_HTML",
    "legal_extra",
    "disclaimer_iqos",
    "cols_33_33_33",
    "form",
    "mgm_coupon_1",
    "mgm_coupon_2cols",
    "rgm_coupon_2cols",
    "cta_share_WA_coupon",
    "graylineframed",
    "shopping_list",
    "3cols_chat_fb_phone",

    CODIGO PARA CUPON X X X X X X X X :   %%=v(@voucher_code)=%% 
    "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
    "rawHTML", // %%=ContentBlockbyKey(&quot;Onboarding_Conversion_Check&quot;)=%% 
    $a= "p300|^|f7f7f7|@|Queremos que vivas la mejor experiencia <span style=\"color: #e4ab68; font-weight: 700;\">IQOS</span>, por esa razón te presentamos las medidas de seguridad que tendremos en todas nuestras <span style=\"color: #e4ab68; font-weight: 700;\">Tiendas IQOS</span>.";
*/


/*
BAD CHR : "", "	"
--------------------
--------------------
--------------------

--------------------
<span style=\"font-size:30px;\">JUNIO</span><br>19:00 H
--------------------
Conéctate el próximo<br>30 de junio de 2021<br>a las 19:00 h,<br>Hora Central CDMX.
--------------------
--------------------
1. Visión general de la familia Surface
2. Trabajadores de primera línea
    a. Surface Go 2
    b. Surface Pro 7+
2. Trabajadores de información
    a. Surface Laptop 4
    b. Surface Book 3
    c. Surface Pro X
4. Lugar de trabajo híbrido
    c. Surface Hub 2S
5. Accesorios
    a. Surface Mice
    b. Surface Pen
    c. Surface Dial
    d. Surface Dock 2
    e. Surface Adapters
    f. Microsoft USB-C Travel Hub
--------------------
<span style=\"color:#e25a30;\">1.</span> Visión general de la familia Surface<br><span style=\"color:#e25a30;\">2.</span> Trabajadores de primera línea<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">a.</span> Surface Go 2<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">b.</span> Surface Pro 7+<br><span style=\"color:#e25a30;\">3.</span> Trabajadores de información<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">a.</span> Surface Laptop 4<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">b.</span> Surface Book 3<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">c.</span> Surface Pro X<br><span style=\"color:#e25a30;\">4.</span> Lugar de trabajo híbrido<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">a.</span> Surface Hub 2S<br><span style=\"color:#e25a30;\">5.</span> Accesorios<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">a.</span> Surface Mice<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">b.</span> Surface Pen<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">c.</span> Surface Dial<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">d.</span> Surface Dock 2<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">e.</span> Surface Adapters<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">f.</span> Microsoft USB-C Travel Hub

<span style=\"color:#e25a30;\"></span>
--------------------
--------------------
--------------------
--------------------
--------------------
6. Seguridad y administración
   a. Firmware
   b. Gestión unificada
   c. Gestión desde la nube (DFCI)
   d. Bitlocker
   e. Windows Hello para empresas
   f. Surface Tools for Business
   g. Windows 10
      - Modo Seguro Virtual
      - Microsoft Defender ATP
      - Credential Guard
      - HVCI
      - Acceso Condicional
      - Windows Update for Enterprise
      - Intune Wipe and Retire
      - Windows Autopilot con Surface
   h. Windows 11 Preview
--------------------
--------------------
--------------------
--------------------
<span style=\"color:#e25a30;\">6.</span> Seguridad y administración<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">a.</span> Firmware<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">b.</span> Gestión unificada<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">c.</span> Gestión desde la nube (DFCI)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">d.</span> Bitlocker<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">e.</span> Windows Hello para empresas<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">f.</span> Surface Tools for Business<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">g.</span> Windows 10<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Modo Seguro Virtual<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Microsoft Defender ATP<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Credential Guard<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- HVCI<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Acceso Condicional<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Windows Update for Enterprise<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Intune Wipe and Retire<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Windows Autopilot con Surface<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:#e25a30;\">h.</span> Windows 11 Preview
--------------------
--------------------
--------------------
<span style=\"color:#e25a30;\"></span>
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
Copyright ©2021  Microsoft Corporation.
Cancelar suscripción  Declaración de privacidad
Microsoft Mexico, S. de R.L. de C.V.
Av. Vasco de Quiroga No. 1700 Piso 7, Centro Ciudad Santa Fe
Delegación Álvaro Obregón, Mexico D.F C.P. de 01210 Mexico
--------------------


Copyright ©2021  Microsoft Corporation.<br><a href=\"#LINK_UNSUBSCRIBE\" style=\"text-decoration:underline;\" target=\"_blank\">Cancelar suscripción</a>  &nbsp;&nbsp; <a href=\"#LINK_PRIVACY\" style=\"text-decoration:underline;\" target=\"_blank\">Declaración de privacidad</a><br>Microsoft Mexico, S. de R.L. de C.V.<br>Av. Vasco de Quiroga No. 1700 Piso 7, Centro Ciudad Santa Fe<br>Delegación Álvaro Obregón, Mexico D.F C.P. de 01210 Mexico

--------------------
<a href=\"#LINK_UNSUBSCRIBE\" style=\"text-decoration:underline;\" target=\"_blank\">Cancelar suscripción</a>
<a href=\"#LINK_PRIVACY\" style=\"text-decoration:underline;\" target=\"_blank\">Declaración de privacidad</a>
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
--------------------
COLOR AQUA Brand World
00d1d2
--------------------
--------------------
LEGAL FSH  - Brand World
&copy; 2021 %%Member_Busname%% Todos los derechos reservados.<br>%%Member_Addr%%,<br>%%Member_City%%, %%Member_PostalCode%%, %%Member_State%%, %%Member_Country%%<br><a href=\"%%unsub_center_url%%\"><span style=\"text-decoration:underline;color:blue;\">Darme de baja</span></a> | <a href=\"%%profile_center_url%%\"><span style=\"text-decoration:underline;color:blue;\">Actualizar perfil</span></a>
--------------------
--------------------
--------------------
<a href=\"LINK\" style=\"text-decoration:underline;\" target=\"_blank\">TEXTO</a>

<br>
<br><br>
<b></b>

<sup>(1)</sup>
<sup>(2)</sup>
<sup>(3)</sup>
<sup>(4)</sup>

<span style=\"font-size:12px;\"><sup>(1)</sup></span>
<span style=\"font-size:12px;\"><sup>(2)</sup></span>
<span style=\"font-size:12px;\"><sup>(3)</sup></span>
<span style=\"font-size:12px;\"><sup>(4)</sup></span>


<b>IQOS</b>
<b>Kit IQOS</b>
<b>Tiendas IQOS</b>
<b>IQOS 2.4 PLUS</b>
<b></b>
<b></b>
<b></b>

<span style=\"color:#00d1d2;font-weight:700;\">IQOS</span>
<span style=\"color:#00d1d2;font-weight:700;\">Kit IQOS</span>
<span style=\"color:#00d1d2;font-weight:700;\">Tiendas IQOS</span>
<span style=\"color:#00d1d2;font-weight:700;\">Experto IQOS</span>

<span style=\"color:#00d1d2;font-weight:700;\">IQOS EL RETO</span>
<span style=\"color:#00d1d2;font-weight:700;\">IQOS EL RETO<sup>(1)</sup></span>
<span style=\"color:#00d1d2;font-weight:700;\">KIT IQOS</span>
<span style=\"color:#00d1d2;font-weight:700;\">IQOS</span>
<span style=\"color:#00d1d2;font-weight:700;\">iqos.com</span>
<span style=\"color:#00d1d2;font-weight:700;\">350&deg;C</span>
<span style=\"color:#00d1d2;font-weight:700;\">¡$300 MXN de descuento!</span>
<span style=\"color:#00d1d2;font-weight:700;\">$300 MXN de descuento</span>
<span style=\"color:#00d1d2;font-weight:700;\">$300 MXN</span>
<span style=\"color:#00d1d2;font-weight:700;\">HeatControl&trade; Technology</span>
<span style=\"color:#00d1d2;font-weight:700;\">¿Aún no te has convencido?</span>
<span style=\"color:#00d1d2;font-weight:700;\">¿Todavía lo estás pensando?</span>
<span style=\"color:#00d1d2;font-weight:700;\">gratis</span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>


<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-weight:700;\"></span>

<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>

<span style=\"font-size:24px;font-weight:700;\"></span>
<span style=\"font-size:24px;font-weight:700;\"></span>
<span style=\"font-size:24px;font-weight:700;\">35% de descuento</span>
<span style=\"font-size:24px;font-weight:700;\">IQOS 2.4 PLUS</span>


*/