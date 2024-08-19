<?php 

include "../../connect.php";

$email  = filterRequest("email") ; 

$verfiy = filterRequest("verficode") ; 


$stmt = $con->prepare("SELECT * FROM admin WHERE admin_email = '$email' AND admin_verficode = '$verfiy' ") ; 
 
$stmt->execute() ; 

$count = $stmt->rowCount() ; 

if ($count > 0) {
 
    $data = array("admin_aprofe" => "1") ; 

    updateData("admin" , $data , "admin_email = '$email'");

}else {
 printFailure("verficode not Correct") ; 

}
?>