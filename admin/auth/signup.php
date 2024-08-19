<?php

include "../../connect.php";

$username = filterRequest("username");
$password = sha1($_POST['password']);
$email = filterRequest("email");
$phone = filterRequest("phone");
$verficode    = rand(10000 , 99999);

$stmt = $con->prepare("SELECT * FROM admin WHERE admin_email = ? OR admin_phone = ? ");
$stmt->execute(array($email, $phone));
$count = $stmt->rowCount();
if ($count > 0) {
    printFailure("PHONE OR EMAIL");
} else {

    $data = array(
        "admin_name" => $username,
        "admin_password" =>  $password,
        "admin_email" => $email,
        "admin_phone" => $phone,
        "admin_verficode" => $verficode ,
    );
   
    insertData("admin" , $data)  ;
}