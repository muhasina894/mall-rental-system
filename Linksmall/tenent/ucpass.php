<?php
include('../connection.php');
$password=$_POST["password"];
$npass=$_POST["npassword"];
$cpass=$_POST["cpassword"];
session_start();
$id=$_SESSION['id'];
 $query="select * from user_tb where password='$password' and id=$id";
 $res=mysqli_query($conn,$query );
 if(mysqli_num_rows($res)==0)
 {
    ?>
    <script>
        alert("current password is invalid");
        </script>
        <?php
        }
        else
        {
        if($npass==$cpass)
    {
       $querry="update user_tb set password='$npass' where id=$id";
       $ress=mysqli_query($conn,$querry);
    ?>
         <script>
        alert("change password successfully ");
        </script>
        <?php
    }
    else{
        ?>
        <script>
       alert(" password doesnt match ");
       </script>
       <?php
    }
}