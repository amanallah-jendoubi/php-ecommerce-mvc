<?php




class Product {
    use Model;
    private  $id;
    private $description;
    private $quantity;
    private $price;
    private $name;

    public function setId($id){
        $this->id=$id;
    }
    public function fetchInfo(){
        $query='select * from product where id = ?';
        $res = $this->query($query, [$this->id]);
        return $res;
    }







}