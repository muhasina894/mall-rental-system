<?php
include('connection.php');
$username=$_POST['username'];
 $query="select * from user_tb where username='$username'";
 $res=mysqli_query($conn,$query );
 if(mysqli_num_rows($res)>0)
 {
    header('location:forgetne.php');
 }
 else{
    echo "invalid";
 }
 ?>