<?php
include('../connection.php');
$title=$_POST['title'];
$description=$_POST['description'];
$room_id=$_POST['room_id'];
$photo=$_FILES['photo']['name'];
$filepath=$_FILES['photo']['tmp_name'];
session_start();
$id=$_SESSION['id'];
 $query="insert into complaint_tb(user_id,room_id,title,description,photo)values('$id','$room_id','$title','$description','$photo')";
 $res=mysqli_query($conn,$query );
 if($res==true)
 {
     move_uploaded_file($filepath,'../images/'.$photo);
 }
?>
<script>
   alert("complaint added");
   window.history.back()
      </script>
 