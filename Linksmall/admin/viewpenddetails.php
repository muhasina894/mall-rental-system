<?php
include('adminheader.php');
include('../connection.php');
$id=$_GET['id'];
$queryy="select request_tb.status as rstatus,request_tb.id as rid,room_tb.*,user_tb.*  from request_tb inner join user_tb on request_tb.user_id=user_tb.id inner join room_tb on room_tb.id=request_tb.room_id where request_tb.id=$id";
$ress=mysqli_query($conn,$queryy);
$row=mysqli_fetch_array($ress);
  ?>
  <section class="form-16" id="booking" style="min-height:570px">
    <!-- /form-16-section -->
    <div class="form-16-mian py-5">
    <div class="container  pl-3font-weight-bold bg-light border">
    <h3 class="text-primary text-center pt-5">Details</h3>
    <hr>
<div class="row">
        <div class="col-md-6 border bg-white pl-5 pr-5 ">
<form action="status.php?id=<?php echo $row['rid'];?>" method="POST">
  <h3 class="text-center text-primary mt-3">Room Details</h3>
  <div class="row pt-3">
        <div class="col">
  <img src="../images/<?php echo $row['photo'];?>" class="thumb-nail" height="250" width="100%">
        </div></div>
     <div class="row pt-4">
            <div class="col-md-5">
     <label for="">Floor</label> 
            </div>
        <div class="col-md-1">:</div>
    <div class="col-md-4">
        <?php echo $row['floor'];?>
</div>
</div>
    <div class="row pt-2">
            <div class="col-md-5">
<label for="">Squarefeet</label>       
</div>       
             <div class="col-md-1">:</div>
    <div class="col-md-4"><?php echo $row['squarfeet'];?></td>
    </div></div>
    <div class="row pt-2">
            <div class="col-md-5">
   <label for="">Room No</label> 
        </div>       
             <div class="col-md-1">:</div>
    <div class="col-md-4"><?php echo $row['roomno'];?></div></div>
    <div class="row pt-2">
            <div class="col-md-5">
               <label for="">Rate</label> 
        </div>       
             <div class="col-md-1">:</div>
    <div class="col-md-4"><?php echo $row['rate'];?></div></div>
    <div class="row pt-2">
            <div class="col-md-5">
               <label for="">Description</label> 
        </div>       
             <div class="col-md-1">:</div>
    <div class="col-md-4"><?php echo $row['description'];?>
    </div></div>
    <div class="row pt-2">
            <div class="col-md-5">
             <label for="">Deposit</label>  
        </div>       
             <div class="col-md-1">:</div>
    <div class="col-md-4"><?php echo $row['deposit'];?> 
</div></div>
</div>
<div class="col-md-6 bg-white pl-5 pr-5 pt-3 mt-1 border">
        <h3 class="text-center  text-primary">User Details</h3>
   
        <div class="row pt-3">
            <div class="col-md-5">
               <label for="">Name</label>  
        </div>
        <div class="col-md-1">:</div>
<div class="col-md-4">
        <?php echo $row['name'];?>  </div></div>
        <div class="row pt-2">
            <div class="col-md-5">
                <label for="">Email </label>
                
        </div>
        <div class="col-md-1">:</div>
<div class="col-md-4">
        <?php echo $row['email'];?>  </div></div>
        <div class="row pt-2">
            <div class="col-md-5">
                <label for="">Phone</label>
                
        </div>
        <input type="hidden" name="email" value="<?php echo $row['email'];?>">
        <div class="col-md-1">:</div>
<div class="col-md-4">
        <?php echo $row['phno'];?>  </div></div>
        <div class="row pt-2">
            <div class="col-md-5">
              <label for="">Address </label>  
        </div>
        <div class="col-md-1">:</div>
<div class="col-md-4">
        <?php echo $row['address'];?>
</div>
</div>
</div>
</div>
<div class="row pt-4 pb-4">
        <div class="col text-center">
                <?php
                if( $row['rstatus']=='Approved')
                {
                        ?>
                                <input type="submit" value="REJECT" class="btn btn-danger" name="submit">
                                <a href="notify.php?id=<?php echo $row['rid'];?>" class="btn btn-warning">NOTIFY</a>
                <?php
                }
                if( $row['rstatus']=='Pending')
                {
                        ?>
                <input type="submit" value="APPROVE" class="btn btn-success" name="submit">
                <input type="submit" value="REJECT" class="btn btn-danger" name="submit">         
                       <?php
                }
                ?>
      
        </div>
</div>
</form>
</div>
</div>
        </div>
        </section>
<?php
include('../footer.php');
?>
</html>