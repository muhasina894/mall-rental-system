<?php
include('connection.php');
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $address=$_POST['address'];
    $query="insert into user_tb(username,name,email,phno,password,address,status)values('$username','$name','$email','$phno','$password','$address','unregistered')";
    
    $res=mysqli_query($conn,$query);
    if($res==true)
    {
        ?>
        <script>
            alert("sign up succesfully");
            </script>
            <?php
            header("location:formm.php");
 }
}         
?>