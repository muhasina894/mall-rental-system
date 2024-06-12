<?php
include('header.php');
?>
<section class="form-16" id="booking" style="min-height:570px">
 <div class="form-16-mian py-5">
 <div class="container py-lg-3 text-white bg">
            <div class="section-title align-center text-center">
                <h4 class="sub-title"></h4>
                <h3 class="global-title text-primary">Register</h3>
            </div>
    
            <div class="forms-16-top">

                <div class="form-right-inf">
                    <div class="form-inner-cont">
<div class="col-md-6 offset-3">
    <form action="insertt.php" method="POST">

                <div class="row mt-3">       
                <input type="text"  class="form-control" name="name" id="name" placeholder="Name" required >
</div>
<div class="row mt-3">
    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required >
</div>
<div class="row mt-3">
    <input type="text"  class="form-control" name="phno" id="phno" placeholder="Phone" required >
</div>
<div class="row mt-3">
    <textarea name="address"  class="form-control" id="addr" placeholder="Address"></textarea>
</div>

<div class="row mt-3">
        
                <input type="text" class="form-control" name="username" id="uname" placeholder="User Name" required >
</div>
<div class="row mt-3">
<input type="password" class="form-control" name="password" id="pass" placeholder="Password" required >
</div>
<div class="row mt-3">
    <input type="password"  class="form-control" name="cpassword" id="cpass" placeholder="Confirm Password" required >
</div>
<div class="row mt-3">
<button value="SIGN UP" name="submit" class="btn btn-primary btn-block btn-book" onclick='return validation()'>SIGN UP</button>
</div>
    </form>
</div>
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
    else if(document.getElementById('name').value.length==0)
    {
    alert("name is required");
    return false;
    }
    else if(!document.getElementById('name').value.match(/^[a-z A-Z]+$/))
    {
        alert("name is invalid");
        return false;
    }
    else if(document.getElementById('email').value.length==0)
    {
    alert("email is required");
    return false;
    }
    /*else if(!document.getElementById('email').value.match(/^[\w\-\.\+]+@[a-za-z0-9\.\]+\.[a-zA-Z0-9]{2,4}$/))
    {
        alert("email is invalid");
        return false;
    }*/
    else if(document.getElementById('phno').value.length==0)
    {
    alert("phno is required");
    return false;
    }
    else if(!document.getElementById('phno').value.match(/^[0-9]{10}/))
    {
        alert("phno is invalid");
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
    else if(document.getElementById('cpass').value.length==0)
    {
    alert("confirm pass is required");
    return false;
    }
    else if(!document.getElementById('cpass').value.match(/^[a-zA-Z0-9@.]+$/))
    {
        alert("confirmpass is invalid");
        return false;
    }
    else if(!document.getElementById('pass').value.match(document.getElementById('cpass').value))
    {
        alert("password doesnt match");
        return false;
    }
    else if(document.getElementById('addr').value.length==0)
    {
    alert("address is required");
    return false;
    }
    else if(!document.getElementById('addr').value.match(/^[a-zA-Z0-9]/))
    {
        alert("address is invalid");
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
   include('footer.php');
   ?>
</body>
</html>