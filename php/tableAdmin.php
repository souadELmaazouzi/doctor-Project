<?php
require 'config.php';
$sql = "SELECT * FROM admin";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $row['id'];
       echo'  <tr>
       <td>'.$row['login'].'</td>
       <td>'.$row['password'].'</td>
       <td>
        
          
       <button  class="btn-delete"><a href="../php/deleteAdmin.php?id='. $row['id'].'" style="color:white;"><i class="fa-solid fa-trash"></i></a> </button>  
       </td>
   </tr>
 ';
    }
}
?>