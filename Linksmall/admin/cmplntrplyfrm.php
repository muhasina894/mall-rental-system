<?php
include('adminheader.php');
$id=$_GET['id'];
include('../connection.php');
$query="select complaint_tb.description as cdescription,complaint_tb.id as cid,complaint_tb.*,user_tb.*,room_tb.* from complaint_tb inner join user_tb on complaint_tb.user_id=user_tb.id inner join room_tb on complaint_tb.room_id=room_tb.id where complaint_tb.id=$id";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
?>
<section class="form-16" id="booking" style="min-height:570px">
 <div class="form-16-mian">
 <div class="container py-lg-3 text-white bg text-dark">
<h3 class="text-primary text-center pt-2 pb-2"> Complaint Reply </h3>
      <div class="col-md-6 offset-3 p-5 font-weight-bold bg-light border" style="min-height:570px">
      <div class="row pt-4">
        <div class="col">
      <img src="../images/<?php echo $row['photo'];?>" height="200" width="100%">
</div></div>
    <div class="row pt-4">
            <div class="col-md-5">
     <label for="">User Name</label> 
            </div>
        <div class="col-md-1">:</div>
    <div class="col-md-4">
        <?php echo $row['username'];?>
</div>
</div>
<div class="row pt-2">
            <div class="col-md-5">
     <label for="">Room No.</label> 
            </div>
        <div class="col-md-1">:</div>
    <div class="col-md-4">
        <?php echo $row['roomno'];?>
</div>
</div>
<div class="row pt-2">
            <div class="col-md-5">
     <label for="">Title</label> 
            </div>
        <div class="col-md-1">:</div>
    <div class="col-md-4">
        <?php echo $row['title'];?>
</div>
</div>
<div class="row pt-2">
            <div class="col-md-5">
     <label for="">Description</label> 
            </div>
        <div class="col-md-1">:</div>
    <div class="col-md-4">
        <?php echo $row['cdescription'];?>
</div>
</div>
<?php
if(!empty($row['photo']))
{
    ?>
<div class="row pt-2">
        <div class="col-md-1"></div>
    <div class="col-md-4">
        <a href="../images/<?php echo $row['photo'];?>" class="href" download>
    <img src="../images/<?php echo $row['photo'];?>" height="50" width="50"  title="Click to download">
</a>
</div>
</div>
<?php
}
?>
<?php
if($row['reply']=="")
{
?>
<form action="cmrply.php" method="POST">
    <div class="row p-2">
           <label>Reply</label>
    <textarea name="reply"class="form-control" id="rply"></textarea> 
    <input type="hidden" name="id" value="<?php echo $id ?>">
</div>
<div class="row mt-3">
    <div class="col text-center">
<input type="submit" class="btn btn-primary" value="SUBMIT" name="submit" onclick='return validation()'>
</div></div>
</form>
<?php   
}
else{
    ?>
<div class="row pt-4">
<h5 class="text-success">Replied</h5>
</div>
<?php
}
?>
</div>
</div>
<script>
    function validation()
    {
    if(document.getElementById('rply').value.length==0)
    {
    alert("Please fill out this field");
    return false;
    }
}
</script>
</div>
</section>
    <?php
include('../footer.php');
?>
</body>
</html>