<?php
include "../connect.php";

$title      = filterRequest("title");
$content    = filterRequest("content");
$userid     = filterRequest("id");
$imageName  = uploadImage("file");
if ($imageName != "fail") {
    $stmt = $connect->prepare("INSERT INTO `notes`( `notes_title`, `notes_content`, `notes_users`,`notes_image`) 
    VALUES (?, ?, ?, ?)");

    $stmt->execute(array($title, $content, $userid, $imageName));

    $count = $stmt->rowCount();

    if ($count > 0) {
        echo json_encode(array("status" => "success"));
    } else {
        echo json_encode(array("status" => "failed"));
    }
} else {
    echo json_encode(array("status" => "failed"));
}
