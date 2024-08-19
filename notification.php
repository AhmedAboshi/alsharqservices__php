<?php

include "./connect.php" ;

$userid = filterRequest("id");

getAllData("notification" , "notification_userid= $userid  order by $userid DEsc");

?>