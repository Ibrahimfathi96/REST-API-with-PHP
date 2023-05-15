<?php
include"../connect.php";
//log into an account is select operation from the database if it exists!

$email    = filterRequest("email");
$password = filterRequest("password");

$stmt = $connect->prepare("SELECT * From users WHERE `password` = ?  AND email = ?");

$stmt->execute(array($password, $email));
$data = $stmt->fetch(PDO::FETCH_ASSOC);

$count = $stmt ->rowCount();

if($count > 0){
    echo json_encode(array("status" => "success","data"=>$data));
}else{
    echo json_encode(array("status" => "failed"));
}