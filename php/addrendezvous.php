<?php
require 'config.php';

  
        if (isset($_POST['patient']) && isset($_POST['date']) && isset($_POST['heure']) && isset($_POST['description'])) {
            $id = $_POST['patient'];
            $date = $_POST['date'];
            $heur = $_POST['heure'];
            $description = $_POST['description'];
    
            $sql = "INSERT INTO rendezvous  VALUES (NULL, '$date',  '$heur', '$description', ' $id')";
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