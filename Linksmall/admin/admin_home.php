
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
<body>
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
          </li>       -->
          <li class="nav-item">
            <a class="nav-link" href="vieww.php">Users</a>
          </li>   
          <li class="nav-item">
            <a class="nav-link" href="paymentview.php">Payments</a>
          </li>   
<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
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

<section class="w3l-carousel">
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('../assets/images/mall3.webp');">
      <!-- <img src="assets/images/banner.jpg" class="d-block w-100" alt="..."> -->
      <div class="carousel-caption container">
      <h6 class="tag-cover-9"> Links Mall</h6>
        <h3 class="title-cover-9">Find Your Rooms...</h3>
        <p class="para-cover-9">The service we render others is the rent we pay for our room on earth.</p>
        <a href="#portfolio" class="btn btn-primary btn-action mt-5">View Portfolio</a>
        <a href="#about" class="btn btn-outline-light btn-outline-action mt-5">About Us</a>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('../assets/images/mall1.jpg')">
      <!-- <img src="assets/images/banner-3.jpg" class="d-block w-100" alt="..."> -->
      <div class="carousel-caption container">
      <h6 class="tag-cover-9"> Links Mall</h6>
        <h3 class="title-cover-9">Find Your Rooms...</h3>
        <p class="para-cover-9">The service we render others is the rent we pay for our room on earth.</p>
          <!-- <a href="#portfolio" class="btn btn-primary btn-action mt-5">View Portfolio</a> -->
          <a href="#about" class="btn btn-outline-light btn-outline-action mt-5">About Us</a>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('../assets/images/mall2.webp')">
      <!-- <img src="assets/images/banner-2.jpg" class="d-block w-100" alt="..."> -->
      <div class="carousel-caption container">
      <h6 class="tag-cover-9"> Links Mall</h6>
        <h3 class="title-cover-9">Find Your Rooms...</h3>
        <p class="para-cover-9">The service we render others is the rent we pay for our room on earth.</p>
          <!-- <a href="#portfolio" class="btn btn-primary btn-action mt-5">View Portfolio</a> -->
          <a href="#about" class="btn btn-outline-light btn-outline-action mt-5">About Us</a>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('../assets/images/mall3.webp')">
      <!-- <img src="assets/images/banner-1.jpg" class="d-block w-100" alt="..."> -->
      <div class="carousel-caption container">
      <h6 class="tag-cover-9"> Links Mall</h6>
        <h3 class="title-cover-9">Find Your Rooms...</h3>
        <p class="para-cover-9">The service we render others is the rent we pay for our room on earth.</p>
          <!-- <a href="#portfolio" class="btn btn-primary btn-action mt-5">View Portfolio</a> -->
          <a href="#about" class="btn btn-outline-light btn-outline-action mt-5">About Us</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<!-- Content-with-photo23 block -->
<section class="w3l-content-with-photo-23" id="about">
    <div id="cwp23-block" class="py-5">
        <div class="container py-lg-3">
            <h4 class="sub-title"></h4>
            <h3 class="global-title text-secondary">About us</h3>
            <div class="row cwp23-content align-items-lg-center">
                <div class="cwp23-img col-md-6 pt-md-4">
                <img src="../assets/images/m6.jpeg" class="img-fluid" alt="" />
                </div>
                <div class="cwp23-text col-md-6 mt-4 mt-md-0 pl-md-4">
                    <div class="cwp23-title">
                    <h3>LINKS MALL:KANNUR SHOPPING| MATTANNUR </h3><br><br>
                    </div>
                    <div class="row cwp23-text-cols">
                        
                            <p>Links mall helps to rent out rooms of mall to shopkeepers.People can view data of rented rooms.
                                A person can apply for rooms both as tenent and user.Their will be a request page where admin will sent the 
                                details about rooms.</p>
                                <div class="column col-lg-6 mt-4">
                            <h4 class="text-primary"> ONLINE ROOMS RENTAL</h4>
                            <p> The only premeir shopping mall in mattannur.
                                Affordable rooms for rent below 40000 in kannur kerala </p>
                        </div>
                        <div class="column col-lg-6 mt-4">
                            <h4 class="text-primary">SHOPPING OPTIONS</h4>
                            <p>Links mall has a vareity of shopping options spread across 4 floors.
                                shops include Anchor stores,Foodcourt,Clothing,Travels and cinema </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content-with-photo23 block -->
