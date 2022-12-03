<?php

namespace Jorge\Products\Models;

use CoffeeCode\DataLayer\DataLayer;

class Product extends DataLayer
{
    public function __construct()
    {
        parent::__construct("products", ["id", "name", "price"]);
    }

    public function list($order = "")
    {
        return $this
            ->find()
            ->order($order ?? "")
            ->fetch(true);
    }
}
