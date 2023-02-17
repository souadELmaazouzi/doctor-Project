<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">
    <link rel="stylesheet" href="../css/styleAdmin.css">
    <title>admin</title>
</head>

<body>
    <section class="page">

        <div class="login">
          <div class="logo">
              <img src="../img/logowhite.png" >
          </div>
          <form action="../php/adminlogin.php" method="post">
                  <input type="text" name="email"  placeholder="User name" id="nom">
                  <input type="password"  placeholder="Password" name="pass" id="psw">
                 
                  <input type="submit" id="btn"  value="Login">
               
          </form>
      </div>
   
       
    </section>
    
</body>
</html>