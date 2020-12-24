<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

/**
 * Controllers
 */
$router->namespace("Source\App\Controllers");

$router->group('store');
$router->get("/", "IndexController:index");


/**
 * ERROS
 */
$router->group("ops");
$router->get("/{errorcode}", "Error:exception");

$router->dispatch();

/**
 * dispatch error in application
 */
if($router->error()) $router->redirect("/ops/{$router->error()}");