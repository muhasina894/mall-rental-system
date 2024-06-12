<?php
include('theader.php');
include('../connection.php');

$id=$_GET['id'];
$q="select * from notify_tb where id=$id";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_array($res)
?>
<section class="form-16" style="min-height:570px">
 <div class="form-16-mian py-5" style="min-height:570px">
 <div class="container py-lg-3 text-white bg">
            <div class="section-title align-center text-center">
                <h4 class="sub-title"></h4>
                <h3 class="global-title text-primary">Send Reply</h3>
            </div>
      <div class="col-md-6 offset-3 p-5 mb-5 text-primary ">
    <form action="notfyrply.php" method="POST">
        <div class="row text-light pt-4">
           <h6><?php echo $row['notify'];?></h6>
        </div>
        <div class="row pt-4">
        <!-- <h6><?php echo $row['date'];?></h6>-->
        </div>
        <?php
        if(empty($row['nrply']))
        {
            ?>
    <div class="row pt-4"> 
           <label>Reply</label>
    <textarea name="reply" class="form-control" id="rply"></textarea> 
    <input type="hidden" name="id" value="<?php echo $id ?>">
</div>
<div class="row mt-3"> 
<input type="submit" class="btn btn-primary btn-block" value="SUBMIT" name="submit" onclick='return validation()'>
</div>
<?php
        }
        else
        {
            ?>
            <div class="row pt-4"> 
        <label>Reply</label>
    <textarea name="reply" class="form-control" id="rply" disabled><?php echo $row['nrply'];?></textarea> 

            <div class="row pt-5 mt-5"><h6 class="text-success">Replied</h6></div>
            <?php
        }
?>
</form>
</div>
</div>
<script>
    function validation()
    {
    if(document.getElementById('rply').value.length==0)
    {
    alert("reply is required");
    return false;
    }
}
</script>