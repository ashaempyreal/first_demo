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
    <title>Login</title>
</head>
<body>

    <div>
        <h2>Login Page </h2>
    </div>
    <div>
        <form method="post" action="session.php">
            <div>
                <label>Enter Name</label>
                <input type='text' name='username' required><br><br>

                <label>Enter Password</label>
                <input type='password' name='pwd' required><br><br>
                <input type='submit' name='submit'>
                <?php
                    if(isset($_SESSION["error"])){
                    $error = $_SESSION["error"];
                    echo "<br>";
                    echo "<span>$error</span>";
                    }
                ?>
                
            </div>
        </form>
    </div>

</body>
</html>
<?php
    unset($_SESSION["error"]);
?>