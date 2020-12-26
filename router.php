<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

/**
 * Controllers
 */
$router->namespace("Source\App\Controllers");

/****************
****** ADMIN ****
*****************/
$router->group('admin');
$router->get("/", "Admin\AdminController:index");
$router->get("/login", "Admin\AdminController:showLogin");
$router->post("/login", "Admin\AdminController:login");


$router->group('store');
$router->get("/", "IndexController:index");
$router->get("/produtos", "ProductsController:index");
$router->get("/carrinho", "IndexController:cart");



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