
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>index</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href="//fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
</head>
<body class="bg-dark">
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light bg-primary py-lg-2 py-2 px-sm-0 px-2">
    <div class="container">
      <a class="navbar-brand" href="index.html"><span class="fa fa-home"></span>LinksMall</a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="admin_home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="index.html#about">About</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="vieww.php">Users</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="paymentview.php">Payments</a>
          </li>     
<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
             Rooms
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="rooms.php">Add Rooms</a>
              <a class="dropdown-item" href="roomview.php">View Rooms</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
             Room Requests
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="viewpendreq.php">Pending Requests</a>
              <a class="dropdown-item" href="viewappreq.php">Approved Requests</a>
              <a class="dropdown-item" href="viewrejectreq.php">Rejected Requests</a>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="index.html#portfolio">Gallery</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="cmplntview.php">Complaints</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle border border-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <?php
        session_start();
        echo $_SESSION['username'];
        ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="changepasswd.php">Change Password</a>
              <a class="dropdown-item" href="../logout.php">Logout</a>
            </div>
          </li>
          
        </ul>
        <!-- <div class="form-inline">
          <a href="index.html#booking" class="btn btn-light">Book Now</a>
        </div> -->
      </div>
    </div>
  </nav>
</section>
<script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</section>
<!-- // footer -->

<!-- jQuery -->
<script src="../assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="../assets/js/jquery-1.7.2.js"></script>
<script src="../assets/js/jquery.quicksand.js"></script>
<script src="../assets/js/script.js"></script>
<script src="../assets/js/jquery.prettyPhoto.js"></script>
<!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->