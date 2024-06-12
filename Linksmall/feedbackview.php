<?php
include('connection.php');
$id=$_GET['id'];
$query="select feedback_tb.id as fid,feedback_tb.*,user_tb.*,room_tb.* from feedback_tb inner join user_tb on feedback_tb.user_id=user_tb.id inner join room_tb on feedback_tb.room_id=room_tb.id where room_tb.id=$id";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)>0)
{
?>
<form action="" method="POST">
<table border=1>
    <thead>
        <th>Username</th>
        <th>Roomno</th>
        <th>Feedback</th>
</thead>
<?php
while($row=mysqli_fetch_array($res))
{ 
    ?>
    <tr>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['roomno'];?></td>
    <td><?php echo $row['feedback'];?></td>
    <?php 
}
}
else
{
    echo "no feedbacks";
}
?>

</table>
