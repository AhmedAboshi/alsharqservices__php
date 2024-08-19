<?php

include "../../connect.php";
$table = "pricecity";
$id = filterRequest("id");
$cityup = filterRequest("cityup");
$cityupar = filterRequest("cityupar");
$citydown = filterRequest("citydown");
$citydownar = filterRequest("citydownar");
$tyapetrack = filterRequest("tyapetrack");
$tyapetrackar = filterRequest("tyapetrackar");
$pricetotal = filterRequest("pricetotal");

$data = array(
    "price_id" => $id,
    "cityup" => $cityup,
    "citytyap_ar" =>$cityupar,
    "citydown" => $citydown,
    "citydown_ar" =>$citydownar,
    "tyapetrack" =>$tyapetrack,
    "tyapetrack_ar" => $tyapetrackar,
    "price_totle" =>$pricetotal
);

 updateData($table , $data , "price_id = $id"); 

 