<?php
    session_start();
    if ($_SESSION['username']=="") {
        header("location:admin_login.php");
    }
    include "config.php";

    $unique_id = mysqli_real_escape_string($con,$_POST['unique_id']);

    if (!empty($unique_id)) {
            $sql = mysqli_query($con,"SELECT * FROM users WHERE unique_id = '$unique_id'");
             if (mysqli_num_rows($sql) > 0) {
                 $rows = mysqli_fetch_array($sql);
                 $fetch = $rows['unique_id'];
                 $paid = 'paid';
                 $date = date("Y/m/d");
                 $sql2 = mysqli_query($con,"UPDATE users SET status = '$paid' , date = '$date' WHERE unique_id = '$fetch' ");
                 if ($sql2) {
                    echo "success";
                 }else{
                     echo "failure";
                 }
             }else{
                 echo "Invalid username or password";
             }
    }else{
        echo "Please input all field";
    }
?>
