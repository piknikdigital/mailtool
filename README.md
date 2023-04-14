**Descripción**
===
Esta aplicación permite crear correo HTML a partir de archivos TWIG que contienen la plantilla del correo a crear y archivos JSON con el contenido de cada correo.


** Instalación
===

1) En la carpeta de instalación:

```bash
$git clone git@github.com:sentiko/mailtool.git
```

2) Instalar las dependencias en la carpeta "vendor":

```bash
$ composer install
```

3) Crea un nuevo archivo autoload

```bash
$ composer dump-autoload -o
```




**Estructura de carpetas**
===



**Estructura de carpetas**
===
    /
    ├---app/
    |   ├---config/  
    |   |   └---json/  
    |   ├---controllers/
    |   ├---models/  
    |   └---views/  
    |  
    ├---public/
    |   └---static/  
    |       └---html/  
    └---vendor/


Las dos carpetas de interés son:

**app/config/json**

Carpeta donde se guardan los archivos de configuración JSON que determinan la ruta del mail a crear y su contenido.

**public/static/html**

Carpeta donde se crean los archivos HTML.


# Creación de un correo simple

El siguiente ejemplo crea un correo HTML con un texto corto:

    {

        "SECTION_1"        :   "########### CONFIGURACION DE PLANTILLA ####################", 
        "BaseURLassets"    :   "",
        "BaseURLimg"       :   "",
        "HTMLstaticfile"   :   "pmi2001/pmi-200108-new-year/pmi-200108-ID20.1-cambia-users-DCE.html",
        
        "TwigTemplate"     :   "pmi/pmi-blocks-mod-B01-600-v01.twig",
        "isWebVer"         :   " ",

        "SECTION_2"        :   "############ CONTENIDOS #####################################",
        "PageTitle"        :   "",
        "PREHEADER"        :   "",
        "content_bgcolor"  :   "#FFFFFF",

        "blocks" : 
        [
            {
                "type"          : "p",
                "fontweight"    : "300",
                "fontsize"      : "16",
                "height"        : "20",
                "width"         : "70%",
                "align"         : "center",
                "color"         : "#000000",
                "color_bkg"     : "#FFFFFF",
                "margin_top"    : "50",
                "margin_bottom" : "50",
                "content"       : "<h1>Hola!</h1><br>Este es un ejemplo de correo HTML. Puedo mostrar texto en <b><negritas/b>, <i>cursivas</i>, o con <span style:\"color:blue;\">otro color</span>",
                "this"          : "TXT"
            }
        ],
        "END"            :   "#######################"

    }

El ejemplo anterior produce un archivo HTML cuyo contenido es el siguiente:

