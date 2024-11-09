<?php 
    $_SERVER = "127.0.0.1";
    $username = "root";
    $password = "";
    $db_name = "test";

    $conns = mysqli_connect($_SERVER, $username, $password, $db_name);
    if($conns) {
        //echo "CONNECT TO DATABASE SUCCESS";
    }
?>