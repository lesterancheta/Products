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
        $data = [

            'UPC'=> $this->request->getVar('UPC'),
            'Product_Name'=> $this->request->getVar('Product_Name'),
            'Price'=> $this->request->getVar('Price'),
            'Quantity'=> $this->request->getVar('Quantity'),
            'Created_at'=> $this->request->getVar('Created_at'),
        ];
        $this ->product->save($data);
        return redirect()->to('/products');
           
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
