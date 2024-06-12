<?php
include('../connection.php');
?>
<?php
 $id=$_GET['id'];
$queryy="select request_tb.id as rid,room_tb.*,user_tb.*,request_tb.* from request_tb inner join user_tb on request_tb.user_id=user_tb.id inner join room_tb on room_tb.id=request_tb.room_id where request_tb.id=$id";
$ress=mysqli_query($conn,$queryy);
while($row=mysqli_fetch_array($ress))
{ 
  ?>
<form action="status.php?id=<?php echo $row['rid'];?>" method="POST">
<table>
    <thead>
  <th>Room Details</th>
</table>
<table border=1>
    <tr>
      <td>Floor</td>
      <td><?php echo $row['floor'];?></td></tr>
        <tr>
          <td>Photo</td>
          <td><img src="../images/<?php echo $row['photo'];?>" height="50" width="50"></td>
</tr>
<tr>
        <td>Squarfeet</td>
        <td><?php echo $row['squarfeet'];?></td>
</tr>
<tr>
        <td>Roomno</td>
        <td><?php echo $row['roomno'];?></td>
</tr>
<tr>
        <td>Rate</td> 
        <td><?php echo $row['rate'];?></td>
</tr>
<tr> 
        <td>Desciption</td>
        <td><?php echo $row['description'];?></td>
</tr>
<tr>
        <td>Deposit</td>
        <td><?php echo $row['deposit'];?></td>  
</tr>
</table>
<table>
<th>User Details</th>
</table>
<table border=1>
<tr>
        <td>Username</td>
        <td><?php echo $row['username'];?></td>  
</tr>
<tr>
        <td>Name</td>
        <td><?php echo $row['name'];?></td>  
</tr>
<tr>
        <td>Email</td>
        <td><?php echo $row['email'];?></td> 
</tr>
<tr>
        <td>Phno</td>
        <td><?php echo $row['phno'];?></td>  
</tr>
<tr>
        <td>Address</td>
        <td><?php echo $row['address'];?></td> 
</tr>
<tr>
        <td>Date</td>
        <td><?php echo $row['date'];?></td>
</tr>
</thead>
</table>
</form>
<?php
}
?>