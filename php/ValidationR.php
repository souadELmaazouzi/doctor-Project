<?php 

$sql = "SELECT * FROM listrendezv , patient WHERE listrendezv.patient=patient.ID;  ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
   
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $id=$row['id']; 
     
    
     echo'
     <tr>
  
       <td>'.$row['nom'].'</td>
     
       <td>';
       if($row['status'] == 0){
        echo '<span style="color:red;"  >Demande en attente</span>';
    }if($row['status'] == 1){
        echo'	<span style="color: orange;"><i class="fa-solid fa-check"></i> confirmé</span>';
    } if($row['status'] == 2){
       echo'	<span style="color: #28a745;"><i class="fa-solid fa-check-double"></i>Fait</span>'; 
    }
      echo  '</td>
    
        
       <td>
        
       <button  class="btn-edit"> <a href="updatelistValid.php?id='.$id.'" style="color:white;" ><i class="fa-solid fa-pen-to-square"></i></a></button>
           <button  class="btn-delete"> <a href="../php/deletelisteR.php?id='.$row['id'].'" style="color:white;" ><i class="fa-solid fa-trash"></i></a></button>
       </td>
   </tr> 
    '; 
    }
 
      
    }
		

				?>		