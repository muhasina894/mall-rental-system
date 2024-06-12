<?php
include('adminheader.php');
include('../connection.php');
$query="select request_tb.id as rid,room_tb. *,user_tb.* from request_tb inner join user_tb on request_tb.user_id=user_tb.id inner join room_tb on room_tb.id=request_tb.room_id inner join upload_tb on upload_tb.user_id=request_tb.user_id where request_tb.status='Approved'";
$res=mysqli_query($conn,$query);
?>
<section class="form-16" id="booking" style="min-height:570px">
    <!-- /form-16-section -->
    <div class="form-16-mian py-5">
       <div class="container p-5 bg-light" style="min-height:570px">
<table class="table table-bordered table-striped table-hover bg-light">
<tr><h4  class="p-1 text-center text-primary">Approved Requests</h4></tr>  
 <hr>
 <thead class="bg-primary text-white">       
        <th>User Name</th>
        <th>Photo</th>
        <th>Room No</th>
        <th></th>
</thead>
<?php
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_array($res))
{ 
    ?>
    <tr>
    <td><?php echo $row['username'];?></td>
    <td><img src="../images/<?php echo $row['photo'];?>" height="50" width="50"></td>

    <td><?php echo $row['roomno'];?></td>
    <td><a href="viewpenddetails.php?id=<?php echo $row['rid'];?>"class="btn btn-info">DETAILS</a></td>
</tr>
  <?php
}
}
else
{
  ?>
  <tr>
<td colspan="4" class="text-center text-danger">
  <?php echo "No Approved Requests";?>
 </td>
</tr>
   <?php
}
?>
</table>
</div>
</div>
</section>
<?php
include('../footer.php');
?>
</html>