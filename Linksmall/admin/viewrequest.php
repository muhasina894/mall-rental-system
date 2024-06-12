<?php
include('../connection.php');
$query="select request_tb.id as rid,room_tb. *,user_tb.* from request_tb inner join user_tb on request_tb.user_id=user_tb.id inner join room_tb on room_tb.id=request_tb.room_id ";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)>0)
{
?>
<html>
  <head>
  <link rel="stylesheet" href="../bootstrap-4.6.2-dist\css\bootstrap.min.css">
  </head>
  <div class="container p-5">
<table class="table table-bordered table-striped table-hover">
    <thead class="bg-primary"> 
        <th>Username</th>  
        <th>Room</th>
        <th>Roomno</th>
        <th></th>
</thead>
<?php
while($row=mysqli_fetch_array($res))
{ 
    ?>
    <tr>
    <td><?php echo $row['username'];?></td>
    <td><img src="../images/<?php echo $row['photo'];?>" height="100" width="100"></td>
    <td><?php echo $row['roomno'];?></td>
    <td><a href="reqdetails.php?id=<?php echo $row['rid'];?>">DETAILS</a></td>
</tr>
  <?php
}
}
else
{
  echo " there is no request";
}
?>
</table></html>