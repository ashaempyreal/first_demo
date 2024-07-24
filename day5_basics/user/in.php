<?php
    include ('dbconn.php');
    
    echo 
    $email = '';
    $fname = '';
    $lname = 'Firstname is required';
    $monum = "Mobile Number is required";
    $pwd = 'Password is required';
    $status = 'Select any one status';
    echo "print";
    if(isset($_POST['submit']))
    {
        echo "printing values";
        $firstname = $_POST['fnm'];
        $lastname = $_POST['lnm'];
        $email = $_POST['email'];
        $mobilenum = $_POST['monum'];
        $password = $_POST['pwd'];
        $status = $_POST['status'];
        // print_r($_POST);
        if($firstname==''){
            $_SESSION['firstname'] = $fname;
        }
        if($lastname==''){
            $_SESSION['lastname'] = $lname;
        }
        if($email==''){
            $_SESSION['email'] = $email;
        }
        if($mobilenum==''){
            $_SESSION['mobilenum'] = $monum;
        }
        if($password==''){
            $_SESSION['password'] = $pwd;
        }

        if($firstname=='' || $lastname=='' || $email=='' || $mobilenum =='' || $password == '' || $stauts == '')
        {
            echo "enter all value";
            header('location:register.php');
        }
        else{
        $emailchek = "SELECT * from userdata WHERE `email`='$email'";
        $result = mysqli_query($conn,$emailchek);
        $count = mysqli_num_rows($result);
        if($count>0)
        {
            echo 'Email Already Exists..';
        }
        else
        {
        $sql= "INSERT INTO `userdata`(`firstname`, `lastname`, `email`, `mobile`, `password`, `status`, `created_at`) VALUES ('$firstname','$lastname','$email','$mobilenum',md5('$password'), '$status', NOW())";
        // echo $sql;
        $result2 = mysqli_query($conn, $sql);
        // echo $result;
        if($result2>0)
        {
            echo "<h4 'style= color:green'>inserted Sucessfully</h4>";
            header('location:userdata.php');
        }
    }
}
    }
        else
        {  
            echo "Could not insert record: ". mysqli_error($conn);  
        }
?>