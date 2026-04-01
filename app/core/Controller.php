<?php


class Controller{
    public function view($name,$data=[]){
        extract($data);
        $fileNme="../app/views/".$name . ".view.php";
        if (file_exists($fileNme)){
            require $fileNme;
        }
        else{
            require "../app/views/404.view.php";
        }
    }
}