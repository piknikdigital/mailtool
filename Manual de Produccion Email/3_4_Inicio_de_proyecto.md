## **3.4 Inicialización de proyecto de correo**
---

La siguiente sección describe la creación de los archivos PHP mencionados en la sección 3.2.2.


En el finder, buscar la carpeta CLI dentro de Mailtool:

![](https://i.imgur.com/1fd2vcP.png)

Seleccionar la carpeta CLI con click izquierdo en "**Nueva pestaña de terminal en la carpeta**" para abrir una instancia de la terminal en esa carpeta y ejecutar con PHP el siguiente comando CLI:

  ```bash
  php mkinit.php XX
  ```

donde XX es el ID del correo a crear. Asumiremos como ejemplo que vamos a crear el correo 23.39. El comando a usar sera:

  ```bash
  php mkinit.php 39
  ```

Nótese que se omite el año, solo se usa el consecutivo. Este comando crea la carpeta "23-39-data" con los siguientes archivos PHP y JSON:

    /
    ├---app/
    |   ├---classes/
    |   ├---cli/  
    |   |   ├---_JSON/  
    |   |   |    └---23-39-data/ 
    |   |   |        ├---23.39-common.php
    |   |   |        ├---23.39-json-arguments-DCE.php
    |   |   |        ├---23.39-json-arguments-DCE2.php
    |   |   |        ├---23.39-json-arguments-FSH.php
    |   |   |        ├---23.39-json-arguments-ROOT-HTML.php
    |   |   |        └---23.39-replacements.json
    |   |   |
    |   |   └---includes/  
    |   ├---json-data/  
    |   └---views/  
    └---vendor/

Necesitamos llenar los datos de los archivos 23.39-common.php y 23.39-json-arguments-ROOT-HTML.php antes de crear el archivo JSON requerido para producir archivos HTML.

**23.39-common.php**

El siguiente es un fragmento del inicio del archivo:


  ```code
    <?php

    $p_id              = "000";
    $p_subject         = "xxx";
    $p_preheader       = "xxx";

    $p_yy              = "23";
    $p_mm              = "00";
    $p_dd              = "00";
    $p_name4folder     = "serverfolder";
    $p_name4json       = "jsonname";

    $p_name4folderDCE  = "folderdce";
    $p_mailname4DCE    = "NAME4CRM";
    $p_customerkey_DCE = "custkeyDCE";

    $p_name4folderFSH  = "folderfsh";
    $p_mailname4FSH    = "NAME4CRM";
    $p_customerkey_FSH = "custkeyFSH";
    $id_FSH_folder     = "999";

    //-----------------------------------------

  ```

En lenguaje PHP las variables tienen la forma 

**$Nombre_de_variable**. 

Las variables comienzan siempre con el símbolo "**$**" y no pueden tener espacios intermedios, pero se pueden usar guiones bajos para separar palabras. Para asignarle un valor a esa variable, necesitamos declarar una **sentencia**. Por ejemplo:

  ```code
  $variable1 = "valor";
  $variable2 = 1;
  ```

Las sentencias deben terminar siempre con punto y coma. En el ejemplo superior, en la primera sentencia se le asignó un texto a la variable y en la segunda un número. Nótese que la diferencia son las comillas, que siempre se usan para delimitar textos.

Las variables a las que necesitamos asignar un valor son todas desde $p_id hasta $id_FSH_folder. Los valores actualmente asignados son solamente valores predefinidos sin ningún significado. En la sección anterior el archivo excel produjo valores para estas variables, basta con reemplazar las sentencias predefinidas con las sentencias definidas en el archivo excel en las filas 23 a 37. Después de copiar y pegar, el inicio del archivo quedaría así:

  ```code
    <?php

      $p_id =  '39';
      $p_subject =  '¿Te gustaría mejorar tu experiencia de sabor con IQOS?';
      $p_preheader =  'Tenemos algunos consejos para ti. ';
      $p_yy =  '23';
      $p_mm =  '03';
      $p_dd =  '28';
      $p_name4folder =  'dormant';
      $p_name4json =  'dormant-day-120-pp-heets';
      $p_name4folderDCE =  'Dormant';
      $p_mailname4DCE =  'Dormant Day 120 PP HEETS';
      $p_customerkey_DCE =  'NA';
      $p_name4folderFSH =  'NA';
      $p_mailname4FSH =  'NA';
      $p_customerkey_FSH =  'NA';
      $id_FSH_folder =  'NA';

    //-----------------------------------------
  ```


**23.39-json-arguments-ROOT-HTML**

En este archivo hay una variable **$requiredBlocks** que nos permite definir el outline general del correo que se va a crear. El siguiente es un fragmento del archivo con valores predefinidos:


  ```code
    <?php

      require_once("23.39-common.php");

      $target    = "HTML";       // "HTML", "DCE" o "FSH"

      $filename  = $filename_base . $target;
      $subject   = $subject_base;
      $preheader = $preheader_base;

      switch ($target)
      {
          case "DCE":  $path = $path_DCE; $nameincrm = $name_in_DCE; $customerkey=$customerkey_DCE; break;
          case "FSH":  $path = $path_FSH; $nameincrm = $name_in_FSH; $customerkey=$customerkey_FSH; break;
          default:     $path = "";        $nameincrm = "";           $customerkey="" ; break;
      }

      $requiredBlocks = array(
          "header_brand_world",
          "img",
          "img",
          "greeting_v2",
          "p300_BW",

          "columns",
          "spacer",
          "ElijoIQOS",
          "legal_extra",
          "disclaimer_iqos",
          "footer_bw_v1_lowercase"
      );


      /* 
          "img",
          "spacer",
          "pframed",
          "cta1",
          "p_v2",
          "p300_BW",
          "p700_BW",
          "greeting_v2",
          "columns",
          "cta1_v2",
          "spacer_v2",

          "footer_bw_v1",
          "footer_fsh",
          "disclaimer_fsh",

          "greeting_negro",
          "greeting_dorado",
          "footer_brand_world",
          "header_brand_world",

          "FSH_Yellow_Share",
          "FSH_Yellow_Share_2",
          "FSH_Framed_Card",


          "p300",
          "p700",
          "img_Logo_Header_HTML",
          "img_Cover_HTML",
          "rawHTML",
          "m_TXT_TXT_m",
          "m_TXT_IMG_m",
          "m_IMG_TXT_m",
          "m_IMG_IMG_m",
          "btn_sa_comprar_HTML",
          "one_rs",
          "two_rs",
          "three_rs",
          "sinfuego_sinhumo_sinceniza_negro_HTML",
          "sinfuego_sinhumo_sinceniza_dorado_HTML",
          "legal_extra",
          "disclaimer_iqos",
          "cols_33_33_33",
          "form",
          "mgm_coupon_1",
          "mgm_coupon_2cols",
          "rgm_coupon_2cols",
          "cta_share_WA_coupon",
          "graylineframed",
          "shopping_list",
          "3cols_chat_fb_phone",

          PREVIO, YA NO USAR: "footer_brand_world"



          CODIGO PARA CUPON X X X X X X X X :   %%=v(@voucher_code)=%% 

          "rawHTML", // <div data-type=\"slot\" data-key=\"bspwz932ek9\" data-label=\"Drop blocks or content here\">
          "rawHTML", // %%=ContentBlockbyKey(&quot;Onboarding_Conversion_Check&quot;)=%% 


      */



  ```

Hay dos partes a destacar en este fragmento: la variable $requiredBlocks y la sección de comentarios que le sigue. En PHP todo lo que se encuentre en los símbolos /** **/ es un comentario:

  ```code
    /* Esto es un comentario */
  ```


La variable $requiredBlocks nos permite definir un listado de componentes previamente definidos que nos permiten crear un correo HTML. Cada uno de estos componentes cubre diferentes requerimientos de comunicación visual. El comentario que viene a continuación de esa variable es un listado de todos los bloques disponibles por el momento. De esa lista seleccionamos los que necesitamos para maquetar el correo solicitado y los ponemos en la variable $requiredBlocks. Para el caso específico del correo 23.39, los bloques requeridos quedan así:


  ```code
    $requiredBlocks = array(
      "header_brand_world",
      "img",
      "greeting_v2",
      "p300_BW",
      "columns",
      "spacer",   
      "img",
      "p300_BW",
      "cta1_v2",
      "spacer",
      "columns",
      "p300_BW",
      "columns",
      "ElijoIQOS",
      "disclaimer_iqos",
      "footer_bw_v1_lowercase"
    );
  ```
  

  Nótese que en esta variable solamente se mencionan los bloques que se van a usar, pero no se han configurado ni se les ha puesto ningún dato. Esto se hará más adelante. La descripción detallada de cada bloque está en la sección 3.5. Cada uno de estos bloques también requiere el uso de assets gráficos asociados, en la descripción de los bloques también vienen mencionadas las características de esos assets y sus requerimientos.




---

Navegación:

* [Regreso al índice](README.md)
* [**Previo:** 3.3 Organización de información de las piezas de correo en Excel](3_3_Organizacion_de_informacion.md)
* [**Siguiente:** 3.5 Bloques de componentes de e-mail](3_5_componentes_email.md)




___

* [Regreso al índice](README.md)
* [**Siguiente:** 3.5 Bloques de Componentes Email](3_5_Componentes_email.md)
* [**Previo:** 3.3 Organización de información de las piezas de correo en Excel](3_3_Organizacion_de_informacion.md)

