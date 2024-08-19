<?php
include "../../connect.php" ;
$id = filterRequest("id") ;

getAllData("ordersview" , "orders_delivery = '$id'  AND orders_stutas =  4");



 
    
 