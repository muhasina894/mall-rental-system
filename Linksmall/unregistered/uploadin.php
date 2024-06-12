<?php
include('../connection.php');
if(isset($_POST['submit']))
{
    session_start();
    $id=$_SESSION['id'];
    $data=$_POST['data'];
    $photo=$_FILES['photo']['name'];
    $filepath=$_FILES['photo']['tmp_name'];
    $q="select * from upload_tb where user_id=$id";
    $re=mysqli_query($conn,$q);
    if(mysqli_num_rows($re)>0)
    {
?>
<script>
            alert("Already Uploaded..");
            window.location.href="userupload.php";
            </script>
<?php
    }
    else
    {
    $query="insert into upload_tb(user_id,photo,type)values('$id','$photo','$data')";
    $res=mysqli_query($conn,$query);
    if($res==true)
    {
        move_uploaded_file($filepath,'../images/'.$photo);
        ?>
        <script>
            alert("Document Uploaded Successfully");
            window.location.href="userupload.php";
            </script>
         <?php 
    }
          
    }
}
?>
    