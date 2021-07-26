<?php
session_start();
include "config.php";
if ($_SESSION['username']=="") {
    header("location:admin_login.php");
}
$sql = mysqli_query($con,"SELECT * FROM users");
while($rows = mysqli_fetch_array($sql)){
    $id = $rows['unique_id'];
    $name = $rows['name'];
    $email = $rows['email'];
    $course = $rows['course'];
    $mobile = $rows['mobile'];
    $status = $rows['status'];
    $date = $rows['date'];

    $output = "<tr><td>".$id."</td><td>".$name."</td><td>".$email."</td><td>".$mobile."</td><td>".$course."</td><td>".$status."</td><td>".$date."</td></tr>"."<br>";
    echo $output;
}
?>