<?php


/*

https://www.iqos.com/mx/es/localizador-tiendas.html?utm_source=crm&utm_medium=email&utm_campaign=Footer
https://www.iqos.com/mx/es/descubre/devices.html?utm_source=crm&utm_medium=email&utm_campaign=Footer

*/ 

$footer_blocks = array();

$footer_blocks['DCE'] ='
    "logo" : 
    {
        "img"           :   "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/d45cd45e-9c4a-4dda-a941-2ad5b85a8051.png",
        "imgFSH"        :   "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/379e2111-ed83-43fe-88ec-0a7a46307c53.png",
        "imgDCE"        :   "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/d45cd45e-9c4a-4dda-a941-2ad5b85a8051.png",
        "imgHTML"       :   "logo-iqos.png",
        "width"         :   "85"
    },
    "footer" : 
    {
        "type"          :   "amazing_v1",
        "use_notes"     :   "README: empty value of optout_url hides optout link.",

        "showFooterIcons" : "1",

        "optout_title"  :   "Si deseas darte de baja o dejar de recibir nuestras comunicaciones, click en:",
        "optout_txt"    :   "Darme de baja",
        "optout_url"    :   "https://www.iqos.com/mx/es/preference-center.html?data=sDm1jmlDBx8hegPLF8R%2fyCqu1tRRL2yfnvTUZajduvA%3d&key=79d6bb837848a629&mode=form&Tracking_Parameter=%%__AdditionalEmailAttribute1%%",
        "optout_urlDCE" :   "https://www.iqos.com/mx/es/preference-center.html?data=sDm1jmlDBx8hegPLF8R%2fyCqu1tRRL2yfnvTUZajduvA%3d&key=79d6bb837848a629&mode=form&Tracking_Parameter=%%__AdditionalEmailAttribute1%%",
        "optout_urlFSH" :   "%%unsub_center_url%%",
        "optout_urlNONE":   "",
        "color_lnk"     :   "#333333",
        "color_txt"     :   "#a5a5a5",
        "color_bkg"     :   "#f7f7f7",

        "profile_title2":   "o bien: ",
        "profile_title" :   "",
        "profile_txt"   :   "Actualizar perfil",
        "profile_url"   :   "%%profile_center_url%%",

        "hideActPerf"   :   "1",
        "legal"         :   "&copy; 2021 Philip Morris Products S.A.<br>Todos los derechos reservados.<br>Lago Zurich No. 245, Edificio Presa Falcón, Tercer Piso, Ampliación Granada, Miguel Hidalgo, 11529, CDMX, México.",
        "legalDCEHTML"  :   "&copy; 2021 Philip Morris Products S.A.<br>Todos los derechos reservados.<br>Lago Zurich No. 245, Edificio Presa Falcón, Tercer Piso, Ampliación Granada, Miguel Hidalgo, 11529, CDMX, México.",
        "legalFSH"      :   "&copy; 2021 %%Member_Busname%%<br>Todos los derechos reservados.<br>%%Member_Addr%%, %%Member_City%%, %%Member_State%%, %%Member_PostalCode%%, %%Member_Country%%",
        "this"          :   ""
    },
    "footericons" :
    [
        {
            "url"       : "https://www.iqos.com/mx/es/descubre/devices.html",
            "img"       : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/79d1ca5f-2afe-45fa-97ce-b38c15d2b906.png",
            "imgHTML"   : "footer-ico-cart.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/cbeff2e9-4aba-40af-8353-d8b0080d09ab.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/79d1ca5f-2afe-45fa-97ce-b38c15d2b906.png",
            "txt"       : "compra en línea",
            "name"      : "Carrito"
        },
        {
            "url"       : "https://www.iqos.com/mx/es/localizador-tiendas.html",
            "img"       : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/fafbb1a8-d42b-42ea-b2c4-649ec73e7b67.png",
            "imgHTML"   : "footer-ico-locator.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/be1acae3-c32d-4938-927e-a1afcca9b6ed.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/fafbb1a8-d42b-42ea-b2c4-649ec73e7b67.png",
            "txt"       : "localiza una tienda",
            "name"      : "Localización"
        },
        {
            "url"       : "mailto:contact.mx@iqos.com",
            "img"       : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/02d62fa8-4662-46b3-a60d-ed0ee8f52b1e.png",
            "imgHTML"   : "footer-ico-mail.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/06428bc4-9388-41df-bd2c-c2a44d5ace99.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/02d62fa8-4662-46b3-a60d-ed0ee8f52b1e.png",
            "txt"       : "email",
            "name"      : "Correo"
        },
        {
            "url"       : "tel:8001476769",
            "img"       : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/44a52512-e8f0-48bf-b3ea-4a2e8cabc017.png",
            "imgHTML"   : "footer-ico-phone.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/cac1047b-f9e7-49d0-a580-1979a8617c91.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/44a52512-e8f0-48bf-b3ea-4a2e8cabc017.png",
            "txt"       : "llámanos",
            "name"      : "Teléfono"
        }
    ],
    "social" :  
    [
        {
            "url"       : "https://www.facebook.com/iqosmx/",
            "img"       : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/eb855f80-66e5-4f83-8fa7-16e114db63f5.png",
            "imgHTML"   : "ico-facebook.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/eb855f80-66e5-4f83-8fa7-16e114db63f5.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/e5d8d9fb-bbdf-4848-ba5a-f74b76efe528.png",
            "name"      : "facebook"
        },
        {
            "url"       : "https://www.youtube.com/channel/UCQ0NR6SLSmgfrV5TicZXqaA",
            "img"       : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/1c99003f-d4d1-42bb-9471-6dd8b3188349.png",
            "imgHTML"   : "ico-youtube.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/1c99003f-d4d1-42bb-9471-6dd8b3188349.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/9cfc918d-42ca-46be-9b13-90ef0e889e77.png",
            "name"      : "youtube"
        },
        {
            "url"       : "https://www.instagram.com/iqos_mx/",
            "img"       : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/ce1f5bfa-6237-4826-8bbf-36318a18a6dc.png",
            "imgHTML"   : "ico-instagram.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/ce1f5bfa-6237-4826-8bbf-36318a18a6dc.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/d037097f-fd8b-42a6-a3dd-563c9048e773.png",
            "name"      : "instagram"
        }
    ],';


