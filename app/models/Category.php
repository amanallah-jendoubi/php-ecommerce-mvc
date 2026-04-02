<?php

class Category{
    use Model;
    private $code;
    private $name;
    public function setCode ($code){
        $this->code=$code;
    }

    public function fetchProducts(){
        $query='select p.id,p.description,p.quantity,p.price,p.name,p.category_code,c.name as category_name from product p ,category c where p.category_code = ? and  p.category_code = c.code ';
        $res = $this->query($query, [$this->code]);
        return $res;
    }
    




}
