<?php


class Controller{


    public function identifyUser(){
        if (isset($_SESSION['role']) && $_SESSION['role']=='user'){
            if(file_exists(ROOT_SERVER."/profile-images/users/".$_SESSION['email'].".png")){
                $data['path']=ROOT_SERVER."/profile-images/users/".$_SESSION['email'].".png";
            }
            else{
                $data['path']=ROOT_SERVER."/profile-images/users/user.png";
            }
            return $data;
        }
        return [];
    }

    public function view($name,$data=[]){
        $path=$this->identifyUser();
        extract($path);
        extract($data);
        $fileName="../app/views/".$name . ".view.php";
        if (file_exists($fileName)){
            require $fileName;
        }
        else{
            require "../app/views/404.view.php";
        }
    }
}