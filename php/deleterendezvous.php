<?php
require 'config.php';
if(isset($_GET['id'])){
    $idrn=$_GET['id'];
    $sql = "DELETE FROM rendezvous WHERE id = $idrn";
    $result = mysqli_query($con, $sql);

    
    

}


?> <html>
<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
swal({
title: "Supprition",
text: "Rendes-vous est bien supprimer ",
icon: "success",}).then(function(result){
window.location="../pages/dashboard.php";
}) 

;
</script>
</body>
</html>