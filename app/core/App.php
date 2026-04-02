<?php



class App{
    private $controller='Home';
    private $method ='index';//method defaulted to index
    private $args=[];
    private function splitURL(){
        $URL= $_GET['url'] ?? 'home' ;
        $URL= explode("/",$URL);
        return $URL;
    }

    public function loadController(){//routing according to the given URL
        $URL=$this->splitURL();
        $fileNme="../app/controllers/". ucfirst($URL[0]) . ".php";
        if (file_exists($fileNme)){//if file found then load it 
            require $fileNme; 
            $this->controller=ucfirst($URL[0]); //controller takes same name as requested page
        }
        else{
            require "../app/controllers/_404.php";   //otherwise load 404 controller
            $this->controller='_404';
        }


        $controller=new ($this->controller) ();//crating instanse of controller class
        //method passed in URL
        if (isset($URL[1]) && method_exists($controller,$URL[1])){
            $this->method=$URL[1];
            if (isset($URL[2])){
                $this->args=array($URL[2]);
            }
        }
        call_user_func_array([$controller,$this->method],$this->args);
    }
}