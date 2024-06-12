<?php
include('theader.php');
include('../connection.php');
?>
<?php
 $id=$_GET['id'];
$queryy="select * from room_tb where id=$id";
$ress=mysqli_query($conn,$queryy);
$query="select * from room_tb inner join request_tb on request_tb.room_id=room_tb.id where request_tb.room_id=$id and status='Approved'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($ress)
?>
<section id="booking" style="background-image:url('../assets/images/m1.jpeg')">
 <div class="form-16-mian">
 <div class="container-fluid py-lg-3 text-dark bg" >

        <div class="col-md-6 offset-3 mt-2 p-5 border bg-light font-weight-bolder mb-5">
        <h3 class="text-primary pt-1 pb-2 text-center">Room Details</h3>
<hr>
<form action="" method="POST">
<div class="row ">
        <div class="col-md-12">
        <img src="../images/<?php echo $row['photo'];?>" height="300" width="100%">
</div></div>
<div class="row pt-5 ">
        <div class="col-md-2">
<label>Floor</label>
        </div>
        <div class="col-md-1">:</div>
        <div class="col">
<?php echo $row['floor'];?>

        </div>
</div>
<div class="row">
        <div class="col-md-2">
<label>Squarefeet</labal>
        </div>
        <div class="col-md-1">:</div>
        <div class="col">
                <?php echo $row['squarfeet'];?>
        </div>
</div>
<div class="row">
        <div class="col-md-2">
<label>Roomno</label>
        </div>
        <div class="col-md-1">:</div>
        <div class="col">
                <?php echo $row['roomno'];?>
        </div>
</div>
<div class="row">
        <div class="col-md-2">
<label>Rate</label>
        </div>
        <div class="col-md-1">:</div>
        <div class="col">
                <?php echo $row['rate'];?>
        </div>
</div>
<div class="row">
        <div class="col-md-2">
<label>Desciption</label>
        </div>
        <div class="col-md-1">:</div>
        <div class="col">
                <?php echo $row['description'];?>
        </div>
</div>

<div class="row">
        <div class="col-md-2">
<label>Deposit</label>
        </div>
        <div class="col-md-1">:</div>
        <div class="col">
                <?php echo $row['deposit'];?>
        </div>
</div>
 <div class="row pt-4">
<?php
if(mysqli_num_rows($res)==0)
{
  ?>
 
        <div class="col">
        <a href="request.php?id=<?php echo $id;?>" class="btn btn-success btn-small">Request</a>
  <!-- <input type="submit" value="REQUEST" name="submit" class="btn btn-primary btn-small"><br> -->
  </div>

  <?php
}
else
{
  ?>
  <div class="col">
  <h6 class="text-danger">Not Available</h6>
  </div>
   <?php
}
?>

<div class="col text-right">
       
                <a href=""  data-toggle="modal" data-target="#myModal">Feedbacks</a>
                        <!-- <a href="feedbackview.php?id=<?php echo $row['id'];?>">view feedback</a> -->
   
</div>
</div>
<!-- modal -->
<div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
 
                    <!-- Modal header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center text-primary">Feedbacks</h4>
                        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                    </div>
 
                    <!-- Modal body -->
    <div class="modal-body">
		                <?php			
                    $query="select * from feedback_tb inner join user_tb  on feedback_tb.user_id=user_tb.id where feedback_tb.room_id=$id";
//$query="select feedback_tb.id as fid,feedback_tb.*,user_tb.*,room_tb.* from feedback_tb inner join user_tb on feedback_tb.user_id=user_tb.id inner join room_tb on feedback_tb.room_id=room_tb.id where room_tb.id=$id";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)>0)
{
?>
<div class="col p-4 border bg-white">
<?php
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

   <div class="row font-weight-light p-5">
        <?php echo "No Feedbacks";?>
   </div> 
   <?php
}
    ?>                
                    </div>
 
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    </div>
 
                </div>
            </div>
        </div>	
        <!-- modal -->
<?php

if(isset($_POST['feedback']))
{
$id=$_GET['id'];
$query="select * from feedback_tb inner join user_tb  on feedback_tb.user_id=user_tb.id";
//$query="select feedback_tb.id as fid,feedback_tb.*,user_tb.*,room_tb.* from feedback_tb inner join user_tb on feedback_tb.user_id=user_tb.id inner join room_tb on feedback_tb.room_id=room_tb.id where room_tb.id=$id";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)>0)
{
?>
<div class="col p-4 border bg-white">
        <p>Feedbacks</p>
<hr>
<?php
while($row=mysqli_fetch_array($res))
{ 
    ?>

        <div class="row">
        <?php echo $row['username'];?>
        </div>
        <div class="row font-weight-light">
       <?php echo $row['feedback'];?>
</div>
      
<hr>
   <?php
}
}
else
{
   ?>

   <div class="row font-weight-light">
        <?php echo "No Feedbacks";?>
   </div> 
   <?php
}
}
?></div>
</form>
</div>
</div>
</div>
</section>
<?php
   include('../footer.php');
   ?>
</html>