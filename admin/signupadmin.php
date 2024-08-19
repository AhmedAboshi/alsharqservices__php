<?php

include "../connect.php";

$adminname = filterRequest("adminname");
$password = sha1($_POST['password']);
$email = filterRequest("email");
$phone = filterRequest("phone");
$verficode    = rand(10000 , 99999);
$imagename =      imageUpload( "../../upload/admin", "files");

//$admainid = filterRequest("admainid");

$stmt = $con->prepare("SELECT * FROM  admin WHERE admin_email = ? OR admin_phone = ?");
$stmt->execute(array($email, $phone));
$count = $stmt->rowCount();
if ($count > 0) {
    printFailure("PHONE OR EMAIL");
} else {

    $data = array(
        "admin_name" => $adminname,
        "admin_password" =>  $password,
        "admin_email" => $email,
        "admin_phone" => $phone,
        "admin_image" => $imagename,
        "admin_verficode" => $verficode 
    );
   
    insertData("admin" , $data)  ;

}
sendGCM("succses",  "The  admin the add app", "admin", "none", "none");

