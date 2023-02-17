<?php
require 'config.php';

    
        if (isset($_POST['id']) && isset($_POST['date']) && isset($_POST['heur']) && isset($_POST['description'])) {
            $id = $_POST['id'];
            $date = $_POST['date'];
            $heur = $_POST['heur'];
            $description = $_POST['description'];
    
            $sql = "INSERT INTO rendezvous (id, date, heurs, description, idpatient) VALUES (NULL, '$date',  '$heur', '$description', ' $id')";
            $result = mysqli_query($con, $sql);
            
            
        }
         
    
?>  
<html>
    <body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
  swal({
  title: "Appointement",
  text: "The appointment has been successfully taken ",
  icon: "success",}).then(function(result){
    window.location="../pages/welcome.php";
  }) 
 
;
   </script>
    </body>
</html>