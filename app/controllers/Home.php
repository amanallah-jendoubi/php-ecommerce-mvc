<?php


class Home extends Controller{

    public function identifyUser(){
        if (isset($_SESSION['role']) && $_SESSION['role']=='user'){
            if(file_exists(ROOT_SERVER."/profile-images/users/".$_SESSION['email'].".png")){
                $data['path']=ROOT_SERVER."/profile-images/users/".$_SESSION['email'].".png";
            }
            else{
                $data['path']=ROOT_SERVER."/profile-images/users/user.png";
            }
        }
        return $data;
    }
    public function index(){
        $data=$this->identifyUser();
        extract($data);
        $this->view('home',$data);
    }
}



