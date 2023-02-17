<?php
require 'config.php';


        if (isset($_POST['patient']) && isset($_POST['demande']) ) {
            $dmnd=$_POST['demande'];

            $patient=$_POST['patient'];
           
            $sql = " INSERT INTO listrendezv (id, patient, status) VALUES (null,'$patient','$dmnd')";
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