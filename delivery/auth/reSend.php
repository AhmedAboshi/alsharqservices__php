<?php

include "../connect.php";

$email  = filterRequest("email") ; 

$verficode    = rand(10000 , 99999);


$data=array(
    "delivery_verficode" =>$verficode,
);

updateData("delivery" , $data ,  "delivery_email='$email'");