![sample](https://i.imgur.com/uznUdCc.png)
  



## Descripción de variables

**CONFIGURACIÓN DE PLANTILLA**

Las siguientes variables dan información sobre la ubicación del archivo HTML a crear y la plantilla TWIG con la que se va a crear.


| VARIABLE           | DESCRIPCIÓN  |
|--------------------|--------------|
| __BaseURLassets__  |  Trayectoria donde se encuentran las imágenes comunes que se repiten en diferentes correos. |
| __BaseURLimg__     |  Trayectoria donde se encuentran las imágenes del correo actual en específico.              |
| __HTMLstaticfile__ |  Trayectoria relativa al servidor donde se ejecuta este script donde se creará el archivo HTML destino. |
| __TwigTemplate__   |  Ubicacion relativa a la carpeta "views" de la plantilla TWIG usada para crear el correo actual. |
| __isWebVer__       |  Variable de uso interno para renderizar el HTML a pantalla o a archivo. Debe estar presente, pero no es necesario asignarle ningún valor. |
 
Para las dos primeras variables, su uso depende de cómo lo use la plantilla TWIG para el correo actual. Para PMI, por ejemplo, es común dejarlas vacías como se muestra en el ejemplo.


**CONFIGURACIÓN DE CONTENIDOS**

Las variables usadas dependen de las variables declaradas en la plantilla TWIG.  Se describen a continuación algunas variables de la plantilla __pmi-blocks-mod-B01-600-v01__.

| VARIABLE             | DESCRIPCIÓN  |
|----------------------|--------------|
| __PageTitle__        | Titulo de la página. Se incrusta dentro del header HTML, en la etiqueta HTML \<TITLE>. Es relevante cuando el destino del HTML es el navegador, para mail no importa si está vacío.  |
| __PREHEADER__        | Valor del preheader. Si el CRM donde se va a usar el HTML ya lo incrusta por su cuenta, dejar en blanco.  |
| __content_bgcolor__  | Color en formato hexadecimal del color del fondo del correo.  |
| __blocks__           | Variable que describe el contenido de un bloque de renglones dentro del cuerpo del correo. Cada renglón descrito tiene diferentes variables y tipo de contenido. Puede ser una imagen, un call to action, dos columnas de contenido, un disclaimer, etc. |


# Elementos en la variable blocks

Se describen los elementos BLOCK de la plantilla pmi-blocks-mod-B01-600-v01.twig

* [img](#block-img)
* [greeting](#block-greeting) 
* [p](#block-p)
* [cta1](#block-cta1)
* [cta2](#block-cta2)
* [disclaimer](#block-disclaimer)
* [spacer](#block-spacer)
* framed_img
* cols_25_25_25_25
* cols_50_50
* cols_80_20
* cols_m_A_B_m
* shopping_list
* pframed
* links_list
* form
* codebutton1
* codebutton2
* logoprefooter

\
\
\
<a name="block-img"></a>
# img

DESCRIPCIÓN:

Muestra una imagen usando el 100% de ancho del contenedor del contenido (600 px).


JSON: 

        {
            "type"          : "img",
            "img"           : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/e92a4c3b-ff6a-4516-8aed-2fadc6ee9541.png",
            "imgFSH"        : "http://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/e2f8bd1f-3fe6-4e38-8962-28d385dddb6b.png",
            "imgDCE"        : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/e92a4c3b-ff6a-4516-8aed-2fadc6ee9541.png",
            "imgHTML"       : "header_iqos.png",
            "url"           : "#",
            "this"          : "Logo"
        },

RESULTADO:

![LOGO](https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/e92a4c3b-ff6a-4516-8aed-2fadc6ee9541.png)


VARIABLES:

|  VARIABLE   |  DESCRIPCIÓN  |
|-------------|---------------|
| __type__    |  Describe el tipo de bloque. |
| __img__     |  URL de la imagen a mostrar. |
| __imgFSH__  |  ___No usada por la plantilla___. Indica la URL dentro del Content Builder local (México). Se almacena en esta variable cómo referencia por si se requiere crear un HTML para el Content Builder local. Para que la plantilla lo use, es requerido copiar este valor en la variable "img" descrita arriba. |
| __imgDCE__  |  ___No usada por la plantilla___. Indica la URL dentro de la DCE (Content Builder global en Suiza). Se almacena en esta variable cómo referencia por si se requiere crear un HTML para DCE. Para que la plantilla lo use, es requerido copiar este valor en la variable "img" descrita arriba. |
| __imgHTML__ |  ___No usada por la plantilla___. Indica la URL dentro del servidor local de pruebas (donde se desarrolla el presente mail). Se almacena en esta variable cómo referencia para crear los links de preview para PMI. Para que la plantilla lo use, es requerido copiar este valor en la variable "img" descrita arriba. |
| __url__     | Si se requiere que la imagen a mostrar tenga un link, se pone aquí la ULR de dicho link. Si la imagen no requiere hipervíncvulo, se pone únicamente el símbolo \#.  |
| __this__    | ___No usada por la plantilla___. Se usa para comentarios, típicamente, para describir el uso de esta imagen. Es útil dejar un comentario aquí para mayor claridad al momento de hacer cambios en el mail.  |


\
\
\
<a name="block-spacer"></a>
# spacer

DESCRIPCIÓN:

Muestra una separación vertical con un color de fondo y altura configurables.

JSON: 

        {
            "type"          : "spacer",
            "height"        : "30",
            "color_bkg"     : "#0000FF",
            "this"          : "height in px"
        }

RESULTADO:

![block-spacer](https://i.imgur.com/sfzBSCD.png)


VARIABLES:

|  VARIABLE      |  DESCRIPCIÓN  |
|----------------|---------------|
| __type__       |  Describe el tipo de bloque. |
| __height__     |  Altura del espaciamiento en pixeles. |
| __color_bkg__  |  Color del fondo a usar en hexadecimal. |
| __this__       |  ___No usada por la plantilla___. Se usa para comentarios, no es requerido poner nada. |


\
\
\
<a name="block-greeting"></a>
# greeting

DESCRIPCIÓN:

Muestra un saludo para el destinatario. Se usa un tamaño fijo de letra de 28px y una altura de renglon de 34px.

JSON: 

        {
            "type"          : "greeting",
            "fontweight"    : "300",
            "color_greeting": "#b92200",
            "color_bkg"     : "#FFFFFF",
            "greeting"      : "Hola, %%first_name%%",
            "greetingFSH"   : "Hola, %%nickname__c%%",
            "greetingHTML"  : "Hola, {{user name}}",
            "greetingDCE"   : "Hola, %%first_name%%",
            "this"          : "Hola [nombre]"
        },

RESULTADO:

![block-greeting](https://i.imgur.com/IPu7VBZ.png)

VARIABLES:

|  VARIABLE           |  DESCRIPCIÓN  |
|---------------------|---------------|
| __type__            |  Describe el tipo de bloque. |
| __fontweight__      |  Peso de la letra a usar. 300 para light, 400 para normal y 700 para bold. |
| __color_greeting__  |  Color de la letra en hexadecimal.  |
| __color_bkg__       |  Color del fondo en hexadecimal.  |
| __greeting__        |  Texto el saludo. En el ejemplo, se indica con %%first_name%% la variable que DCE (Suiza) usa para el nombre del usuario. |
| __greetingFSH__     |  ___No usado por la plantilla.___ Texto que se usará si el destino es content builer local (México). Para que pueda tener efecto, se copia este valor en la variable  __greeting__ . La variable del nombre que usa el content builer local es %%nickname__c%% |
| __greetingHTML__    |  ___No usado por la plantilla.___ Texto que se usará si el destino es el preview para PMI. Para que pueda tener efecto, se copia este valor en la variable  __greeting__ |
| __greetingDCE__     |  ___No usado por la plantilla.___ Texto que se usará si el destino es DCE (Suiza). Para que pueda tener efecto, se copia este valor en la variable  __greeting__ . La variable del nombre que usa DCE es %%first_name%% |
| __this__            |  ___No usado por la plantilla.___ Espacio para comentarios, no es requerido poner nada. |


\
\
\
<a name="block-cta1"></a>
# cta1

DESCRIPCIÓN:

Muestra un Call To Action centrado. El botón debe ser una imagen. El color de fondo se hereda del color que se haya asignado como fondo de contenido en el mail.

JSON: 

        {
            "type"          : "cta1",
            "widthbutton"   : "320",
            "button"        : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/4ac3dd96-e96e-41ee-b42a-efeec29ede4f.png",
            "buttonHTML"    : "btn-sa-localiza-tu-tienda.png",
            "buttonFSH"     : "btn-sa-localiza-tu-tienda.png",
            "buttonDCE"     : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/4ac3dd96-e96e-41ee-b42a-efeec29ede4f.png",
            "url_cta"       : "https://www.iqos.com/mx/es/localizador-tiendas.html",
            "this"          : "CTA localiza tu tienda"
        },

RESULTADO:

![block-cta1](https://i.imgur.com/Qj00tD7.png)

VARIABLES:

|  VARIABLE        |  DESCRIPCIÓN  |
|------------------|---------------|
| __type__         |  Describe el tipo de bloque. |
| __widthbutton__  |  Ancho del botón en pixeles. |
| __button__       |  URL de la ubicación de la imagen a usar como botón. |
| __buttonHTML__   |  ___No usado por la plantilla.___ nombre de archivo de la imagen a usar como botón. Util cuando se produce el preview link de este correo. Para usarlo, copiar este valor en la variable "boton". |
| __buttonFSH__    |  ___No usado por la plantilla.___ URL de la imagen a usar como botón dentro del Content Buider local (México). Para usarlo, copiar este valor en la variable "boton". |
| __buttonDCE__    |  ___No usado por la plantilla.___ URL de la imagen a usar como botón dentro de DCE (Suiza). Para usarlo, copiar este valor en la variable "boton". |
| __url_cta__      |  URL de link al cual te lleva el botón al dsrle click. |
| __this__         |  ___No usado por la plantilla.___ Espacio para comentarios, no es requerido poner nada pero es recomendable indicar que hace este call ti action. |




\
\
\
<a name="block-disclaimer"></a>
# disclaimer

DESCRIPCIÓN:

Muestra un texto con el DTI (Duty To Inform) con los legales indicados. 

JSON:

        {
            "type"          : "disclaimer",
            "align"         : "center",
            "color"         : "#999999",
            "fontsize"      : "11",
            "txt"           : "IQOS es un dispositivo electrónico que, al calentar unidades de tabaco, entrega nicotina, la cual es adictiva y no está libre de riesgo. Prohibida su venta a menores de edad. Consulta nuestro aviso de privacidad con base en el cual son tratados tus datos personales <a href=\"https://www.pmiprivacy.com/es-la/consumer\" target=\"_blank\">aquí</a>."
        },

RESULTADO:

![block-disclaimer](https://i.imgur.com/mh4ux6t.png)

VARIABLES:

|  VARIABLE    |  DESCRIPCIÓN  |
|--------------|---------------|
| __type__     |  Describe el tipo de bloque. |
| __align__    |  __OPCIONAL__. Si no se encuentra presente, muestra el texto centrado. Si se encuentra presente, indica la justificación a usar: "left", "right", o "justify". |
| __color__    |  Color del texto a mostrar en formato hexadecimal. |
| __fontsize__ |  Tamaño en pixeles del font a usar. El alto del renglón se determina automáticamente a partir de este valor. |
| __txt__      |  Texto a mostrar. Se admite código HTML. __nota__: si se deben usar comillas, hay que usar la secuencia de escape requerida por JSON (\"). |




\
\
\
<a name="block-p"></a>
# p

DESCRIPCIÓN:

Escribe un bloque de texto en un párrafo centrado. El bloque de texto está centrado, pero el texto en su interior puede tener la justificación indicada.

JSON:

        {
            "type"          : "p",
            "fontweight"    : "300",
            "fontsize"      : "16",
            "height"        : "20",
            "width"         : "70%",
            "align"         : "center",
            "color"         : "#000000",
            "color_bkg"     : "#FFFFFF",
            "margin_top"    : "50",
            "margin_bottom" : "50",
            "content"       : "En 2019 diste tu primer paso al adquirir IQOS, empieza este 2020 renovando tu dispositivo.<br><br>Visita nuestras IQOS Stores y dale un estilo totalmente nuevo.<br><br>¡Las posibilidades son infinitas!",
            "this"          : "TXT"
        },        

RESULTADO:

![block-p](https://i.imgur.com/wcJINHf.png)

VARIABLES:

|  VARIABLE         |  DESCRIPCIÓN  |
|-------------------|---------------|
| __type__          |  Describe el tipo de bloque. |
| __fontweight__    |  Peso de la letra a usar. 300 para light, 400 para normal y 700 para bold. |
| __fontsize__      |  Tamaño en pixeles del font a usar. El alto del renglón se determina automáticamente a partir de este valor. |
| __height__        |  El alto del renglón a usar. Se recomienda usar el tamaño del font + 4 |
| __width__         |  El porcentaje del ancho total del párrafo, donde el 100% corresponde al ancho del mail (600px). El párrafo se despliega centrado, pero el texto en su interior puede tener otra alineación. |
| __align__         |  La alineación del texto dentro del párrafo. Puede ser "left", "right", "center" o "justify" |
| __color__         |  Color del texto a mostrar en formato hexadecimal. |
| __color_bkg__     |  Color del fondo en formato hexadecimal. |
| __margin_top__    |  Espaciamiento encima del párrafo en pixeles. |
| __margin_bottom__ |  Espaciamiento bajo el párrafo en pixeles. |
| __content__       |  Texto a mostrar. Se admite código HTML. __nota__: si se deben usar comillas, hay que usar la secuencia de escape requerida por JSON (\"). | |
| __this__          |   ___No usado por la plantilla.___ Espacio para comentarios, no es requerido poner nada. |












