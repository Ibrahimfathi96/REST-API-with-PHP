<?php
$dsn = "mysql:host=localhost;dbname=noteapp";
$userName = "root";
$password = "";
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"//For supporting arabic
);
try{
    
    $connect = new PDO($dsn,$userName,$password,$option);
    $connect->setAttribute(PDo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    include"functions.php";
}catch(PDOException $error){
  
    echo $error -> getMessage(); /*-> like . in dart */

}





















?>