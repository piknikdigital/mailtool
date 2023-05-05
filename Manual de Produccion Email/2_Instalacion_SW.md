**Instalación de herramientas requeridas**
===

## **Visual Studio Code**
---

  Descargar el instalador en https://code.visualstudio.com/ y ejecutarlo.
  


## **FileZilla**
---
Ir a https://filezilla-project.org/ y descargar el instalador del cliente FileZilla.


## **PHP 7.4**
---

  Para instalar PHP en la mac es necesario instalar primero **Homebrew**, un gestor de paquetes para Mac.

  ### **Instalación de Homebrew**
  Abrir la aplicación **Terminal** y ejecutar en la línea de comandos:

  ```bash
  /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
  ```
<!---  Actualizar y verificar que todo este bien con los siguientes comandos:

  ```bash
  brew update
  ```

  ```bash
  brew upgrade
  ```

  ```bash
  brew doctor
  ```
--->

  ### **Instalación de PHP usando Homebrew**

  Ejecutar el siguiente comando en la terminal:
  ```bash
  brew install php@7.4
  ```

  verificar que la versión solicitada sea la que se ejecute por default con el siguiente comando:

  ```bash
  php -v
  ```

Si la version en ejecución es 8.x.x, entonces cambiar a la versión 7.4 con los siguientes dos comandos

  ```bash
  brew unlink php
  brew link php@7.4
  ```

  en caso de problemas, consultar https://daily-dev-tips.com/posts/installing-php-on-your-mac/ para más detalles.



## **Composer**
---

  Siguiendo las instrucciones descritas en https://getcomposer.org/download/ se debe realizar lo siguiente:

  Abrir la app **Terminal**, e instalar Composer copiando y pegando esta secuencia de comandos:

  ```bash
  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
  php composer-setup.php
  php -r "unlink('composer-setup.php');"
  ```
  La secuencia previa de comandos descarga el instalador en la carpeta actual, verifica que la descarga sea correcta, ejecuta el instalador y lo borra al terminar.

  Después de eso movemos la aplicación Composer a una carpeta en nuestro PATH para que podamos ejecutarla desde cualquier carpeta ejecutando el siguiente comando en la terminal:

  ```bash
  sudo mv composer.phar /usr/local/bin/composer
  ```

  Nota: El comando sudo pedirá el password del sistema para poder continuar.

  Finalmente, cambiar los permisos del archivo con el siguiente comando:

  ```bash
  sudo chmod 755 /usr/local/bin/composer
  ```

  Probar la instalación:
  ```bash
  composer --version
  ```


## **MailTool**
---

MailTool es una aplicación desarrollada en PHP para la creación de código HTML. No tiene interfaz gráfica, consta de un conjunto de herramientas en la línea de comandos para generar archivos de datos JSON con los cuales podremos generar código HTML auxiliándonos en plantillas TWIG.

La aplicación se encuentra en el repositorio Github de Pikink. Para instalarla ir a https://github.com/piknikdigital/mailtool y presionar el botón verde **Code** para llegar a la opción **Download ZIP**

Descomprimir el ZIP descargado en la carpeta deseada. El archivo principal de la aplicación es **index.php**. Para este ejemplo, supondremos que la carpeta a usar es la carpeta de descargas. El archivo index.php estará en:

**/Users/armandoromero/Downloads/mailtool-main**

Esta es la ruta donde deberá instalarse un servidor local para ejecutar la aplicación. La otra ruta de interés es aquella donde pueden ejecutarse los comandos CLI (Command Line Interface). Considerando este ejemplo, la ruta será:

**/Users/armandoromero/Downloads/mailtool-main/app/cli**

Estas rutas serán diferentes si el archivo ZIP se instaló en otra carpeta.

Antes de poder usar la aplicación, es necesario instalar las dependencias de MailTool con Composer. Abrir la terminal en la carpeta donde se encuentra index.php desde el finder dando click izquierdo en la carpeta principal de MailTool como se muestra en la imagen y seleccionando las opciones **Servicios > Nueva pestaña de terminal en la carpeta**

![](https://i.imgur.com/skdBwf8.png)

Luego de eso, ejecutar el siguiente comando en la terminal para instalar las dependencias requeridas:

  ```bash
  composer install
  ```

<!--- Ahora es necesario incorporar las nuevas carpetas a la aplicación con el siguiente comando:

  ```bash
  composer dump-autoload -o
  ```
--->

Con esto queda instalada la aplicación.



## **MAMP**
---
  Ir a https://www.mamp.info/en/downloads/ y descargar el instalador para la versión gratuita de MAMP. 

  Ejecutar el instalador de MAMP siguiendo las instrucciones en pantalla.

  Después de la instalación, en la carpeta **Aplicaciones** debe haber una app llamada **MAMP PRO.app** la cual tiene costo, y una carpeta **MAMP** con la versión gratuita de la aplicación. En esa carpeta, ejecutar la aplicación **MAMP.app**


## **Creación de un servidor local para la aplicación MailTool**
---

Ejecutar MAMP para crear un servidor local. La versión gratuita permite crear un solo servidor.

![](https://i.imgur.com/EEPZpv1.png)


Para ligar la carpeta donde se encuentra el código fuente de MailTool con el servidor local, dar click al engrane de preferencias en la esquina superior izquierda.

![](https://i.imgur.com/MMkKaj2.png)

Ir a la pestaña **Server** y presionar el botón **Choose** para seleccionar la carpeta donde se encuentra el archivo index.php de **Mailtool**. Una vez seleccionada, aceptar y cerrar.

![Imgur](https://i.imgur.com/RCeDcW2.png)

Al regresar a la pantalla principal, verificar que la versión de PHP sea la 7.4 y presionar el botón **Start** de la esquina superior derecha para arrancar el servidor. Una vez que en su lugar aparezca el texto **Stop**, el servidor ya está en operación. 

Ir al navegador y visitar la direccion **http://localhost:8888/** para ver la pantalla de bienvenida de MailTool. 

![](https://i.imgur.com/b6FNofE.png)






___

Navegación:

* [Regreso al índice](README.md)
* [**Previo:** 1. Lista de requisitos SW](1_Requisitos_SW.md)
* [**Siguiente:** 3.1 Carpetas de trabajo local, OneDrive - PIKNIK, Google Drive y FTP](3_1_Carpetas_de_trabajo.md)
