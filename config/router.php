<?php

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use Hillel\Controllers\PostController;
use Hillel\Controllers\CategoryController;
use Hillel\Controllers\TagController;


$request = Request::createFromGlobals();

function request()
{
    global $request;

    return $request;
}

$router = new Router(new Dispatcher(), (new Container()));

function router()
{
    global $router;

    return $router;
}

//$router->get('/contact', function () {
//    return 'contact try #3';
//}); на этом шаге начались ошибки

$router->get('/contact', [PageController::class, 'contact']);
//Category
$router->get('/category', [CategoryController::class, 'index']);
$router->get('/category/create', [CategoryController::class, 'create']);
$router->post('/category/store', [CategoryController::class, 'store']);
$router->get('/category/{id}/edit', [CategoryController::class, 'edit']);
$router->post('/category/update', [CategoryController::class, 'update']);
$router->get('/category/{id}/delete', [CategoryController::class, 'destroy']);
$router->get('/category/{id}/show', [CategoryController::class, 'show']);


//Tag


$router->get('/tag', [TagController::class, 'index']);
$router->get('/tag/create', [TagController::class, 'create']);
$router->post('/tag/store', [TagController::class, 'store']);
$router->get('/tag/{id}/edit', [TagController::class, 'edit']);
$router->post('/tag/update', [TagController::class, 'update']);
$router->get('/tag/{id}/delete', [TagController::class, 'destroy']);
$router->get('/tag/{id}/show', [TagController::class, 'show']);

//Post


$router->get('/post', [PostController::class, 'index']);
$router->get('/post/create', [PostController::class, 'create']);
$router->post('/post/store', [PostController::class, 'store']);
$router->get('/post/{id}/edit', [PostController::class, 'edit']);
$router->post('/post/update', [PostController::class, 'update']);
$router->get('/post/{id}/delete', [PostController::class, 'destroy']);
$router->get('/post/{id}/show', [PostController::class, 'show']);

