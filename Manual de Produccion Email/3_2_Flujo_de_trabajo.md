# **3.2 Descripción general del flujo de trabajo**

El flujo general es el siguiente. Los detalles son explicados más adelante.

1. **Solicitud de trabajo**: Content Piknik envía un correo a Desarrollo Piknik con la solicitud de correo incluyendo los editables PSD y los detalles de cada correo en un archivo Excel.

2. **Creación de archivos iniciales** A partir del Excel inicial se crea otro archivo Excel con formulas donde se condensa la información de todos los correos a crear y se crean nuevos datos a partir de estos ([Detalles en Sección 3.3](3_3_Organizacion_de_informacion.md)). Usando un comando CLI se crea un conjunto de archivos PHP para cada correo donde se almacenarán los datos del archivo excel mencionado y el layout general del correo a crear ([Detalles en Sección 3.4](3_4_Inicio_de_proyecto.md)).

3. **Extracción de assets** Usando Photoshop se extraen los assets gráficos y el texto de cada correo HTML. Los assets gráficos se guardan en una carpeta para cada correo, y los textos del correo se guardan en los archivos PHP de datos del paso previo.

4. **Creación y configuración de archivo JSON** Usando un comando CLI se compila la información recopilada en los archivos PHP de datos para crear un archivo JSON donde viene definida la estructura del correo a crear. El archivo JSON creado contiene la estructura general del correo sin datos. Es requerido llenar manualmente todos los campos de esa estructura pada poder definir colores, textos, links, imagenes y tamaños de los componentes del correo.

5. **Creación de correo HTML para link de preview** Una vez requisitados los datos dentro del archivo JSON se compila este archivo usando un comando CLI para producir un archivo HTML. Este archivo, junto con sus assets gráficos asociados, forman el correo HTML. Este conjunto de archivos se sube a un servidor, cuyo link se tiene que compartir con PMI como el preview del correo.

6. **Carga de assets gráficos en Salesforce** PMI tiene dos instancias del CRM (Salesforce) para el envio de correos. La instancia DCE en Suiza se usa para el segmento clientes, mientras que la instancia local (en México) se usa para las campañas de leads. Dependiendo del correo solicitado, los assets gráficos se tienen que subir en alguna de esas instancias.

7. **Producción de correo HTML para CRM** Una vez que los assets han sido cargados en el CRM, se tiene que obtener el link de cada uno de esos archivos y almacenar esa información en uno de los archivos PHP del paso 2. El archivo JSON se compila nuevamente indicando que el destino es ahora una de las instancias del CRM para producir un nuevo archivo HTML. Este archivo CRM es el que tiene que cargarse en el CRM.

8.  **Release a cliente** Finalmente, una vez que se tiene el link de preview y los assets correspondientes están disponibles en el CRM, se le envía esta información a cliente por correo. La información que debe incluirse es:
   * La ruta en el CRM del correo o campaña creada
   * El link de preview de cada correo producido
Ocasionalmente, cliente solicita únicamente el HTML y assets para que otra agencia haga el envío del correo. En esos casos, el entregable es únicamente un archivo ZIP con los assets gráficos y el HTML producido para el link de preview.


___

Navegación:

* [Regreso al índice](README.md)
* [**Previo:** 3.1 Carpetas de trabajo local, OneDrive - PIKNIK, Google Drive y FTP](3_1_Carpetas_de_trabajo.md)
* [**Siguiente:** 3.3 Organización de información de las piezas de correo en Excel](3_3_Organizacion_de_informacion.md)

