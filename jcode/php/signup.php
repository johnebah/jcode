<?php
    include "config.php";

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $course = mysqli_real_escape_string($con,$_POST['course']);
    $mobile = mysqli_real_escape_string($con,$_POST['mobile']);

    if (!empty($name) && !empty($email) && !empty($course) && !empty($mobile)) {
       if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
           $id = rand(time(),100000);
            $sql = mysqli_query($con,"INSERT INTO users(unique_id,name,email,course,mobile)
                VALUES('$id','$name','$email','$course','$mobile');
             ");
             if ($sql) {
                 echo "success";
             }else{
                 echo "Oops something went wrong";
             }
       }else{
            echo $email. " is an invalid email";
       }
    }else{
        echo "Please input all field";
    }
?>
