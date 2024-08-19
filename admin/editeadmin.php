<?php
 
include "../connect.php";

$email = filterRequest("email");
$password = sha1($_POST['password']); 
$phone = filterRequest("phone");


$data = array(
    "admin_password" => $password,
    "admin_email" => $email,
    "admin_phone" => $phone
);
updateData("admin", $data, "admin_email = '$email'");


//sendGCM("success"  , "the admin is edit" , "admin" , "non" , "") ; 
//insertNotify("success" , "The admin is edit" ,  $userid,"admin$userid" , "none" , "refreshorderpending"); 
