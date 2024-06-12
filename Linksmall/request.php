<?php
include('connection.php');
$roomid=$_GET['id'];
session_start();
$userid=$_SESSION['id'];
$query="insert into  request_tb (room_id,user_id,date,status,pstatus) values('$roomid','$userid',CURRENT_DATE,'pending','pending')";
$res=mysqli_query($conn,$query);
    if($res==true)
    {
        header("location:userviewrm.php");
    }
    ?>