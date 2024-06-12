<?php
include('../connection.php');
$feedback=$_POST['feedback'];
$room_id=$_POST['room_id'];
session_start();
$id=$_SESSION['id'];
 $query="insert into feedback_tb(user_id,room_id,feedback)values('$id','$room_id','$feedback')";
 $res=mysqli_query($conn,$query );
?>
<script>
   alert("Feedback Added");
   window.history.back();
   </script>
 