<?php
include('theader.php');
include('../connection.php');
$id=$_SESSION['id'];
$query="select request_tb.id as rid,room_tb. *,request_tb.* from request_tb inner join room_tb on request_tb.room_id=room_tb.id where request_tb.user_id=$id and status!='delete'";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)>0)
{
?>
<section class="form-16" id="booking">
 <div class="form-16-mian py-5" style="min-height:570px">
 <div class="container py-lg-3 text-white bg-light border border-white p-5" style="min-height:450px">
  <h3 class="text-center text-primary mb-3">My Requests</h3>
<hr>
<table class="table table-bordered table-striped table-hover bg-light">
    <thead class="bg-primary text-white">
      <th>Room</th>
        <th>Room No</th>  
        <th>Desciption</th>
        <th>Status</th>
        <th></th>
</thead>
<?php
while($row=mysqli_fetch_array($res))
{ 
    ?>
    <tr>
    <td><img src="../images/<?php echo $row['photo'];?>" height="70" width="70"></td>
    <td><?php echo $row['roomno'];?></td>
    <td><?php echo $row['description'];?></td>
    <td><?php echo $row['status'];?></td>
    <td class="text-center"><a href="reqcancel.php?id=<?php echo $row['rid'];?>" class="btn btn-primary btn-sm">Details</a></td>
</tr>
  <?php
}
}
else
{
  ?>
  <div class="col-md-8 offset-2 border p-5 mt-5 text-white">
  <h4 class="text-center">You Didn't Request Any Room</h4> 
  </div>
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