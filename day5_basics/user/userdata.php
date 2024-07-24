<?php
    session_start(); 
    include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Records</title>
    <link rel="stylesheet" href="style.css">
    <style>
    table{
        border-collapse: collapse;
        border : 2px solid gray;
        table-layout: auto;
        width: 80%;    
        
    }  
    td, th{
        padding: 8px;
        text-align:center;
    }
    </style>
</head>
<body>
    <center>
    <!-- <h2 align='center'>User Detail</h2> -->
    <div style='padding-top:3em;'>
    <div style='padding:10px; display:flex; justify-content:right; margin-right:10em'>
            <a style='text-align:center' href='register.php'>
            <input type='button' name='user' value='add new user'/></a>
            </div>
        <table border='1'>
        <tr>
            <td colspan='8'><h3 align='center'>User Data</td>
        </tr>
        <tr>
            <th>Sr No.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Mobile No.</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Action </th>
        </tr>
        <?php
            include 'dbconn.php';
            $sql = "SELECT*from userdata";
            $result = mysqli_query($conn,$sql);
            // if($result)
            $sr=1;
            while($row = mysqli_fetch_assoc($result))
            {    
            echo "       
            <tr>
            <td>".$sr++."</td>
            <td>".$row['firstname']."</td>
            <td>".$row['lastname']."</td>
            <td>".$row['email']."</td>
            <td>".$row['mobile']."</td>";
            $statuschek ='';
            if($row['status']==0)
            {
                $statuschek = "Deactivate" ;
            }
            if($row['status']==1)
            { 
                $statuschek = "Activate"; 
            }
            echo 
            "<td>".$statuschek."</td>
            <td>".$row['created_at']."</td>
            <td><a href='update.php?id=".$row['id']."'><input type='button' name='update' value='Update'>
            <a href='delete.php?id=".$row['id']."'><input type='button' name='delete' value='Delete'>
            </td>
            </tr>";
        }
        ?>
    </table>
    </div>
</body>
</html>