<?php

require 'CategoryController.php';

class Electronics extends CategoryController {
    private $categoryCode;    
    function __construct(){
        $this->categoryCode='1';
    }
    function index(){
        $this->view('category',$this->identifyCategory($this->categoryCode));
    }
}