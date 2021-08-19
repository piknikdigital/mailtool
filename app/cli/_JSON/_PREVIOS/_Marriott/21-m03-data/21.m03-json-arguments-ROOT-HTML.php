<?php

require_once("21.m03-common.php");

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
    "img",
    "img",
    "img",
    "img",
    "img",
    "img",
    "img",
    "img",
    "img",
    "img",
    "img",
    "img",
    "img",
    "p700",
    "p300",
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
https://www.marriott.com/hotels/hotel-information/fitness-spa-services/pvrde-delta-hotels-riviera-nayarit-an-all-inclusive-resort/
--------------------
https://www.marriott.com/hotels/hotel-information/fitness-spa-services/pvrde-delta-hotels-riviera-nayarit-an-all-inclusive-resort/
--------------------
https://www.marriott.com/hotels/travel/pvrde-delta-hotels-riviera-nayarit-an-all-inclusive-resort/

--------------------
--------------------
--------------------
--------------------
--------------------


UNSUBSCRIBE   *   TERMS OF USE   *   PREFERENCES
PRIVACY POLICY   *   FIND HOTEL

Web View

©2021 Marriott International, Inc. <br><br>To unsubscribe: Select Hotel & Destination specials on our unsubscribe page. If you unsubscribe from Marriott promotional emails like this, we will continue to send only transactional messages such as reservation confirmation emails. <br><br>You can also unsubscribe by writing to: <br>Internet Customer Care - Unsubscribe<br>1818 North 90 Street Omaha, Nebraska 68114-1315 USA



--------------------
<a href=\"https://www.marriott.co.uk/profile/email/unsubscribe.mi?\" style=\"text-decoration:none;color:black;\" target=\"_blank\">UNSUBSCRIBE</a> * <a href=\"https://www.marriott.co.uk/about/terms-of-use.mi\" style=\"text-decoration:none;color:black;\" target=\"_blank\">TERMS OF USE</a> * <a href=\"https://www.marriott.co.uk/sign-in.mi?returnTo=%2Floyalty%2FmyAccount%2FeditEmailPreferences.mi\" style=\"text-decoration:none;color:black;\" target=\"_blank\">PREFERENCES</a><br><a href=\"https://www.marriott.co.uk/about/privacy.mi\" style=\"text-decoration:none;color:black;\" target=\"_blank\">PRIVACY POLICY</a> * <a href=\"https://www.marriott.co.uk/search/default.mi\" style=\"text-decoration:none;color:black;\" target=\"_blank\">FIND HOTEL</a>
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

https://www.marriott.com/hotels/hotel-information/fitness-spa-services/pvrde-delta-hotels-riviera-nayarit-an-all-inclusive-resort/
https://www.marriott.com/hotels/travel/pvrde-delta-hotels-riviera-nayarit-an-all-inclusive-resort/

https://www.marriott.co.uk/profile/email/unsubscribe.mi?nck=PAMELA.CHARRO@MARRIOTT.COM_SEED&ck=49786350&lk=1000480989
https://www.marriott.co.uk/about/terms-of-use.mi?nck=PAMELA.CHARRO@MARRIOTT.COM_SEED&ck=49786350&lk=1000480990
https://www.marriott.co.uk/sign-in.mi?returnTo=%2Floyalty%2FmyAccount%2FeditEmailPreferences.mi%3Fnck%3DPAMELA.CHARRO%40MARRIOTT.COM_SEED%26ck%3D49786350%26lk%3D1000480991
https://www.marriott.co.uk/about/privacy.mi?nck=PAMELA.CHARRO@MARRIOTT.COM_SEED&ck=49786350&lk=1000480992
https://www.marriott.co.uk/search/default.mi?nck=PAMELA.CHARRO@MARRIOTT.COM_SEED&ck=49786350&lk=1000480993




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
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-weight: 700;\"></span>

<span style=\"color: #e4ab68; font-size:24px; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-size:24px; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-size:24px; font-weight: 700;\"></span>
<span style=\"color: #e4ab68; font-size:24px; font-weight: 700;\"></span>

<span style=\"font-size:24px; font-weight: 700;\"></span>
<span style=\"font-size:24px; font-weight: 700;\"></span>
<span style=\"font-size:24px; font-weight: 700;\">35% de descuento</span>
<span style=\"font-size:24px; font-weight: 700;\">IQOS 2.4 PLUS</span>


*/