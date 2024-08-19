<?php 

include "../connect.php" ;

$email  = filterRequest("email") ; 

$verfiy = filterRequest("verficode") ; 


$stmt = $con->prepare("SELECT * FROM users WHERE users_email = '$email' AND users_verficode = '$verfiy' ") ; 
 
$stmt->execute() ; 

$count = $stmt->rowCount() ; 

if ($count > 0) {
 
    $data = array("users_aprofe" => "1") ; 

    updateData("users" , $data , "users_email = '$email'");

}else {
 printFailure("verficode not Correct") ; 

}
?>