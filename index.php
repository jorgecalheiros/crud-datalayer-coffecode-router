<?php

use CoffeeCode\Router\Router;

require __DIR__ . '/vendor/autoload.php';

$router = new Router(ROOT);

$router->namespace("\Jorge\Products\Controllers");

$router->get("/", "Product:home", "product.home");
$router->get("/produtcs", "Product:products", "product.list");
$router->get("/create-product", "Product:create", "product.create");
$router->post("/store-product", "Product:store", "product.store");
$router->get("/error", "Product:error", "product.error");
$router->get("/edit-product/{id}", "Product:edit", "product.edit");
$router->post("/update-product/{id}", "Product:update", "product.update");

$router->dispatch();


if ($error = $router->error()) {
    $router->redirect('product.error');
}
