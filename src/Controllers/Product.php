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
        echo $this->view->render("cadastrar", [
            "name" => "",
            "price" => "",
            "method" => "POST",
            "nameRoute" => "/store-product",
            "textButton" => "Cadastrar",
            "title" => "Cadastrar Produto"
        ]);
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
                $this->router->redirect('product.list');
            }

            throw new Exception("Produto não cadastrado");
        } catch (\Throwable $th) {
            $this->error($th->getMessage());
        }
    }

    public function edit(array $data): void
    {
        $id = $data["id"];
        $product = $this->model->findById($id);

        echo $this->view->render('cadastrar', [
            "name" => $product->name,
            "price" => $product->price,
            "method" => "POST",
            "nameRoute" => "/update-product/$product->id",
            "textButton" => "Editar",
            "title" => "Editar Produto"
        ]);
    }

    public function update(array $data): void
    {
        try {
            $name = $_POST["name"];
            $price = $_POST["price"];
            $id = $data["id"];

            $product = $this->model->findById($id);
            $product->name = $name;
            $product->price = $price;

            if ($product->save()) {
                $this->router->redirect('product.list');
            }
            throw new Exception("Produto não alterado");
        } catch (\Throwable $th) {
            $this->error($th->getMessage());
        }
    }

    public function delete(): void
    {
    }
}
