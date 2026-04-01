<?php


class Account extends Controller{
    public function index(){
        $this->view('account');
    }
    public function modify(){
        if(!empty($_POST['name']) && !empty($_POST['currpassword']) && !empty($_POST['newpassword']) && !empty($_POST['confirmpassword'])){//user has no blank fields
            require '../app/models/User.php';
            $user= new User();//can be admin or user 
            $user->setName($_POST['name']);
            $user->setPassword($_POST['currpassword']);
            $user->setEmail($_SESSION['email']);
            $user->setRole($_SESSION['role']);
            $found=$user->findUser($user->getEmail(),$user->getPassword());
            if($found){//correct password given
                $user->update('email',$user->getEmail(),['name'=>$user->getName(),'password'=>password_hash($_POST['newpassword'],PASSWORD_BCRYPT)],'user');
                if($_SESSION['role']=='admin'){
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
                $errors['credentials']='Please verify your password';
                $this->view('account',['errors'=>$errors,'old'=>$_POST]);
            }
        }
        else{//some fields are blank
            if(empty($_POST['currpassword']) && (empty($_POST['newpassword']) || empty($_POST['confirmpassword']))){
                $errors['password']  = 'Password is required';
            }
            $this->view('account',['errors'=>$errors,'old'=>$_POST]);
        }
    }
}
