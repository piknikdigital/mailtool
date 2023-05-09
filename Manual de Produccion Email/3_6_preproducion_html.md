# **3.6 Pre-Produción de HTML

Esta sección describe la creación del archivo JSON requerido para crear un archivo HTML.

Una vez que los archivos PHP descritos en la sección 3.4 han sido configurados, podemos crear la plantilla del archivo JSON necesario para producir un correo HTML. Primero buscamos desde el finder la carpeta CLI y seleccionamos la opción **Nueva pestaña de terminal en la carpeta** para abrir un sesión de la terminal en esa carpeta.

![](https://i.imgur.com/1fd2vcP.png)


Una vez abierta la terminal, ejecutar con PHP el siguiente comando CLI:

  ```bash
  php mkroot.php XX
  ```

donde XX es el ID del correo a crear. Asumiremos nuevamente como ejemplo que vamos a crear el correo 23.39. El comando a usar sera:

  ```bash
  php mkroot.php 39
  ```

Si los archivos PHP de datos fueron llenados correctamente, deberíamos recibir un mensaje como el siguiente:


  ```bash
    ┌──────────────────────────────────────────────────┐
    │ El archivo:                                      │
    ├──────────────────────────────────────────────────┤
    │ pmi-230328-ID23.39-dormant-day-120-pp-heets-HTML │
    ├──────────────────────────────────────────────────┤
    │ ha sido creado.                                  │
    └──────────────────────────────────────────────────┘
  ```

Nótese que el nombre del archivo fue creado combinando los datos de la fecha, el ID y el nombre para el archivo JSON.

Para evitar sobreescribir un archivo JSON preexistente con datos, el archivo fue creado por default en la carpeta CLI, así que hay que mover manualmente el archivo a la carpeta de trabajo JSON requerida. De acuerdo a los datos que le proporcionamos a los archivos PHP en la sección 3.4, la carpeta que debemos usar es la siguiente:

    /app/json-data/pmi2303/pmi-230328-dormant/

Esta carpeta fue creada por el comando mkroot.php la primera vez que se ejecuta el comando con ese conjunto de datos. Diferentes datos crearán diferentes carpetas. Nótese que esta carpeta fue creada combinando los datos $p_yy (año), $p_mm (mes), $p_dd (día) y $p_name4folder (nombre de la carpeta)

Una vez que el archivo JSON fue movido, su ruta debe ser la siguiente:

    /app/json-data/pmi2303/pmi-230328-dormant/pmi-230328-ID23.39-dormant-day-120-pp-heets-HTML.json


Una vez que contamos con el archivo JSON en la ruta correcta, podemos comenzar la producción de correos HTML.



En su estado actual, este archivo JSON *ya* puede producir un correo HTML, pero no contiene ni los textos, ni las imágenes, links o colores requeridos. Es necesario hacer esto manualmente con **Visual Studio Code** para editar su contenido.

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
* [**Previo:** 3.5 Bloques de componentes de e-mail](3_5_componentes_email.md)
* [**Siguiente:** 3.7 Produción HTML](3_7_Produccion_HTML.md)
