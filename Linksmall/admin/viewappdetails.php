<?php
include('../connection.php');
$id=$_GET['id'];
$queryy="select request_tb.id as rid,room_tb.*,user_tb.*  from request_tb inner join user_tb on request_tb.user_id=user_tb.id inner join room_tb on room_tb.id=request_tb.room_id where request_tb.id=$id and request_tb.status='reqapproved'";
$ress=mysqli_query($conn,$queryy);
$row=mysqli_fetch_array($ress);
  ?>
  <html>
<head>
        <title></title>
        <link rel="stylesheet" href="..\bootstrap-4.6.2-dist\css\bootstrap.css">
</head>
    <body>
    <h4 class="text-primary text-center pt-5">Details</h4>
    <div class="container  font-weight-bold bg-light border mt-5">
    <div class="row">
        <div class="col-md-6 border p-5">
<form action="status.php?id=<?php echo $row['rid'];?>" method="POST">
  <h3 class="text-center text-primary">Room Details</h3>
  <div class="row pt-2">
  <img src="../images/<?php echo $row['photo'];?>" height="200" width="200">
        </div>
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
<label for="">Squarfeet</label>       
</div>       
             <div class="col-md-1">:</div>
    <div class="col-md-4"><?php echo $row['squarfeet'];?></td>
    </div></div>
    <div class="row pt-2">
            <div class="col-md-5">
   <label for="">Roomno</label> 
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
               <label for="">Desciption</label> 
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
<div class="col-md-6 border p-5 mt-4">
        <h3 class="text-center  text-primary">User Details</h3>
   
        <div class="row pt-2">
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
        <input type="submit" value="APPROVE" class="btn btn-primary" name="submit">
        <input type="submit" value="REJECT" class="btn btn-danger" name="submit">
        </div>
</div>
</form>
</div>
</div>
</html>