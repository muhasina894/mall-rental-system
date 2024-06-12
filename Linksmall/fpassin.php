<?php
include('connection.php');
$ppass=$_POST['password'];
$ccpass=$_POST['cpassword'];
session_start();
$id=$_SESSION['id'];
if($ppass==$ccpass)
    {
       $querry="update user_tb set password='$ppass' where id=$id";
       $ress=mysqli_query($conn,$querry);
    ?>
         <script>
       // alert("change password successfully ");
       window.location.href="formm.php";
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
       alert(" Password Doesn't Match ");
       </script>
       <?php
    }?>
