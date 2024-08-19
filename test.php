<?php

$notAuth = "" ; 

include "connect.php" ; 

 
sendGCM("delivery"  , "How Are You" , "delivery" , "" , "") ; 
sendGCM("users"  , "How Are You" , "users" , "" , "") ; 
sendGCM("admin"  , "How Are You" , "admin" , "" , "") ; 

//sendGCM("success"  , "the users is edit" , "admin" , "usesview" , "") ; 

echo "Send"  ;



