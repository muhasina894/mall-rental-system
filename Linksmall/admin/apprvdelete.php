<?php
include('../connection.php');
$id=$_GET['id'];
$query="update  request_tb set status='delete' where request_tb.id=$id";
$res=mysqli_query($conn,$query);
if($res==true)
{
    ?>
    <script>
    alert("deleted succesfully");
window.location.href="viewappreq.php";
    </script>
<?php
// header("location:viewappreq.php");
}
?>