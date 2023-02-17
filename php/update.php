<?php 
require 'config.php';
$id=$_POST['id'];
$date=$_POST['date'];
$hr=$_POST['heure'];
$desc=$_POST['description'];
$patient=$_POST['patient'];
$req="UPDATE rendezvous SET date='$date', heurs='$hr', description='$desc', idpatient='$patient' WHERE id='$id'";
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