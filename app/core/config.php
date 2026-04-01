<?php


if ($_SERVER['SERVER_NAME']=='localhost'){//local variable
    define ('ROOT','http://localhost//E-Commerce-Website/public'); 
    define ('ROOT_SERVER','http://localhost//E-Commerce-Website/app'); 

    /*DB configuration*/
    define ('DBNAME','exclusive');
    define('DBHOST','localhost');
    define ('DBUSER','root');
    define('DBPASS','');
    define ('CHARSET','utf8mb4');




}else{//making Exclusive available online 
    define ('ROOT','https://www.Exclusive.com');
}

