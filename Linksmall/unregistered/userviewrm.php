<?php
include('uheader.php');
include('../connection.php');
$query="select * from room_tb";
$res=mysqli_query($conn,$query);
?>
   <section class="form-16" id="booking" style="min-height:570px">
 <div class="form-16-mian ">
 <div class="container text-white p-5 bg"  style="min-height:570px;min-width:1400px">

<div class="row">
        <?php
while($row=mysqli_fetch_array($res))
{
        $id=$row['id'];
$query1="select * from room_tb inner join request_tb on request_tb.room_id=room_tb.id where request_tb.room_id=$id and status='Approved'";
$res1=mysqli_query($conn,$query1);
?>

        <div class="col-md-3 mt-2" style="padding-right:5px !important;padding-left:5px !important">
 <div class="p-2 border text-dark text-center bg-light">
        <div class="row mb-3">
                <div class="col-md-12">
<img src="../images/<?php echo $row['photo'];?>" height="250" width="100%">
</div>
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
        <label>Deposit </label>
</div>
<div class="col">
        <?php echo $row['deposit'];?>
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
<div class="col">
<?php
if(mysqli_num_rows($res1)==0)
{
?>
 <h6 class="text-success text-center">Available</h6>
    <?php
}
else
{
        ?>
        <h6 class="text-danger text-center">Not Available</h6>
        <?php
}
?>
</div>
</div>
<div class="row pt-2 pb-3">
<div class="col">
    <a href="details.php?id=<?php echo $row['id'];?>" class="btn btn-success btn-block">DETAILS</a>
</div>
</div>
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
</body>
</html>
