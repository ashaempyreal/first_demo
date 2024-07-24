<?php
   session_start(); 
   include('header.php');
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <style>
         /* label{
         font-size: 15px;
         margin-left: 15px;
         margin-top: 20px;
         } */
         .label{
         margin:25px;
         font-size: 15px;
         font-weight:bold;
         }
      </style>
      <title>Register</title>
   </head>
   <body>
      <div>
         <h2>Register </h2>
      </div>
      <div>
         <form method='POST' action= 'insert.php'>
            <div class='label'>
               <label>Enter FirstName </label>
               <input type = 'text' name = 'fnm' value='' /><br>
               <?php
                    if(isset($_SESSION["firstname"])){
                    $fname = $_SESSION["firstname"];
                    echo "<br>";
                    echo "<span>Enter any value</span>";
                    }
                ?>
            </div>
            <div class='label'>   
               <label>Enter Lastname </label>
               <input type = 'text' name = 'lnm' value='' /><br>
               <?php
                  if(isset($_SESSION['lastname']))
                  {
                     $lname= $_SESSION['lastname'];
                     echo "<span style='color:red';>$lname</span>";
                  }
               ?>
            </div>
            <div class='label'>
               <label>Enter Email </label>
               <input type = 'text' name = 'email' value=''/><br>
               <?php
                  if(isset($_SESSION['email']))
                  {
                     $email = $_SESSION['email'];
                     echo "<span>$email</span>";
                  }
               ?>
            </div>
            <div class='label'>
               <label>Enter Mobile No.</label>
               <input type = 'text' name = 'monum' value=''/><br>
               <?php
                  if(isset($_SESSION['mobilenum']))
                  {
                     $monum = $_SESSION['mobilenum'];
                     echo "<span>$monum</span>";
                  }
               ?>
            </div>
            <div class='label'>
               <label>Enter Password </label>
               <input type = 'password' name = 'pwd' value='' maxlength='12' minlength='6'/><br>
               <?php
                  if(isset($_SESSION['password']))
                  {
                     $pwd = $_SESSION['password'];
                     echo "<span>$pwd</span>";
                  }
               ?>
            </div>
            <div class='label'>
               <label>Status </label>
               <input type = 'radio' name = 'status' value="1"/>Active
               <input type = 'radio' name ='status' value="0"/>Deactive<br>
               <?php
                  if(isset($_SESSION['status']))
                  {
                     $stauts = $_SESSION['status'];
                     echo "<span>$status</span>";
                  }
               ?>
            </div>
            <div class='label'>
               <input type = 'submit' name='submit'/>
            </div>
         </form>
      </div>
   </body>
</html>