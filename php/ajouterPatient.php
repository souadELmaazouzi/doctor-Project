<?php
require 'config.php';

if(isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['password']))
{
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password =$_POST['password'];

   

    $sql = "INSERT INTO patient(nom, prenom, tel, email, password) VALUES('$name', '$firstname', '$phone', '$email', '$password')";
    $result = mysqli_query($con, $sql); }?>

<html>
<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
swal({
title: "L'ajout",
text: "les information est bien ajouter ",
icon: "success",}).then(function(result){
window.location="../pages/dashboard.php";
}) 

;
</script>
</body>
</html> 