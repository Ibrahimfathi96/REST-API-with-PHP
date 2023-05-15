<?php
// echo "<br>";//to print in the next line not next to the previous
// echo to print something
//if,elseif, else
//loops >> For, While, Do While.
//functions
//variable scope is not similar to dart you need to use global keyword 
//to use the normal GLOBALS[] or global varName variable in case you need it inside a function or another scope.
//arrays in php >> two types 
//1- Indexed array like list in dart 
//2- Associative array like map in dart
// $namesList = array("Ibrahim", "Mahmoud", "Ahmed", "Reda", "Sayed", "Islam"); //Indexed array
// for ($i = 0; $i < count($namesList); $i++) {
//     echo $namesList[$i];
//     echo "<br>";
// }
// $infoArray = array(
//     //Associative array
//     "name" => "Ibrahim",
//     //=> is like : in dart between key and its value
//     "age" => 27,
//     "email" => "himafathi796@gmail.com",
//     "friends" => array(
//         "name" => "Mahmoud",
//         //=> is like : in dart between key and its value
//         "age" => 27,
//         "email" => "mahmoud@gmail.com",
//     )
// );
// $namesList[0] = "Ibrahim Fathi";
// // echo $namesList[0];
// echo $infoArray["name"];
// echo "<br>";
// echo $infoArray["age"];
// echo "<br>";
// echo $infoArray["email"];
// echo "<br>";
// echo $infoArray["friends"]["name"];
// echo "<br>";
// echo $infoArray["friends"]["age"];
// echo "<br>";
// echo $infoArray["friends"]["email"];
/// Request GET POST
// $name = $_GET['name'];//GET is an array
// $age = $_GET['age'];
// $email = $_GET['email'];
// echo $name;
// echo "<br>";
// echo $age;
// echo "<br>";
// echo $email;
// print_r($_POST);
//connect test
include"connect.php";//import the file
// $stmt = $connect ->prepare("SELECT * FROM users");
// $stmt = $connect ->prepare("SELECT * FROM users WHERE users_name = 'Sophie' ");
// $stmt ->execute();
// $users = $stmt->fetch(PDO::FETCH_ASSOC);//Associative array
// $count = $stmt->rowCount();
// echo json_encode($users);
// $users = $stmt->fetchAll();//Indexed array

// $stmt = $connect ->prepare("SELECT * FROM users Where id = 1");
// $stmt ->execute();
// $user1 = $stmt->fetch(PDO::FETCH_ASSOC);
// echo "<br>";
// print_r($user1);
// echo "<br>";
// $stmt = $connect ->prepare("SELECT email FROM users where id >= 0 ");
// $stmt ->execute();
// $email = $stmt->fetchColumn();
// echo "<br>";
// echo $email;
// echo "<br>";
//json Encode to be easier to use it in flutter projects
///there are 3 ways to INSERT data, here is the most 2 common ways
// $stmt = $connect ->prepare("INSERT INTO `users`(`users_name`,`email`) 
// VALUES('Mostafa','mostafa@gmail.com')");
//$stmt ->execute();

// $stmt = $connect ->prepare("INSERT INTO `users`(`users_name`,`email`)
// VALUES(:name,:email)");
// $stmt ->execute(array(
//     ":name" => "Soaad",
//     ":email" => "soaad@gmail.com",
// ));

///UPDATE Data
$stmt = $connect ->prepare("UPDATE `users` SET email = 'mahmoud@gmail.com' WHERE id = 6");
//DELETE Data
$stmt = $connect ->prepare("DELETE FROM `users` WHERE id = 2");
$stmt  ->execute();
$count = $stmt->rowCount();
if($count >0){
    echo "Data Updated";
}else{
    echo "Data not Updated";
}
// echo json_encode($users);


// echo "<br>";
// print_r($users);
// echo "<br>";














?>