<?php
include('theader.php');
include('../connection.php');
$id=$_SESSION['id'];
$query="select complaint_tb.photo as cphoto,complaint_tb.*,room_tb.* from complaint_tb inner join room_tb on room_tb.id=complaint_tb.room_id where user_id=$id";
$res=mysqli_query($conn,$query);
?>
<section class="form-16" id="booking" style="min-height:570px">
    <!-- /form-16-section -->
    <div class="form-16-mian py-5"  style="min-height:570px">
<div class="container bg-light p-5"  style="min-height:450px">
<form action="" method="POST">
<table class="table table-bordered table-striped table-hover bg-light">
  <tr><h4  class="pt-3 text-center text-primary">View Rooms</h4></tr>  
  <hr>
  <thead class="bg-primary text-white">
        <th>Roomno</th>
        <th>Title</th>
        <th>Description</th>
        <th>Photo</th>
        <th>Reply</th>
</thead>
<?php
if(mysqli_num_rows($res)>0)
{
?>

<?php
while($row=mysqli_fetch_array($res))
{ 
    ?>
    <tr>
    <td><?php echo $row['roomno'];?></td>
    <td><?php echo $row['title'];?></td>
    <td><?php echo $row['description'];?></td>
    <td><img src="../images/<?php echo $row['cphoto'];?>" height="50" width="50"></td>
    <td>
      <?php 
      if(empty($row['reply']))
      {
        ?>
        <h6 class="text-danger">No Reply</h6>
        <?php
      }
      else
      {     
        echo $row['reply'];
      }
      ?>
      </td>
</tr>
  <?php
}
}
else
{
  ?> 
  <tr><td colspan="5" class="text-center text-danger">No Complaints</td></tr>
  <?php
}
?>
</table>
</div>
</section>
<?php
include('../footer.php');
?>
</body>
</html>