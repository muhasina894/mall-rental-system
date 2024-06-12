<?php
include('header.php');
?>
    <section class="form-16" id="booking" >
 <div class="form-16-mian py-5">
 <div class="container py-lg-3 text-white bg" style="min-height:570px">
            <div class="section-title align-center text-center">
                <h4 class="sub-title"></h4>
                <h3 class="global-title text-primary mt-4">Reset Password</h3>
            </div>
    
            <div class="forms-16-top">

                <div class="form-right-inf">
                    <div class="form-inner-cont">
<div class="col-md-6 offset-3">
        <form action="fpassin.php" method="post">
        <div class="row pt-2">
                <input type="password" class="form-control"  placeholder="New Password" name="password" id="ppass" required>
</div>
                <div class="row mt-4">
                <input type="password"class="form-control" placeholder="Confirm Password" name="cpassword" id="ccpass" required>
</div>

<div class="row mt-3 ">
  
            <button class="btn btn-primary btn-book" class="form-control" name="submit" value="SUBMIT" onclick='return validation()'>SUBMIT</button>
</div>

 <script>
    function validation()
    {
    if(document.getElementById('ppass').value.length==0)
    {
    alert("new password is required");
    return false;
    }
    else if(document.getElementById('ccpass').value.length==0)
    {
    alert("confirm password is required");
    return false;
    }
}
    </script>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
    <?php
   include('footer.php');
   ?>
</body>
</html>
