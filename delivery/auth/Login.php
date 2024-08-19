<?php

include "../../connect.php";
 
$password = sha1($_POST['password']);
$email = filterRequest("email"); 
// $stmt = $con->prepare("SELECT * FROM users WHERE users_email = ? AND  use_pwd = ? AND use_aprofe = 1 ");
//$stmt->execute(array($email, $password));
//$count = $stmt->rowCount();
 //result($count) ; 

getData("delivery" , "delivery_email = ? AND  delivery_password = ? AND delivery_aprofe = 1", array($email , $password)) ; 