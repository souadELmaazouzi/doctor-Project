<?php 
                            require 'config.php';
                            $sql = "SELECT * FROM patient";
$result = $con->query($sql);

if ($result->num_rows > 0) {
   
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      
     $idpatient=$row['ID'];
     echo'<option value='.$idpatient. '>'.$row['nom'].'</option>
    
    ';}
    }
                        ?>