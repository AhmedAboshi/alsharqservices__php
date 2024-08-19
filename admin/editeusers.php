<?php

include "../connect.php";

$email = filterRequest("email");
$password = sha1($_POST['password']); 
$phone = filterRequest("phone");


$data = array(
    "users_password" => $password,
    "users_email" => $email,
    "users_phone" => $phone
);
updateData("users", $data, "users_email = '$email'");


//sendGCM("success"  , "the users is edit" , "admin" , "usesview" , "") ; 
insertNotify("success" , "The users is edit" ,  $userid,"users$userid" , "none" , "refreshorderpending"); 
