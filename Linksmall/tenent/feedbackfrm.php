<?php
$id=$_GET['id'];
?>
<html>
    <head>
        <title>fedback</title>
        <link rel="stylesheet" href="../bootstrap-4.6.2-dist\css\bootstrap.min.css">

</head>
<body>
<div class="container mt-5">
<h3 class="text-primary text-center">FEEDBACK </h3>
      <div class="col-md-6 offset-3 p-5 text-primary border">

    <form action="feedbackin.php" method="POST">
    <div class="row"> 

           <label>Feedback</label>
    <textarea name="feedback" class="form-control" id="feedbck"></textarea> 
    <input type="hidden" name="room_id" value="<?php echo $id ?>">
</div>
<div class="row mt-3"> 
<input type="submit" class="btn btn-primary"value="SUBMIT" name="submit" onclick='return validation()'>
</form>
</div>
</div>
<script>
    function validation()
    {
    if(document.getElementById('feedbck').value.length==0)
    {
    alert("feedback is required");
    return false;
    }
}
</script>