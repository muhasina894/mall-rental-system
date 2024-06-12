<?php
include('../connection.php');
$reply=$_POST["reply"];
$id=$_POST['id'];
$query="update complaint_tb set reply='$reply' where id=$id";
$res=mysqli_query($conn,$query );
?>
<script>
   alert("Replied");
   history.back();
   </script>
 