<?php 

include "../../connect.php";

$id = filterRequest("id") ;  

deleteData("pricecity" , "price_id = $id"); 

