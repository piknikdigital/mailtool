**3. Producción de correo HTML**
==

## **3.1 Carpetas de trabajo local, OneDrive - PIKNIK, Google Drive y FTP**
---


### **3.1.1 Carpetas de trabajo local**

Las carpetas de Mailtool son las siguientes:

    /
    ├---app/
    |   ├---classes/
    |   ├---cli/  
    |   |   └---_JSON/  
    |   |   └---includes/  
    |   |       └---21-XXX-data/  
    |   |       └---22-XXX-data/  
    |   |       └---23-XXX-data/  
    |   |       └---components/  
    |   ├---json-data/  
    |   |   └---json/  
    |   └---views/  
    |
    ├---email/
    |  
    └---vendor/


Las carpetas de interés son:

* **app/json-data/json/**: Carpeta donde se alojan los archivos JSON que definen el layout y contenido de cada correo HTML a producir. Al compilar estos archivos JSON con comandos CLI, se produce el HTML final. Cada archivo JSON está ligado a un correo HTML.

* **app/cli/_JSON/**: El archivo JSON descrito en el párrafo anterior tiene una estructura muy compleja para crearlo desde cero, por lo que es necesario usar herramientas para su creación. Usando comandos CLI, en esta carpeta se crean archivos PHP (ver sección 3.4) donde se vierten los datos que describen a cada correo, así como el layout general del mismo. Al compilar estos archivos PHP, se puede crear el archivo JSON requerido.

* **email/**: Carpeta donde se crean los correos HTML. La carpeta no existe en una instalación nueva de MailTool, esta carpeta y su contenido se crean de manera dinámica conforme se usa la aplicación para crear correos.

### **3.1.2 OneDrive**

Las carpetas de OneDrive - PIKNIK usadas son:

    /Users/armandoromero/OneDrive - PIKNIK/
    |
    ...
    ├---2020/
    |   ...
    |   └---TASKS-PMI-2020/
    |
    ├---2021/
    |   ...
    |   └---TASKS-PMI/
    |
    ├---2022/
    |   ...
    |   └---TASKS-PMI/
    |
    ├---2023/
    |   ...
    |   └---TASKS-PMI/
    |
    ...


Cada carpeta contiene los archivos de trabajo de cada año desde 2020. Dentro de estas carpetas, el trabajo se divide en meses y dentro de cada mes por dias. Por ejemplo, la solicitud recibida el 3/abr/2023 para realizar el correo **SMK Lounge** se encuentra en la siguiente carpeta de OneDrive:

**/Users/armandoromero/OneDrive - PIKNIK/2023/TASKS-PMI/PMI.23.04/03 SMK Lounge/**

El contenido de esta carpeta es el siguiente:

    /Users/armandoromero/OneDrive - PIKNIK/2023/TASKS-PMI/PMI.23.04/03 SMK Lounge/
    |
    ├---23.45-assets/
    |   ├---23.45-1b.jpg
    |   ├---23.45-ico1.png
    |   ├---23.45-ico2.png
    |   ├---23.45-ico3.png
    |   ├---23.45-ico4.png
    |   └---23.45-ico4.png
    |
    ├---PSD/
    |   └---23.45 IQOS_2023_SMK_Launch.psd
    |
    ├---45 BUILD CLI.xlsx
    |
    ├---45 Release.txt
    |
    └---Journey_CRM_SMK_Lounge_2023.xlsx


Donde los archivos mostrados tienen la siguiente función:

* **ARCHIVOS DE ENTRADA**: Se proporcionan en el mail donde se solicita la creación del correo HTML. Este correo es enviado por Content Pinik y recibido por Desarrollo Piknik.
  * **23.45 IQOS_2023_SMK_Launch.psd**: Editable PSD creado por el equipo de diseño con el correo a maquetar. Este archivo ya fue aprobado por cliente, pero está sujeto a cambios de última hora. Por su tamaño, este archivo de envía mediante FTP.
  
  * **Journey_CRM_SMK_Lounge_2023.xlsx** Archivo Excel con datos relevantes para creación del correo: links de los Call To Action, Subject, Preheader, plataforma CRM de destino, nombre del correo y un thumbnail de preview del correo. Este archivo es creado por la Content Sr encargada de los correos de PMI y es requisito indispensable para crear los correos.

* **ARCHIVOS DE TRABAJO**: Estos archivos se crean a partir de la solicitud inicial descrita arriba.
  * **23.45-assets/** Los archivos de esta carpeta son los assets extraidos con photoshop del editable PSD proporcionado. La extracción de estos assets debe corresponder a las necesidades establecidas por las plantillas prediseñadas en la aplicación MailTool. Los detalles de estos requisitos se explican en la sección de componentes de plantilla más adelante.
  
  * **45 BUILD CLI.xlsx**: Este es un archivo Excel que nos sirve para condensar la información obtenida en el archivo Excel de entrada y contiene macros que nos permite crear datos de entrada para la aplicación MailTool. La sección 3.3 describe cómo crear este archivo.
  
  * **45 Release.txt**: Este es un archivo de texto donde condensamos la información de trabajo y escribimos el correo donde reportaremos la finalización del trabajo.
  


### **3.1.3 Catálogo Mail Piknik PMI en Google Drive**

El siguiente link contiene un listado de todos los correos HTML entregados a Philip Morris desde 2020. 

**[Link: Catálogo Mail Piknik PMI](https://docs.google.com/spreadsheets/d/10iQOON8sM7vlNSYMGpIZ-ZGJQtpXzd0CmAuEVRZCsY4/edit?usp=sharing)**

En este catálogo cada pestaña corresponde a un año y muestra la siguiente información:

* **ID**: un número consecutivo que identifica a cada correo. La cuenta reinicia cada año y consta de dos partes: una para el año y otra para el número de correo en ese año. Así, el primer correo de 2023 se identifica como 23.1, el décimo correo de 2021 será 21.10, el segundo correo de 2020 será 20.2, etc.
* **TARGET**: La plataforma CRM destino. Hay tres posibles valores: **DCE** será para la instancia de Salesforce de Suiza, **LOCAL** para la instancia local (México) de Salesforce, y **HTML** será para aquellos casos aislados donde únicamente se nos solicita entregar HTML y assets sin subirlo a ningún CRM.
* **NAME**: Nombre de la campaña.
* **SUBNAME**: Nombre del correo.
* **REF**: Si el correo está basado en uno hecho previamente, aquí se indica el ID de ese correo base.
* **PREVIEW LINK**: El link donde se puede ver el correo creado.
* **CRM FOLDER**: Carpeta dentro del CRM donde se aloja el correo.
* **NAME IN CRM**: Nombre del correo en el CRM. Para los correos producidos para DCE, es común que este nombre sea cambiado posteriormente por el personal de PMI, por lo este dato podría no coincidir con la información actual en el CRM.



### **3.1.4 FTP**

Los accesos actuales para ingresar son:

Cuenta para recibir los editables PSD:

[TBD]

Cuenta para subir los correos HTML:

[TBD]


