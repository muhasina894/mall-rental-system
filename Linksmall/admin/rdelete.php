<?php
include('../connection.php');
$id=$_GET['id'];
$query="delete from room_tb where id=$id";
$res=mysqli_query($conn,$query);
if($res==true)
{
    ?>
    <script>
    alert("delete succesfully");
window.location.href="roomview.php";
    </script>
<?php
// header("location:roomview.php");
}
?>

