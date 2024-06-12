<?php
include('theader.php');
include('../connection.php');
$id=$_SESSION['id'];
$rid=$_GET['id'];
$query="select request_tb.id as rid,room_tb. *,request_tb.* from request_tb inner join room_tb on request_tb.room_id=room_tb.id where request_tb.user_id=$id and status!='delete' and request_tb.id=$rid";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{
?>
<section class="" id="booking" style="background-image:url('../assets/images/m1.jpeg')">
 <div class="form-16-mian">
 <div class="container-fluid text-dark bg pt-5 pb-5">

<div class="modal" id="myModal1">
            <div class="modal-dialog">
                <div class="modal-content">
 
                    <!-- Modal header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center text-primary">Add Feedbacks</h4>
                        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                    </div>
 
                    <!-- Modal body -->
                    <div class="modal-body bg-light">
                    <div class="col p-5 text-primary border">

<form action="feedbackin.php" method="POST">
<div class="row"> 

       <label>Feedback</label>
<textarea name="feedback" class="form-control border border-primary" id="feedbck" required></textarea> 
<input type="hidden" name="room_id" value="<?php echo $rid ?>">
</div>
<div class="row mt-3"> 
<input type="submit" class="btn btn-primary btn-block"value="ADD" name="submit">

</form>
</div>
</div>
                    </div>
 
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    </div>
 
                </div>
            </div>
        </div>	
         <!-- Modal -->
<div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
 
                    <!-- Modal header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-primary text-center">Add Complaints</h4>
                        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                    </div>
 
                    <!-- Modal body -->
                    <div class="modal-body bg-light">
				<?php
?>
      <div class="col-md-10 offset-1 p-2 mt-3">

    <form action="ucmplnt.php" method="POST" enctype="multipart/form-data">
    <div class="row"> 
        
            <label>Title</label>
            <input type="text"class="form-control border border-primary" name="title" id="title" required>
</div>
<div class="row"> 

           <label>Description</label>
    <textarea name="description" class="form-control border border-primary"id="dscrptn" required></textarea> 
    <input type="hidden" name="room_id" value="<?php echo $row['room_id'];?>">
</div>
<div class="row"> 
    <label>Photo</label>
    <input type="file"class="form-control border border-primary" name="photo" id="photo">
</div>
<div class="row mt-3"> 
<input type="submit" class="btn btn-primary btn-block" value="ADD" name="submit" >
</div>
</form>
</div>
<!-- <script>
    function validation()
    {
    if(document.getElementById('title').value.length==0)
    {
    alert("Title is required");
    return false;
    }
    if(document.getElementById('dscrptn').value.length==0)
    {
    alert("Description is required");
    return false;
    }
}
</script> -->
                    </div>
 
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    </div>
 
                </div>
            </div>
        </div>	
        <!-- Modal -->
      <div class="col-md-6 offset-3 p-5 bg-light font-weight-bold border">
      <h3 class="text-primary text-center mb-3"> Request Details </h3>
      <hr>
      <form action="paymentfrm.php?id=<?php echo $rid;?>" method="POST">
<div class="row pt-2">
    <div class="col-md-12">
      <img src="../images/<?php echo $row['photo'];?>" height="300" width="100%">
</div></div>
<div class="row pt-4">
            <div class="col-md-5">
              <label>Roomno</label>
              </div>
        <div class="col-md-1">:</div>
    <div class="col-md-4">
     <?php echo $row['roomno'];?>
     </div>
</div>
<div class="row pt-2">
            <div class="col-md-5">
       <label>Description</label>
       </div>
        <div class="col-md-1">:</div>
    <div class="col-md-4">
       <?php echo $row['description'];?>
       </div>
</div>
<div class="row pt-2">
            <div class="col-md-5">
       <label>Deposit</label>
       </div>
        <div class="col-md-1">:</div>
    <div class="col-md-4">
       <?php echo $row['deposit'];?>
       <input type="hidden" name="deposit" value="<?php echo $row['deposit'];?>">

       </div>
</div>
<div class="row pt-2">
            <div class="col-md-5">
       <label>Status</label>
       </div>
        <div class="col-md-1">:</div>
    <div class="col-md-4">
       <?php echo $row['status'];?>
       </div>
</div>
<div class="row pt-2">
            <div class="col-md-5">
    <label for="">  Date</label> 
    </div>
        <div class="col-md-1">:</div>
    <div class="col-md-4">
       <?php echo $row['date'];?>
</div>
</div>
    <?php
    if($row['status']=='Approved')
    {
      ?>
     <div class="row pt-5 ">
        <div class="col-md-3">
        <?php
      if($row['pstatus']=='Pending')
      {
        ?>
        <div class="row  pl-3">
<input type="submit" value="PAYMENT" name="submit" class="btn btn-success">
</div>
     <?php
      }
      ?>
        </div>
      <div class="col  pl-5 text-right"><a href="ucomplntfrm.php?id=<?php echo $row['room_id'];?>" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Complaint</a>
     <a href="feedbackfrm.php?id=<?php echo $row['room_id'];?>" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal1">Feedback</a>
  </div>
</div>
  <?php
    }
    else
    {
      ?>
             <div class="row pt-3 class=text-dark"><a href="reqdelete.php?id=<?php echo $row['rid'];?>" class="btn btn-danger btn-sm">Delete Request</a></div>
<?php
    }
    ?>
</table>
  </form>
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