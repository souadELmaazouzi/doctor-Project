<?php
include '../php/config.php';
/*
if (empty($_GET['session'])) {
    header('Location:admin.php');
}*/
?>
<!DOCTYPE html>
<html> 
 
<head>
    <title>admin </title>
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">
    <link rel="shortcut icon" href="../img/logowhite.png">
    <script src="../script/script.js"></script>
    <link rel="stylesheet" href="../css/styledashboard.css">
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
                <li><button  class="btnMenu" id="gestion" ><i class="fa-solid fa-bars-progress"></i> Gestion Rendez-vous</button></li>
                <li><button  class="btnMenu" ><i class="fa-solid fa-right-from-bracket"></i> <a href="../php/logoutAdmin.php">Logout</a> </button></li>
                <li><button  class="btnMenu" id="Setting" > <i class="fa-solid fa-gear"></i> Setting</button></li>
            </ul>
        </div>  

        <div id="content">
        <h1>WELCOME ADMIN </h1>
           
            <div class="patients" id="infopatient" style="display: none ;">
                <div class="patient" style="display: flex;">
                    <div >
                        <button  id="add" class="btn-add"><i class="fa-solid fa-user-plus"></i></button>
                      </div>
                     
                       
                    
                </div>
                  

                <div class="table-responsive">
                    
                   
                <table>
                        <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Tel</th>
            
            <th>Action</th>
        </tr>
    </thead> 
                 <tbody>    
                       <?php include'../php/patientable.php'; 
                       //include'../php/searchpatient.php';?>
</tbody>  
                       
</table>
                </div>
    
            </div>

            <div class="appointement" id="appointement" style="display:none;">
                <div class="rendez-vous" style="display: flex;">
                <h1></h1>
                    <div >
                        <button  id="add" class="btn-add rend"> <i class="fa-solid fa-calendar-days"></i>  Ajouter </button>
                     </div>
                
                </div>
           
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Heure</th>
                                <th>Description</th>
                                <th>Nom patient</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          include'../php/appointementable.php';
                          ?>
                         
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="appointement" id="listA" style="display:block;">
                <div class="rendez-vous" style="display: flex;">
                <div >
                        <button  id="add" class="btn-add list"> <i class="fa-solid fa-calendar-days"></i>  Ajouter </button>
                     </div>
           
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Patient</th>
                               
                               
                                <th>Rendez-Vous</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
  
  include'../php/ValidationR.php';
 
