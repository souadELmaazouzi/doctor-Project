<?php
require 'config.php';

$sql = "SELECT * FROM rendezvous  JOIN patient ON  patient.ID = rendezvous.idpatient";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_array()) {
     
       $idr=   $row['id'];
 
       echo'   <tr>
       <td> '.$row['date'].'</td> 
       <td>'.$row['heurs'].'</td> 
       <td>'.$row['description'].'</td>
       <td>'.$row['nom'].'</td>
       <td>
       <button  class="btn-edit"> <a href="updateRendezVous.php?id='.$idr.'" style="color:white;" ><i class="fa-solid fa-pen-to-square"></i></a></button>
       <button  class="btn-delete"> <a href="../php/deleterendezvous.php?id='.$idr.'" style="color:white;" ><i class="fa-solid fa-trash"></i></a></button>
       </td>   
   </tr> '; 
    }
}
?>