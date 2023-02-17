<?php
require 'config.php';

  
        
if(isset($_POST['login']) && isset($_POST['pw'])) 
{
    $login = $_POST['login'];
    $pw = $_POST['pw'];

    $sql = "INSERT INTO  admin ( id , login, password) VALUES (NULL, '$login', '$pw');";
    $result = mysqli_query($con, $sql);
 
  
} 
        
    
?><html>
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