?>
                         
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <div class="popup" id="addlist-rendez-vous-popup" >
        <div class="popup-content">
            <h2>Modifier un rendez-vous</h2>
           <form action="../php/addlistR.php" method="post"> 
                <div class="input-group">
                
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
                    <button type="submit" class="success">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
            <div class="planning" id="planning" style="display: none;">
                <button class="btn-add" id="addplanning"><i class="fa-solid fa-calendar-plus"></i> Ajouter</button>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th>
                                day
                            </th>
                            <th>Schedule</th>
                            <th>Action</th>
                        </tr>
                      <?php
                      require('../php/agendatable.php') ;
                      agenda($con);
                      ?>
           
                    
                    </table>
                </div>
            </div>
            <div class="admin" id="admin" style="display: none;">
                <button class="btn-add" id="addAdmin"><i class="fa-solid fa-user-tie"></i> Ajouter</button>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th>
                                Login
                            </th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                      <?php
                      include '../php/tableAdmin.php'
                      ?>
           
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="popup" id="add-admin-popup">
        <div class="popup-content">
            <h2>Ajouter une admin</h2>
            <form action="../php/ajouteradmin.php" method="post" >
                <div class="input-group">
                    <label for="login">login</label>
                    <input type="text" name="login" >
                </div>
                <div class="input-group">
                    <label for="pw">password</label>
                    <input type="password" name="pw" >
                </div>
               
            
                <div class="btn-group">
                    <button type="button"  id="danger"  class="danger"  onclick="Annuler()">Annuler</button>
                    <button type="submit" class="success">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
    <div class="popup" id="edit-admin-popup">
        <div class="popup-content">
            <h2>modifier une admin</h2>
            <form action="">
                <div class="input-group">
                    <label for="login">login</label>
                    <input type="text" name="login" id="name">
                </div>
                <div class="input-group">
                    <label for="pw">password</label>
                    <input type="password" name="pw" id="firstname">
                </div>
               
            
                <div class="btn-group">
                    <button type="button"  id="danger"  class="danger"  onclick="Annuler()">Annuler</button>
                    <button type="submit" class="success">Modifier</button>
                </div>
            </form>
        </div>
    </div>
    <div class="popup" id="add-patient-popup">
        <div class="popup-content">
            <h2>Ajouter un patient</h2>
            <form action="../php/ajouterPatient.php" method="post">
                <div class="input-group">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="input-group">
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname">
                </div>
                <div class="input-group">
                    <label for="phone">Téléphone</label>
                    <input type="number" name="phone" id="phone">
                </div>
               
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="email">
                </div>
                <div class="btn-group">
                    <button type="button"  onclick="Annuler()" id="danger"  class="danger">Annuler</button>
                    <button type="submit" class="success">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
    <div class="popup" id="edit-patient-popup">
        <div class="popup-content">
            <h2>Modifier un patient</h2>
            <?php 
                      
                    $id=  $_SESSION['id'];
                 
          echo '  <form action="../php/updatePatient.php?id='.$id.'" method="post"> '  ?>
            <div class="input-group">
                  
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="input-group">
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname">
                </div>
                <div class="input-group">
                    <label for="phone">Téléphone</label>
                    <input type="number" name="phone" id="phone">
                </div>
               
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="btn-group">
                    <button type="button"  onclick="Annuler()" class="danger">Annuler</button>
                   
                    <button type="submit"  class="success">Modifier</button>

                </div>
            </form>
        </div>
    </div>
    <div class="popup" id="add-rendez-vous-popup">
        <div class="popup-content">
            <h2>Ajouter un rendez-vous</h2>
            <form action="../php/addrendezvous.php" method="post">
                <div class="input-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date">
                </div>
                <div class="input-group">
                    <label for="heure">Heure</label>
                    <input type="time" name="heure" id="heure">
                </div>
                <div class="input-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" style="height: 80px;" >
                </div>
                <div class="input-group">
                    <label for="patient">select patient</label>
                   
                     <select name="patient" id="select" style="width: 100%;    padding: 8px 10px;
    font-size: 14px; " >
                            <option value="0" selected disabled > Sélectionnez un patient</option>
                            <?php 
                            include '../php/addoption.php';
                            ?>    
                        
                     </select>
                </div>
                <div class="btn-group">
                    <button type="button"   onclick="Annuler()" class="danger">Annuler</button>
                    <button type="submit" class="success">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
    <div class="popup" id="edit-rendez-vous-popup">
        <div class="popup-content">
            <h2>Modifier un rendez-vous</h2>
           <form action="../php/updaterendezv.php?id='<?php echo $_SESSION['code']?>'" method="post"> 
                <div class="input-group">
                    <label for="date">Date</label> 
                    <input type="date" name="date" id="date">
                </div>
                <div class="input-group">
                    <label for="heure">Heure</label>
                    <input type="time"  name="heure" id="heure">
                </div>
                <div class="input-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" style="height: 80px;">
                </div>
                <div class="input-group">
                <select name="patient" id="select" style="width: 100%;    padding: 8px 10px;
    font-size: 14px; " >
                           <option value="0" selected disabled > Sélectionnez un patient</option>
                           <?php 
                            include '../php/addoption.php';
                            ?>    
                        
                     </select>
                    
                </div>
                <div class="btn-group">
                    <button type="button"   onclick="Annuler()"class="danger">Annuler</button>
                    <button type="submit" class="success"><?php echo $_SESSION['code']?>Modifier</button>
                </div>
            </form>
        </div>
    </div>

    <div class="popup" id="add-planning-popup">
        <div class="popup-content">
            <h2>Ajouter une planning</h2>
            <form action="../php/ajouterPlaninng.php" method="post" >
                <div class="input-group">
                    <label for="day">day</label>
                    <input type="text" name="day" id="name">
                </div>
                <div class="input-group">
                    <label for="from">Début</label>
                    <input type="time" name="from" id="firstname">
                </div>
                <div class="input-group">
                    <label for="to">Fin</label>
                    <input type="time" name="to" id="phone">
                </div>
            
                <div class="btn-group">
                    <button type="button"  id="danger"  class="danger"  onclick="Annuler()">Annuler</button>
                    <button type="submit" class="success">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
    <div class="popup" id="edit-planning-popup">
        <div class="popup-content">
            <h2>Modifier une planning</h2>
            <form action="../php/updateplaninng.php">
                <div class="input-group">
                    <label for="day">day</label>
                    <input type="text" name="day" id="name">
                </div>
                <div class="input-group">
                    <label for="from">Début</label>
                    <input type="time" name="firstname" id="firstname">
                </div>
                <div class="input-group">
                    <label for="to">Fin</label>
                    <input type="time" name="phone" id="phone">
                </div>
            
                <div class="btn-group">
                    <button type="button"  id="danger"  class="danger"  onclick="Annuler()">Annuler</button>
                    <button type="submit" class="success">Modifier</button>
                </div>
            </form>
        </div>
    </div>
    <script >
        //dashbord js
