<?php

include "../connect.php";

$email  = filterRequest("email") ; 

$verficode    = rand(10000 , 99999);


$data=array(
    "users_verficode" =>$verficode,
);

updateData("users" , $data ,  "users_email='$email'");
