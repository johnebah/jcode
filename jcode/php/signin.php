<?php
    session_start();
    include "config.php";

    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if (!empty($username) && !empty($password)) {
            $sql = mysqli_query($con,"SELECT * FROM admin WHERE username = '$username' && password = '$password' ");
             if (mysqli_num_rows($sql) > 0) {
                 $rows = mysqli_fetch_array($sql);
                 $fetch = $rows['username'];
                 $_SESSION['username'] = $fetch;
                 echo "success";
             }else{
                 echo "Invalid username or password";
             }
    }else{
        echo "Please input all field";
    }
?>
