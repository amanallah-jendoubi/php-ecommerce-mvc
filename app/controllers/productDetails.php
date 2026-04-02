<?php

require '../app/models/Product.php';

class ProductDetails extends Controller{
    
    public function index(){
        $product=new Product();
        
        



        $this->view('product');
    }

}