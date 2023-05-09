# **3.7 Produción de HTML


Una vez que el archivo JSON se encuentra en la carpeta correspondiente, este archivo *ya* puede producir un correo HTML, pero no contiene ni los textos, ni las imágenes, links o colores requeridos. Es necesario hacer esto manualmente con **Visual Studio Code** para editar su contenido.

Con **Visual Studio Code** abrimos el archivo para inspeccionar su contenido. Los primeros renglones no requieren edición alguna, lo único que es necesario modificar es el contenido de la sección **["blocks"]** , poco antes del renglón 60.

Cada componente del correo a crear esta delimitado por llaves **{ }**. La sección 3.5 lista la configuración de cada uno de los bloques disponibles, para poder crear el correo HTML sólo hay que cambiar los valores predefinidos por los valores correpondientes.

Antes de empezar, hay que preparar la carpeta destino copiando en ella los assets gráficos que requiere el correo. Estos deben crearse extrayendo del PSD que se nos proporcionó para el correo a crear los elementos gráficos que requiere cada componente. En la sección 3.5 se dan los detalles de los assets gráficos que requiere cada componente.

Para este ejemplo, la carpeta destino será:

/email/pmi2303/pmi-230328-dormant

Esta carpeta también fue creada por el comando mkroot.php basandose en los datos de fecha y nombre de carpeta. Una vez que los assets gráficos han sido copiados a esa carpeta, regresamos a la sesión de la terminal donde ejecutamos mkroot.php y ahora ejecutamos este comando CLI:


  ```bash
  php mkhtml.php 39
  ```

Al igual en en caso previo, usamos el valor "39" porque es el ID del correo requerido, pero para otros correos usaríamos su ID correspondiente.

Si no hay errores de sintaxis en el archivo JSON después de que lo editamos (el error más común es que falte o sobre una coma), debemos recibir la siguiente respuesta:

  ```bash
    ┌──────────────────────────────────────────────────────────────────────────────────────────────┐
    │ El archivo:                                                                                  │
    ├──────────────────────────────────────────────────────────────────────────────────────────────┤
    │ ../../email/pmi2303/pmi-230328-dormant/pmi-230328-ID23.39-dormant-day-120-pp-heets-HTML.html │
    ├──────────────────────────────────────────────────────────────────────────────────────────────┤
    │ ha sido creado.                                                                              │
    └──────────────────────────────────────────────────────────────────────────────────────────────┘
  ```







___

* [Regreso al índice](README.md)
* [**Previo:** 3.6 Pre-Produción de HTML](3_6_preproducion_html.md)
* [**Siguiente:** 3.8 Carga de assets en Produción HTML](3_7_Produccion_HTML.md)



* 
* [**Siguiente:** 3.6 Pre-Produción de HTML](3_6_preproducion_html.md)

