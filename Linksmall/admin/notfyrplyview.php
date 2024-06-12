<?php
include('../connection.php');
session_start();
$id=$_SESSION['id'];
$query="select * from notify_tb inner join request_tb on notify_tb.request_id=request_tb.id inner join room_tb on room_tb.id=request_tb.room_id inner join user_tb on request_tb.user_id=user_tb.id";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)>0)
{
?><html>
  <head>
  <link rel="stylesheet" href="../bootstrap-4.6.2-dist\css\bootstrap.min.css">
  </head>
</html>
<form action="" method="POST">
<div class="container p-5">
<table class="table table-bordered table-striped table-hover">
    <thead class="bg-primary">
        <th>Username</th>
        <th>Room</th>
        <th>Notify</th>
        <th>Reply</th>
</thead>
<?php
while($row=mysqli_fetch_array($res))
{ 
    ?>
    <tr>
    <td><?php echo $row['username'];?></td>
    <td><img src="../images/<?php echo $row['photo'];?>" height="50" width="50"></td>

    <td><?php echo $row['notify'];?></td>
    <td><?php echo $row['nrply'];?></td>
</tr>
  <?php
}
}
else
{
  echo "no reply";
}
?>
</table>