<!-- specifications -->
<section class="w3l-specifications-9">
    <div class="main-w3 py-5" id="stats">
        <div class="container py-lg-3">
                <h4 class="sub-title">Our Stats</h4>
            <h3 class="global-title text-secondary">We have something to be Proud of</h3>
            <div class="row main-cont-wthree-fea text-center">
                <div class="col-lg-3 col-sm-6 mt-4">
                    <div class="grids-speci1">
                        <span class="fa fa-cart-plus text-primary"></span>
                        <h3 class="title-spe">10m+</h3>
                        <p>Products Sold</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-4">
                    <div class="grids-speci1">
                        <span class="fa fa-user text-primary"></span>
                        <h3 class="title-spe">380k</h3>
                        <p> Customers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-4">
                    <div class="grids-speci1">
                        <span class="fa fa-moon-o text-primary"></span>
                        <h3 class="title-spe">90+</h3>
                        <p>Days</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-4">
                    <div class="grids-speci1">
                        <span class="fa fa-clock-o text-primary"></span>
                        <h3 class="title-spe">560+</h3>
                        <p>R&D Hours</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- //specifications -->
</section>
<section class="w3l-features-7">
	<!-- /features -->
	<div class="features py-5" id="services">
		<!-- <div class="container py-lg-3">
			<div class="section-title align-center text-center">
				<h4 class="sub-title">We Offer</h4>
				<h3 class="global-title text-white">Exclusive features for you</h3>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="feature-gd">
						<div class="icon"> <span class="fa fa-truck text-primary" aria-hidden="true"></span></div>
						<div class="icon-info">
							<h5 class="my-3"><a href="#url">Free Shipping & Returns</a></h5>
							<p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et
								dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
				<div class="feature-gd">
					<div class="icon"> <span class="fa fa-money text-primary" aria-hidden="true"></span></div>
					<div class="icon-info">
						<h5 class="my-3"><a href="#url">Priced Just Right</a></h5>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
					</div>
				</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
				<div class="feature-gd">
					<div class="icon"> <span class="fa fa-exchange text-primary" aria-hidden="true"></span></div>
					<div class="icon-info">
						<h5 class="my-3"><a href="#url">10 Year Honest warranty</a></h5>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6">
				<div class="feature-gd">
					<div class="icon"> <span class="fa fa-truck text-primary" aria-hidden="true"></span></div>
					<div class="icon-info">
						<h5 class="my-3"><a href="#url">Free Shipping & Returns</a></h5>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6">
				<div class="feature-gd">
					<div class="icon"> <span class="fa fa-money text-primary" aria-hidden="true"></span></div>
					<div class="icon-info">
						<h5 class="my-3"><a href="#url">Priced Just Right</a></h5>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6">
				<div class="feature-gd">
					<div class="icon"> <span class="fa fa-exchange text-primary" aria-hidden="true"></span></div>
					<div class="icon-info">
						<h5 class="my-3"><a href="#url">10 Year Honest warranty</a></h5>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
					</div>
				</div>
			</div>
			</div>
		</div> -->
	</div>
	<!-- //features -->
</section>
<!-- portfolio -->
<section class="w3l-gallery py-5" id="portfolio">
        <div class="container py-lg-3">
          
            <ul class="portfolio-area clearfix p-0 m-0">
        <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
            <img src="../assets/images/RM2.jpeg" height="100%" class="img-fluid w3layouts " alt="portfolio-img" width="100%">
            </div>
            <div class="col-md-4">
            <img src="../assets/images/m2.jpeg" class="img-fluid w3layouts " alt="portfolio-img" width="100%">
            </div>
            <div class="col-md-4">
            <img src="../assets/images/RM9.jpeg" class="img-fluid w3layouts " alt="portfolio-img" width="100%">
                </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-4">
            <img src="../assets/images/RM3.jpeg" class="img-fluid w3layouts " alt="portfolio-img" width="100%">
            </div>
            <div class="col-md-4">
            <img src="../assets/images/RM6.avif" class=" w3layouts " alt="portfolio-img" width="100%" height="100%">
            </div>
            <div class="col-md-4">
            <img src="../assets/images/RM9.jpeg" class="img-fluid w3layouts " alt="portfolio-img" width="100%">
                </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-4">
            <img src="../assets/images/A4.jpeg" class="img-fluid w3layouts " alt="portfolio-img" width="100%" height="100%">
            </div>
            <div class="col-md-4">
            <img src="../assets/images/m7.jpg" class=" w3layouts " alt="portfolio-img" width="100%" height="100%">
            </div>
            <div class="col-md-4">
            <img src="../assets/images/RM9.jpeg" class="img-fluid w3layouts " alt="portfolio-img" width="100%">
                </div>
        </div>
       </div>
       <div class="clear"></div>
        </ul>
            <!--end portfolio-area -->
        </div>
        <!-- //gallery container -->
    </section>
    <!-- //portfolio -->

