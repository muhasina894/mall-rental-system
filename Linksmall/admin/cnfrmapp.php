<?php
include('../connection.php');
$id=$_GET['id'];
$renewaldate=date('Y-m-d',strtotime('11 months'));
$query="update upload_tb set status='approved' where user_id=$id";
$res=mysqli_query($conn,$query);
$queryy="update user_tb set status='registered'where id=$id";
$ress=mysqli_query($conn,$queryy);
$querry="insert into renewal_tb(request_id,leasedate,renewaldate)values('$id',CURRENT_DATE,'$renewaldate')";
$ress=mysqli_query($conn,$querry);
?>
<script>
    alert("Document Approved");
    window.location.href="vieww.php";
    </script>