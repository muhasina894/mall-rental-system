<?php
include('adminheader.php');
include('../connection.php');
$id=$_GET['id'];
$queryy="select request_tb.status as rstatus,request_tb.id as rid,room_tb.*,user_tb.*  from request_tb inner join user_tb on request_tb.user_id=user_tb.id inner join room_tb on room_tb.id=request_tb.room_id where request_tb.id=$id";
$ress=mysqli_query($conn,$queryy);
$row=mysqli_fetch_array($ress);
?>
<section class="form-16" style="min-height:570px">
 <div class="form-16-mian py-5" style="min-height:570px">
 <div class="container py-lg-3 text-white bg">
            <div class="section-title align-center text-center">
                <h4 class="sub-title"></h4>
                <h3 class="global-title text-primary">Send Notification</h3>
            </div>
      <div class="col-md-6 offset-3 p-5 mb-5 text-primary ">
    <form action="notifyin.php?id=<?php echo $id;?>" method="POST">
    <div class="row">
        <input type="hidden" name="email" value="<?php echo $row['email'];?>">
           <label>Subject</label>
    <textarea name="notify" class="form-control" id="notify" required></textarea> 
    <input type="hidden" name="id" value="<?php echo $id ?>">
</div>

<div class="row mt-3">
    <div class="col text-center">
<input type="submit" class="btn btn-primary"value="SUBMIT" name="submit" onclick='return validation()'>
</div></div>
</form>
</div>
</div>
<script>
    function validation()
    {
    if(document.getElementById('notify').value.length==0)
    {
    alert("notify is required");
    return false;
    }
}
</script>