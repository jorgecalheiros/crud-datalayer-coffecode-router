<?php

namespace Jorge\Products\Controllers;

use CoffeeCode\Router\Router;
use League\Plates\Engine;

abstract class Controller
{
    /** @var  Engine*/
    protected $view;

    /** @var Router */
    protected $router;

    public function __construct($router, $dir = null, $globals = [])
    {
        $dir = $dir ?? dirname(__DIR__, 1) . "/Views/templates";
        $this->view = new Engine($dir, "php");
        $this->router = $router;

        $this->view->addData([
            "router" => $this->router
        ]);

        if ($globals) {
            $this->view->addData($globals);
        }
    }

    public function error(array $data): void
    {
        echo $this->view->render('error', [
            'message' => $data['message'] ?? "Not Found"
        ]);
    }
}
