<?php
include('connection.php');
?>
<?php
 $id=$_GET['id'];
$queryy="select * from room_tb where id=$id";
$ress=mysqli_query($conn,$queryy);
$query="select * from room_tb inner join request_tb on request_tb.room_id=room_tb.id where request_tb.room_id=$id and status='reqapproved'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($ress)
?>
<html>
<head>
        <link rel="stylesheet" href="bootstrap-4.6.2-dist\css\bootstrap.min.css">
</head>
<style>
        hr.dotted {
  border-top: 3px dotted #bbb;
}

</style>
</html>
<h3 class="text-center text-primary">Room Details</h3>
<div class="container mt-5 ">
        <div class="col-md-10 offset-1 m-5 p-5 border bg-light font-weight-bolder">
<form action="" method="POST">
<div class="row ">
        <img src="images/<?php echo $row['photo'];?>" height="300" width="500">
</div>
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
<label>Squarfeet</labal>
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
<?php
if(mysqli_num_rows($res)==0)
{
  ?>
  <div class="row pt-4">
        <a href="request.php?id=<?php echo $id;?>" class="btn btn-primary btn-small">Request</a>
  <!-- <input type="submit" value="REQUEST" name="submit" class="btn btn-primary btn-small"><br> -->
  </div>
  <?php
}
else
{
  ?>
  <div class="row pt-5">
  <h6 class="text-danger">Not Available</h6>
  </div>
   <?php
}
?>
<tr>
<div class="row pt-3">
        <form method="post">
                <input type="submit" value="View Feedbacks" name="feedback" class="btn btn-success btn-small">
                        <!-- <a href="feedbackview.php?id=<?php echo $row['id'];?>">view feedback</a> -->
        </form>
</div>
</tr>
<?php
include('connection.php');
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
</html>