<!-- <section class="form-16" id="booking"> -->
    <!-- /form-16-section -->
    <!-- <div class="form-16-mian py-5">
        <div class="container py-lg-3">
            <div class="section-title align-center text-center">
                <h4 class="sub-title">Pre Order</h4>
                <h3 class="global-title text-white">Book your couch now</h3>
            </div>
            <div class="forms-16-top">

                <div class="form-right-inf">
                    <div class="form-inner-cont">

                        <form action="#" method="post" class="signin-form">
                            <div class="d-grid book-form">
                                <div class="form-input">
                                    <input type="text" class="form-control" name="" placeholder="Name.." required />
                                </div>
                                <div class="form-input">
                                    <input type="email" class="form-control" name="" placeholder="Email address.." required />
                                </div>
                                <div class="form-input">
                                    <input type="text" class="form-control" name="" placeholder="Contact no.." required />
                                </div>
                                <div class="form-input">
                                    <input type="text" class="form-control" name="" placeholder="Address1.." required />
                                </div>
                                <div class="form-input">
                                    <input type="text" class="form-control" name="" placeholder="Address2.." required />
                                </div>
                                <div class="form-input">
                                    <input type="text" class="form-control" name="" placeholder="City.." required />
                                </div>
                                <div class="form-input">
                                    <select name="state" form="count" class="select-state form-control">
                                        <option value="state">Select State</option>
                                        <option value="state">State1</option>
                                        <option value="state">State2</option>
                                        <option value="state">State3</option>
                                        <option value="state">State4</option>
                                        <option value="state">State5</option>
                                        <option value="state">State6</option>
                                    </select>
                                </div>
                                <div class="form-input">
                                    <input type="text" class="form-control" name="" placeholder="ZIP code.." required="">
                                </div>
                                <div class="form-input">
                                    <select name="state" form="count" class="select-state form-control">
                                        <option value="Country">Select Country</option>
                                        <option value="Country">Country1</option>
                                        <option value="Country">Country2</option>
                                        <option value="Country">Country3</option>
                                        <option value="Country">Country4</option>
                                        <option value="Country">Country5</option>
                                        <option value="Country">Country6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-input">
                                <textarea name="w3lMessage" class="form-control" placeholder="Type your message...(if any)" required=""></textarea>
                            </div>
                            <button class="btn btn-primary btn-book">Book Now</button>
                            <p class="add-info">For questions and additional information please contact: <a href="tel:+44 99 555 42">+44 99 555 42</a>, or email <a href="mailto:mailid@mail.com">mailid@mail.com</a></p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- </section> -->
<!-- //form-16-section -->

<!-- // grids block 5 -->
<!-- contacts -->

<!-- //contacts -->
<!-- forms -->
<section class="w3l-forms-9" id="newsletter">
    <div class="main-w3 py-5 bg-primary">
        <div class="container py-lg-3">
            <div class="row align-items-center">
                <div class="main-midd col-lg-6">
                    <h4 class="title-head">Subscribe for Special Offers</h4>
                    <p>Get Weekly Newsletters</p>
                </div>
                <div class="main-midd-2 col-lg-6">
                    <form action="#" method="post" class="rightside-form">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                        <button class="btn" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //forms -->
