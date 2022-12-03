<?php

namespace Jorge\Products\Controllers;

use Exception;
use Jorge\Products\Models\Product as ModelsProduct;
use Jorge\Products\Utils\DateFormat;

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
        echo $this->view->render("home", [
            "products" => $this->model->list("name"),
            "dateFormat" => new DateFormat()
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
                $this->router->redirect('product.home', [
                    "message" => "Produto cadastrado com sucesso!"
                ]);
            }

            throw new Exception("Produto não cadastrado");
        } catch (\Throwable $th) {
            $this->router->redirect('product.error', [
                "message" => $th->getMessage()
            ]);
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
