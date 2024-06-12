<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require '..\phpmailer\phpmailer\src\Exception.php'; 
require '..\phpmailer\phpmailer\src\PHPMailer.php'; 
require '..\phpmailer\phpmailer\src\SMTP.php'; 



include('../connection.php');
$id=$_GET['id'];
$email=$_POST['email'];
$renewaldate=date('Y-m-d',strtotime('11 months'));
    if($_POST['submit']=='APPROVE')
    {
        $status="Approved";
        $qry="select * from request_tb where id=$id";
        $rss=mysqli_query($conn,$qry);
        $var=mysqli_fetch_array($rss);
        $user_id=$var['user_id'];
        $qury="select * from  user_tb where id=$user_id and status='Registered'";
        $rs=mysqli_query($conn,$qury);
       if(mysqli_num_rows($rs)>0)
       {
        $querry="insert into renewal_tb(request_id,leasedate,renewaldate)values('$id',CURRENT_DATE,'$renewaldate')";
        $ress=mysqli_query($conn,$querry);
        $query="update request_tb set status='Approved' where id=$id";
       }
        else
        {
        $query="update request_tb set status='Approved' where id=$id";
        
        }
    }
    else{
        $status="Rejected";
     $query="update request_tb set status='Rejected' where id=$id";
    }
    if(!$sock = @fsockopen('www.google.com', 80))
    {
        include('adminheader.php');
        ?>
<section class="form-16" style="min-height:570px">
 <div class="form-16-mian py-5" style="min-height:570px">
 <div class="container bg-light" style="min-height:500px">
 <div class="row text-danger"><div class="col text-center">
  <h4 class="text-danger mt-5" style="padding-top:135px">Network Error !</h4>
  <h6 class="pt-3"> Please make sure you are connected to the internet and try again...</h6>
</div></div></div>
</div>
</div>
</section>
<?php
   include('../footer.php');
   ?>
   </body>
   </html>
      <?php
    }
    else
    {
        if($status=='Approved')
    {
    $mail = new PHPMailer(true); 
    $mail->isSMTP();                      // Set mailer to use SMTP 
    $mail->Host = 'smtp-mail.outlook.com';       // Specify main and backup SMTP servers 
    $mail->SMTPAuth = true;               // Enable SMTP authentication 
    $mail->Username = 'linksmall@hotmail.com';   // SMTP username 
    $mail->Password = 'mall@123';   // SMTP password 
    $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
    $mail->Port = 587;                    // TCP port to connect to 
     
    // Sender info 
    $mail->setFrom('linksmall@hotmail.com'); 
    
    // Add a recipient 
    $mail->addAddress($email); 
     
    //$mail->addCC('cc@example.com'); 
    //$mail->addBCC('bcc@example.com'); 
     
    // Set email format to HTML 
    $mail->isHTML(true); 
     
    // Mail subject 
    $mail->Subject = 'Request Approval'; 
    
    // Mail body content 
    $bodyContent = '<h1>Request Approved</h1>'; 
    $bodyContent .= '<p>Your room request has approved successfully...Please Login your account and check the details.</p>';
    $mail->Body    = $bodyContent; 
    $mail->send();
    // Send email 
    if(!$mail->send()) { 
        echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
    } 
    else { 
        echo 'Message has been sent.'; 
    } 
}
if($status=='Rejected')
{
$mail = new PHPMailer(true); 
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp-mail.outlook.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = 'linksmall@hotmail.com';   // SMTP username 
$mail->Password = 'mall@123';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                    // TCP port to connect to 
 
// Sender info 
$mail->setFrom('linksmall@hotmail.com'); 

// Add a recipient 
$mail->addAddress($email); 
 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'Request Reject'; 

// Mail body content 
$bodyContent = '<h1>Request rejected</h1>'; 
$bodyContent .= '<p>Your room request has rejeted ......</p>';
$mail->Body    = $bodyContent; 
$mail->send();
// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} 
else { 
    echo 'Message has been sent.'; 
} 
}


    $res=mysqli_query($conn,$query);
    if($res==true)
    {
        if($status=='Approved')
        {
            ?>
            <script>
                <?php

                ?>
                alert("Request Approved Successfully");
                window.location.href="viewpendreq.php";
                </script>
                <?php
        }
        else
        {
            ?>
            <script>
                <?php

                ?>
                alert("Request Rejected Succesfully");
                window.location.href="viewpendreq.php";
                </script>
                <?php
    }
}
   
}
?>