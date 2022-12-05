<?php

namespace Jorge\Products\Controllers;

use Exception;
use Jorge\Products\Models\Product as ModelsProduct;

class Product extends Controller
{

    private $model;

    public function __construct($router)
    {
        parent::__construct($router);
        $this->model = new ModelsProduct();
    }

    public function home(): void
    {

        echo $this->view->render("home");
    }

    public function products(): void
    {
        echo $this->view->render("products", [
            "products" => $this->model->list("created_at")
        ]);
    }

    public function create(): void
    {
        echo $this->view->render("cadastrar", []);
    }

    public function store()
    {
        try {
            $name = $_POST["name"];
            $price = $_POST["price"];

            $product = $this->model;
            $product->name = $name;
            $product->price = $price;

            if ($product->save()) {
                $this->router->redirect('product.home');
            }

            throw new Exception("Produto não cadastrado");
        } catch (\Throwable $th) {
            $this->error($th->getMessage());
        }
    }

    public function edit(): bool
    {
        return true;
    }

    public function update(): void
    {
    }

    public function delete(): void
    {
    }
}
