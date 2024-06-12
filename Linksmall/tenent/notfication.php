<?php
include('theader.php');
include('../connection.php');
$id=$_SESSION['id'];
$query="select notify_tb.id as nid,notify_tb.*,request_tb.* from notify_tb inner join request_tb on notify_tb.request_id=request_tb.id where request_tb.user_id=$id";
$res=mysqli_query($conn,$query);
?>
<section class="form-16" id="booking" style="min-height:570px">
    <!-- /form-16-section -->
    <div class="form-16-mian py-5"  style="min-height:570px">
<div class="container bg-light p-5"  style="min-height:450px">
<form action="" method="POST">
<table class="table table-bordered table-striped table-hover bg-light"> 
  <tr><h4  class="pt-3 text-center text-primary">Notifications</h4></tr> <br><br>
  

        <!-- <th>request_id</th> -->
        <!-- <th>Notify</th>-->
<div class="col-md-8 offset-2">
<?php
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_array($res))
{ 
    ?>
   <div class="row pt-3">
    <div class="col-md-8 pl-5 ml-5">
    <!-- <td><?php echo $row['request_id'];?></td> -->
    <?php echo $row['notify'];?>
   </div>
   
     <div class="col-md-2"><a href="notifyrplyfrm.php?id=<?php echo $row['nid'];?>" class="btn btn-success btn-sm">REPLY</a>
     </div> 
    
    </div>
    <div class="row pl-5"><div class=""><?php echo $row['date'];?></div></div>
    
  <?php
}
}
else
{
  ?>
  <div class="row mt-5 pt-5">
    <div class="col text-center text-danger">
      <?php
       echo "There is no notifications";
      ?>
    </div>
  </div>
 <?php
}
?>
</div>
</table>
</div>
</section>
<?php
include('../footer.php');
?>
</body>
</html>