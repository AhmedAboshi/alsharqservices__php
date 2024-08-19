<?php 

include "../connect.php" ; 

$id = filterRequest("id") ;  

deleteData("delivery" , "delivery_id = $id"); 

sendGCM("admin"  , "Succses Add App delivery" , "admin" , "" , "") ; 
