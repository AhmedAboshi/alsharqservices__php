<?php
 include "./connect.php";

 $id = filterRequest("id");
 
 $rating = filterRequest("rating");
 
 $comment = filterRequest("comment");
 
 
 $data = array(
     "orders_noterading" =>  $comment,
     "orders_rading" =>  $rating
 );
 
 updateData("orders", $data, "orders_id  = $id ");