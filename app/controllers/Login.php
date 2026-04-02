<?php


class Login extends Controller{
    function index(){
        $this->view('login');
    }
        
    function validate(){
        if(!empty($_POST['email']) && !empty($_POST['password']) ){//user has no blank fields
                require '../app/models/User.php';
                $user= new User();//can be admin or user 
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);
                $found=$user->findUser($user->getEmail(),$user->getPassword());
                if($found){
                    $_SESSION['email']=$user->getEmail();
                    $_SESSION['cart']=['count'=>0,'prducts'=>[]];
                    if($user->getRole()=='admin'){
                        $_SESSION['role']='admin';
                        header('location:'.ROOT.'/adminSpace');
                        exit;
                    }
                    else{//it's a normal user
                        $_SESSION['role']='user';
                        header('location:'.ROOT.'/home');
                        exit;
                    }
                }
                else{
                    $errors['credentials']='Please verify your credentials';
                    $this->view('login',['errors'=>$errors,'old'=>$_POST]);
                }
        }
        else{//some fields are blank
            if(empty($_POST['password'])){
                $errors['password']  = 'Password is required';
            }
            if(empty($_POST['email'])){
                $errors['email']  = 'Email is required';
            }
            $this->view('login',['errors'=>$errors,'old'=>$_POST]);
        }
    }

}