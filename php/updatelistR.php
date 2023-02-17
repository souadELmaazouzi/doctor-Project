<?php 
require 'config.php';
$id=$_POST['id'];
$dmnd=$_POST['demande'];

$patient=$_POST['patient'];
$req="UPDATE `listrendezv` SET `patient`='$patient',`status`='$dmnd' WHERE id='$id'";
$result = mysqli_query($con, $req);
?> 
<html>
    <body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
  swal({
  title: "Modification",
  text: "les information est bien modifier ",
  icon: "success",}).then(function(result){
    window.location="../pages/dashboard.php";
  }) 
 
;
   </script> 
    </body>
</html>