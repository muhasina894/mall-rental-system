<?php
include('adminheader.php');
?> <div class="container  mt-5 p-5">

<?php
include('../connection.php');
$id=$_GET['id'];
$query="select * from upload_tb inner join user_tb  on user_tb.id=upload_tb.user_id where upload_tb.user_id=$id";
//$query="select upload_tb.status as ustatus,user_tb.id as uid,upload_tb.*,user_tb.* from user_tb inner join upload_tb on user_tb.id=upload_tb.user_id where upload_tb.id=$id";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
if(mysqli_num_rows($res)>0)
{
?>
        <div class="col-md-8 offset-2 text-center border border-primary  bg-light p-5 ">
<div class="col">
                <div class="row">
                <a href="../images/<?php echo $row['photo'];?>" title="Click to download" download>
                <img src="../images/<?php echo $row['photo'];?>" height="100" width="100">
                </a>
                </div>
                <div class="row pt-4">
                        <div class="col-md-3">
                        <label>Username</label>
                        </div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-2">
                        <?php echo $row['username'];?>
                        </div>
                </div>
  <div class="row">
                        <div class="col-md-3">
                        <label>Document</label>
                        </div>
                        <div class="col-md-1">:</div>
                        <div class="col-md-2">
                        <?php echo $row['type'];?>
                        </div>
                </div>
        <div class="row pt-5">
               <a href="cnfrmapp.php?id=<?php echo $row['id'];?>" class="btn btn-success">CONFIRM</a> 
        </div>
</div>
</div>
</div>
<?php
}
else
{

     ?>         <div class="col-md-8 offset-2 text-center border border-primary p-5 ">
     <h5 class="text-white">No Uploaded data..</h5>
</div>
     <?php
}
?>
</html>