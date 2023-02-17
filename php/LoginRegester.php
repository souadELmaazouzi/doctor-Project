<?php
require 'config.php';
//get value the email and password user =patient 
session_start();
$myemail = $_POST['email'];
$mypassword =$_POST['pw'];
// To protect MySQL injection(more detail about MySQL injection)
$myemail = stripslashes($myemail);
$mypassword = stripslashes($mypassword);
$myemail = mysqli_real_escape_string($con,$myemail);
$mypassword = mysqli_real_escape_string($con,$mypassword);
//select email and password using bd
$sql="SELECT * FROM patient WHERE email='$myemail' and password='$mypassword'";

$result=mysqli_query($con,$sql) or die("falled to query database") ;
$row=mysqli_fetch_array($result);


$_SESSION['email'] = $row['email'];
$_SESSION['nom'] = $row['nom'];
$_SESSION['id'] = $row['ID'];
if ($row['email']==$myemail  && $row['password']== $mypassword) {
    
      header('Location: ../pages/welcome.php?session=' . $_SESSION['email'] . '&&nom=' . $_SESSION['nom']);
} else {
     echo "error!!!!!!!!!!!";
}

session_start();

if (isset($_SESSION['email']) && $_SESSION['email'] != null) {
    // user is logged in
    header('Location: ../pages/welcome.php?session=' . $_SESSION['email'] . '&&nom=' . $_SESSION['nom']);
  
} else {
    // user is not logged in
    header("Location: ../index.php");
}


if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['password']))
{
    $name = $_POST['nom'];
    $firstname = $_POST['prenom'];
    $phone = $_POST['tel'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

   

    $sql = "INSERT INTO patient(nom, prenom, tel, email, password) VALUES('$name', '$firstname', '$phone', '$email', '$password')";
    $result = mysqli_query($con, $sql);
     /*if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
*/ 
  
}


?>