<?php
include('connection.php');
$name=$_POST['name'];
$email=$_POST['email'];
 $query="select * from user_tb where name='$name' and email='$email'";
 $res=mysqli_query($conn,$query );
 $row=mysqli_fetch_array($res);
 if(mysqli_num_rows($res)>0)
 {
    session_start();
    $_SESSION['id']=$row['id'];

    header('location:fpass.php');
 }
 else{
    echo "invalid";
 }