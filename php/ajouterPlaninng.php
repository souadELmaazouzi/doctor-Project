<?php
require 'config.php';

if(isset($_POST['day']) && isset($_POST['from']) && isset($_POST['to']))
{
    $day = $_POST['day'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    
   

    $sql = "INSERT INTO `agenda` (`id`, `day`, `from`, `to`) VALUES (NULL, '$day', '$from', '$to');";
    $result = mysqli_query($con, $sql);

}

?> <html>
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