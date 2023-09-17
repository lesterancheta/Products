<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductsController extends BaseController
{
    public function product($product)
    {
        echo $product;
    }
    public function Ancheta()
    {
        return view ('product');
    }
    public function index()
    {
        //
    }
}
