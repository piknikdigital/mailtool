# **3.5 Bloques de componentes de e-mail**


Esta sección presenta una referencia de los nombres de bloques de datos que pueden incluirse en la variable **$requiredBlocks** descrita en la [sección 3.4](3_4_Inicio_de_proyecto.md). Cuando se crea el archivo JSON descrito en la sección 3.6, estos nombres se expanden en una estructura de datos JSON donde pueden definirse los detalles de ese bloque: textos, colores, tamaños, etc. 

Cada bloque se describe mostrando un ejemplo del código JSON que se genera con ese bloque, una imagen del resultado de usar ese código y una tabla describiendo cada una de las variables involucradas.

\
\
\
\
<a name="block-header_brand_world"></a>
# header_brand_world

**DESCRIPCIÓN**

Muestra una imagen usando el 100% de ancho del contenedor del contenido (600 px). Esta imagen se usa en todos los correos de Philip Morris y consiste en el logotipo de IQOS del lado izquierdo y una frase del lado derecho.

Assets gráficos requeridos:

* Una imagen PNG de 800 x 150px.

\
**JSON** 

        {
            "type"          : "img",
            "bgcolor"       : "transparent",
            "img"           : "header-iqos-bw-2.png",
            "url"           : "#",
            "this"          : "IMG header IQOS Brand World"
        },

\
**RESULTADO**

