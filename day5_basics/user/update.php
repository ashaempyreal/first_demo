<?php
    session_start(); 
    include('header.php');
    include 'dbconn.php';
    
    if (isset($_POST['update']))
    {
    $id=$_GET['id'];
    $firstname = $_POST['fnm'];
    $lastname = $_POST['lnm'];
    $email = $_POST['email'];
    $mobilenum = $_POST['monum'];
    $password = $_POST['pwd'];
    $status = $_POST['status'];

    $sql = "UPDATE `userdata` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`mobile`='$mobilenum',`password`='$password',`status`='$status', `updated_at`=NOW() WHERE `id`= '$id'";

    $result = $conn->query($sql); 
    if ($result == TRUE) {
        // echo "Record updated successfully.";
        header('location:userdata.php');
    }
    else
    {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    }
    // $select = "SELECT * from userdata WHERE id = $id";
    // $data = mysqli_query($conn, $select);
    // $row= mysqli_fetch_array($data);

    if (isset($_GET['id'])) {
        $id = $_GET['id']; 
        $sql = "SELECT * FROM `userdata` WHERE `id`='$id'";

        $result = $conn->query($sql); 

        if ($result->num_rows > 0) { 
            // $row = $result->fetch_assoc();       
            while ($row = $result->fetch_assoc()) {
                $id=$_GET['id'];
                $firstname=$row['firstname'];
                $lastname=$row['lastname'];
                $email=$row['email'];
                $mobilenum=$row['mobile'];
                $password=$row['password'];
                $status=$row['status'];
            } 
        }
            else {
                echo "No record found.";
            }
    }
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
        <form method='POST' action= ''>
    <div class='label'>
        <label>Enter FirstName </label>
        <input type = 'text' name = 'fnm' value='<?php echo $firstname; ?>' required><br>
    </div>
    <div class='label'>   
        <label>Enter Lastname </label>
        <input type = 'text' name = 'lnm' value="<?php echo ($lastname); ?>"><br></div>
        <div class='label'>
        <label>Enter Email </label>
        <input type = 'text' name = 'email' value='<?php echo $email; ?>' required/><br></div>

        <div class='label'>
        <label>Enter Mobile No.</label>
        <input type = 'text' name = 'monum' value='<?php echo $mobilenum;?>'/><br></div>

        <div class='label'>
        <label>Enter Password </label>
        <input type = 'password' name = 'pwd' value='<?php echo $password; ?>' required/><br></div>

        <div class='label'>
        <label>Status </label>
        <input type = "radio" name="status" value="1"
         <?php 
         if($status==1)
         { echo "checked";
         } 
         ?> />Active
        <input type = 'radio' name = 'status' value="0" <?php if($status==0){ echo "checked";} ?> />Deactive<br></div>
      
        <div class='label'>
        <input type = 'submit' name='update'/></div>
    </form>
    </div>
</body>
</html>