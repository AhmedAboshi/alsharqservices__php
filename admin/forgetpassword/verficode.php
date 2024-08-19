
<?php 

include "../../connect.php" ;

$email  = filterRequest("email") ; 

$verifycode = filterRequest("verifycode") ; 


$stmt = $con->prepare("SELECT * FROM admin WHERE admin_email = '$email' AND admin_verficode = '$verifycode' ") ; 
 
$stmt->execute() ; 

$count = $stmt->rowCount() ; 

 result($count) ;