$footer_blocks['FSH'] ='
    "logo" : 
    {
        "img"           :   "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/379e2111-ed83-43fe-88ec-0a7a46307c53.png",
        "imgFSH"        :   "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/379e2111-ed83-43fe-88ec-0a7a46307c53.png",
        "imgDCE"        :   "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/d45cd45e-9c4a-4dda-a941-2ad5b85a8051.png",
        "imgHTML"       :   "logo-iqos.png",
        "width"         :   "85"
    },
    "footer" : 
    {
        "type"          :   "amazing_v1",
        "use_notes"     :   "README: empty value of optout_url hides optout link.",

        "showFooterIcons" : "1",

        "optout_title"  :   "Si deseas darte de baja o dejar de recibir nuestras comunicaciones, click en:",
        "optout_txt"    :   "Darme de baja",
        "optout_url"    :   "%%unsub_center_url%%",
        "optout_urlDCE" :   "https://www.iqos.com/mx/es/preference-center.html?data=sDm1jmlDBx8hegPLF8R%2fyCqu1tRRL2yfnvTUZajduvA%3d&key=79d6bb837848a629&mode=form&Tracking_Parameter=%%__AdditionalEmailAttribute1%%",
        "optout_urlFSH" :   "%%unsub_center_url%%",
        "optout_urlNONE":   "",
        "color_lnk"     :   "#333333",
        "color_txt"     :   "#a5a5a5",
        "color_bkg"     :   "#f7f7f7",

        "profile_title2":   "o bien: ",
        "profile_title" :   "",
        "profile_txt"   :   "Actualizar perfil",
        "profile_url"   :   "%%profile_center_url%%",

        "hideActPerf"   :   "0",
        "legal"         :   "&copy; 2021 %%Member_Busname%%<br>Todos los derechos reservados.<br>%%Member_Addr%%, %%Member_City%%, %%Member_State%%, %%Member_PostalCode%%, %%Member_Country%%",
        "legalDCEHTML"  :   "&copy; 2021 Philip Morris Products S.A.<br>Todos los derechos reservados.<br>Lago Zurich No. 245, Edificio Presa Falcón, Tercer Piso, Ampliación Granada, Miguel Hidalgo, 11529, CDMX, México.",
        "legalFSH"      :   "&copy; 2021 %%Member_Busname%%<br>Todos los derechos reservados.<br>%%Member_Addr%%, %%Member_City%%, %%Member_State%%, %%Member_PostalCode%%, %%Member_Country%%",
        "this"          :   ""
    },
    "footericons" :
    [
        {
            "url"       : "https://www.iqos.com/mx/es/descubre/devices.html?utm_source=crm&utm_medium=email&utm_campaign=Footer",
            "img"       : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/cbeff2e9-4aba-40af-8353-d8b0080d09ab.png",
            "imgHTML"   : "footer-ico-cart.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/cbeff2e9-4aba-40af-8353-d8b0080d09ab.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/79d1ca5f-2afe-45fa-97ce-b38c15d2b906.png",
            "txt"       : "compra en línea",
            "name"      : "Carrito"
        },
        {
            "url"       : "https://www.iqos.com/mx/es/localizador-tiendas.html?utm_source=crm&utm_medium=email&utm_campaign=Footer",
            "img"       : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/be1acae3-c32d-4938-927e-a1afcca9b6ed.png",
            "imgHTML"   : "footer-ico-locator.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/be1acae3-c32d-4938-927e-a1afcca9b6ed.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/fafbb1a8-d42b-42ea-b2c4-649ec73e7b67.png",
            "txt"       : "localiza una tienda",
            "name"      : "Localización"
        },
        {
            "url"       : "mailto:contact.mx@iqos.com",
            "img"       : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/06428bc4-9388-41df-bd2c-c2a44d5ace99.png",
            "imgHTML"   : "footer-ico-mail.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/06428bc4-9388-41df-bd2c-c2a44d5ace99.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/02d62fa8-4662-46b3-a60d-ed0ee8f52b1e.png",
            "txt"       : "email",
            "name"      : "Correo"
        },
        {
            "url"       : "tel:8001476769",
            "img"       : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/cac1047b-f9e7-49d0-a580-1979a8617c91.png",
            "imgHTML"   : "footer-ico-phone.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/cac1047b-f9e7-49d0-a580-1979a8617c91.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/44a52512-e8f0-48bf-b3ea-4a2e8cabc017.png",
            "txt"       : "llámanos",
            "name"      : "Teléfono"
        }
    ],
    "social" :  
    [
        {
            "url"       : "https://www.facebook.com/iqosmx/",
            "img"       : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/e5d8d9fb-bbdf-4848-ba5a-f74b76efe528.png",
            "imgHTML"   : "ico-facebook.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/eb855f80-66e5-4f83-8fa7-16e114db63f5.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/e5d8d9fb-bbdf-4848-ba5a-f74b76efe528.png",
            "name"      : "facebook"
        },
        {
            "url"       : "https://www.youtube.com/channel/UCQ0NR6SLSmgfrV5TicZXqaA",
            "img"       : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/9cfc918d-42ca-46be-9b13-90ef0e889e77.png",
            "imgHTML"   : "ico-youtube.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/1c99003f-d4d1-42bb-9471-6dd8b3188349.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/9cfc918d-42ca-46be-9b13-90ef0e889e77.png",
            "name"      : "youtube"
        },
        {
            "url"       : "https://www.instagram.com/iqos_mx/",
            "img"       : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/d037097f-fd8b-42a6-a3dd-563c9048e773.png",
            "imgHTML"   : "ico-instagram.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/ce1f5bfa-6237-4826-8bbf-36318a18a6dc.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/d037097f-fd8b-42a6-a3dd-563c9048e773.png",
            "name"      : "instagram"
        }
    ],';

