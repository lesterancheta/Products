<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Controllers\BaseController;

class ProductsController extends BaseController
{
    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }
    public function save()
    {
        
    }
    public function product($product)
    {
        echo $product;
    }
    public function Ancheta()
    {
        $data['product'] = $this->product->findAll();
        return view('product', $data);
    }
    public function index()
    {
        //
    }
}
