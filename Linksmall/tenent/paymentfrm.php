<?php
include('theader.php');
$deposit=$_POST['deposit'];
$rid=$_GET['id'];
?>
    <section class="form-16" id="booking" style="min-height:570px">
 <div class="form-16-mian py-5">
 <div class="container py-lg-3 text-white bg">
            <div class="section-title align-center text-center">
                <h4 class="sub-title"></h4>
                <h3 class="global-title text-primary">Payment</h3>
            </div>
    
            <div class="forms-16-top">

                <div class="form-right-inf">
                    <div class="form-inner-cont">
<div class="col-md-6 offset-3">
        <form action="paymentin.php" method="POST">
        <div class="row mt-3"> 
                    <input type="hidden" value="<?php echo $rid;?>" name="rid">
                    <input type="text"class="form-control " name="acc_name" id="accn"  placeholder="Account Name" Card></td>
</div>
<div class="row mt-3"> 
    <input type="text"class="form-control " name="card_no" id="card" placeholder="Card Number" Card >
</div>
<div class="row mt-3"> 
    <input type="date"class="form-control " name="expiry" id="exp" placeholder="Expiry" Card >
</div>
<div class="row mt-3"> 
    <input type="text"class="form-control " name="cvv" id="cvv" placeholder="CVV" Card >
</div>
<div class="row mt-3"> 
    <input type="text" class="form-control border" name="amount" value="<?php echo $deposit;?>" readonly>
</div>
<div class="row mt-3 mb-5"> 
<button class="btn btn-primary btn-block btn-book" value="PAY NOW" name="submit">Pay Now</button>
</div>
</form>
</div>
</div>
</div>
</section>
<?php
   include('../footer.php');
   ?>
</body>
</html>