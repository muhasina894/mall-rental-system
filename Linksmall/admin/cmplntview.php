<?php
include('adminheader.php');
include('../connection.php');
$query="select complaint_tb.description as cdescription,complaint_tb.id as cid,complaint_tb.*,user_tb.*,room_tb.* from complaint_tb inner join user_tb on complaint_tb.user_id=user_tb.id inner join room_tb on complaint_tb.room_id=room_tb.id";
$res=mysqli_query($conn,$query);
?>
<section class="form-16" id="booking" >
    <!-- /form-16-section -->
    <div class="form-16-mian py-5" style="min-height:570px">
    <div class="container  pl-5 pr-5 bg-light border" style="min-height:450px">
    <h3 class="text-primary text-center pt-5 pb-2">Complaint View</h3>
<table class="table table-bordered table-striped table-hover">
    <thead class="bg-primary text-light">
      <th>Room</th>
        <th>User Name</th>
        <th>Room No</th>
        <th>Description</th>
        <th></th>
</thead>
<?php
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_array($res))
{ 
    ?>
    <tr>
    <td><img src="../images/<?php echo $row['photo'];?>" height="100" width="100"></td>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['roomno'];?></td>
    <td><?php echo $row['cdescription'];?></td>
      <td><a href="cmplntrplyfrm.php?id=<?php echo $row['cid'];?>" class="btn btn-primary">REPLY</a></td>
</tr>
  <?php
}
}
else
{
  ?>
  <tr>
    <td colspan=5 class="text-center text-danger"><?php echo "There Is No complaints ";?></td>
</tr>
<?php
}
?>
</table>
</div>
        </section>
<?php
include('../footer.php');
?>
</html>