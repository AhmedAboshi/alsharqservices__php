<?php

include "../connect.php";


$email = filterRequest("email");
$password = sha1($_POST['password']); 
$phone = filterRequest("phone");


$data = array(
    "delivery_password" => $password,
    "delivery_email" => $email,
    "delivery_phone" => $phone
   
);
updateData("delivery", $data, "delivery_email = '$email'");


//sendGCM("success"  , "the delivery is edit" , "admin$id" , "" , "") ; 
//insertNotify("success" , "The delivery is edit" ,  $userid,"delivery$userid" , "none" , "refreshorderpending"); 
 