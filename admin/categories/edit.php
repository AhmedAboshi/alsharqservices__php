<?php

include "../../connect.php";
$table = "categories";
$id = filterRequest("id");
$name = filterRequest("name");
$namear = filterRequest("namear");
$imageold = filterRequest("imageold");

$imagename =      imageUpload( "../../upload/categories", "files");

if($imagename == "empty"){
    $data = array( 
        "categories_name" => $name,
        "categories_name_ar" =>$namear
     
    );
}else{
    deleteFile("../../upload/categories" , $imageold);
    $data = array(
        "categories_name" => $name,
        "categories_name_ar" => $namear,
      "categories_image" => $imagename,
    );
}

 updateData($table , $data , "categories_id = $id"); 