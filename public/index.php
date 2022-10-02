<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';
require_once __DIR__ . '/../config/validator.php';
require_once __DIR__ . '/../config/router.php';


/**
 * @var Illuminate\Routing\Router $router ;
 */
/**
 * @var Illuminate\Http\Request $request ;
 */


$response = $router->dispatch($request);
echo $response->getContent();


//$app = new \Hillel\Base\Application();
//echo $app->run();


//if($_SERVER['REQUEST_URI'] == '/contact'){
//  $controller =  new \Hillel\Controllers\PageController();
//    $controller->contact();
//} else {
//    http_response_code(404);
//    echo 'нт нихуя';
//}










