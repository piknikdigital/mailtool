<?php

class AppControl 
{
    function __construct()
    {
        $this->model = new AppModel();
    }
    
    /**
     * 
     */
    function welcome($request, $response, $service, $app)
    {
        return  $app->twig->render("welcome.html", array( ""=> "") ); 
    }

    /**
     * 
     */
    function renderjson($request, $response, $service, $app)
    {

        // $this->model->loadjson($request->id);
        // echo var_export($request, true); die;

        // if ( !isset($request->project) )
        //     $f = ( !isset($request->subdir) )? $request->id : $request->subdir . "/". $request->id ;
        // else

        $f = $request->url;

        $this->model->loadjson($f);

        if ( $this->model->twigData == null )
        {
            $msg = "El archivo JSON para esta ruta no existe."; 
            return  $app->twig->render("error.html", array( 'errMsg' => $msg ) );
        }
        else{       var_dump($this->model->twigData); die;
            $f= $_SERVER['DOCUMENT_ROOT'] . "/app/views/" . $this->model->twigData['TwigTemplate'];
            if ( !file_exists ($f) ){
                // Template not found!
                $msg = "Plantilla <br><strong style=\"color:yellow;\">". $this->model->twigData['TwigTemplate'] ."</strong><br> no encontrada"; 
                return  $app->twig->render("error.html", array( 'errMsg' => $msg ) );
            }

            $output = $app->twig->render($this->model->twigData['TwigTemplate'], $this->model->twigData );

            // Render to file
            $this->model->twigData['isWebVer'] = 0;     // HTML version for mail
            $file = $_SERVER['DOCUMENT_ROOT'] . '/email/'. $this->model->twigData['HTMLstaticfile'];
                                    // file_put_contents($file, $app->twig->render($this->model->twigData['TwigTemplate'], $this->model->twigData ));
            file_put_contents($file, $output);

            // Render minified version to file (for CRM)
            $fnmin = strtolower($this->model->twigData['HTMLstaticfile']);
            if ( strstr($fnmin, 'dce.html')  || strstr($fnmin, 'fsh.html') ) 
            {
                $fileMinified = str_replace( ".html", "-min.html" , $file );
                $this->renderMinified($output, $fileMinified);
            }

            // Render to browser
            $this->model->twigData['isWebVer'] = 1;     // HTML version for web
                                    // return  $app->twig->render($this->model->twigData['TwigTemplate'], $this->model->twigData );
            return  $output;
        }
    }

    /**
     * 
     */
    function renderMinified($data, $file)
    {
        // $data      = file_get_contents($filename);
        $buffer    = explode( "\x0A", $data);
        $array     = array_filter(array_map('trim', explode("\n", $data)), 'strlen'); // array_map: trims extra spaces; array_filter: filters out empty lines

        file_put_contents( $file, "" ); // if file exists, make it empty
        foreach ($array as $txt)
        {
            file_put_contents($file, $txt ."\n" , FILE_APPEND);
        }

    }


   
}




