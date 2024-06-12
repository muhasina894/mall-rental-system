<?php
include('../connection.php');
session_start();
$id=$_SESSION['id'];
$query="select * from user_tb inner join upload_tb on user_tb.id=upload_tb.user_id";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)>0)
{
?>
<html><head>
<link rel="stylesheet" href="../bootstrap-4.6.2-dist\css\bootstrap.min.css">

</head>
<div class="container p-5">
<table class="table table-bordered table-striped table-hover">
    <thead class="bg-primary">
        <th>User_id</th>
        <th>Username</th>
        <th>Proof</th>  
        <th>Type</th>
</thead>
<?php
while($row=mysqli_fetch_array($res))
{ 
    ?>
    <tr>
    <td><?php echo $row['user_id'];?></td>
    <td><?php echo $row['username'];?></td>
    <td><img src="../images/<?php echo $row['photo'];?>" height="50" width="50"></td>

    <td><?php echo $row['type'];?></td>
</tr>
  <?php
}
}
else
{
  echo "there is no details uploaded";
}
?>
</table></html>