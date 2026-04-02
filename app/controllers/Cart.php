<?php

require '../app/models/Product.php';

class Cart extends Controller{
    function index (){
        $product= new Product ();
        $products=$product ->fetchProducts($_SESSION['cart']['products']);
        $this->view('cart',$products);
    }

    function updateCart() { //only update the basket 
        $body = json_decode(file_get_contents('php://input'), true);
        if (!isset($_SESSION['cart']['count'])) {
            $_SESSION['cart']['count'] = 0;
            $_SESSION['cart']['products']=[];
        } 
        if(!isset( $_SESSION['cart']['products'][$body['productId']])){
            $_SESSION['cart']['products'][$body['productId']]=$body['productQuantity'];
            $_SESSION['cart']['count'] += $body['productQuantity'];
        }
        else{//already added then just overwrite quantity
            $_SESSION['cart']['count']=$_SESSION['cart']['count']-$_SESSION['cart']['products'][$body['productId']]+$body['productQuantity'];
            $_SESSION['cart']['products'][$body['productId']]=$body['productQuantity'];
        }
        echo json_encode([
            'success' => true,
            'count' => $_SESSION['cart']['count']
        ]);
    }
}
