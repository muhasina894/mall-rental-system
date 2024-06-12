<?php
include('../connection.php');
$id=$_GET['id'];
$query="delete from request_tb where id=$id";
$res=mysqli_query($conn,$query);
if($res==true)
{
    ?>
    <script>
    alert("Request Deleted succesfully");
window.location.href="reqcancel.php";
    </script>
<?php
// header("location:reqcancel.php");
}
?>

