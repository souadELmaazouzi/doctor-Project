
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Doctor</title>
        
        <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">
        
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" href="img/logowhite.png">
        
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro" rel="stylesheet">
        <!--Fonts-->
        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!--FontAwesome-->
 
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="stop-scroll">
  <!--Start loader-->
  <div class="loader-wrap">
      <div class="loader">
          <span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span>
      </div>
  </div>
  <!--End loader-->
  <!--account section start-->
  <div class="account-form">
    <div id="close-form" class="fas fa-times"> </div>
    <div class="buttons">
    <span class="btn active ligin-btn"> Login</span>
    <span class="btn register-btn"> register</span>
    </div>
    <form class="login-form active" action="php/LoginRegester.php" method="POST">
    <h3>login now</h3>
    <input type="email" placeholder="entrer votre email"  name="email" class="box">
    <input type="password" placeholder="entrer votre mots de passe" name="pw" class="box">
    
    <input type="submit" value="login now" class="btn">
    
    
    </form>
    <form class="register-form" action="php/LoginRegester.php" method="post">
        <h3>regester now</h3>
        <input type="text" name="nom" placeholder="Entrer votre nom" class="box" required>

        <input type="text" name="prenom" placeholder="Entrer votre prenom" class="box" required>
        <input type="number" name="tel" placeholder="Entrer votre tel" class="box" required>
        <input type="email" placeholder="Entrer votre email" class="box" name="email" required>
        <input type="password" placeholder="Entrer votre mots de passe" name="password" class="box" required>
      <input type="submit" value="register now" class="btn">
     </form>
    </div>
    <!--account section end-->


 
 <!--Start Header-->
  <header>
      <nav>
          <div class="logo">
              <a href="index.php"><img src="img/logoblack.png" width="90px"  alt="doctor Logo"></a>
          </div>
        
     
       
      </nav>
      <div class="text">
          <h2>Welcome</h2>
          <h1>THE DOCTOR</h1>
          <div class="arrow">
              <span class="left"></span>
           <span class="right"></span>
          </div>
          <span>Ready To Be Opened</span>
          <div class="button"   id="account-btn" onclick="alere()"><button>Explore</button></div>
      </div>
      <svg class="svg-down" width="192" height="61" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve"><path fill="currentColor" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path></svg>
      <div   href="#about" class="arrow-down">
        
      </div>
  </header>
 
  <script src="script/script.js"></script>
</body>
</html>