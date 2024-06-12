<?php
include('../connection.php');
if(isset($_POST['submit']))
{
session_start();
    $id=$_SESSION['id'];
    $username=$_POST['username'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $address=$_POST['address'];

$queryy="update user_tb set username='$username',name='$name',email='$email',phno='$phno',address='$address' where id=$id";
    $ress=mysqli_query($conn,$queryy);
    if($ress==true)
    {
        ?>
        <script>
           alert(" edit profile successfully");
            </script>
            <?php
    }
}
?>