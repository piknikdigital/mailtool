# **3.9 Producción HTML para CRM**


En esta sección se describe cómo construir código HTML apto para cargar en Salesforce.

En la sección 3.7 se describió cómo crear el código HTML para un correo con la finalidad de subirlo a un servidor y que nos sirva como preview del email. Este código HTML no podemos usarlo directamente en el CRM debido a la ubicación de los assets gráficos. Es necesario cargar las imágenes al CRM, obtener el link de cada imagen y usar esa dirección al referirnos a cada imagen del correo. 

Por ejemplo, el siguiente código HTML:

  ```bash
    <img src="header-iqos-bw-2.png" width="600" height="auto" align="absbottom" alt="" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;margin:0;padding:0;border:0;">
  ```

hace referencia a la imagen "header-iqos-bw-2.png" ubicada dentro de la misma carpeta que el archivo HTML que la está usando. Si intentamos usar este código en un correo, el cliente de correo no podrá encontrar la imagen, es necesario usar un url completo. Si cargamos esta imagen en el CRM y obtenemos el URL donde fue almacenada la imagen, obtenemos este URL:

  ```bash
https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/4/24d735a2-d1d9-4b9c-b73b-e8aa9e1edced.png
  ```

Ahora reemplazamos la dirección de la imagen en el código previo para obtener:

  ```bash
      <img src="https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/4/24d735a2-d1d9-4b9c-b73b-e8aa9e1edced.png" width="600" height="auto" align="absbottom" alt="" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; display: block;margin:0;padding:0;border:0;">
  ```

Este es el tipo de reemplazo que necesitamos hacer para todos los assets gráficos.

El proceso para automatizar este reemplazo consiste en 3 pasos:

1. Tener una relación de nombres de archivo con su respectivo URL

2. Crear un nuevo archivo JSON donde se reemplacen los nombres de imagen con los URL.

3. Compilar el nuevo archivo JSON para generar un nuevo archivo HTML


## **Paso 1: relación de nombres de archivo y URL**
--

En la sección 3.4 usamos el comando CLI __mkinit.php__ para generar un conjunto de archivos de arranque. Para este paso vamos a usar el archivo **YY.ID-replacements.json** que se generó.

El archivo de inicio contiene esto:

  ```bash
    {
        "replacements" : 
        [
            {
                "HTML"       : "23.XXX-1.jpg",
                "FSH"        : "",
                "DCE"        : ""
            }
        ]
    }
  ```
Para llenar este archivo simplemente se agregan tantos bloques de variables como imagenes existentes. Las variables FSH se usan para los url de la instancia local y DCE para los url de DCE.

El siguiente es un ejemplo de un archivo JSON con urls obtenidos al cargar assets a la instancia local. Este archivo nos servira para crear un correo HTML para cargar en la instancia local.  Nótese que las variables DCE no se utilizaron, pero si el correo necesita cargarse en ambas instancias de Salesforce, entonces será necesario llenarlas también con los URL correspondientes.

