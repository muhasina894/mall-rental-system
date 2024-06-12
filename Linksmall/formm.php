<?php
include('header.php');
?>
<section class="form-16" id="booking" >
    <!-- /form-16-section -->
    <div class="form-16-mian py-5">
        <div class="container py-lg-3" style="min-height:570px;background:rgba(0, 0, 0, 0.51)">
            <div class="section-title align-center text-center">
                <h4 class="sub-title"></h4>
                <h3 class="global-title text-primary mt-5">LOGIN</h3>
            </div>
            <div class="forms-16-top">

                <div class="form-right-inf">
                    <div class="form-inner-cont">
<div class="col-md-6 offset-3">
                    <form action="login.php" method="POST">
                    <div class="form-input">
                            <input type="text" class="form-control" name= "username" id="uname" placeholder="User Name" required >
                            </div>
                            <div class="form-input mt-4">
                            <input type="password" class="form-control" name= "password" id="pass" placeholder="Password" required >
                            </div>
                            
                            <button class="btn btn-primary btn-book btn-block" onclick='return validation()'>LOGIN</button>
                            <p class="add-info"><a href="forgetpassword.php">Forgot Password</a></p>

                        </form>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function validation()
    {
    if(document.getElementById('uname').value.length==0)
    {
    alert("username is required");
    return false;
    }
    else if(!document.getElementById('uname').value.match(/^[a-z A-Z]+$/))
    {
        alert("username is invalid");
        return false;
    }
    else if(document.getElementById('pass').value.length==0)
    {
    alert("password is required");
    return false;
    }
    else if(!document.getElementById('pass').value.match(/^[a-zA-Z0-9@.]+$/))
    {
        alert("password is invalid");
        return false;
    }
}
    </script>
   <?php
   include('footer.php');
   ?>
</body>
</html>

