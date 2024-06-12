<?php
include('../connection.php');
$id=$_GET['id'];
$query="delete from user_tb where id=$id";
$res=mysqli_query($conn,$query);
if($res==true)
{
    ?>
    <script>
    alert("deleted succesfully");
//window.location.href="vieww.php";
window.history.back();
    </script>
<?php
// header("location:registerd.php");
}
?>
   