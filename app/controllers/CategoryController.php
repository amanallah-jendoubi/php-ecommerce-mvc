<?php


class CategoryController extends Controller{
    function identifyCategory($categoryCode){
        require '../app/models/Category.php';
        $category=new Category();
        $category->setCode($categoryCode);
        $products=$category->fetchProducts();
        return $products;
    }
}