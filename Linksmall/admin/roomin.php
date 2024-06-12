<?php
include('../connection.php');
if(isset($_POST['submit']))
{
    $floor=$_POST['floor'];
    $photo=$_FILES['photo']['name'];
    $filepath=$_FILES['photo']['tmp_name'];
    $squarfeet=$_POST['squarfeet'];
    $roomno=$_POST['roomno'];
    $rate=$_POST['rate'];
    $description=$_POST['description'];
    $deposit=$_POST['deposit'];
    $query="insert into room_tb(floor,photo,squarfeet,roomno,rate,description,deposit)values('$floor','$photo','$squarfeet','$roomno','$rate','$description','$deposit')";
    $res=mysqli_query($conn,$query);
    if($res==true)
    {
        move_uploaded_file($filepath,'../images/'.$photo);
        ?>
         <?php 
            header("location:rooms.php"); 
          
    }
}
?>