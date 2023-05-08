# **3.3 Organización de información de las piezas de correo en Excel**

Esta sección describe la creación del archivo Excel **XX BUILD CLI.xls** mencionado en los puntos 3.1.2 y 3.2.2 de la sección anterior.

La solicitud de trabajo del producción de correo HTML incluye un archivo Excel donde para cada correo solicitado se incluye la siguiente información:

* Nombre de la campaña
* Nombre del correo
* Thumbnail del correo a producir
* URL de todos los links o CTA
* CRM de destino
* Subject
* Preheader

Ejemplo:
![](https://i.imgur.com/QQIRGww.png)


A partir de ese archivo derivamos un nuevo archivo Excel donde combinando la información con formulas, obtenemos el url del link de preview, la carpeta dentro del CRM donde se publicará el correo o campaña, etc.

La siguiente imagen muestra un archivo ya terminado:
![](https://i.imgur.com/E6QIb8s.png)


Para crear este archivo, tomamos como base el archivo vacío en 

(LOCALIZACION DE PLANTILLA)

## **Llenado del archivo:**

A partir de la columna B, cada columna corresponde a un correo dentro de la campaña. La información de cada fila se llena de la siguiente manera:

| Fila | DESCRIPCIÓN  |
|------|--------------|
| **1: Nombre**  | Se usa el contenido de la fila **Name** del Excel fuente. |
| **2: ID** | Es un número consecutivo para el correo a crear y debe ser congruente con el ID que se va a asignar en el catálogo de correos producidos descrito en la [sección 3.1](3_1_Carpetas_de_trabajo.md#313-cat%C3%A1logo-mail-piknik-pmi-en-google-drive).  No se indica el año, solamente el consecutivo del ID. <br> Ejemplos: <br> &bull; 31<br>&bull; 24|
| **3: Subject** | Corresponde al **subject** del correo como se describe en el archivo Excel fuente. |
| **4: Preheader** | Corresponde al **preheader** del correo como se describe en el archivo Excel fuente. |
| **5 a 7: Año, mes, día** | Corresponde a números de dos dígitos (relleno con cero a la izquierda si es necesario) que identifican la fecha donde se espera subir a CRM el trabajo terminado. Si no hay fecha requerida de entrega, corresponde a la fecha en la que se espera terminar el trabajo. Debe ser de preferencia el mismo dato para todas las columnas. |
| **8: Carpeta** | Nombre de la subcarpeta local donde se van a guardar los archivos JSON/HTML de cada correo. Debe tener solamente minusculas, con guiones medios en lugar de espacios en blanco. Debe ser el mismo valor para todas las columnas. <br> Ejemplos: <br> &bull; leads-abril<br>&bull; valentin-promo<br>&bull; adopta-el-cambio|
| **9: Nombre de archivo JSON** | Usar aquí el nombre del correo. Al igual que en el caso anterior, debe tener solamente minusculas, con guiones medios en lugar de espacios en blanco. <br> Ejemplos: <br> &bull; dormant-day-100-pp-diagnosis-offer<br>&bull; leads-abril-risk-reduction<br>&bull; leads-educational-marzo |
| **10: Nombre de carpeta en DCE** | Nombre de la carpeta en DCE. Usar un nombre corto capitalizado, es posible usar espacios en blanco. Debe ser el mismo valor para todas las columnas. Si el correo destino no es para DCE, usar simplemente **NA** para indicar que no aplica. <br> Ejemplos: <br> &bull; LAUS MARCH<br>&bull; SMS Callback<br>&bull; Heets April |
| **11: Nombre del correo en DCE** | Nombre del correo en DCE. Dejar el texto capitalizado, es posible usar espacios en blanco. Si el correo destino no es para DCE, usar simplemente **NA** para indicar que no aplica. <br> Ejemplos: <br> &bull; LEADS Abril Pain Points<br>&bull; Dormant Day 140 MGM & Care Benefits<br>&bull; LEADS Abril Real Tobacco |
| **12 y 15**| No usar. Dejar como valor **NA** |
| **13: Nombre de carpeta en Instancia local** | Nombre de la carpeta en instancia local. Usar un nombre corto capitalizado, es posible usar espacios en blanco. Debe ser el mismo valor para todas las columnas. Si el correo destino no es para la instancia local, usar simplemente **NA** para indicar que no aplica. <br> Ejemplos: <br> &bull; Leads Abril<br>&bull; Valentin Promo<br>&bull; Adopta El Cambio |
| **14: Nombre del correo en Instancia local** | Nombre del correo en instancia local. Dejar el texto capitalizado, es posible usar espacios en blanco. Si el correo destino no es para la instancia local, usar simplemente **NA** para indicar que no aplica. <br> Ejemplos: <br> &bull; Apertura IQOS Corners LEADS<br>&bull; IQOS vs Vape LEADS<br>&bull; LENDING Hypercare Journey Day-21 |
| **16: ID folder instancia local** | Número del consecutivo de la carpeta dentro de la instancia local. <br> Ejemplos: <br> &bull; 160<br>&bull; 179<BR>Entrar al CRM antes de poner este valor para saber cuál es el número que sigue en la secuencia de correos publicados. En la imagen de abajo (Salesforce, instancia local), vemos que la última carpeta es la 174, el consecutivo a usar para la siguiente campaña seria el 175.<br><br> ![](https://i.imgur.com/5tRAi5m.png)|
| **17: Plataforma Destino** | Los valores posibles aquí son **DCE** o **LOCAL**. |



## **Filas con Resultados**

Al llenar de valores las filas previamente mencionadas, las fórmulas de los renglones inferiores generan información requerida para continuar con el proceso:


| Fila | DESCRIPCIÓN  |
|------|--------------|
| **18-21: INSTANCIA LOCAL** | Valores a usar para el release de un correo en la instancia local: <br>  &bull; La ruta del CRM donde estan los correos HTML. <br>  &bull; La carpeta base donde se publica la campaña de correos. <br>  &bull; El nombre de cada correo. <br>  &bull; El link de preview de cada correo. |
| **39-42: DCE** | Similar a lo previo, pero para DCE: <br>  &bull; La ruta del CRM donde estan los correos HTML.<br>  &bull; La carpeta base donde se publica la campaña de correos.<br>  &bull; El nombre de cada correo.<br>  &bull; El link de preview de cada correo. |
| **23-39: Variables para PHP** | Conjunto de variables y su valor asociado. La [siguiente sección](3_4_Inicio_de_proyecto.md) explica cómo usar los valores que se generaron aquí. |


___

Navegación:

* [Regreso al índice](README.md)
* [**Previo:** 3.2 Descripción general del flujo de trabajo](3_2_Flujo_de_trabajo.md)
* [**Siguiente:** 3.4 Inicialización de proyecto de correo](3_4_Inicio_de_proyecto.md)
