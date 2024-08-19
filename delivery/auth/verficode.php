<?php 

include "../connect.php" ;

$email  = filterRequest("email") ; 

$verfiy = filterRequest("verficode") ; 


$stmt = $con->prepare("SELECT * FROM delivery WHERE delivery_email = '$email' AND delivery_verficode = '$verfiy' ") ; 
 
$stmt->execute() ; 

$count = $stmt->rowCount() ; 

if ($count > 0) {
 
    $data = array("delivery_aprofe" => "1") ; 

    updateData("delivery" , $data , "delivery_email = '$email'");

}else {
 printFailure("verficode not Correct") ; 

}
?>