<?php

include "../../connect.php";
$table = "items";
$name = filterRequest("name");
$namear = filterRequest("namear");
$desc = filterRequest("desc");
$descar = filterRequest("descar");
$imagename =      imageUpload( "../../upload/items", "files");
$count = filterRequest("count");
$price = filterRequest("price");
$discount = filterRequest("discount");
$datenow = filterRequest("datenow");
$catid = filterRequest("catid");
$data = array(
    "items_name" => $name,
    "items_name_ar" =>$namear,
    "items_desc" => $desc,
    "items_desc_ar" =>$descar,
    "items_image" =>$imagename,
    "items_count" =>$count,
    "items_active" => "1",
    "items_price" =>$price,
    "items_discount" =>$discount,
    "items_date" =>$datenow,
    "items_cat" =>$catid
);
 insertData($table , $data);
 