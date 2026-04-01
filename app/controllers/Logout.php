<?php



class Logout extends Controller{
    function index(){
        $_SESSION=[];
        session_destroy();
        header("Location: " . ROOT . "/signUp");
        exit;
    }
}