<!-- footer -->
<section class="w3l-footer-29-main" id="footer">
    <div class="footer-29 py-5">
        <div class="container pb-lg-3">
            <!-- <div class="row footer-top-29">
                <div class="col-lg-4 col-md-6 footer-list-29 footer-1 mt-md-4">
                    <h6 class="footer-title-29">Contact Us</h6>
                    <ul>
                        <li>
                            <p><span class="fa fa-map-marker"></span> Couch hunter, 208 Trainer Avenue street, Illinois,
                                UK - 62617</p>
                        </li>
                        <li><a href="tel:+44 99 555 42"><span class="fa fa-phone"></span> +44 99 555 42</a></li>
                        <li><a href="mailto:mailid@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                                mailid@mail.com</a></li>
                    </ul>
                    <div class="main-social-footer-29">
                        <a href="#facebook" class="facebook bg-primary"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter" class="twitter bg-primary"><span class="fa fa-twitter"></span></a>
                        <a href="#instagram" class="instagram bg-primary"><span class="fa fa-instagram"></span></a>
                        <a href="#google-plus" class="google-plus bg-primary"><span
                                class="fa fa-google-plus"></span></a>
                        <a href="#linkedin" class="linkedin bg-primary"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-list-29 footer-2 mt-4">
                    <ul>
                        <h6 class="footer-title-29">Explore More</h6>
                        <li><a href="#url">Mattress Size Guide</a></li>
                        <li><a href="#url">Instructions</a></li>
                        <li><a href="#url">FAQ's</a></li>
                        <li><a href="#url">Instructions</a></li>
                        <li><a href="#url">Buy Bed Online</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-list-29 footer-3 mt-4">
                    <div class="properties">
                        <h6 class="footer-title-29">Recent Post</h6>
                        <a class="d-grid twitter-feed" href="blog-single.html">
                            <img src="../assets/images/e8.jpg" class="img-fluid rounded" alt="">
                            <p>The more you know,
                                The better you sleep</p>
                        </a>
                        <a class="d-grid twitter-feed" href="blog-single.html">
                            <img src="../assets/images/e9.jpg" class="img-fluid rounded" alt="">
                            <p>Know more about the science behind great sleep.</p>
                        </a>
                        <a class="d-grid twitter-feed" href="blog-single.html">
                            <img src="../assets/images/e10.jpg" class="img-fluid rounded" alt="">
                            <p>Doloremque velit sapien labore eius itna</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-list-29 footer-4 mt-4">
                    <ul>
                        <h6 class="footer-title-29">Quick Links</h6>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="blog.html"> Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div> -->
            <div class="row bottom-copies">
                <p class="copy-footer-29 col-lg-8">© 2020 Couch Hunter. All rights reserved | Design by <a
                    href="https://w3layouts.com">W3layouts</a></p>
                <ul class="list-btm-29 col-lg-4">
                    <li><a href="#link">Privacy policy</a></li>
                    <li><a href="#link">Terms of service</a></li>
                    <li><select name="carlist" form="carform">
                            <option value="Language">English</option>
                            <option value="Language">France</option>
                            <option value="Language">Spanish </option>
                            <option value="Language">Russian</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
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
</body>

</html>

<!-- <html>
    <body>
    <li><a href="formm.php">LOGIN</a></li>
        <li><a href="userf.php">SIGN UP </a></li>
</body>
</html> -->




        <!-- <p> WELCOME</p>
        <?php
        echo $_SESSION['username'];
        ?>
        <li><a href="vieww.php">VIEW USERS</a></li>
        <li><a href="rooms.php">ADD ROOMS</a></li>
        <li><a href="roomview.php">VIEW ROOMS DETAILS</a></li>
        <li><a href="unregisterd.php">UNREGISTERD USERS</a></li>
        <li><a href="registerd.php">REGISTERD USERS</a></li>
        <li><a href="viewrequest.php">VIEW  REQUEST</a></li>
        <li><a href="viewpendreq.php">VIEW PENDING REQUEST</a></li>
        <li><a href="viewappreq.php">VIEW APPROVED REQUEST</a></li>
        <li><a href="viewrejectreq.php">VIEW REJECTED REQUEST</a></li>
        <li><a href="viewuploddetails.php">VIEW UPLODED DETAILS</a></li>
        <li><a href="appconfrm.php">CONFIRM UPLODED DETAILS</a></li>
        <li><a href="changepasswd.php">CHANGE PASSWORD</a></li>
        <li><a href="cmplntview.php">VIEW COMPLAINTS</a></li>
        <li><a href="paymentview.php">PAYMENT VIEW </a></li>
        <li><a href="notfyrplyview.php">NOTIFY RPLY VIEW</a></li>
        <li><a href="../logout.php">LOGOUT</a></li>

        
</body>
</html> -->