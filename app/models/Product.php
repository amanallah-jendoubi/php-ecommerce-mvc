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
    public function fetchProducts($data){
        $placeholders = implode(',', array_fill(0, count($data), '?'));
        $query = "SELECT * FROM product WHERE id IN ($placeholders)";
        $res = $this->query($query, array_keys($data));
        return $res;
    }






}