<?php
include('theader.php');
include('../connection.php');
?>
<?php
$id=$_SESSION['id'];
$queryy="select * from user_tb where id=$id";
$ress=mysqli_query($conn,$queryy);
$row=mysqli_fetch_array($ress);
?>
 <section class="form-16" id="booking" style="min-height:570px">
 <div class="form-16-mian py-5">
 <div class="container py-lg-3 text-white bg ">
            <div class="section-title align-center text-center">
                <h4 class="sub-title"></h4>
                <h3 class="global-title text-primary">Edit Profile</h3>
            </div>
    
            <div class="forms-16-top">

                <div class="form-right-inf">
                    <div class="form-inner-cont">
<div class="col-md-6 offset-3">
<form action="updatee.php" method="POST">
    <div class="row"> 
       
                <label> User Name</label>
                <input type="text"class="form-control " name="username" id="uname"value="<?php echo $row['username'];?>" readonly>
               </div>
               <div class="row"> 
                <label>Name</label>
                <input type="text"class="form-control " name="name" id="name"value="<?php echo $row['name'];?>">
</div>
<div class="row"> 
    <label>Email</label>
    <input type="email"class="form-control " name="email" id="email"value="<?php echo $row['email'];?>">
</div>
<div class="row"> 
    <label>Phone</label>
    <input type="text"class="form-control " name="phno" id="phno"value="<?php echo $row['phno'];?>">
</div>
<div class="row"> 
    <label>Address</label>
    <textarea name="address"class="form-control " id="addr"><?php echo $row['address'];?></textarea>
</div>

      <div class="row mt-3 mb-5"> 
        <button name="submit"  class="btn btn-primary btn-block btn-book" value="UPDATE" onclick='return validation()'>UPDATE</button>
</div>
</form>
</div>
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
   include('../footer.php');
   ?>
</html>