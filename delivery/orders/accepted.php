<?php
include "../../connect.php" ;
$id = filterRequest("id") ;
getAllData("ordersview" ,"orders_stutas = 3 AND orders_delivery = '$id'");



