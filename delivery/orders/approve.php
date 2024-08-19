<?php

  include "../../connect.php";

$ordersid = filterRequest("ordersid");

$usersid = filterRequest("usersid"); 

//$id = filterRequest("id");

//$admainid = filterRequest("admainid");

$data = array(
    "orders_stutas" => 1 ,
 //"orders_delivery" => $id 
);

updateData("orders", $data, "orders_id = $ordersid AND orders_stutas = 3");

insertNotify("success" , "The Order is the way" ,  $usersid,"users$usersid" , "none" , "refreshorderpending"); 

//sendGCM("wrning",  "The Order is the way", $admainid,"admin", "none", "none");

//sendGCM("wrning",  "The  orders  hase  Aapproved by delivery" . $id, "delivery", "none", "none");

// insertNotify("success" , "The Order is the way" ,  $admainid,"admin$admainid" , "none" , "refreshorderpending"); 
