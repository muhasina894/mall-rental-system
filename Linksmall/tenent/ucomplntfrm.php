<?php
$id=$_GET['id'];
?>
<html>
    <head>
        <title>compliant</title>
        <link rel="stylesheet" href="../bootstrap-4.6.2-dist\css\bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
<h3 class="text-primary text-center">COMPLAINT</h3>
      <div class="col-md-6 offset-3 p-5 border">

    <form action="ucmplnt.php" method="POST" enctype="multipart/form-data">
    <div class="row"> 
        
            <label>Title</label>
            <input type="text"class="form-control"name="title" id="title">
</div>
<div class="row"> 

           <label>Description</label>
    <textarea name="description" class="form-control"id="dscrptn"></textarea> 
    <input type="hidden" name="room_id" value="<?php echo $id ?>">
</div>
<div class="row"> 
    <label>Photo</label>
    <input type="file"class="form-control" name="photo" id="photo">
</div>
<div class="row mt-3"> 
    <div class="col text-center">
<input type="submit" class="btn btn-primary" value="SUBMIT" name="submit" onclick='return validation()'>
</div></div>
</form>
</div>
</div>
<script>
    function validation()
    {
    if(document.getElementById('title').value.length==0)
    {
    alert("title is required");
    return false;
    }
    if(document.getElementById('dscrptn').value.length==0)
    {
    alert("description is required");
    return false;
    }if(document.getElementById('photo').value.length==0)
    {
    alert("photo is required");
    return false;
    }
}
</script>