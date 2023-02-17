<?php
require 'config.php';

function agenda($con){
    $sql = "SELECT * FROM agenda";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

       echo'  <tr> 
       <td>'.$row['day'].'</td>
       <td>'.$row['from'].' -'.$row['to'].' </td>
       <td>
                              
       
       <button class="btn-delete"> <a  style="color:white;" href="../php/deleteplaninng.php?id='.$row['id'].' " ><i class="fa-solid fa-trash"></i></a></button>
   </td>
    </tr>';
    }
}
}

?>