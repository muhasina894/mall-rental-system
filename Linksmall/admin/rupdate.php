<?php
include('../connection.php');
$flerr=$perr=$serr=$rerr=$rarr=$derr=$dperr="";
if(isset($_POST['submit']))
{
    $id=$_GET['id'];
    $floor=$_POST['floor'];
    $photo=$_FILES['photo']['name'];
    $filepath=$_FILES['photo']['tmp_name'];
    $squarfeet=$_POST['squarfeet'];
    $roomno=$_POST['roomno'];
    $rate=$_POST['rate'];
    $description=$_POST['description'];
    $deposit=$_POST['deposit'];
    if($photo)
    {
        $query="update room_tb set floor='$floor',photo='$photo',squarfeet='$squarfeet',roomno='$roomno',rate='$rate',description='$description',deposit='$deposit' where id=$id";
    }
    else{
        $query="update room_tb set floor='$floor',squarfeet='$squarfeet',roomno='$roomno',rate='$rate',description='$description',deposit='$deposit' where id=$id";
    }
        $res=mysqli_query($conn,$query);
        if($res==true)
        {
            move_uploaded_file($filepath,'../images/'.$photo);
            ?>
            <script>
                alert("Updated successfully");
                window.location.href="roomview.php";
                </script>
           <?php// header("location:roomview.php");
           ?>
                <?php
        }
    }
    ?>