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


Una vez que contamos con el archivo JSON en la ruta correcta, podemos comenzar la producción de correos HTML en la siguiente sección.


___

* [Regreso al índice](README.md)
* [**Previo:** 3.5 Bloques de componentes de e-mail](3_5_componentes_email.md)
* [**Siguiente:** 3.7 Produción HTML](3_7_Produccion_HTML.md)
