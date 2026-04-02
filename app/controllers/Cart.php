<?php

class Cart extends Controller{
    function index (){
        $this->view('cart');
    }
    
    function updateCart() {
        $body = json_decode(file_get_contents('php://input'), true);
        if (!isset($_SESSION['cart']['count'])) {
            $_SESSION['cart']['count'] = 0;
        } 
        $_SESSION['cart']['count'] += $body['quantity'];
        
        echo json_encode([
            'success' => true,
            'count' => $_SESSION['cart']['count']
        ]);
    }



}
