<?php
//entry point
 session_start();
require '../app/core/init.php';
echo (isset($_SESSION)) ."<br>";
print_r( $_SESSION );

$app=new App();
$app->loadController();