```bash
        {
            "replacements" : 
            [
                {
                    "HTML"       : "23.76-1.jpg",
                    "FSH"        : "https://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/02457c1c-98e6-4774-8a46-a080c17f58a3.jpg",
                    "DCE"        : ""
                },
                {
                    "HTML"       : "23.76-2.png",
                    "FSH"        : "https://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/d3460b96-cf01-4866-ad1b-2aa45ea76016.png",
                    "DCE"        : ""
                },
                {
                    "HTML"       : "23.76-3.jpg",
                    "FSH"        : "https://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/fca5366a-80c9-4802-89b0-41ad284d8ccf.jpg",
                    "DCE"        : ""
                },
                {
                    "HTML"       : "23.76-4.jpg",
                    "FSH"        : "https://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/b4b33701-237d-4011-8aa4-2c08251e3300.jpg",
                    "DCE"        : ""
                },
                {
                    "HTML"       : "code-turquesa-menosolor.png",
                    "FSH"        : "https://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/98393e09-133e-4271-a132-5ca56ab16394.png",
                    "DCE"        : ""
                },
                {
                    "HTML"       : "cta-bw-blanco-localiza-tu-tienda.png",
                    "FSH"        : "https://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/54a3223f-bfd8-46cd-b68f-e86635bb881a.png",
                    "DCE"        : ""
                },
                {
                    "HTML"       : "cta-bw-compra-ahora.png",
                    "FSH"        : "https://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/1/8ce55c07-cc71-44ba-a57d-56350b7b60da.png",
                    "DCE"        : ""
                },
                {
                    "HTML"       : "footer-logo-fb.png",
                    "FSH"        : "https://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/2/01db0fc4-2d19-4b2c-8da0-25294b1d71d9.png",
                    "DCE"        : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/4/fca79aa7-a69a-4d8b-8d54-2734b3897b12.png"
                },
                {
                    "HTML"       : "footer-logo-ig.png",
                    "FSH"        : "https://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/2/ff0a0b9e-4605-410e-8aaa-7ded92ac68f7.png",
                    "DCE"        : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/4/1e22d0f0-759b-4d1b-a43a-a7c7843ae742.png"
                },
                {
                    "HTML"       : "footer-logo-iqos.png",
                    "FSH"        : "https://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/2/880793b6-bff4-4ca7-a074-c7dcbd9650db.png",
                    "DCE"        : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/4/3905730a-b8e5-4d82-bac7-bc792ec7da38.png"
                },
                {
                    "HTML"       : "header-iqos-bw-2.png",
                    "FSH"        : "https://image.email-futurosinhumo.com/lib/fe42157175640478741574/m/2/958050cd-c60b-46d5-a0e5-498d30f71575.png",
                    "DCE"        : "https://image.e.iqos.com/lib/fe3a15707564067e7d1073/m/4/24d735a2-d1d9-4b9c-b73b-e8aa9e1edced.png"
                }
            ]
        }
```

Una vez que se cuenta con el URL para todas las imágenes del correo, podemos continuar con el siguiente paso.

## **Paso 2: Creación de un nuevo archivo JSON**
--

Tomando como base el archivo JSON que se creó para generar la versión de preview del correo HTML, lo único que hay que hacer es reemplazar los nombre de imagen con los URL. Es posible hacerlo manualmente, pero también se puede usar el siguiente comando CLI:

```bash
php mkfork.php TARGET ID
```

Donde TARGET puede ser DCE para la instancia de Salesforce de Suiza o FSH para la instancia local de Salesforce.

Por ejemplo, el comando 

```bash
php mkfork.php FSH 76
```

nos permite generar el nuevo archivo JSON para el correo de ID23.76 donde las imágenes están referidas a las que fueron cargadas en la instancia local de Salesforce. Nótese que el nombre de archivo generado termina con __-FSH.json__ , lo cual nos indica que el HTML que se genere a partir de este nos servirá para subirlo a la instancia local, mientras que los archivos __-HTML.json__ que sirven para generar HTML para links de preview. Los archivos con terminación __-DCE.json__ nos permiten generar HTML para cargar en DCE.

Para evitar reemplazar por error un archivo pre-existente, el archivo se genera en la misma carpeta donde se ubican los comandos CLI. Antes de compilar este archivo, se necesita mover el archivo JSON a la misma carpeta donde se encuentra el archivo 
 __-HTML.json__


## **Paso 3: Generación de HTML para cargar en CRM**
--

Una vez que el nuevo archivo JSON ha sido movido a la carpeta correspondiente, basta con compilarlo con el siguiente comando CLI:

```bash
php mkhtml.php TARGET ID
```

donde TARGET puede ser __DCE__ o __FSH__.

El nuevo HTML generado puede ahora subirse al CRM.



___

* [Regreso al índice](README.md)
* [**Previo:** 3.8 Carga de assets al CRM](3_8_Carga_assets_CRM.md)
