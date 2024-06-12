<?php
include('header.php');
?>
    <section class="form-16" id="booking" >
 <div class="form-16-mian py-5">
 <div class="container py-lg-3 text-white bg" style="min-height:570px">
            <div class="section-title align-center text-center">
                <h4 class="sub-title"></h4>
                <h3 class="global-title text-primary mt-4">Forgot Password</h3>
            </div>
    
            <div class="forms-16-top">

                <div class="form-right-inf">
                    <div class="form-inner-cont">
<div class="col-md-6 offset-3">
        <form action="forgettnein.php" method="post">
        <div class="row mt-3"> 
            
                <input type="text" class="form-control" placeholder="Name" name= "name"  id= "name">
</div>
<div class="row mt-4"> 
                <input type="email" class="form-control" placeholder="Email" name= "email" id= "email">
</div>
            <div class="row mt-3">
            <button name="submit" class="btn btn-primary btn-block btn-book" value="NEXT" onclick='return validation()'>NEXT</button>
 </div>
 <script>
    function validation()
    {
    if(document.getElementById('name').value.length==0)
    {
    alert("name is required");
    return false;
    }
    else if(document.getElementById('email').value.length==0)
    {
    alert("email is required");
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