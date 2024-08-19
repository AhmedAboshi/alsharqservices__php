<?php

include "../../connect.php";

$email  = filterRequest("email") ; 

$verficode    = rand(10000 , 99999);


$data=array(
    "admin_verficode" =>$verficode,
);

updateData("admin" , $data ,  "admin_email='$email'");
