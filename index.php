<?php


require_once __DIR__ . '/vendor/autoload.php';


$klein = new \Klein\Klein();
$app   = new AppControl;


$klein->respond(function ($request, $response, $service, $app) use ($klein) {    

    $app->register("twig", function () {
        $loader = new Twig_Loader_Filesystem( array( __DIR__ ."/app/views", 
                                                     __DIR__ ."/app/views/pmi/", 
                                                     __DIR__ ."/app/views/system/" 
                                            ));
        // echo "<pre>". var_export($loader, true) . "</pre>"; // exit(0);
        return new Twig_Environment($loader); 
    });

    // set env for testing twig with strings
    // $app->register("twig2", function () {
    //     $loader2 = new Twig_Loader_Array(array('index' => 'param1: {{ var1 }}<br> param2: {{ var2 }}<br>param3: {{ var3 }}', ));
    //     return new Twig_Environment($loader2);
    // });

    // $app->twig->addGlobal("session", $_SESSION);
    // $app->twig->addExtension(new Twig_Extensions_Extension_Text());
});




// testing klein 
// $klein->respond('GET', '/', function ($request, $response, $service, $app) {
//     return "Welcome to Klein. There's not much to see yet!";
// });
// testing routes & twig
// $klein->respond('GET', '/[:route]/[:year]/[:month]', function ($request, $response, $service, $app) {
//     return $app->twig2->render('index', array(  'var1' => $request->route, 
//                                                 'var2' => $request->year, 
//                                                 'var3' => $request->month ));
// });

$klein->respond('GET',  '/'                                 , [ $app, 'welcome'   ]);
$klein->respond('GET',  '/[:id]'                            , [ $app, 'renderjson'  ]);
$klein->respond('GET',  '/[:subdir]/[:id]'                  , [ $app, 'renderjson'  ]);
$klein->respond('GET',  '/[:project]/[:subdir]/[:id]'       , [ $app, 'renderjson'  ]);



/** -----------------------------------------------------
 *  HTTP Error handling
 *  -----------------------------------------------------
 */
$klein->onHttpError(function ($code, $router, $app) {

    $loader = new Twig_Loader_Filesystem( __DIR__ ."/app/views/system" );
    $twig   = new Twig_Environment($loader);
    $data   = new AppModel;
    $data->twigData['error'] = $code;

    switch ($code) {
        case 404:
            $data->twigData['errMsg'] = "404: No encontrado";
            echo $twig->render("error.html", $data->twigData );
            break;
        case 405:
            $data->twigData['errMsg'] = "405: Método no permitido";
            echo $twig->render("error.html", $data->twigData );
            break;
        default:
            $data->twigData['errMsg'] = "$code : Hay un error ". $code;
            echo $twig->render( "error.html", $data->twigData );
    }
});

$klein->dispatch();