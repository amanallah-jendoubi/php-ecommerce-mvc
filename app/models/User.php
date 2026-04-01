<?php


class User{
    use Model;
    private $name;
    private $id;
    private $email;
    private $password;
    private $role;
    public function getName(){
        return $this->name;
    }    
    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail(){
        return $this->email;
    }    
    public function setEmail($email) {
        $this->email = $email;
    }


    public function getPassword(){
        return $this->password;
    }    
    public function setPassword($password) {
        $this->password = $password;
    }

    public function getRole(){
        return $this->role;
    }    
    public function setRole($role) {
        $this->role = $role;
    }
    public function findUser($email,$password){
        $query = "SELECT role, password FROM user WHERE email = ?";
        $res = $this->query($query, [$email]);
        if (!empty($res)){//correct email
            $user = $res[0]; 
            if (password_verify($password, $user->password)){
                $this->setRole($user->role);
                return true;
            }
        }
        else{
            return false;
        }
    }
}