<?php

session_start();
$username='admin@gmail.com';
$password='12345678';
$error = "username/password incorrect";
if(isset($_POST['submit'])) 
    {
    
    // if (isset($_POST['uname']) && isset($_POST['password']))
    // {
    $unm = ($_POST['username']);
    $pass = ($_POST['pwd']);
    
    if($unm===$username && $pass===$password)
    {
    $_SESSION['username'] = $unm;
     header('location:index.php');
    } 
    else {
        $_SESSION['error'] = $error;
        header('location:login.php');
 }      
    }
// }
?>
