<?php
include('adminheader.php');
include('../connection.php');
$id=$_GET['id'];
$query="select feedback_tb.id as fid,feedback_tb.*,user_tb.*,room_tb.* from feedback_tb inner join user_tb on feedback_tb.user_id=user_tb.id inner join room_tb on feedback_tb.room_id=room_tb.id where room_tb.id=$id";
$res=mysqli_query($conn,$query);

?>
<form action="" method="POST">
<section class="form-16" id="booking" style="min-height:570px">
    <!-- /form-16-section -->
    <div class="form-16-mian py-5">
       <div class="container p-5" style="min-height:570px">
    <div class="col-md-6 offset-3 bg-light p-5 font-weight-bold">
 <div class="row mb-4">
<div class="col text-center"><h4 class="text-primary">Feedbacks</h4></div>
 </div>
        <!-- <td><img src="../images/<?php echo $row['photo'];?>" height="100" width="100"></td>
    <td><?php echo $row['roomno'];?></td> -->
</thead>
<?php
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_array($res))
{ 
    ?>
    <div class="row">
                <div class="col-md-1"><li class="fa fa-user"></li></div>
        <?php echo $row['username'];?>
        </div>
        <div class="row font-weight-light pl-5">
       <?php echo $row['feedback'];?>
</div>
<hr>
    <?php 
}
}
else
{
   ?>
  <div class="row">
    <div class="col text-center">
 <?php echo "No Feedbacks...";?>
  </div>
</div>
   
   
  <?php
}
?>
</div>
</div>
</div>
</section>
<?php
include('../footer.php');
?>
</html>
