<?php

 include "../../connect.php";

$ordersid = filterRequest("ordersid");

$usersid = filterRequest("usersid");

//$id = filterRequest("id");

$data = array(
    "orders_stutas" => 4, 
    
);

updateData("orders", $data, "orders_id = '$ordersid' AND orders_stutas = 3");
insertNotify("success" , "Your order Hase Deliverd" ,  $usersid,"users$usersid" , "none" , "refreshorderpending"); 

sendGCM("wrning",  "The  order  hase  been Deliverd to Custor", "users", "users", "none");
