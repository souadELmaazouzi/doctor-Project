<?php

include '../php/config.php';

/*if (empty($_GET['session'])) {
    header('Location:index.php');
}*/
?>


<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Doctor</title>
   
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="../img/logowhite.png">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro" rel="stylesheet">
    <!--Fonts-->
    

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!--FontAwesome-->
 
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="stop-scroll">



  

 
 <!--Start Header-->
  <header>
      <nav>
          <div class="logo">
              <a href="welcome.php"><img src="../img/logoblack.png" width="90px"  alt="doctor Logo"></a>
          </div>
          <div class="toggle">
              <span class="first"></span>
              <span class="middle"></span>
              <span class="last"></span>
          </div>
          <div class="navigation-bar">
              <ul>
                  <li class="active"><a href="welcome.php"><?php session_start(); echo $_SESSION['nom'];?><span class="underline"></span></a></li>
                  <li><a href="#about">About<span class="underline"></span></a></li>
                  <li><a href="#spcialty">Specialty<span class="underline"></span></a></li>
                  <li><a  href="#appointement" >Appointement<span class="underline"></span></a></li>
                  <li><a href="../php/logout.php"><i class="fa-solid fa-right-from-bracket"></i> <span class="underline  "></span></a></li>
                 
              </ul>
          </div>
       
      </nav>
      <div class="text">
          <h2>Welcome</h2>
          <h1>THE DOCTOR</h1>
          <div class="arrow">
              <span class="left"></span>
              <i class="fas fa-asterisk"></i>
            
                
              <span class="right"></span>
          </div>
          
          
      </div>
      <svg class="svg-down" width="192" height="61" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve"><path fill="currentColor" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path></svg>
      <div   href="#about" class="arrow-down">
        
      </div>
  </header>
<!--sitting start -->

  <!--End Header-->
 
  <!--start About Us-->
  <div class="about-us">
      <div class="text">
          <h2>Discover</h2>
          <h3>Our Story</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam atque optio esse necessitatibus tenetur fugiat autem beatae commodi quisquam officiis, pariatur sed nobis rem unde sint, quas, odio nam? Illum..</p>
          <div><a class="a-CTA" href="#about">About Us</a></div>
      </div>
      <div class="image-container">
          <div class="image image1">
              <img src="../img/l1.jpg" alt=" Photo">
          </div> <div class="image image1">
            <img src="../img/l1.jpg" alt=" Photo">
        </div>
      
      </div>
  </div>
  <!--End About Us-->

  <!--start Recipes-->
  <div class="recipes">
      <div class="image"></div>
      <div class="text">
          <h2>Health  </h2>
          <h3>Is important </h3>
      </div>
  </div>
  <!--End Recipes-->


  <!--start Menu-->
  <div id="spcialty"  class="menu">
   
      <div class="menu-image-container">
          <div class="image active">
              <img src="../img/doctor-presenting-something-over-isolated-white-background.jpg" alt=" Photo">
          </div>
          <div class="image">
              <img src="../img/doctor-at-work.jpg" alt="Food Photo">
          </div>
          <div class="image">
              <img src="../img/portrait-of-doctor.jpg" alt="Food Photo">
          </div>
          <div class="image">
              <img src="../img/Eviter-cambriolage-cabinet-medical.jpg" alt="Food Photo">
          </div>
      </div>
      <div class="text">
          <h2>Discover</h2>
          <h3>Specialites</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptates cum ut repellat, autem distinctio aspernatur et debitis esse rerum laborum consectetur libero doloribus incidunt voluptate necessitatibus est fugit perferendis.</p>
         
      </div>
  </div>
  <!--End Menu-->

  <!--Start fixed-image-->
  <div class="fixed-image">
      <div class="text">
          <h2>The Perfect</h2>
          <h3>Service</h3>
      </div>
  </div>
  <!--End fixed-image-->

  <!--start About Us-->
  <div class="reservation appointement" id="appointement" >
  <div class="contact-section">
  <div class="text">
          <h2>Appointement</h2><br>
          <br><br>
      </div>
  <form id="form" action="../php/addApointement.php" method="post">

<div class="inputs-filed">

    <input type="hidden" name="id" <?php echo 'value=' .$_SESSION['id'] ?>>
   
      <h2 id="count"  style="   color:#0074a9; font-size: 40px; margin: 30px;"> vous avez effectué :  <?php $idp=$_SESSION['id'];
      $sql = "SELECT COUNT(*) FROM rendezvous WHERE idpatient=$idp";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$count = $row[0];
echo $count .' rendez-vous';  ?></h2>
    <input type="date" name="date" id="date">
    <input type="time" name="heur" id="heur">
    <!-- <input type="text" id="message" class="message-area" placeholder="Message"> -->
    <textarea name="description" id="message" class="message-area" placeholder="Description" cols="30" rows="10"></textarea>
    <input type="submit" class="btn btn-contact" value="Submit">

</div>
</form>

 </div>
 <div class="image-container">

                    <div id="contact-item"  class="contact-item">
                        <div class="icon"><img src="../img/Circle-icons-calendar.svg.png" width="40px"></div>
                        <table>
                            
                            <tr>
                                <th>
                                    day
                                </th>
                                <th>Schedule</th>
                            </tr>
                         <?php
                         include '../php/agenda.php';
                         ?>
                        </table>
                    </div>

                </div>  
    
  </div>
  <!--End About Us-->

  <!--Start Footer-->
  <footer>
      <div class="text">
          <h2 id="about">ABOUT DOCTOR</h2>
          <div><i class="fas fa-asterisk"></i></div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi suscipit facere voluptatibus blanditiis aut esse dignissimos dicta officiis quas ab, rerum vitae expedita perspiciatis eos quo explicabo laboriosam error numquam.</p>
      </div>
      <div class="contact-container">
        <div class="social-media">
            <h3>Follow Along</h3>
            <div class="links">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
       
      </div>
  </footer>
<!--End Footer-->

<!--Start Copy-Right-->
  <div class="copyright">
      <svg class="svg-up" width="192" height="61" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve"><path fill="#262526" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path></svg>
      <i class="fas fa-angle-double-up arrow-up"></i>
      <ul class="info">
          <li>&copy; DOCTOR 2022</li>
          <li>13 Khalil , Jadida</li>
          <li>Tel: +21271494563</li>
         
      </ul>
      <ul class="CTA">
          <li><a href="#">PERMISSIONS AND COPYRIGHT</a></li>
          <li><a href="#">CONTACT THE TEAM</a></li>
      </ul>
  </div>
  <!--End Copy-Right-->


  <script src="../script/script copy.js"></script>
</body>

</html>
<!-- partial -->


