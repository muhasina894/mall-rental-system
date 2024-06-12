<?php
include('adminheader.php');
include('../connection.php');
if(isset($_POST['search']))
{
    $room=$_POST['data'];
  $id=$_POST['select']; 
  if($id=='' && $room=='')
  {
    $query="select * from payment_tb inner join  request_tb on request_tb.id=payment_tb.rid inner join room_tb on request_tb.room_id=room_tb.id inner join user_tb on user_tb.id=request_tb.user_id";
   
  }
  else
  {
   if($id != '' && $room=='')
   {
     $query="select * from payment_tb inner join  request_tb on request_tb.id=payment_tb.rid inner join room_tb on request_tb.room_id=room_tb.id inner join user_tb on user_tb.id=request_tb.user_id where request_tb.user_id=$id";
   }
   if($id=='' && $room !='')
   {
    $query="select * from payment_tb inner join  request_tb on request_tb.id=payment_tb.rid inner join room_tb on request_tb.room_id=room_tb.id inner join user_tb on user_tb.id=request_tb.user_id where room_tb.id=$room";

   }
   if($id !='' && $room!='')
   {
    $query="select * from payment_tb inner join  request_tb on request_tb.id=payment_tb.rid inner join room_tb on request_tb.room_id=room_tb.id inner join user_tb on user_tb.id=request_tb.user_id where room_tb.id=$room and request_tb.user_id=$id";

   }
  }
  $res=mysqli_query($conn,$query);
 
}
else
{
$query="select * from user_tb";
$query="select * from payment_tb inner join  request_tb on request_tb.id=payment_tb.rid inner join room_tb on request_tb.room_id=room_tb.id inner join user_tb on user_tb.id=request_tb.user_id";
$res=mysqli_query($conn,$query);
}

?>
<section class="form-16" id="booking" style="min-height:570px">
 <div class="form-16-mian py-5">
<div class="container p-5 bg-light" style="min-height:570px">
  
<div class="row">
    <div class="col text-center"><h4 class="text-primary">Payment</h4></div>
</div>
<hr>
<div class="row mb-5">
  <div class="col">
    <?php 
    $querry="select * from user_tb";
    $ress=mysqli_query($conn,$querry);
  
    ?>
    <form method="post">
    <div class="row">
        <div class="col">
            <div class="col text-dark">
    <label>Name</label>
</div>
<div class="col">
<select class="form-control" name="select" id="data">
                                <option value="">Select</option>
                                <?php
                                while($row1=mysqli_fetch_array($ress))
                                {
                                    ?>
                                    <option value="<?php echo $row1['id'];?>"><?php echo $row1['name'];?></option>
                                    <?php
                                }
                                ?>
                         
                        </select>
                            </div>
</div>
<div class="col text-dark">
    <?php
    $query1="select * from room_tb";
    $resss=mysqli_query($conn,$query1);
    ?>
<label>Room No</label>
<select class="form-control" name="data" id="data">
                                <option value="">Select</option>
                                <?php
                                while($row2=mysqli_fetch_array($resss))
                                {
                                    ?>
                                    <option value="<?php echo $row2['id'];?>"><?php echo $row2['roomno'];?></option>
                                    <?php
                                }
                                ?>
                         
                        </select>
                            </div>
                       <div class="col pt-4">
<input type="submit" value="Search" name="search" class="btn btn-primary">
                            </div>
</div>
                            </form>
                            <table class="table table-striped table-hover table-bordered bg-light mt-4">
    <thead class="bg-primary text-white">
        <th>ID</th>  
        <th>Name</th>
        <th>Room No.</th>
        <th>Amount</th>
</thead>
<?php

if(mysqli_num_rows($res)>0)
{
$total=0;
while($row=mysqli_fetch_array($res))
{
    $total=$total+$row['amount'];
    ?>
    <tr>
    <td><?php echo $row['user_id'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['roomno'];?></td>
    <td><?php echo $row['amount'];?></td>
</tr>
</table>
<table>
<tr>
    <td>
        <h5 class="text-white">
        Total :
    </h5></td>
    <td>
    <h5 class="text-white">  
          <?php echo $total;?></td>
</h5>    
</tr>

  <?php
}
}
else
{
    ?>
    <tr>
        <td colspan=4 class="text-center">
            <?php
                echo "There is no payment done";
                ?>

        </td>
    </tr>
</table>
<?php
}
?>
</div>
</div>
</div>
</div>
</section>
<?php
include('../footer.php');
?>
</html>