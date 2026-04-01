<?php

Trait DATABASE{
    private function connect(){
        try{
           $conn = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=" . CHARSET,DBUSER,DBPASS);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "connection failed" . $e->getMessage();
        }
        return $conn;
    }
    public function query($query,$data=[]){//prepared statement to prevent sql injection 
        $conn=$this->connect();
        $stm=$conn->prepare($query);
        $check=$stm->execute($data);
        if($check){//query run successfully 
            $result=$stm->fetchAll(PDO::FETCH_OBJ);
            if(count($result)){
                var_dump ($result);
                return $result;
            }
            return [];//query not returning anything
        }
    }
}