$footer_blocks['HTML'] ='
    "logo" : 
    {
        "img"           :   "logo-iqos.png",
        "imgFSH"        :   "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/379e2111-ed83-43fe-88ec-0a7a46307c53.png",
        "imgDCE"        :   "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/d45cd45e-9c4a-4dda-a941-2ad5b85a8051.png",
        "imgHTML"       :   "logo-iqos.png",
        "width"         :   "85"
    },
    "footer" : 
    {
        "type"          :   "amazing_v1",
        "use_notes"     :   "README: empty value of optout_url hides optout link.",

        "showFooterIcons" : "1",

        "optout_title"  :   "Si deseas darte de baja o dejar de recibir nuestras comunicaciones, click en:",
        "optout_txt"    :   "Darme de baja",
        "optout_url"    :   "%%unsub_center_url%%",
        "optout_urlDCE" :   "https://www.iqos.com/mx/es/preference-center.html?data=sDm1jmlDBx8hegPLF8R%2fyCqu1tRRL2yfnvTUZajduvA%3d&key=79d6bb837848a629&mode=form&Tracking_Parameter=%%__AdditionalEmailAttribute1%%",
        "optout_urlFSH" :   "%%unsub_center_url%%",
        "optout_urlNONE":   "",
        "color_lnk"     :   "#333333",
        "color_txt"     :   "#a5a5a5",
        "color_bkg"     :   "#f7f7f7",

        "profile_title2":   "o bien: ",
        "profile_title" :   "",
        "profile_txt"   :   "Actualizar perfil",
        "profile_url"   :   "%%profile_center_url%%",

        "hideActPerf"   :   "0",
        "legal"         :   "&copy; 2021 Philip Morris Products S.A.<br>Todos los derechos reservados.<br>Lago Zurich No. 245, Edificio Presa Falcón, Tercer Piso, Ampliación Granada, Miguel Hidalgo, 11529, CDMX, México.",
        "legalDCEHTML"  :   "&copy; 2021 Philip Morris Products S.A.<br>Todos los derechos reservados.<br>Lago Zurich No. 245, Edificio Presa Falcón, Tercer Piso, Ampliación Granada, Miguel Hidalgo, 11529, CDMX, México.",
        "legalFSH"      :   "&copy; 2021 %%Member_Busname%%<br>Todos los derechos reservados.<br>%%Member_Addr%%, %%Member_City%%, %%Member_State%%, %%Member_PostalCode%%, %%Member_Country%%",
        "this"          :   ""
    },
    "footericons" :
    [
        {
            "url"       : "https://www.iqos.com/mx/es/descubre/devices.html",
            "img"       : "footer-ico-cart.png",
            "imgHTML"   : "footer-ico-cart.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/cbeff2e9-4aba-40af-8353-d8b0080d09ab.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/79d1ca5f-2afe-45fa-97ce-b38c15d2b906.png",
            "txt"       : "compra en línea",
            "name"      : "Carrito"
        },
        {
            "url"       : "https://www.iqos.com/mx/es/localizador-tiendas.html",
            "img"       : "footer-ico-locator.png",
            "imgHTML"   : "footer-ico-locator.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/be1acae3-c32d-4938-927e-a1afcca9b6ed.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/fafbb1a8-d42b-42ea-b2c4-649ec73e7b67.png",
            "txt"       : "localiza una tienda",
            "name"      : "Localización"
        },
        {
            "url"       : "mailto:contact.mx@iqos.com",
            "img"       : "footer-ico-mail.png",
            "imgHTML"   : "footer-ico-mail.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/06428bc4-9388-41df-bd2c-c2a44d5ace99.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/02d62fa8-4662-46b3-a60d-ed0ee8f52b1e.png",
            "txt"       : "email",
            "name"      : "Correo"
        },
        {
            "url"       : "tel:8001476769",
            "img"       : "footer-ico-phone.png",
            "imgHTML"   : "footer-ico-phone.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/cac1047b-f9e7-49d0-a580-1979a8617c91.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/44a52512-e8f0-48bf-b3ea-4a2e8cabc017.png",
            "txt"       : "llámanos",
            "name"      : "Teléfono"
        }
    ],
    "social" :  
    [
        {
            "url"       : "https://www.facebook.com/iqosmx/",
            "img"       : "ico-facebook.png",
            "imgHTML"   : "ico-facebook.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/eb855f80-66e5-4f83-8fa7-16e114db63f5.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/e5d8d9fb-bbdf-4848-ba5a-f74b76efe528.png",
            "name"      : "facebook"
        },
        {
            "url"       : "https://www.youtube.com/channel/UCQ0NR6SLSmgfrV5TicZXqaA",
            "img"       : "ico-youtube.png",
            "imgHTML"   : "ico-youtube.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/1c99003f-d4d1-42bb-9471-6dd8b3188349.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/9cfc918d-42ca-46be-9b13-90ef0e889e77.png",
            "name"      : "youtube"
        },
        {
            "url"       : "https://www.instagram.com/iqos_mx/",
            "img"       : "ico-instagram.png",
            "imgHTML"   : "ico-instagram.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/ce1f5bfa-6237-4826-8bbf-36318a18a6dc.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/d037097f-fd8b-42a6-a3dd-563c9048e773.png",
            "name"      : "instagram"
        }
    ],';

