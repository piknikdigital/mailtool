# **3.5 Bloques de componentes de e-mail**


$libraryBlocks['header_brand_world'] ='

        {
            "type"          : "img",
            "bgcolor"       : "transparent",
            "img"           : "header-iqos-bw-2.png",
            "imgHTML"       : "",
            "imgFSH"        : "",
            "imgDCE"        : "",
            "url"           : "#",
            "this"          : "IMG header IQOS Brand World"
        },';


<a name="header_brand_world"></a>
# header_brand_world

DESCRIPCIÓN:

Muestra una imagen usando el 100% de ancho del contenedor del contenido (600 px). Esta imagen se usa en todos los correos de Philip Morris y consiste en el logotipo de IQOS del lado izquierdo y una frase del lado derecho.

Assets grágicos requeridos:

* Una imagen PNG de 600 x 150px.

JSON: 

        {
            "type"          : "img",
            "bgcolor"       : "transparent",
            "img"           : "header-iqos-bw-2.png",
            "imgHTML"       : "",
            "imgFSH"        : "",
            "imgDCE"        : "",
            "url"           : "#",
            "this"          : "IMG header IQOS Brand World"
        },


RESULTADO:

![LOGO](https://i.imgur.com/ZNru2so.png)


VARIABLES:

|  VARIABLE   |  DESCRIPCIÓN  |
|-------------|---------------|
| __type__    |  Describe el tipo de bloque. |
| bgcolor     |  Color del background en formato hexadecimal. El default es "transparent" |
| __img__     |  nombre del archivo a usar. Los posibles valores son:<br>   |
| __imgFSH__  |  ___No usada por la plantilla___. Indica la URL dentro del Content Builder local (México). Se almacena en esta variable cómo referencia por si se requiere crear un HTML para el Content Builder local. Para que la plantilla lo use, es requerido copiar este valor en la variable "img" descrita arriba. |
| __imgDCE__  |  ___No usada por la plantilla___. Indica la URL dentro de la DCE (Content Builder global en Suiza). Se almacena en esta variable cómo referencia por si se requiere crear un HTML para DCE. Para que la plantilla lo use, es requerido copiar este valor en la variable "img" descrita arriba. |
| __imgHTML__ |  ___No usada por la plantilla___. Indica la URL dentro del servidor local de pruebas (donde se desarrolla el presente mail). Se almacena en esta variable cómo referencia para crear los links de preview para PMI. Para que la plantilla lo use, es requerido copiar este valor en la variable "img" descrita arriba. |
| __url__     | Si se requiere que la imagen a mostrar tenga un link, se pone aquí la ULR de dicho link. Si la imagen no requiere hipervíncvulo, se pone únicamente el símbolo \#.  |
| __this__    | ___No usada por la plantilla___. Se usa para comentarios, típicamente, para describir el uso de esta imagen. Es útil dejar un comentario aquí para mayor claridad al momento de hacer cambios en el mail.  |


\
\
\





dfdfdfdfdfdfdfffdff
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



___

* [Regreso al índice](README.md)
* [**Previo:** 3.4 Inicialización de proyecto de correo](3_4_Inicio_de_proyecto.md)
* [**Siguiente:** 3.6 Pre-Produción de HTML](3_6_preproducion_html.md)