![header_brand_world](https://i.imgur.com/ZNru2so.png)


\
**VARIABLES**

|  VARIABLE   |  DESCRIPCIÓN  |
|-------------|---------------|
| __type__    |  __No cambiar este valor__. Describe el tipo de bloque.  |
| __bgcolor__ |  Color del background en formato hexadecimal. El default es "transparent" |
| __img__     |  nombre del archivo a usar. Los posibles valores son:<br>* **header-iqos-bw-2.png**: Texto a la derecha "Elijo IQOS"<br>* **header-iqos-bw-3.png**: Texto a la derecha "Refiere a un amigo /  myIQOS" <br>* **header-iqos-bw-4.png**: Texto a la derecha "myIQOS" |
| __url__     |  Si se requiere que la imagen a mostrar tenga un link, se pone aquí la ULR de dicho link. Si la imagen no requiere hipervínculo, se pone únicamente el símbolo \#.  |
| __this__    |  ___No usada por la plantilla___. Se usa para comentarios, típicamente, para describir el uso de esta imagen. Es útil dejar un comentario aquí para mayor claridad al momento de hacer cambios en el mail, pero se puede dejar en blanco.  |




\
\
\
\
<a name="block-greeting_v2"></a>
# greeting_v2

**DESCRIPCIÓN**

Muestra un saludo "Hola, [nombre]". Las variable dinámicas de Salesforce usadas para el nombre son **%%FirstName%%** para la instancia local de Salesforce, y **%%=ProperCase(first_name)=%%** para DCE.

Assets gráficos requeridos:

* Ninguno

\
**JSON** 

        {
            "type"          : "greeting_v2",
            "fontweight"    : "700",
            "color_greeting": "#34303d",
            "color_bkg"     : "transparent",
            "margin_top"    : "70",
            "margin_bottom" : "70",
            "greeting"      : "Hola, %%first_name%%",
            "this"          : "Hola [nombre]"
        },

\
**RESULTADO**

![greeting_v2](https://i.imgur.com/j9QmtaQ.png)


\
**VARIABLES**

|  VARIABLE   |  DESCRIPCIÓN  |
|-------------|---------------|
| __type__    |  __No cambiar este valor__. Describe el tipo de bloque. |
| __fontweight__     | __No cambiar este valor__. Usar "300" para texto normal, "700" para usar negritas |
| __color_greeting__ | Color del texto en formato hexadecimal. El default es "#34303d" |
| __color_bkg__      | Color del background en formato hexadecimal. El default es "transparent" |
| __margin_top__     | El tamaño del margen superior en pixeles. El default es "70" |
| __margin_bottom__  | El tamaño del margen inferior en pixeles. El default es "70" |
| __greeting__       | __No cambiar este valor__. El texto del saludo. El default es "Hola, %%first_name%%", pero si se desea usar colores diferentes para el saludo y el nombre, se puede agregar HTML. Por ejemplo:<br> "\<span style=\"color:#e4ab68;\"\>Hola,\</span\> %%first_name%%" <br>Pone el color #e4ab68 para el saludo, mientras que el nombre tiene el color definido en "color_greeting".|
| __this__           | ___No usada por la plantilla___. Area para comentarios, no es necesario modificar nada aquí. |




\
\
\
\
<a name="block-img"></a>
# img

**DESCRIPCIÓN**

Muestra una imagen usando el 100% de ancho del contenedor del contenido (600 px).

Assets gráficos requeridos:

* Una imagen JPG, PNG o GIF de 800px de ancho.

\
**JSON** 

        {
            "type"          : "img",
            "bgcolor"       : "transparent",
            "img"           : "logo-iqos.jpg",
            "url"           : "#",
            "this"          : "IMG logo IQOS"
        },

\
**RESULTADO**

![img](https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/1/e92a4c3b-ff6a-4516-8aed-2fadc6ee9541.png)


\
**VARIABLES**

|  VARIABLE   |  DESCRIPCIÓN  |
|-------------|---------------|
| __type__    |  __No cambiar este valor.__ Describe el tipo de bloque.  |
| __bgcolor__ |  Color del background en formato hexadecimal. El default es "transparent" |
| __img__     |  nombre del archivo a usar, puede ser un JPG, PNG o GIF. Se recomienda que la imagen tenga un ancho de 800px. |
| __url__     |  Si se requiere que la imagen a mostrar tenga un link, se pone aquí la ULR de dicho link. Si la imagen no requiere hipervínculo, se pone únicamente el símbolo \#.  |
| __this__    |  ___No usada por la plantilla___. Se usa para comentarios, típicamente, para describir el uso de esta imagen. Es útil dejar un comentario aquí para mayor claridad al momento de hacer cambios en el mail, pero se puede dejar en blanco.  |




\
\
\
\
<a name="block-p300_BW"></a>
# p300_BW

**DESCRIPCIÓN**

Muestra un bloque de texto "content" de un ancho "width". Puede ponerse texto plano, o decorado con HTML.

Assets gráficos requeridos:

* Ninguno.

\
**JSON** 

        {
            "type"          : "p",
            "font"          : "Cabin",
            "fontweight"    : "300",
            "fontsize"      : "18",
            "height"        : "26",
            "width"         : "70%",
            "align"         : "center",
            "color"         : "#34303d",
            "color_bkg"     : "transparent",
            "margin_top"    : "50",
            "margin_bottom" : "50",
            "content"       : "<span style=\"color:#00d1d2;\">IQOS</span> Quis autem<span style=\"font-size:12px;\"><sup>(1)</sup></span> vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?",
            "this"          : "TXT"
        },

\
**RESULTADO**

![p300_BW](https://i.imgur.com/QzO7OyZ.png)


\
**VARIABLES**

|  VARIABLE   |  DESCRIPCIÓN  |
|-------------|---------------|
| __type__    |  __No cambiar este valor__. Describe el tipo de bloque.  |
| __font__          | __No cambiar este valor__. La plantilla TWIG usada para crear los correos de Philip Morris usa dos tipografías: "Cabin" para el texto normal y 'Noto Sans' para el footer. |
| __fontweight__    | "300" para texto normal o "700" para texto en negritas. El valor predefinido es "300".|
| __fontsize__      | Tamaño en pixeles de la tipografía. El valor predefinido es "18".|
| __height__        | Tamaño en pixeles de la altura de la línea. El valor predefinido es "26".|
| __width__         | El ancho en porcentaje del párrafo de texto. El default es "70%".|
| __align__         | La alineación del texto dentro del párrafo. Los posibles valores son "center", "right", "left" y "justify".|
| __color__         | Color del texto en formato hexadecimal. El valor predefinido es "#34303d".|
| __color_bkg__     | Color del background en formato hexadecimal. El valor predefinido es "transparent".|
| __margin_top__    | El tamaño del margen superior en pixeles. El valor predefinido es "50".|
| __margin_bottom__ | El tamaño del margen inferior en pixeles. El valor predefinido es "50".|
| __content__       | El texto a mostrar. De ser necesario, puede incluirse HTML para cambiar los colores, poner superíndices o cambiar el tamaño de alguna parte del texto. El valor predefinido muestra cómo agregar HTML.|
| __this__          |  ___No usada por la plantilla___. Se usa para comentarios, puede dejarse en blanco. |




\
\
\
\
<a name="block-p700_BW"></a>
# p700_BW

**DESCRIPCIÓN**

Al igual que en el caso previo, muestra un bloque de texto "content" de un ancho "width", con la diferencia de que la salida es texto en negritas. Puede ponerse texto plano, o decorado con HTML.

Assets gráficos requeridos:

* Ninguno.

\
**JSON** 

        {
            "type"          : "p",
            "font"          : "Cabin",
            "fontweight"    : "700",
            "fontsize"      : "20",
            "height"        : "28",
            "width"         : "70%",
            "align"         : "center",
            "color"         : "#34303d",
            "color_bkg"     : "transparent",
            "margin_top"    : "50",
            "margin_bottom" : "50",
            "content"       : "<span style=\"color:#e4ab68;\">IQOS</span> Et harum quidem rerum facilis est et expedita distinctio.",
            "this"          : "TXT"
        },


\
**RESULTADO**

![p700_BW](https://i.imgur.com/RcQisVV.png)


\
**VARIABLES**

|  VARIABLE   |  DESCRIPCIÓN  |
|-------------|---------------|
| __type__    |  __No cambiar este valor__. Describe el tipo de bloque.  |
| __font__          | __No cambiar este valor__. La plantilla TWIG usada para crear los correos de Philip Morris usa dos tipografías: "Cabin" para el texto normal y 'Noto Sans' para el footer. Si se necesita usar otra tipografía de google fonts, es necesario primero agregarla a la plantilla TWIG que se usa para hacer los correos. |
| __fontweight__    | "300" para texto normal o "700" para texto en negritas. El valor predefinido es "700".|
| __fontsize__      | Tamaño en pixeles de la tipografía. El valor predefinido es "18".|
| __height__        | Tamaño en pixeles de la línea. El valor predefinido es "26".|
| __width__         | El ancho en porcentaje del párrafo de texto. El default es "70%".|
| __align__         | La alineación del texto dentro del párrafo. Los posibles valores son "center", "right", "left" y "justify".|
| __color__         | Color del texto en formato hexadecimal. El valor predefinido es "#34303d".|
| __color_bkg__     | Color del background en formato hexadecimal. El valor predefinido es "transparent".|
| __margin_top__    | El tamaño del margen superior en pixeles. El valor predefinido es "50".|
| __margin_bottom__ | El tamaño del margen inferior en pixeles. El valor predefinido es "50".|
| __content__       | El texto a mostrar. De ser necesario, puede incluirse HTML para cambiar los colores, poner supereíndices o cambiar el tamaño de alguna parte del texto. El valor predefinido muestra cómo agregar HTML.|
| __this__          |  ___No usada por la plantilla___. Se usa para comentarios, puede dejarse en blanco. |




\
\
\
\
<a name="block-p_v2"></a>
# p_v2

**DESCRIPCIÓN**

Crea una separación vertical de altura "height" entre elementos. Es posible declarar un margen lateral de diferente color a la parte central.

Assets gráficos requeridos:

* Ninguno.

\
**JSON** 

        {
            "type"          : "p_v2",
            "font"          : "Cabin",
            "fontweight"    : "300",
            "fontsize"      : "18",
            "height"        : "28", 
            "width"         : "80%",
            "align"         : "center",
            "color"         : "#34303d",
            "color_bkg"     : "#faf7f4",
            "margin_top"    : "30",
            "margin_bottom" : "30",
            "margin_sides"  : "5",
            "margin_color"  : "#eeeeee",
            "content"       : "<span style=\"color:#00d1d2;font-weight:700;\">Ut enim ad minima veniam,</span> quis nostrum <a href=\"http://somelink\" style=\"text-decoration:underline;\" target=\"_blank\">LINK</a> exercitationem<span style=\"font-size:12px;\"><sup>(1)</sup></span> ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?",
            "readme"        : "height px, margin %" ,
            "this"          : ""
        },


\
**RESULTADO**

![p_v2](https://i.imgur.com/0gkJ8Rg.png)

\
**VARIABLES**

|  VARIABLE   |  DESCRIPCIÓN  |
|-------------|---------------|
| __type__    |  __No cambiar este valor__. Describe el tipo de bloque.  |
| __font__          | __No cambiar este valor__. La plantilla TWIG usada para crear los correos de Philip Morris usa dos tipografías: "Cabin" para el texto normal y 'Noto Sans' para el footer. Si se necesita usar otra tipografía de google fonts, es necesario primero agregarla a la plantilla TWIG que se usa para hacer los correos. |
| __fontweight__    | "300" para texto normal o "700" para texto en negritas. El valor predefinido es "700".|
| __fontsize__      | Tamaño en pixeles de la tipografía. El valor predefinido es "18".|
| __height__        | Tamaño en pixeles de la línea. El valor predefinido es "28".|
| __width__         | El ancho en porcentaje del párrafo de texto. El default es "80%".|
| __align__         | La alineación del texto dentro del párrafo. Los posibles valores son "center", "right", "left" y "justify".|
| __color__         | Color del texto en formato hexadecimal. El valor predefinido es "#34303d".|
| __color_bkg__     | Color del background del párrafo en formato hexadecimal. El valor predefinido es "#faf7f4".|
| __margin_top__    | El tamaño del margen superior en pixeles. El valor predefinido es "30".|
| __margin_bottom__ | El tamaño del margen inferior en pixeles. El valor predefinido es "30".|
| __margin_sides__  | Ancho de cada margen en porcentaje, donde el 100% es 600px. No usar un valor mayor a 49. El default es "5". |
| __margin_color__  | Color del background de los márgenes en formato hexadecimal. El valor predefinido es "transparent". |
| __content__       | El texto a mostrar. De ser necesario, puede incluirse HTML para cambiar los colores, poner supereíndices o cambiar el tamaño de alguna parte del texto. El valor predefinido muestra cómo agregar HTML.|
| __readme__    | ___No usada por la plantilla___. Solo es un comentario para recordar las unidades a usar. |
| __this__      | ___No usada por la plantilla___. Se usa para comentarios, puede dejarse en blanco. |





\
\
\
\
<a name="block-spacer"></a>
# spacer

**DESCRIPCIÓN**

Crea una separación vertical de altura "height" entre elementos.

Assets gráficos requeridos:

* Ninguno.

\
**JSON** 

        {
            "type"          : "spacer",
            "height"        : "50",
            "color_bkg"     : "transparent",
            "readme"        : "height in px",
            "this"          : "spacer"
        },

\
**VARIABLES**

|  VARIABLE   |  DESCRIPCIÓN  |
|-------------|---------------|
| __type__    |  __No cambiar este valor__. Describe el tipo de bloque.  |
| __height__    | Altura en pixeles del espacio a insertar. El valor predefinido es "50". |
| __color_bkg__ | Color del background en formato hexadecimal. El valor predefinido es "transparent". |
| __readme__    | ___No usada por la plantilla___. Solo es un comentario para recordar las unidades a usar. |
| __this__      | ___No usada por la plantilla___. Se usa para comentarios, puede dejarse en blanco. |



\
\
\
\
<a name="block-spacer_v2"></a>
# spacer_v2

**DESCRIPCIÓN**

Crea una separación vertical de altura "height" entre elementos. Es posible declarar un margen lateral de diferente color a la parte central.

Assets gráficos requeridos:

* Ninguno.

\
**JSON** 

        {
            "type"          : "spacer_v2",
            "height"        : "30",
            "color_bkg"     : "#00d1d2",
            "margin_sides"  : "5",
            "margin_color"  : "#ffffff",
            "readme"        : "height px, margin %",
            "this"          : "spacer" 
        },

\
**RESULTADO**

![spacer_v2](https://i.imgur.com/acTWMB4.png)

\
**VARIABLES**

|  VARIABLE   |  DESCRIPCIÓN  |
|-------------|---------------|
| __type__    |  __No cambiar este valor__. Describe el tipo de bloque.  |
| __height__  | Altura en pixeles del espacio a insertar. El valor predefinido es "50". |
| __color_bkg__    | Color del background en formato hexadecimal. El valor predefinido es "transparent". |
| __margin_sides__ | Ancho de cada margen en porcentaje, donde el 100% es 600px. No usar un valor mayor a 49. El default es "5". |
| __margin_color__ | Color del background de los márgenes en formato hexadecimal. El valor predefinido es "transparent". |
| __readme__  | ___No usada por la plantilla___. Solo es un comentario para recordar las unidades a usar. |
| __this__    | ___No usada por la plantilla___. Se usa para comentarios, puede dejarse en blanco. |


\
\
\
\
<a name="block-cta1_v2"></a>
# cta1_v2

**DESCRIPCIÓN**

Muestra un Call To Action.

Assets gráficos requeridos:

* Imagen PNG de fondo transparente con el CTA a mostrar. Es preferible que el ancho real de la imagen sea mayor al tamaño que se pretenda mostrar el CTA.

\
**JSON** 

        {
            "type"          : "cta1_v2",
            "widthbutton"   : "220",
            "color_bkg"     : "transparent",
            "button"        : "cta-bw-compra-aqui.png",
            "margin_top"    : "50",
            "margin_bottom" : "0",
            "url_cta"       : "https://compraiqos.com.mx/",
            "this"          : "CTA cta-bw-compra-aqui"
        },

\
**RESULTADO**

![cta1_v2](https://i.imgur.com/G14wdFA.png)

\
**VARIABLES**

|  VARIABLE   |  DESCRIPCIÓN  |
|-------------|---------------|
| __type__    |  __No cambiar este valor__. Describe el tipo de bloque.  |
| __widthbutton__   | Ancho en pixeles de la imagen a mostrar. El ancho real de la imagen debe ser mayor al valor usado aquí. |
| __color_bkg__     | Color del background en formato hexadecimal. El valor predefinido es "transparent". Es importante que la imagen usada tenga transparencia para que se integre adecuadamente con el fondo declarado aquí. |
| __button__        | Nombre del archivo de la imagen a usar para el CTA. |
| __margin_top__    | Margen superior en pixeles. El valor predefinido es "50" |
| __margin_bottom__ | Margen inferior en pixeles. El valor predefinido es "50" |
| __url_cta__       | URL al que debe apuntar el CTA. Ver notas sobre el URL abajo. |
| __this__          | ___No usada por la plantilla___. Se usa para comentarios, puede dejarse en blanco. |


# **Notas sobre el URL**

Además del protocolo HTTP el url puede usar otros protocolos. Estos son los casos más comunes:

|  Caso              | URL a usar  |
|--------------------|---------------|
| __Llamada telefónica__ | Usar el protocolo "tel" con el número telefónico a 10 dígitos, sin espacios:<br>"tel:5555555555" |
| __Mensaje de Whatsapp__ | Se usa la la API de Whatsapp mandando el mensaje codificado.<br>1.- Codificar el mensaje a mandar en https://www.urlencoder.org/<br>2.- El URL a usar sera "https://wa.me/?text=" seguido del mensaje codificado en el paso 1.
| __Invocar el envío de un SMS__ | El protocolo SMS no está soportado en un email por restricciones en los clientes de correo, pero se puede usar un acortador de enlaces para que sea el acortador de mensajes el que use el protocolo SMS. <br>1.- Formar el URL del número a contactar incluyendo el código de país. Por ejemplo, para el número "5592253374" el URL debe ser: __sms://+525592253374__ Nótese que se tiene que incluir el código de país para que funcione (+52 para México)<br>2.- Usar https://cutt.ly/ y obtener un short link para el URL obtenido en el paso 1. El URL a usar en el correo debe ser el obtenido en cutt.ly |








\
\

___

* [Regreso al índice](README.md)
* [**Previo:** 3.4 Inicialización de proyecto de correo](3_4_Inicio_de_proyecto.md)
* [**Siguiente:** 3.6 Pre-Produción de HTML](3_6_preproducion_html.md)