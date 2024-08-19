<?php
include "../connect.php";
$email = filterRequest("email");

$verficode     = rand(10000, 99999);

$stmt = $con->prepare("SELECT * FROM delivery WHERE delivery_email = ? ");
$stmt->execute(array($email));
$count = $stmt->rowCount();
result($count);

if ($count > 0) {
    $data = array("delivery_verficode" => $verficode);
    updateData("delivery", $data, "delivery_email = '$email'", false);
   
}