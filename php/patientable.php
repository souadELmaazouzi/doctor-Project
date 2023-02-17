<?php
require 'config.php';
session_start();
$sql = "SELECT * FROM patient";
$result = $con->query($sql);

if ($result->num_rows > 0) {
   
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $id=$row['ID'];
     
     $_SESSION['id']=$row['ID'];
    
     echo'
     <tr>
        <input type="hidden" value="'.$row['ID'].'">
       <td>'.$row['nom'].'</td>
       <td>'.$row['prenom'].'</td>
       <td>'.$row['email'].'</td>
       <td>'.$row['tel'].'</td>
        
       <td>
        
          
           <button  class="btn-delete"> <a href="../php/deletepatient.php?id='.$row['ID'].'" style="color:white;" ><i class="fa-solid fa-trash"></i></a></button>
       </td>
   </tr> 
    '; 
    }
 
      
    }

?>