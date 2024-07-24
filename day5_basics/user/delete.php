<?php 

include "dbconn.php"; 
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $sql = "DELETE FROM `userdata` WHERE `id`='$user_id'";
     $result = $conn->query($sql);
     if ($result == TRUE) {
        echo "Record deleted successfully.";
        header('location:userdata.php');
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
} 

?>