<?php include('../connection.php');
$query="select * from user_tb where status='unregistered'";
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
        <th>Name</th>
        <th>Email</th>
        <th>Phno</th>
        <th>Password</th>
        <th>Address</th>
</thead>
<?php
while($row=mysqli_fetch_array($res))
{ 
    ?>
    <tr>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['phno'];?></td>
    <td><?php echo $row['password'];?></td>
    <td><?php echo $row['address'];?></td>
</tr>
  <?php

}
}
else
{
  echo "no unregisterd users";
}
?>
</table>
</html>

