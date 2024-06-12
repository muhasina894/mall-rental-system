<?php
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require '..\phpmailer\phpmailer\src\Exception.php'; 
require '..\phpmailer\phpmailer\src\PHPMailer.php'; 
require '..\phpmailer\phpmailer\src\SMTP.php'; 


include('../connection.php');
$notify=$_POST["notify"];
$id=$_GET['id'];
$date=date('Y-m-d');
$email=$_POST['email'];

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
    $mail->Subject = 'Notification'; 
    
    // Mail body content 
    $bodyContent = '<h1>Notification</h1>'; 
    $bodyContent .= '<p>'.$notify.'</p>';
    $mail->Body    = $bodyContent; 
    $mail->send();
    // Send email 
    if(!$mail->send()) { 
        //echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
    ?>
    <script>
      alert('Message could not be sent');
    </script>
    <?php
      } 
    else 
    { 
            $query="insert into notify_tb(request_id,date,notify) values('$id','$date','$notify')";
            $res=mysqli_query($conn,$query );
      //  echo 'Message has been sent.'; 
    } 
   
?>
<script>
   alert("Notification Send");
   window.location.href="viewappreq.php";
   </script>
   <?php
 }
 ?>