<?php

require_once("21.175-common.php");

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
    "header_brand_world",
    "img",
    "greeting_v2",
    "p300_BW",

    "columns",
    "columns",
    "pframed",
    "img",
    "columns",
    "columns",

    "columns",

    "p700_BW",

    "legal_extra",
    "disclaimer_iqos",
    "footer_brand_world"
);


/* 
    "img",
    "spacer",
    "pframed",
    "cta1",
    "p300_BW",
    "p700_BW",
    "greeting_v2",
    "columns",
    "cta1_v2",

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
Compartir los beneficios de IQOS con tus amigos fumadores es muy sencillo.<br><br>Invítalos a formar parte de la comunidad que ya optó por una mejor alternativa al consumo de tabaco y ambos podrán recibir grandes beneficios.
--------------------
Ahora regala 
--------------------
20% de descuento 
--------------------
a tus amigos fumadores en la compra de su primer Kit IQOS.
--------------------
IQOS 3 DUO
--------------------
Precio nuevo
$1,399 MXN
--------------------
Precio con 20%<br>de descuento
--------------------
$1,119 MXN
--------------------
Comparte tu código único.
--------------------
Por cada amigo que utilice tu código y<br>registre su Kit IQOS en iqos.com, tu recibirás<br><span style=\"font-size:20px;font-weight:700;\">$300 MXN en beneficios<span style=\"font-size:12px;\"><sup>(3)</sup></span>.</span>
--------------------
Te recomendamos hacerlo desde tu celular.
--------------------
#ElijoIQOS
--------------------
(1) Solo para fumadores adultos.<br>(2) Consulta Términos y Condiciones. Válido en la compra y registro del primer dispositivo (IQOS Holder + Cargador IQOS) de cada amigo referido. Para obtener su descuento, el amigo referido debe registrarse y registrar su dispositivo en iqos.com, y hacerlo válido en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y iqos.com. Descuento no válido en productos de tabaco.<br>(3) Recompensa no canjeable por dinero en efectivo y redimible en Tiendas IQOS, IQOS Corners en Sanborns seleccionados y iqos.com. No canjeable por productos de tabaco. Limitado a los primeros 5 amigos referidos que compren y registren su primer dispositivo con tu código único.
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
<span style=\"color:#00d1d2;font-weight:700;\"></span>

<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>
<span style=\"color:#00d1d2;font-size:24px;font-weight:700;\"></span>

<span style=\"font-size:24px;font-weight:700;\"></span>
<span style=\"font-size:24px;font-weight:700;\"></span>
<span style=\"font-size:24px;font-weight:700;\">35% de descuento</span>
<span style=\"font-size:24px;font-weight:700;\">IQOS 2.4 PLUS</span>




        {
            "type"              : "columns_____",
            "font"              : "Cabin",
            "margin_sides"      : "0",
            "margin_top"        : "0",
            "margin_bottom"     : "0",
            "color_bkg"         : "transparent",
            "THIS"              : "MOMENTO 1/4",
            "columns"           :
            [
                {
                    "coltype"       : "img",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "40",
                    "imgwidth"      : "240",
                    "mtop"          : "0",
                    "img"           : "21.167-pic1.jpg",
                    "imgulr"        : "#",
                    "THISIMG"       : "IMG 21.167-pic1"
                },
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "5",
                    "mtop"          : "0"
                },
                {
                    "coltype"       : "multirows",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "50",
                    "rows"          :
                    [
                        {
                            "rowtype"       : "p",
                            "p"             : "Sonreír más sin manchas<br>amarillas en tus dientes*.",
                            "color_bkg"     : "transparent",
                            "p_fontweight"  : "300",
                            "p_fontsize"    : "18px",
                            "p_height"      : "22px",
                            "p_align"       : "left",
                            "p_color"       : "#333333",
                            "margin_top"    : "20",
                            "margin_bottom" : "5"
                        },
                        {
                            "rowtype"       : "spacer",
                            "height"        : "20px",
                            "color_bkg"     : "transparent"
                        },
                        {                            
                            "rowtype"       : "pframed",
                            "color_bkg"     : "transparent",
                            "p"             : "<b>Información importante:</b> si los dientes ya están manchados, cambiar a IQOS no revertirá el color de esas manchas.",
                            "fontweight"    : "300",
                            "fontsize"      : "9",
                            "lineheight"    : "11",
                            "align"         : "left",
                            "width"         : "100%",
                            "margin_top"    : "5",
                            "margin_bottom" : "5",

                            "color"         : "#000000",                            
                            "framecolor"    : "#000000",
                            "framebgcolor"  : "transparent",
                            "framepadding"  : "5",
                            "border"        : "1",
                            
                            "this"          : ""
                        },
                        {
                            "rowtype"        : "img",
                            "img"            : "21.167-2.png",
                            "color_bkg"      : "transparent",
                            "margin_top"     : "10",
                            "margin_bottom"  : "10",
                            "imgWidth"       : "100",
                            "align"          : "left",
                            "imgulr"         : "#",
                            "THISIMG"        : "21.175-x"
                        }
                    ]
                },
                {
                    "coltype"       : "spacer",
                    "color_bkg"     : "transparent",
                    "widthp100"     : "5",
                    "mtop"          : "0"
                }
            ]
        },


*/