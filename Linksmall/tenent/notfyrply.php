<?php
include('../connection.php');
$reply=$_POST["reply"];
$date=$_POST['date'];
$id=$_POST['id'];

$query="update notify_tb set nrply='$reply' where id=$id";
$res=mysqli_query($conn,$query );
?>
<script>
   alert("Replied");
   window.location.href="notification.php";
   </script>
 