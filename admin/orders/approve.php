<?php

 include "../../connect.php";

$orderid = filterRequest("ordersid");

$userid = filterRequest("usersid");

$data = array(
    "orders_stutas" => 1 ,
    
);

updateData("orders", $data, "orders_id = $orderid AND orders_stutas = 0");

insertNotify("success" , "The Order Has been Approved" ,  $userid,"users$userid" , "none" , "refreshorderpending"); 
