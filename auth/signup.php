<?php

include "../connect.php";
$table = "users";

$username = filterRequest("username");
$password = sha1($_POST['password']);
$email = filterRequest("email");
$phone = filterRequest("phone");
$verficode    = rand(10000 , 99999);
$imageuser =  imageUpload( "../upload/users", "files");

$stmt = $con->prepare("SELECT * FROM users WHERE users_email = ? OR users_phone = ? ");
$stmt->execute(array($email, $phone));
$count = $stmt->rowCount();
if ($count > 0) {
    printFailure("PHONE OR EMAIL");
} else {

    $data = array(
        "users_name" => $username,
        "users_password" =>  $password,
        "users_email" => $email,
        "users_phone" => $phone,
        "users_verficode" => $verficode,
       "users_image" => $imageuser,
    );
    
    insertData($table , $data)  ;
}