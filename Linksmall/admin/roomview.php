<?php
include('adminheader.php');
include('../connection.php');
$query="select * from room_tb";
$res=mysqli_query($conn,$query);
?>
<section class="form-16" id="booking" style="min-height:570px">
    <!-- /form-16-section -->
    <div class="form-16-mian py-5">
<div class="container bg-light p-4">
<form action="" method="POST">
<table class="table table-bordered table-striped table-hover bg-light">
  <tr><h4  class="pt-3 text-center text-primary">View Rooms</h4></tr>  
  <hr>
  <thead class="bg-primary text-white">
        <th>Floor</th>
        <th>Room</th>
        <th>Squarfeet</th>
        <th>Room No</th>
        <th>Rate</th>  
        <th>Desciption</th>
        <th>Deposit</th>
        <th></th>
</thead>
<?php
while($row=mysqli_fetch_array($res))
{ 
    ?>
    <tr>
    <td><?php echo $row['floor'];?></td>
    <td><img src="../images/<?php echo $row['photo'];?>" height="50" width="50"></td>
    <td><?php echo $row['squarfeet'];?></td>
    <td><?php echo $row['roomno'];?></td>
    <td><?php echo $row['rate'];?></td>
    <td><?php echo $row['description'];?></td>
    <td><?php echo $row['deposit'];?></td>
    <td><a href="redit.php?id=<?php echo $row['id'];?>" class="btn btn-info btn-sm">Edit</a>
    <a href="rdelete.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm">Delete</a>
    <a href="viewfeedback.php?id=<?php echo $row['id'];?>" class="btn btn-success btn-sm">Feedbacks</a></td>
    
</tr>
  <?php
}
?>
</table>
</form>
</div>
</div>
</section>
<?php
include('../footer.php');
?>
</body>
</html>