const popup =document.querySelector('.popup');
function Annuler(){
    editplanningpopup.classList.remove('active');
    addplanningpopup.classList.remove('active');
    addPatientPopup.classList.remove('active');
    editPatientPopup.classList.remove('active'); 
     editRendezVousPopup.classList.remove('active');
    addRendezVousPopup.classList.remove('active');
    addadminpopup.classList.remove('active');
    editadminpopup.classList.remove('active');
    addlist.classList.remove('active');
}

const addadmin=document.getElementById('addAdmin'); 
const addlist=document.getElementById('addlist-rendez-vous-popup');
const list =document.querySelector('.list');
const addadminpopup=document.querySelector('#add-admin-popup');
const editadminpopup=document.querySelector('#edit-admin-popup');
const editplanningpopup=document.querySelector('#edit-planning-popup');
const addPatientBtn = document.getElementById('add');
const editPatientBtn = document.querySelector('.btn-edit');
const addRendezVousBtn = document.querySelector('.rend');
const editRendezVousBtn = document.querySelector('#editR');
const addplanningbtn =document.getElementById('addplanning')
 const ret =document.querySelector('.danger');
const addplanningpopup=document.querySelector('#add-planning-popup');
const addPatientPopup = document.querySelector('#add-patient-popup');
const editPatientPopup = document.querySelector('#edit-patient-popup');
const addRendezVousPopup = document.querySelector('#add-rendez-vous-popup');
const editRendezVousPopup = document.querySelector('#edit-rendez-vous-popup');
const patient =document.getElementById('patient');
const tblstatus =document.getElementById('listA');
const gestion = document.getElementById('gestion');
gestion.addEventListener('click',function(){
        sectionPatient.style.display='none';
        sestionappointement.style.display='none';
        sestionplanning.style.display='none';
        admintable.style.display='none';
        tblstatus.style.display='block';
      });
const sectionPatient = document.getElementById('infopatient');
const sestionplanning= document.getElementById('planning');
const sestionappointement=document.getElementById('appointement');
const appointement = document.getElementById('appoi');
const planning=document.getElementById('paln');
const    btnseting =document.getElementById('Setting');
const admintable =document.getElementById('admin');

    const del = document.querySelector(".btn-delete");
   
btnseting.addEventListener('click',function(){
        sectionPatient.style.display='none';
        sestionappointement.style.display='none';
        sestionplanning.style.display='none';
        admintable.style.display='block';
        tblstatus.style.display='none';
      });
      list.addEventListener('click',function(){
        addlist.classList.add('active');
})
addadmin.addEventListener('click',function(){
    addadminpopup.classList.add('active');
})
function editadmin(){
    editadminpopup.classList.add('active');
};
      patient.addEventListener('click',function(){
        sectionPatient.style.display='block';
        sestionappointement.style.display='none';
        sestionplanning.style.display='none';
        admintable.style.display='none';
        tblstatus.style.display='none';
      });
      appointement.addEventListener('click',function(){
     
     sestionappointement.style.display='block';
     sectionPatient.style.display='none';
     sestionplanning.style.display='none';
     admintable.style.display='none';
     tblstatus.style.display='none';
   });
   planning.addEventListener('click',function(){
    tblstatus.style.display='none';
    sestionplanning.style.display='block';
    sestionappointement.style.display='none';
    sectionPatient.style.display='none';
    admintable.style.display='none';
    
  });
  //
  function editplan(){
    editplanningpopup.classList.add('active');
  };
  addplanningbtn.addEventListener('click',function(){
    addplanningpopup.classList.add('active');
  });
addPatientBtn.addEventListener('click', function() {
    addPatientPopup.classList.add('active');

});


function editPatient() {
    editPatientPopup.classList.add('active');
};

addRendezVousBtn.addEventListener('click', function() {
    addRendezVousPopup.classList.add('active');
});
   
function editRend() {
    editRendezVousPopup.classList.add('active');
};aaaap
    </script>
</body>

</html>