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
        else{
            $f= $_SERVER['DOCUMENT_ROOT'] . "/app/views/" . $this->model->twigData['TwigTemplate'];
            if ( !file_exists ($f) ){
                // Template not found!
                $msg = "Plantilla <br><strong style=\"color:yellow;\">". $this->model->twigData['TwigTemplate'] ."</strong><br> no encontrada"; 
                return  $app->twig->render("error.html", array( 'errMsg' => $msg ) );
            }

            // Render to file
            $this->model->twigData['isWebVer'] = 0;     // HTML version for mail
            $file = $_SERVER['DOCUMENT_ROOT'] . '/email/'. $this->model->twigData['HTMLstaticfile'];

            file_put_contents($file, $app->twig->render( $this->model->twigData['TwigTemplate'], $this->model->twigData ));
            $this->model->twigData['isWebVer'] = 1;     // HTML version for web

            // Render to browser
            return  $app->twig->render($this->model->twigData['TwigTemplate'], $this->model->twigData );
        }
    }
    /**
     * 
     */
    function renderjson999($request, $response, $service, $app)
    {
        $f = ( !isset($request->subdir) )? $request->id : $request->subdir . "/". $request->id ;
        // $this->model->loadjson($request->id);
        $this->model->loadjson($f);

        if ( $this->model->twigData == null )
        {
            $msg = "El archivo JSON para esta ruta no existe."; 
            return  $app->twig->render("system/_error.html", array( 'errMsg' => $msg ) );
        }
        else{
            $f= $_SERVER['DOCUMENT_ROOT'] . "/app/views/" . $this->model->twigData['TwigTemplate'];
            if ( !file_exists ($f) ){
                // Template not found!
                $msg = "Plantilla <br><strong style=\"color:yellow;\">". $this->model->twigData['TwigTemplate'] ."</strong><br> no encontrada"; 
                return  $app->twig->render("system/_error.html", array( 'errMsg' => $msg ) );
            }

            // Render to file
            $this->model->twigData['isWebVer'] = 0;     // HTML version for mail
            $file = $_SERVER['DOCUMENT_ROOT'] . '/public/static/html/'. $this->model->twigData['HTMLstaticfile'];

            file_put_contents($file, $app->twig->render( $this->model->twigData['TwigTemplate'], $this->model->twigData ));
            $this->model->twigData['isWebVer'] = 1;     // HTML version for web

            // Render to browser
            return  $app->twig->render($this->model->twigData['TwigTemplate'], $this->model->twigData );
        }
    }
   
}




