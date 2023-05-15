<?php
include"../connect.php";

$noteid = filterRequest("id");

$imageName  = filterRequest("imagename");

$stmt = $connect->prepare("DELETE FROM notes WHERE notes_id = ?");

$stmt->execute(array($noteid));

$count = $stmt ->rowCount();

if($count > 0){
    deleteFile("../upload",$imageName);
    echo json_encode(array("status" => "success"));
}else{
    echo json_encode(array("status" => "failed"));
}