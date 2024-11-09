<?php
    session_start(); 
    if(isset($_SESSION["username"])) {
        session_destroy();
        header("Location: login.php?status=logout");
        exit;
    }else{
        header("Location: login.php?status=failed");
        exit;
    }
?>