<?php
session_start();

    //session destory 
    session_destroy();
    header('location: ../pages/admin.php');
    exit;

?>