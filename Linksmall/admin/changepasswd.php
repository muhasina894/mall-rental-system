<?php
include('adminheader.php');
?>
  <section class="form-16" id="booking">
 <div class="form-16-mian py-5">
 <div class="container py-lg-3 text-white bg" style="min-height:570px">
            <div class="section-title align-center text-center mt-5">
                <h4 class="sub-title"></h4>
                <h3 class="global-title text-primary">Change Password</h3>
            </div>
    
            <div class="forms-16-top">

                <div class="form-right-inf">
                    <div class="form-inner-cont">
<div class="col-md-6 offset-3">
    <form action="cpass.php" method="POST">
    <div class="row mt-3">

                <input type="password" class="form-control"name= "password" id="cpass" placeholder="Current Password" required >
</div>
<div class="row mt-4">
    <input type="password"class="form-control" name="npassword" id="npass" placeholder="New Password" required >
</div>
<div class="row mt-4">
    <input type="password"class="form-control" name="cpassword" id="cnpass" placeholder="Confirm Password" required >
</div>
 <div class="row mt-4">
<button class="btn btn-primary btn-book" value="SUBMIT" onclick='return validation()'>SUBMIT</button>
</div>
</form>
</div>
</div>
<script>
    function validation()
    {
    if(document.getElementById('cpass').value.length==0)
    {
    alert("password is required");
    return false;
    }
    else if(!document.getElementById('cpass').value.match(/^[a-zA-Z0-9@.]+$/))
    {
        alert("password is invalid");
        return false;
    }
    else if(document.getElementById('npass').value.length==0)
    {
    alert("new password is required");
    return false;
    }
    else if(!document.getElementById('npass').value.match(/^[a-zA-Z0-9@.]+$/))
    {
        alert("new password is invalid");
        return false;
    }
    else if(document.getElementById('cnpass').value.length==0)
    {
    alert("confirm password is required");
    return false;
    }
    else if(!document.getElementById('cnpass').value.match(/^[a-zA-Z0-9@.]+$/))
    {
        alert("confirm password is invalid");
        return false;
    }
}
    </script>
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


