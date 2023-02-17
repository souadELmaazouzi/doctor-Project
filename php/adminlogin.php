<?php
require 'config.php';
//get value the email and password user =patient 
session_start();
$myemail = $_POST['email'];
$mypassword =$_POST['pass'];
// To protect MySQL injection(more detail about MySQL injection)
$myemail = stripslashes($myemail);
$mypassword = stripslashes($mypassword);
$myemail = mysqli_real_escape_string($con,$myemail);
$mypassword = mysqli_real_escape_string($con,$mypassword);
//select email and password using bd
$sql="SELECT * FROM admin WHERE login='$myemail' and password='$mypassword'";

$result=mysqli_query($con,$sql) or die("falled to query database") ;
$row=mysqli_fetch_array($result);


$_SESSION['email'] = $row['login'];

if ($row['login']==$myemail  && $row['password']== $mypassword) {
    
      header('Location: ../pages/dashboard.php?session=' . $_SESSION['email'] );
} else {
     echo "error!!!!!!!!!!!";
}  



if (isset($_SESSION['email']) && $_SESSION['email'] != null) {
    // user is logged in
    header('Location: ../pages/dashboard.php?session=' . $_SESSION['email'] );
  
} else {
    // user is not logged in
    header("Location: ../pages/admin.php");
}





?>