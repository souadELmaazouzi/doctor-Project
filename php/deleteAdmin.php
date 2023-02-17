<?php
require 'config.php';
if(isset($_GET['id'])){
    $idpa=$_GET['id'];
    $sql = "DELETE FROM admin WHERE id = $idpa";
    $result = mysqli_query($con, $sql);

  

}
?> 
<html>
    <body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
  swal({
  title: "Supprition",
  text: "les information est bien supprimer ",
  icon: "success",}).then(function(result){
    window.location="../pages/dashboard.php";
  }) 
 
;
   </script>
    </body>
</html>