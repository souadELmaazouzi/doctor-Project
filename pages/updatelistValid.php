
<?php
   require '../php/config.php';
   $idl=$_GET['id'];
?>
<!DOCTYPE html>
<html> 
 
<head> 
    <title>admin </title>
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">
    <link rel="shortcut icon" href="../img/logowhite.png">
    <script src="../script/script.js"></script>
    <link rel="stylesheet" href="../css/styleUpdate.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro" rel="stylesheet">
   <!--font awsome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   
    <div class="container" id="dashboard">
        <div id="sidebar">
            <div class="logo">
                <div>

                    <img  class="doctor"
                    src="../img/logowhite.png" width="90px"  alt="doctor Logo">
                </div>
            </div>
            <ul>
                <li><button id="patient" class="btnMenu"><i class="fa-solid fa-users"></i> Patients</button></li>
                <li><button  class="btnMenu" id="appoi"><i class="fa-solid fa-list"></i> Rendez-vous</button></li>
                <li><button  class="btnMenu" id="paln" ><i class="fa-solid fa-calendar-days"></i> Planning</button></li>
                <li><button  class="btnMenu" ><i class="fa-solid fa-right-from-bracket"></i> <a href="../php/logoutAdmin.php">Logout</a> </button></li>
                <li><button  class="btnMenu" id="Setting" > <i class="fa-solid fa-gear"></i> Setting</button></li>
            </ul>
        </div>  

        <div id="content">
        <h1>WELCOME ADMIN </h1>
        <div class="popup" id="edit-rendez-vous-popup" >
        <div class="popup-content">
            <h2>Modifier un rendez-vous</h2>
           <form action="../php/updatelistR.php" method="post"> 
                <div class="input-group">
                    <input type="hidden" name="id" value="<?php echo $idl;?>">
                    <select name="patient" id="select" style="width: 100%;    padding: 8px 10px;
    font-size: 14px; " >
                           <option value="0" selected disabled > Sélectionnez un patient</option>
                           <?php 
                            include '../php/addoption.php';
                            ?>    
                        
                     </select>
                    
                </div>
                <div class="input-group">
                <select name="demande" id="select" style="width: 100%;    padding: 8px 10px;
    font-size: 14px; " >
                           <option value="0" > Demande en attente</option>
                           <option value="1" >confirmé</option>
                           <option value="2" >Fait</option>
                     </select>                </div>
              
                <div class="btn-group">
                    <button type="button"   onclick="Annuler()" id="d" class="danger">Annuler</button>
                    <button type="submit" class="success">Modifier</button>
                </div>
            </form>
        </div>
    </div>

   
              
  
   
</body>
<script>
 const   an = document.getElementById('d');
 an.addEventListener('click',function(){
    window.location="dashboard.php";
 })
 
</script>
</html>