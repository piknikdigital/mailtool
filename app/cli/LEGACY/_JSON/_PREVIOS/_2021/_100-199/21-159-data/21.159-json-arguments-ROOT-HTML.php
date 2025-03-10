<?php

require_once("21.159-common.php");

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
    "spacer",
    "spacer",
    "greeting_negro",
    "spacer",


    "p300_BW",      /* TXT opc1 */
    "p300_BW",      /* TXT opc2 */ 

    "pframed",      /* Fecha de pedido */
    "pframed",      /* Lista de artículos */

    "m_IMG_TXT_m",  /* columnas con thumbnail, info de producto y precio*/


    "m_TXT_TXT_m",      /* Descuento:   */
    "m_TXT_TXT_m",      /* IVA:         */
    "m_TXT_TXT_m",      /* Costo de Envío:*/
    "m_TXT_TXT_m",      /* Total:       */
    "m_TXT_TXT_m",      /* Pago:        */
    
    "spacer",   

    "m_TXT_TXT_m",      /*  titulos   */
    "m_TXT_TXT_m",      /*  Direcciones, # pedido  */

    "spacer",


    "p700_BW",          /* Saludos */
    "p700_BW",          /* Equipo IQOS */
    
    "p300_BW",          /* TXT */ 
    
    "disclaimer_iqos",
    "footer_brand_world"
);


/*


    Hola, %%=v(@customer_name)=%%


    Fecha de Pedido: 
    %%=properCase(FormatDate(@date,"l","","es-MX"))=%% 

    Lista de artículos

    IMG                                                    Lista de articulos                                
    +------------------------------------------------------+-----------------------------------------------------+---------------------------------------------------------------+
    | <img style="padding: 0 10px 0 0;mso-hide:all;        |<b>%%=v(@prod_product_name)=%%</b>                   |<b>$%%=Multiply(@prod_basePrice_value,@prod_quantity)=%%</b>   |
    |             width: 40px;"                            |Listas de artículos:                                 |                                                               |
    |     src="%%=v(@prod_imageUrl)=%%"                    |%%=v(@prod_product_code)=%%                          |                                                               |
    |     alt="" class="" border="0" align="left">         |Qty: %%=v(@prod_quantity)=%%                         |                                                               |
    +------------------------------------------------------+---------------------------------------------------------------------------------------------------------------------+

    Descuento:
    @totalDiscount_formattedValue

    IVA:
    @totalTax_formattedValue

    Costo de Envío:
    @deliveryMode_deliveryCost_formattedValue

    Total:
    @totalPriceWithTax_formattedValue

    Pago:
    @totalPriceWithTax_formattedValue

        set @sumTable = CONCAT(@sumTable, @sumTableBegin, 'IVA:',  @totalTax_formattedValue )
        set @sumTable = CONCAT(@sumTable, @sumTableBegin, 'Envío:',  @deliveryMode_deliveryCost_formattedValue )
        set @sumTable = CONCAT(@sumTable, @sumTableBegin, '<b>Total:</b>',  '<b>', @totalPriceWithTax_formattedValue, '</b>', Row)
        set @sumTable = CONCAT(@sumTable, @sumTableBegin, 'Pago:',  @totalPriceWithTax_formattedValue )
        set @sumTable = CONCAT(@sumTable, '</table>')


    Dirección de Envío
        %%=v(@deliveryAddress_line1)=%%
        %%=v(@deliveryAddress_line2)=%%
        %%=v(@deliveryAddress_postalCode)=%% %%=v(@deliveryAddress_town)=%%
        %%=v(@deliveryAddress_country_name)=%%


        %%=v(@deliveryAddress_line1)=%%<br>%%=v(@deliveryAddress_line2)=%%<br>%%=v(@deliveryAddress_postalCode)=%% %%=v(@deliveryAddress_town)=%%<br>%%=v(@deliveryAddress_country_name)=%%





    Dirección de Facturación
        %%=v(@billingAddress_line1)=%%
        %%=v(@billingAddress_line2)=%%
        %%=v(@billingAddress_postalCode)=%% %%=v(@billingAddress_town)=%% 
        %%=v(@billingAddress_country_name)=%%


    %%=v(@billingAddress_line1)=%%<br>%%=v(@billingAddress_line2)=%%<br>%%=v(@billingAddress_postalCode)=%% %%=v(@billingAddress_town)=%% <br>%%=v(@billingAddress_country_name)=%%



    Número de pedido
        <a href=\"%%=RedirectTo(@myAccount)=%%\" style=\"font-size:14px;font-weight:700;font-style:normal;font-stretch:normal;\">%%=v(@code)=%%</a>



 */


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
Encuentra los detalles de tu compra a través de <b>iqos.com</b> a continuación.
--------------------
<b>¡Buenas noticias!</b> Tu orden ha sido recibida por nuestro equipo. Nuestros repartidores entregarán personalmente tu dispositivo en breve, recuerda tener a la mano tu identificación oficial.
--------------------
--------------------
--------------------
--------------------
Fecha de pedido: 
Lista de artículos:
Producto:
Subtotal:
Descuento:
IVA:
Costo de envío:
Total:
Pago:
--------------------
Dirección de Envío
Dirección de Facturación
Número de pedido
--------------------
Saludos 
Equipo IQOS
--------------------
--------------------
--------------------
<b>Las promociones y los descuentos son aplicables a dispositivos y/o accesorios, no a productos de tabaco.</b><br><br>Para facturación electrónica, solicitarla máximo 72 horas posterior a tu compra al correo: <br><b><a href=\"mailto:FacturacionElectronica.IQOS@pmi.com?Subject=Solicitud%20de%20factura"\"><span style=\"text-decoration:underline;\">FacturacionElectronica.IQOS@pmi.com</span></a></b><br><br>Conserve su ticket para devoluciones, reemplazos y para hacer válida la garantía.
--------------------
--------------------
--------------------
--------------------
--------------------
<a href=\"mailto:FacturacionElectronica.IQOS@pmi.com?Subject=Solicitud%20de%20factura"\"><span style=\"text-decoration:underline;\">FacturacionElectronica.IQOS@pmi.com</span></a>
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


*/