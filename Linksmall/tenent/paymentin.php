<?php
include('../connection.php');
if(isset($_POST['submit']))
{   
    session_start();
    $user_id=$_SESSION['id'];
    $name=$_POST['acc_name'];
    $cardno=$_POST['card_no'];
    $expiry=$_POST['expiry'];
    $cvv=$_POST['cvv'];
    $deposit=$_POST['amount'];
    $rid=$_POST['rid'];
    $querry="select * from bank_tb where acc_name='$name' and card_no='$cardno' and expiry='$expiry' and cvv='$cvv'";
    $ress=mysqli_query($conn,$querry);
    if(mysqli_num_rows($ress)==0 )
 {
    ?>
    <script>
        alert("card_no is invalid");
        </script>
        <?php
        }
        else
        {
            $row=mysqli_fetch_array($ress);
            $bank_id=$row['id'];
       $queryy="update bank_tb set balance=balance-$deposit where id=$bank_id";
       $rees=mysqli_query($conn,$queryy);
       $query="insert into payment_tb(rid,bank_id,amount)values('$rid','$bank_id','$deposit')";
       $res=mysqli_query($conn,$query);
       $queery="update request_tb set pstatus='Done' where id=$rid";
       $rres=mysqli_query($conn,$queery);
       if($res==true)
       {
           ?>
           <script>
               alert("payment succesfully");
               </script>
               <?php
       }
        }

}
?>