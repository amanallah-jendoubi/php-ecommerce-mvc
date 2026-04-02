<?php

class Category{
    use Model;
    private $code;
    private $name;


    public function setName ($name){
        $this->name=$name;
    }

    public function setCode ($code){
        $this->code=$code;
    }

    public function fetchProducts(){
        $query='select * from product where category_code = ? ';
        $res = $this->query($query, [$this->code]);
        return $res;
    }




}
