<?php
include('adminheader.php');
?>
<section class="form-16" id="booking" style="min-height:570px">
 <div class="form-16-mian py-5">
 <div class="container py-lg-3 text-white bg">
            <div class="section-title align-center text-center">
                <h4 class="sub-title"></h4>
                <h3 class="global-title text-primary">Add Room</h3>
            </div>
    
            <div class="forms-16-top">

                <div class="form-right-inf">
                    <div class="form-inner-cont">
<div class="col-md-6 offset-3">
<form action="roomin.php" method="POST" enctype="multipart/form-data">
        <div class="row">
                
                   
                   <input type="text" class="form-control  "name="floor" id="floor"  placeholder="Floor" required >
</div>

<div class="row mt-3">
                
                     <input type="text"class="form-control  "name="squarfeet" id="sqrft"  placeholder="Squarefeet" required >
</div>
<div class="row mt-3">
                
                    <input type="text"class="form-control  "name="roomno" id="rno"  placeholder="Room No." required >
                
</div>
<div class="row mt-3">
                    <input type="text"class="form-control  "name="rate" id="rate"  placeholder="Rate" required >
</div>
<div class="row mt-3">
                
                    <textarea name="description"class="form-control  " id="dscrptn"  placeholder="Description" required ></textarea>
</div>
<div class="row mt-3">
            <input type="text" class="form-control  " name="deposit" id="dpst"  placeholder="Deposit" required >
</div>
<div class="row mt-3">
                    <input type="file"class="form-control  " name="photo" id="photo"  placeholder="Photo" required >
</div>
<div class="row mt-4">
                <button class="btn btn-book btn-primary" value="ADD" name="submit" onclick='return validation()'>ADD</button>
</div>
        </form>
</div>
</div>
    <script>
    function validation()
    {
    if(document.getElementById('floor').value.length==0)
    {
    alert("floor is required");
    return false;
    }
    else if(!document.getElementById('floor').value.match(/^[0-9]+$/))
    {
        alert("floor is invalid");
        return false;
    }
    else if(document.getElementById('photo').value.length==0)
    {
    alert("photo is required");
    return false;
    }
    else if(document.getElementById('sqrft').value.length==0)
    {
    alert("squarefeet is required");
    return false;
    }
    else if(!document.getElementById('sqrft').value.match(/^[0-9]+$/))
    {
        alert("squarefeet is invalid");
        return false;
    }
    else if(document.getElementById('rno').value.length==0)
    {
    alert("roomno is required");
    return false;
    }
    else if(!document.getElementById('rno').value.match(/^[0-9]+$/))
    {
        alert("roomno is invalid");
        return false;
    }
    else if(document.getElementById('rate').value.length==0)
    {
    alert("rate is required");
    return false;
    }
    else if(!document.getElementById('rate').value.match(/^[0-9]+$/))
    {
        alert("rate is invalid");
        return false;
    }
    else if(document.getElementById('dscrptn').value.length==0)
    {
    alert("description is required");
    return false;
    }
else if(document.getElementById('dpst').value.length==0)
    {
    alert("deposit is required");
    return false;
    }
    else if(!document.getElementById('dpst').value.match(/^[0-9]+$/))
    {
        alert("deposit is invalid");
        return false;
}
    }
    </script>   
    </div>
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



