
<?php 

include "../connect.php" ;

$email  = filterRequest("email") ; 

$verifycode = filterRequest("verifycode") ; 


$stmt = $con->prepare("SELECT * FROM delivery WHERE delivery_email = '$email' AND delivery_verficode = '$verifycode' ") ; 
 
$stmt->execute() ; 

$count = $stmt->rowCount() ; 

 result($count) ;