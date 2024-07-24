
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Web Demo</title> -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div>
            <h4 style="margin:10px"> Icon </h4>
        </div>
        <div>
            <?php
            echo "<ul>";
            echo "<li><a href='index.php'>Home</a></li>
                <li><a href='contact.php'>Contactus</a></li>
                <li><a href='about.php'>About us</a></li>";
                // echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>'; die();

                if(isset($_SESSION['username'])&&$_SESSION['username']!=''){
                    // echo "Inside if"; 
                // $loggedin= true;
                echo "<li><a href='logout.php'>logout</a><li>"; 
                echo "<li><a href='userdata.php'>User</a><li>"; 
                }
                else{
                // $loggedin = false;
                // echo "Inside else";

                echo "
                <li><a href='login.php'>Login</a></li>
                 <li><a href='register.php'>Register</a>";
              }
     
        //     if(!$loggedin){
        //         echo "<li><a href='login.php'>Login</a></li>
        //         <li><a href='register.php'>Register</a>";
        //     }
        //    if($loggedin){
        //         echo "<li><a href='logout.php'>logout</a><li>"; 
        //    }          
            echo "</ul> ";
            ?>
        
        
    </div>
    </header>
</body>
</html>