$footer_blocks['HTMLWHITE'] ='
    "logo" : 
    {
        "img"           :   "logo-iqos.png",
        "imgFSH"        :   "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/379e2111-ed83-43fe-88ec-0a7a46307c53.png",
        "imgDCE"        :   "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/d45cd45e-9c4a-4dda-a941-2ad5b85a8051.png",
        "imgHTML"       :   "logo-iqos.png",
        "width"         :   "85"
    },
    "footer" : 
    {
        "type"          :   "amazing_v1",

        "type1"         :   "amazing_v1",
        "type2"         :   "amazing_nologos",
        "type3"         :   "amazing_unsubscribe_only",
        "use_notes"     :   "README: empty value of optout_url hides optout link.",

        "optout_title"  :   "Si deseas darte de baja o dejar de recibir nuestras comunicaciones, click en:",
        "optout_txt"    :   "Darme de baja",

        "optout_url"    :   "%%unsub_center_url%%",
        "optout_urlDCE" :   "https://www.iqos.com/mx/es/preference-center.html?data=sDm1jmlDBx8hegPLF8R%2fyCqu1tRRL2yfnvTUZajduvA%3d&key=79d6bb837848a629&mode=form&Tracking_Parameter=%%__AdditionalEmailAttribute1%%",
        "optout_urlFSH" :   "%%unsub_center_url%%",
        "optout_urlNONE":   "",

        "color_lnk"     :   "#333333",
        "color_txt"     :   "#a5a5a5",
        "color_bkg1"     :   "#f7f7f7",
        "color_bkg"    :   "#ffffff",

        "profile_title2":   "o bien: ",
        "profile_title" :   "",
        "profile_txt"   :   "Actualizar perfil",
        "profile_url"   :   "%%profile_center_url%%",

        "hideActPerf"   :   "0",
        "legal"         :   "&copy; 2019 Philip Morris Products S.A.<br>Todos los derechos reservados.<br>Lago Zurich No. 245, Edificio Presa Falcón, Tercer Piso, Ampliación Granada, Miguel Hidalgo, 11529, CDMX, México.",
        "legalDCEHTML"  :   "&copy; 2019 Philip Morris Products S.A.<br>Todos los derechos reservados.<br>Lago Zurich No. 245, Edificio Presa Falcón, Tercer Piso, Ampliación Granada, Miguel Hidalgo, 11529, CDMX, México.",
        "legalFSH"      :   "&copy; 2019 %%Member_Busname%%<br>Todos los derechos reservados.<br>%%Member_Addr%%, %%Member_City%%, %%Member_State%%, %%Member_PostalCode%%, %%Member_Country%%"

    },
    "footericons" :
    [
        {
            "url"       : "https://www.iqos.com/mx/es/descubre/devices.html",
            "img"       : "footer-ico-cart.png",
            "imgHTML"   : "footer-ico-cart.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/cbeff2e9-4aba-40af-8353-d8b0080d09ab.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/79d1ca5f-2afe-45fa-97ce-b38c15d2b906.png",
            "txt"       : "compra en línea",
            "name"      : "Carrito"
        },
        {
            "url"       : "https://www.iqos.com/mx/es/localizador-tiendas.html",
            "img"       : "footer-ico-locator.png",
            "imgHTML"   : "footer-ico-locator.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/be1acae3-c32d-4938-927e-a1afcca9b6ed.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/fafbb1a8-d42b-42ea-b2c4-649ec73e7b67.png",
            "txt"       : "localiza una tienda",
            "name"      : "Localización"
        },
        {
            "url"       : "mailto:contact.mx@iqos.com",
            "img"       : "footer-ico-mail.png",
            "imgHTML"   : "footer-ico-mail.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/06428bc4-9388-41df-bd2c-c2a44d5ace99.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/02d62fa8-4662-46b3-a60d-ed0ee8f52b1e.png",
            "txt"       : "email",
            "name"      : "Correo"
        },
        {
            "url"       : "tel:8001476769",
            "img"       : "footer-ico-phone.png",
            "imgHTML"   : "footer-ico-phone.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/cac1047b-f9e7-49d0-a580-1979a8617c91.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/44a52512-e8f0-48bf-b3ea-4a2e8cabc017.png",
            "txt"       : "llámanos",
            "name"      : "Teléfono"
        }
    ],
    "social" :  
    [
        {
            "url"       : "https://www.facebook.com/iqosmx/",
            "img"       : "ico-facebook.png",
            "imgHTML"   : "ico-facebook.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/eb855f80-66e5-4f83-8fa7-16e114db63f5.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/e5d8d9fb-bbdf-4848-ba5a-f74b76efe528.png",
            "name"      : "facebook"
        },
        {
            "url"       : "https://www.youtube.com/channel/UCQ0NR6SLSmgfrV5TicZXqaA",
            "img"       : "ico-youtube.png",
            "imgHTML"   : "ico-youtube.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/1c99003f-d4d1-42bb-9471-6dd8b3188349.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/9cfc918d-42ca-46be-9b13-90ef0e889e77.png",
            "name"      : "youtube"
        },
        {
            "url"       : "https://www.instagram.com/iqos_mx/",
            "img"       : "ico-instagram.png",
            "imgHTML"   : "ico-instagram.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/ce1f5bfa-6237-4826-8bbf-36318a18a6dc.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/d037097f-fd8b-42a6-a3dd-563c9048e773.png",
            "name"      : "instagram"
        }
    ],';
