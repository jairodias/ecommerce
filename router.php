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
$router->get("/logout", "Admin\AdminController:logout");

$router->get("/users", "Admin\UsersController:index");
$router->get("/users/create", "Admin\UsersController:create");
$router->get("/users/{user_id}/", "Admin\UsersController:edit");

$router->post("/users/store", "Admin\UsersController:store");
$router->post("/users/update", "Admin\UsersController:update");
$router->delete("/users/delete/{user_id}", "Admin\UsersController:delete");


/****************
 ****** STORE ****
 *****************/
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