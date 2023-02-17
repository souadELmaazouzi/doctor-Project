<?php
require 'config.php';
$sql = "SELECT * FROM agenda";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
       echo'  <tr>
       <td>'.$row['day'].'</td>
       <td>'.$row['from'].' -'.$row['to'].' </td>
   </tr>';
    }
    
} 

?>