<?php
include('adminheader.php');
include('../connection.php');
include('rupdate.php');
?>
<?php
$id=$_GET['id'];
$query="select * from room_tb where id=$id";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
?>
<section class="form-16" id="booking" style="min-height:570px">
 <div class="form-16-mian py-5">
 <div class="container py-lg-3 text-white bg">
            <div class="section-title align-center text-center">
                <h4 class="sub-title"></h4>
                <h3 class="global-title text-primary">Edit Room</h3>
            </div>
    
            <div class="forms-16-top">

                <div class="form-right-inf">
                    <div class="form-inner-cont">
<div class="col-md-6 offset-3">
    <form action="rupdate.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        
                <label> Floor</label>
                <input type="text"class="form-control" name="floor" id="floor" value="<?php echo $row['floor'];?>">
</div>
    <div class="row mt-3">
    <label>Room</label>
    <div class="col">
    <img src="../images/<?php echo $row['photo'];?>" height="50" width="50" >
</div>
        <input type="file"class="form-control " name="photo" id="photo" value="<?php echo $row['photo'];?>">
</div>
<div class="row">
    <label>Squarfeet</label>
    <input type="text" class="form-control " name="squarfeet" id="sqrft"value="<?php echo $row['squarfeet'];?>">
</div>
<div class="row">
    <label>Roomno</label>
<input type="text" class="form-control " name="roomno" id="rno" value="<?php echo $row['roomno'];?>">
</div>
<div class="row">
    <label>Rate</label>
    <input type="text"class="form-control " name="rate" id="rate" value="<?php echo $row['rate'];?>">
</div>
<div class="row">
    <label>Description</label>
    <textarea name="description"class="form-control " id="dscrptn"><?php echo $row['description'];?></textarea>
          
</div>
<div class="row">
    <label>Deposit</label>
    <input type="text"class="form-control " name="deposit" id="dpst" value="<?php echo $row['deposit'];?>">
</div>
        <div class="row mt-3 mb-5">
    <input type="submit" name="submit"class="btn btn-primary btn-block btn-book" value="UPDATE" onclick='return validation()'>
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
</section>
    <?php
include('../footer.php');
?>
</body>
</html>