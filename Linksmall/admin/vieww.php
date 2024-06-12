
<?php
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
include('adminheader.php');

include('../connection.php');
if(isset($_POST['search']))
{
  $user=$_POST['data'];
  if($user=='')
  {
      $query="select * from user_tb ";

  }
  else
  {
  $query="select * from user_tb where status='$user'";

  }
  $res=mysqli_query($conn,$query);
}
else
{
$user='';
$query="select * from user_tb";
$res=mysqli_query($conn,$query);
// $query2="select * from upload_tb where user_id='$user'";
// $reees=mysqli_query($conn,$query2);
// $row1=mysqli_fetch_assoc($reees);
}
?>
<section class="form-16" id="booking" style="min-height:570px">
 <div class="form-16-mian py-5">

<div class="container p-5 bg-light" style="min-height:570px">
 <div class="row">
  <div class="col text-center">
          <h4  class=" pt-2  text-primary">View Users</h4></tr>          
  </div>
  
 </div> <hr>
 <div class="row mb-5 mt-3">
  <div class="col-md-4">
    <form method="post" >
  <select class="form-control" name="data" id="data">
                                <option value=""
                                <?php
                            if($user=='')
                            {
                              echo "selected";
                            }
                            ?>>--SELECT--</option>
                            <option value="registered"
                            <?php
                            if($user=='registered')
                            {
                              echo "selected";
                            }
                            ?>>TENENTS</option>
                            <option value="unregistered"
                            <?php
                            if($user=='unregistered')
                            {
                              echo "selected";
                            }
                            ?>>USERS</option>
                        </select>
</div>
<div class="col-md-2">
<input type="submit" value="Search" name="search" class="btn btn-primary">

</div>
</form>
</div>
<table class="table table-bordered table-striped table-hover bg-light">
    <thead class="bg-primary text-white">
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Document</th>
        <th>Document Type</th>
        <th></th>
       
</thead>
<?php
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_array($res))
{ 
    ?>
    <tr>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['phno'];?></td>
    <td><?php echo $row['address'];?></td>
    <?php
      $user=$row['id'];
      $data="select * from upload_tb where user_id='$user'";
      $d=mysqli_query($conn,$data);
    if($row['status']=='registered')
    {
    
      $ro=mysqli_fetch_array($d);
      ?>
          <td>
          <a  href="../images/<?php echo $ro['photo'];?>" title="Click to download" download>  
          <img src="../images/<?php echo $ro['photo'];?>" height="50" width="50">
        </a>
      </td>
          <td><?php echo $ro['type'];?></td>
      <?php
    }
    else
    {
      if(mysqli_num_rows($d)>0)
      {
          ?>
              <td colspan=2 class="text-center"><a href="apprvlcnfrmtiondt.php?id=<?php echo $row['id'];?>" class="btn btn-success btn-sm">Confirm</a></td>
<?php
      }
      else{
       ?>
        <td colspan=2 class="text-center text-danger"><h6>Not Uploaded</h6>
          <?php
      }
    ?>
    <?php
    }
    ?>
    <td><a href="userdelete.php?id=<?php echo $row['id'];?>"class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete !');">Delete</a></td>
   
   
</tr>
  <?php

}
}
else
{
  ?>
     <td colspan=8 class="text-center"><?php echo "No Data Found";?></td>
  <?php
}
?>
</table>
</div>
</div>
</section>
<?php
include('../footer.php');
?>
</html>