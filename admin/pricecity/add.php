<?php

include "../../connect.php";
$table = "pricecity";
$cityup = filterRequest("cityup");
$cityupar = filterRequest("cityupar");
$citydown = filterRequest("citydown");
$citydownar = filterRequest("citydownar");
$tyapetrack = filterRequest("tyapetrack");
$tyapetrackar = filterRequest("tyapetrackar");
$pricetotal = filterRequest("pricetotal");

$data = array(
    "cityup" => $cityup,
    "citytyap_ar" =>$cityupar,
    "citydown" => $citydown,
    "citydown_ar" =>$citydownar,
    "tyapetrack" =>$tyapetrack,
    "tyapetrack_ar" => $tyapetrackar,
    "price_totle" =>$pricetotal
   
);
 insertData($table , $data);
 