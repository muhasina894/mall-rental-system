<?php
include('uheader.php');
?>
<section class="form-16" id="booking" style="min-height:570px">
 <div class="form-16-mian py-5">
 <div class="container py-lg-3 text-white bg">
            <div class="section-title align-center text-center">
                <h4 class="sub-title"></h4>
                <h3 class="global-title text-primary">Upload Details</h3>
            </div>
    
            <div class="forms-16-top">

                <div class="form-right-inf">
                    <div class="form-inner-cont">
<div class="col-md-6 offset-3">
        <form action="uploadin.php" method="post" enctype="multipart/form-data">
                 <div class="row pt-5 pb-3">
              Document
                    <select name="data" class="form-control" id="data">
                                <option value="">--Select--</option>
                            <option value="aadhar">Aadhar Card</option>
                            <option value="id">Id card</option>
                        </select>
                       </div>
<div class="row">    
File
    <input type="file" name="photo" id='photo' class="form-control">
</div> 
<div class="row m-5">
    <div class="col text-center">
        <input type="submit" value="UPLOAD" name="submit" class="btn btn-success" onclick='return validation()'>
    </div>
</div>
<script>
    function validation()
    {
    if(document.getElementById('data').value.length==0)
    {
    alert("data is required");
    return false;
    }
    else if(document.getElementById('photo').value.length==0)
    {
    alert("photo is required");
    return false;
    }
}
</script>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
    <?php
include('../footer.php');
?> 
</body>
</html>
