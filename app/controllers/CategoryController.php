<?php


class CategoryController extends Controller{
    protected $categoryCode; 

    function index(){
        $this->view('category',$this->identifyCategory($this->categoryCode));
    }


    function identifyCategory($categoryCode){
        require '../app/models/Category.php';
        $category=new Category();
        $category->setCode($categoryCode);
        $products=$category->fetchProducts();
        return $products;
    }

    function identifyProduct($productId){
        require '../app/models/Product.php';
        $product=new Product();
        $product->setId($productId);
        $info=$product->fetchInfo();
        return $info;
    }

    function product($productId){
        $data=$this->identifyProduct($productId);
        $this->view('product',$data);
    }





}