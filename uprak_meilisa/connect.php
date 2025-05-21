<?php
 $host = "localhost";
 $users = "root";
 $posts= "";
 $db = "todolistdb";

 $connect = mysqli_connect($host, $users, $posts, $db);

 if(!$connect){
    die("Error" . mysqli_connect_error());
 }
?>