$footer_blocks['FSHWHITE'] ='
    "logo" : 
    {
        "img"           :   "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/379e2111-ed83-43fe-88ec-0a7a46307c53.png",
        "imgFSH"        :   "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/379e2111-ed83-43fe-88ec-0a7a46307c53.png",
        "imgDCE"        :   "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/d45cd45e-9c4a-4dda-a941-2ad5b85a8051.png",
        "imgHTML"       :   "logo-iqos.png",
        "width"         :   "85"
    },
    "footer" : 
    {
        "type"          :   "amazing_v1",
        "use_notes"     :   "README: empty value of optout_url hides optout link.",

        "showFooterIcons" : "1",

        "optout_title"  :   "Si deseas darte de baja o dejar de recibir nuestras comunicaciones, click en:",
        "optout_txt"    :   "Darme de baja",
        "optout_url"    :   "%%unsub_center_url%%",
        "optout_urlDCE" :   "https://www.iqos.com/mx/es/preference-center.html?data=sDm1jmlDBx8hegPLF8R%2fyCqu1tRRL2yfnvTUZajduvA%3d&key=79d6bb837848a629&mode=form&Tracking_Parameter=%%__AdditionalEmailAttribute1%%",
        "optout_urlFSH" :   "%%unsub_center_url%%",
        "optout_urlNONE":   "",
        "color_lnk"     :   "#333333",
        "color_txt"     :   "#a5a5a5",
        "color_bkg"     :   "#FFFFFF",

        "profile_title2":   "o bien: ",
        "profile_title" :   "",
        "profile_txt"   :   "Actualizar perfil",
        "profile_url"   :   "%%profile_center_url%%",

        "hideActPerf"   :   "0",
        "legal"         :   "&copy; 2021 %%Member_Busname%%<br>Todos los derechos reservados.<br>%%Member_Addr%%, %%Member_City%%, %%Member_State%%, %%Member_PostalCode%%, %%Member_Country%%",
        "legalDCEHTML"  :   "&copy; 2021 Philip Morris Products S.A.<br>Todos los derechos reservados.<br>Lago Zurich No. 245, Edificio Presa Falcón, Tercer Piso, Ampliación Granada, Miguel Hidalgo, 11529, CDMX, México.",
        "legalFSH"      :   "&copy; 2021 %%Member_Busname%%<br>Todos los derechos reservados.<br>%%Member_Addr%%, %%Member_City%%, %%Member_State%%, %%Member_PostalCode%%, %%Member_Country%%",
        "this"          :   ""
    },
    "footericons" :
    [
        {
            "url"       : "https://www.iqos.com/mx/es/descubre/devices.html?utm_source=crm&utm_medium=email&utm_campaign=Footer",
            "img"       : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/cbeff2e9-4aba-40af-8353-d8b0080d09ab.png",
            "imgHTML"   : "footer-ico-cart.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/cbeff2e9-4aba-40af-8353-d8b0080d09ab.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/79d1ca5f-2afe-45fa-97ce-b38c15d2b906.png",
            "txt"       : "compra en línea",
            "name"      : "Carrito"
        },
        {
            "url"       : "https://www.iqos.com/mx/es/localizador-tiendas.html?utm_source=crm&utm_medium=email&utm_campaign=Footer",
            "img"       : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/be1acae3-c32d-4938-927e-a1afcca9b6ed.png",
            "imgHTML"   : "footer-ico-locator.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/be1acae3-c32d-4938-927e-a1afcca9b6ed.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/fafbb1a8-d42b-42ea-b2c4-649ec73e7b67.png",
            "txt"       : "localiza una tienda",
            "name"      : "Localización"
        },
        {
            "url"       : "mailto:contact.mx@iqos.com",
            "img"       : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/06428bc4-9388-41df-bd2c-c2a44d5ace99.png",
            "imgHTML"   : "footer-ico-mail.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/06428bc4-9388-41df-bd2c-c2a44d5ace99.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/02d62fa8-4662-46b3-a60d-ed0ee8f52b1e.png",
            "txt"       : "email",
            "name"      : "Correo"
        },
        {
            "url"       : "tel:8001476769",
            "img"       : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/cac1047b-f9e7-49d0-a580-1979a8617c91.png",
            "imgHTML"   : "footer-ico-phone.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/cac1047b-f9e7-49d0-a580-1979a8617c91.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/44a52512-e8f0-48bf-b3ea-4a2e8cabc017.png",
            "txt"       : "llámanos",
            "name"      : "Teléfono"
        }
    ],
    "social" :  
    [
        {
            "url"       : "https://www.facebook.com/iqosmx/",
            "img"       : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/e5d8d9fb-bbdf-4848-ba5a-f74b76efe528.png",
            "imgHTML"   : "ico-facebook.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/eb855f80-66e5-4f83-8fa7-16e114db63f5.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/e5d8d9fb-bbdf-4848-ba5a-f74b76efe528.png",
            "name"      : "facebook"
        },
        {
            "url"       : "https://www.youtube.com/channel/UCQ0NR6SLSmgfrV5TicZXqaA",
            "img"       : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/9cfc918d-42ca-46be-9b13-90ef0e889e77.png",
            "imgHTML"   : "ico-youtube.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/1c99003f-d4d1-42bb-9471-6dd8b3188349.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/9cfc918d-42ca-46be-9b13-90ef0e889e77.png",
            "name"      : "youtube"
        },
        {
            "url"       : "https://www.instagram.com/iqos_mx/",
            "img"       : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/d037097f-fd8b-42a6-a3dd-563c9048e773.png",
            "imgHTML"   : "ico-instagram.png",
            "imgDCE"    : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/ce1f5bfa-6237-4826-8bbf-36318a18a6dc.png",
            "imgFSH"    : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/d037097f-fd8b-42a6-a3dd-563c9048e773.png",
            "name"      : "instagram"
        }
    ],';
