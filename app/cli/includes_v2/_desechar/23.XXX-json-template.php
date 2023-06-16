<?php 


$jsonString = <<<HEREDOCJSON
{
    "DESCRIPTION"      :   "########### PMI  ############",
   
    "config_template" :
    {
        "MAMP-PRO-ON-MAC"  :   "http://mailtool.lan:8888/pmi2306/pmi-230607-ti-sd/pmi-230607-ID23.74-laus-second-device-2-HTML",
        "MAMP-PRO-ON-PC"   :        "http://mailtool.lan/pmi2306/pmi-230607-ti-sd/pmi-230607-ID23.74-laus-second-device-2-HTML",

        "MAMP-ON-MAC"      :   "http://localhost:8888/pmi2306/pmi-230607-ti-sd/pmi-230607-ID23.74-laus-second-device-2-HTML",
        "openHTML-MAC"     :   "file:///Users/armandoromero/Documents/devF1/mailtool.lan/html/pmi2306/pmi-230607-ti-sd/pmi-230607-ID23.74-laus-second-device-2-HTML.html",

        "Subject"          :   "Es momento de celebrar el cambio con un segundo IQOS",
        "Preheader"        :   "Recibe 20% de descuento en la compra de tu segundo IQOS",

        "PATH"             :   "",
        "Name-CustomerKey" :   
        [
            { 
                "name"        : "",
                "CustomerKey" : ""
            }
        ],
        "test-url"         :   
        [
            { "urlD" : "https://paginum.com/pmi2306/pmi-230607-ti-sd/pmi-230607-ID23.74-laus-second-device-2-HTML" } ,
            { "urlS" : "https://paginum.com/email/pmi2306/pmi-230607-ti-sd/pmi-230607-ID23.74-laus-second-device-2-HTML.html"  },
            { "urlS" : "http://mailtool.lan:8888/email/pmi2306/pmi-230607-ti-sd/pmi-230607-ID23.74-laus-second-device-2-HTML.html"},
            { "THIS" :  "urlD: Dynamic content / urlS: Static content" }

        ]
    },

    "SECTION_1"        :   "########### CONFIGURACION DE PLANTILLA ####################", 
    "BaseURLassets"    :   "",
    "BaseURLimg"       :   "",
    
    "HTMLstaticfile"   :   "pmi2306/pmi-230607-ti-sd/pmi-230607-ID23.74-laus-second-device-2-HTML.html",

    "trackmailopen"            :   "0",
    "trackmailaudience"        :   "0",    

    "target"                   :   "HTML",

    "TwigTemplate"     :   "pmi/pmi-Brand-World-B01-600-v01.twig",
    "Source"           :   "pmi-230607-ID23.74-laus-second-device-2-HTML",
    "isWebVer"         :   " ",
    
    "SECTION_2"        :   "############ CONTENIDOS #####################################",
    "PageTitle"        :   "ID23.74 LAUS Second Device 2",
    "PREHEADER"        :   "",
    "content_bgcolor"  :   "#FFFFFF",
    
    
    "blocks" : 
    [

    ],
    
    "END"            :   "#######################"

    }
HEREDOCJSON;

echo $jsonString . PHP_EOL;
