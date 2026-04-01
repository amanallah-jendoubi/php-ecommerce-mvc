<?php

class SignUp extends Controller{
    function index(){
        echo $_GET['url'];
        $this->view('sign-up');
    }
    function register(){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) ){//user has no blank fields
            require '../app/models/User.php';
            $user= new User();
            $user->setName($_POST['name']);
            $user->setEmail($_POST['email']);
            $user->setPassword(password_hash($_POST['password'],PASSWORD_BCRYPT));//store hashed password
            $user->setRole('user');    
            $found=$user->findById('email', $user->getEmail(),'user');  
            if($found){//user already stored in database
                $errors['email']='Invalid Email';
                $this->view('sign-up',['errors'=>$errors,'old'=>$_POST]);
            }
            else{//valid email
                $user->insert(['name'=>$user->getName(),'password'=>$user->getPassword() , 'role'=>'user' ,'email'=>$user->getEmail()],'user');
                session_start();
                $_SESSION['email']=$user->getEmail();
                $_SESSION['role']=$user->getRole();
                header("Location:". ROOT ."/home");
                exit;
            }
        }
        else{//some fields are blank
            if(empty($_POST['name'])){
                $errors['name']  = 'Name is required';
            }
            if(empty($_POST['password'])){
                $errors['password']  = 'Password is required';
            }
            if(empty($_POST['email'])){
                $errors['email']  = 'Email is required';
            }
            $this->view('sign-up',['errors'=>$errors,'old'=>$_POST]);
        }
    }
}



