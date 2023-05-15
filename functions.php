<?php
define("MB", 1048576);
function filterRequest($request){

  return htmlspecialchars(strip_tags($_POST[$request]));

}

function uploadImage($imageRequest){
  global $erroMessage ;
  $imageName     = rand(0,1000000) . $_FILES[$imageRequest]['name'];
  $imagetmp      = $_FILES[$imageRequest]['tmp_name']; 
  $imageSize     = $_FILES[$imageRequest]['size']; 
  $allowExt      = array("jpg","png","gif","mp3","pdf","mp4") ;
  $stringToArray = explode(".",$imageName);
  $ext           = end($stringToArray);
  $ext           = strtolower($ext);
  if(!empty($imageName) && !in_array($ext,$allowExt)){
    $erroMessage[] = "Ext";
  }
  if($imageSize > 2 * MB ){
    $erroMessage[] = "Size";
  }
  if(empty($erroMessage)){
  move_uploaded_file($imagetmp,"../upload/" . $imageName);
  return $imageName;
  }else{
    echo"<pre>";
    print_r($erroMessage);
    echo"</pre>";
    return "fail";

  }

}

function deleteFile($dir,$imageName){
  if(file_exists($dir . "/" . $imageName)){
    unlink($dir . "/" . $imageName)  ;
  }
}