<?php

use CoffeeCode\Router\Router;

require __DIR__ . '/vendor/autoload.php';

$router = new Router(ROOT);

$router->namespace("\Jorge\Products\Controllers");

$router->get("/", "Product:home", "product.home");
$router->get("/create-product", "Product:create", "product.create");
$router->post("/store-product", "Product:store", "product.store");
$router->get("/error", "Product:error", "product.error");

$router->dispatch();


if ($error = $router->error()) {
    $router->redirect('product.error');
}
