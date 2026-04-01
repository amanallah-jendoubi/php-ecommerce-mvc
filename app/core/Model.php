<?php


trait Model{
    use Database;
    public function insert($data,$table) {
        $keys = array_keys($data);  
        $columns = implode(", ", $keys); 
        $placeholders = implode(", ", array_fill(0, count($keys), "?")); 

        $query = "INSERT INTO " . $table . " (" . $columns . ") VALUES (" . $placeholders . ")";
        $this->query($query, array_values($data)); 
    }

    public function findById($id_column,$id,$table){
        $query="select count(*) as total from ". $table . " where ". $id_column ."= ?;";
        $res=$this->query($query,[$id]);
        if ($res[0]->total == 0){
            return false;//user not found
        } 
        return true;
    }


    public function update( $id_column,$id,$data,$table) {
        $keys=array_keys($data);
        $query = "UPDATE ". $table." SET ";
        foreach ($keys as $key) {
            $query .=( $key . " = ?, ");
        }

        $query = substr($query, 0, -2); // removing last ", "

        $query .= " WHERE " . $id_column . " = ?"; 

        $values   = array_values($data); 
        $values[] = $id;  //append id to values given to the query              
        $this->query($query, $values);
    }





    public function delete($id,$id_column){
        $this->query("delete from ".$this->table. " where $id_column=?",[$id]);
    }





}