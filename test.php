<?php
// $text = "Ibrahim Mohamed Fathi";
// //to convert it into array
// $stringToArray = explode(" ",$text);
// echo"<pre>";
// print_r($stringToArray);
// echo"<pre>";
// echo end($stringToArray);
// echo"<pre>";
//any image url contains of "imgaeName.imageExtensionLikejpgORpng.....ect"
// $imageName = "imgaeName.png" ;
// $stringToArray = explode(".",$imageName);
// $ext = end($stringToArray);

// $allowExt = array("jpg","png","gif");
// if(in_array($ext,$allowExt)){
//     echo"yes";
// }else{
//     echo"no";
// }

// $userName = $_POST['username'];
// $file = $_FILES['file'];
// echo"<pre>";
// print_r($file);
// echo"</pre>";
include"connect.php";
uploadImage("file");