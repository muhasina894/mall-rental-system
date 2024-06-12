<?php
include('connection.php');
$username=$_POST["username"];
$password=$_POST["password"];
 $query="select * from admin_tb where username='$username'and password='$password'";
 $res=mysqli_query($conn,$query );
 if(mysqli_num_rows($res)>0)
 {
    $rows=mysqli_fetch_array($res);
    session_start();
    $_SESSION["username"]=$rows["username"];
    $_SESSION['id']=$rows["id"];
    header("location:admin/admin_home.php");
 }
 else
 {
    $queryy="select * from user_tb where username='$username' and password='$password' and status='unregistered'";
    $ress=mysqli_query($conn,$queryy );
 if(mysqli_num_rows($ress)>0)
 {
    $rows=mysqli_fetch_array($ress);
    session_start();
    $_SESSION["username"]=$rows["username"];
    $_SESSION['id']=$rows["id"];
    $_SESSION['email']=$rows["email"];
    header("location:unregistered/user_home.php");
 }
 else
 {
    $queryy="select * from user_tb where username='$username' and password='$password' and status='registered'";
    $ress=mysqli_query($conn,$queryy );
 if(mysqli_num_rows($ress)>0)
 {
    $rows=mysqli_fetch_array($ress);
    session_start();
    $_SESSION["username"]=$rows["username"];
    $_SESSION['id']=$rows["id"];
    $_SESSION['email']=$rows["email"];
    header("location:tenent/user_home.php");
 }
 else
 {
   ?>
   <script>
      alert("Invalid User..");
      window.location.href="formm.php";
   </script>
   <?php
 }
}
}
      ?>
 