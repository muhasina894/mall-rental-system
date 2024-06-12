<?php
include('header.php');
?>
<section class="form-16" id="booking" style="min-height:570px">
 <div class="form-16-mian py-5">
 <div class="container py-lg-3 text-white bg" style="min-height:570px">
            <div class="section-title align-center text-center">
                <h4 class="sub-title"></h4>
                <h3 class="global-title text-primary pt-5">Forgot Password</h3>
            </div>
    
            <div class="forms-16-top">

                <div class="form-right-inf">
                    <div class="form-inner-cont">
<div class="col-md-6 offset-3">
        <form action="forgettin.php" method="post">
        <div class="row mt-4"> 
                <input type="text"class="form-control" name= "username" id="uname" placeholder="User Name" required >
</div>
<div class="row mt-4">
            <button name="submit" class="btn btn-primary btn-book" value="NEXT" onclick='return validation()'>NEXT</button>
</div>
 <script>
    function validation()
    {
    if(document.getElementById('uname').value.length==0)
    {
    alert("username is required");
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
</div>
</section>
<?php
   include('footer.php');
   ?>
</body>
</html>

