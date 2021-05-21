<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Classimax</title>
  
  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="index.html">
						<img src="images/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item">
								<a class="nav-link" href="/about-us">About Us</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="/contact-us">Contact Us</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="/store">Market</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="/store"></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="/store"></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="/store"></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="/store"></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="/store"></a>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="{{ route('login') }}"><i class="fa fa-plus-circle"></i> {{ __('Login') }}</a>
							</li>
							&nbsp;
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="{{ route('register') }}"><i class="fa fa-plus-circle"></i> {{ __('Register') }}</a>
							</li>
							&nbsp;
							<li class="nav-item">
								<a class="nav-link login-button" href="#">ENGLISH</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>

<!--================================
=            Page Title            =
=================================-->
<section style="background-color: maroon" class="page-title">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center">
				<!-- Title text -->
				<h3>About Us</h3>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-img">
                    <img src="images/about/about.jpg" class="img-fluid w-100 rounded" alt="">
                </div>
            </div>
            <div class="col-lg-12 pt-5 pt-lg-0">
                <div class="about-content">
                    <h3 class="font-weight-bold">Introduction</h3>
                    <p style="text-align:justify"> This web site enable shop owners to setup their online shops, customers to browse items
                      through shops and get location details, contact information and availability
                      information easily without searching google. It is provided advertising services
                      for stores, services, and products through this system website.</p>
                    <h3 class="font-weight-bold">About Business</h3>
                    <p style="text-align:justify"> The
                      hamadema.lk website, provides the ability for any person to find the
                      whereabouts of any item they want to buy.
                      First of all, the shop owner will be able to register on the website and then add
                      the products related to their shop to the system. It is also possible to market
                      the shop by including discounts, promotions, etc. offered by the shop. Once the
                      shop registration process has been reviewed and approved by the business
                      associates, a page with very accurate details about the shop will be reserved
                      for the shop. Then the shop displays on the website.
                      First of all, after coming to the website, anyone should include the
                      product or service they want. Then the relevant area should be selected. The
                      system then displays the corresponding shop information on the web page. It
                      provides product details, availability, location details, and contact details of
                      the shop where the item is located</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading text-center text-capitalize font-weight-bold py-5">
                    <h2>our team</h2>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="images/team/team1.jpg" class="img-fluid w-100" alt="Card image cap">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Founder / CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="images/team/team2.jpg" class="img-fluid w-100" alt="Card image cap">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Founder / CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="images/team/team3.jpg" class="img-fluid w-100" alt="Card image cap">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Founder / CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="images/team/team4.jpg" class="img-fluid w-100" alt="Card image cap">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Founder / CEO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                <div class="counter-content text-center bg-light py-4 rounded">
                    <i class="fa fa-smile-o d-block"></i>
                    <span class="counter my-2 d-block" data-count="2314">0</span>
                    <h5>Happy Visitors</h5>
                    </script>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                <div class="counter-content text-center bg-light py-4 rounded">
                    <i class="fa fa-user-o d-block"></i>
                    <span class="counter my-2 d-block" data-count="1013">0</span>
                    <h5>Available Products</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                <div class="counter-content text-center bg-light py-4 rounded">
                    <i class="fa fa-bookmark-o d-block"></i>
                    <span class="counter my-2 d-block" data-count="2413">0</span>
                    <h5>Active Businesses</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
                <div class="counter-content text-center bg-light py-4 rounded">
                    <i class="fa fa-smile-o d-block"></i>
                    <span class="counter my-2 d-block" data-count="200">0</span>
                    <h5>Active Members</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="images/logo2.png" alt="">
          <!-- description -->
          <p class="alt-color">
			Sell Anything from Your Online Store
		  </p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>More</h4>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#"></a></li>
			<li><a href="#"></a></li>
            <li><a href="#">Stores</a></li>
            <li><a href="terms-condition.html">Terms & Conditions</a></li>
			<li><a href="#"></a></li>
            <li><a href="terms-condition.html">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Contacts</h4>
          <ul>
			<li><a href="#">Contact Us</a></li>
            <li><a href="#"></a></li>
            <li><a href="#">Careers</a></li>
			<li><a href="#"></a></li>
            <li><a href="#">FAQ</a></li>
			<li><a href="#"></a></li>
            <li><a href="#">Membership</a></li>
          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <div class="mobile d-flex">
            <a href="">
              <!-- Icon -->
              {{-- <img src="images/footer/phone-icon.png" alt="mobile-icon"> --}}
            </a>
            <p>Connect With Us</p>
          </div>
          <div class="download-btn d-flex my-3">
            <a href="#"><img src="images/apps/whatapp.png" class="img-fluid" alt=""></a>
            <a href="#" class=" ml-3"><img src="images/apps/instergrame.png" class="img-fluid" alt=""></a>
			<a href="#" class=" ml-3"><img src="images/apps/Facebook.png" class="img-fluid" alt=""></a>
			<a href="#" class=" ml-3"><img src="images/apps/Messenger.png" class="img-fluid" alt=""></a>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright © <script> 
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. All Rights Reserved,<a class="text-primary" href="https://www.facebook.com/pages/category/Brand/C-S-sale-market-100845178196454/" target="_blank"> C & S Sale Market </a></p>
        </div>
      </div>
      <div class="col-sm-6 col-12">
        <!-- Social Icons -->
        <ul class="social-media-icons text-right">
          <li><a class="fa fa-facebook" href="https://www.facebook.com/pages/category/Brand/C-S-sale-market-100845178196454/" target="_blank"></a></li>
          <li><a class="fa fa-whatsapp" href="#" target="_blank"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>

<!-- JAVASCRIPTS -->
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script src="js/script.js"></script>

</body>

</html>