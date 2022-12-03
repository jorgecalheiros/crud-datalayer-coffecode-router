<?php

namespace Jorge\Products\Controllers;

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

    public function store(): bool
    {
        $name = $_POST["name"];
        $price = $_POST["price"];

        echo $name;
        echo $price;
        die;
        return false;
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
