<?php
include('uheader.php');
include('../connection.php');
$query="select * from room_tb";
$res=mysqli_query($conn,$query);
?>
        <h3 class="text-primary text-center mt-4">ROOMS</h3>
<div class="container-fluid  mt-1  pl-4 ml-5">

<div class="row ml-4">
        <?php
while($row=mysqli_fetch_array($res))
{
        $id=$row['id'];
$query1="select * from room_tb inner join request_tb on request_tb.room_id=room_tb.id where request_tb.room_id=$id and status='Approved'";
$res1=mysqli_query($conn,$query1);
?>
  
        <div class="col-md-3 border ml-5 mt-4 mr-2 text-center bg-light">
        <div class="row p-2">
<img src="../images/<?php echo $row['photo'];?>" height="250" width="350">
</div>
        
<div class="row">
<div class="col font-weight-bold">
<label>Room No.</label>
</div>
<div class="col">
        <?php echo $row['roomno'];?>
</div>
</div>
<div class="row">
<div class="col font-weight-bold">
        <label>Desciption </label>
</div>
        <div class="col">
        <?php echo $row['description'];?>
</div>
</div>
        <div class="row">                
        <div class="col font-weight-bold">
        <label>Deposit </label>
</div>
<div class="col">
        <?php echo $row['deposit'];?>
</div>
</div>
<div class="row pt-2 bg-light pb-3">
<div class="col-md-3 pl-4">
    <a href="details.php?id=<?php echo $row['id'];?>" class="btn btn-success">DETAILS</a>
</div>
<div class="col pl-4">
<?php
if(mysqli_num_rows($res1)==0)
{
?>
 <h6 class="text-success">Available</h6>
    <?php
}
else
{
        ?>
        <h6 class="text-danger">Not Available</h6>
        <?php
}
?>
</div>
<?php
if(mysqli_num_rows($res1)==0)
?>
</div>
</div>

  <?php
}
?></div>
</div>
<?php
   include('../footer.php');
   ?>
</body>
</html>
