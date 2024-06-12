<?php
include('uheader.php');
include('../connection.php');
$id=$_SESSION['id'];
$query="select request_tb.id as rid,room_tb. *,request_tb.* from request_tb inner join room_tb on request_tb.room_id=room_tb.id where request_tb.user_id=$id and status!='delete'" ;
$res=mysqli_query($conn,$query);
?>
<section class="form-16" style="min-height:570px">
 <div class="form-16-mian py-5" style="min-height:570px">
 <?php
if(mysqli_num_rows($res)>0)
{
?>

 <div class="container p-5 bg-light" >
 <h3 class="text-center text-primary mb-3">My Requests</h3>
<hr>
<table class="table table-bordered table-striped table-hover bg-light">
    <thead class="bg-primary">
         <th>Room</th>  
        <th>Room No</th>  
        <th>Desciption</th>
        <th>Deposit</th>
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
    <td><?php echo $row['deposit'];?></td>
    <td><?php echo $row['status'];?></td>
    <td><a href="reqdelete.php?id=<?php echo $row['rid'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Are You sure To Delete?')">Delete</a>
    <?php
    if($row['status']=='Approved')
    {
      ?>
            <a href="userupload.php" class="btn btn-success btn-sm">Upload Data</a></td>
<?php
    }
    ?>
</tr>
  <?php
}
}
else
{
  ?>
  <div class="container p-5  mt-5 bg" style="min-height:400px">
 <div class="row text-white"><div class="col text-center">
  <h4 style="padding-top:135px">You Didn't Request For Any Room...</h4>
</div></div></div>
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
   </body>
   </html>