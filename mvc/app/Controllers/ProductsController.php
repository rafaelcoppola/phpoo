<?php

namespace App\Controllers;

use SON\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {

        $this->render([
            'table' => $this->model->getTableName()
        ]);
    }
}
