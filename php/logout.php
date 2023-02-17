<?php
session_start();

    //session destory 
    session_destroy();
    header('location: ../index.php');
    exit;

?>