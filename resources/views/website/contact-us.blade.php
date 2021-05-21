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
<!-- page title -->
<!--================================
=            Page Title            =
=================================-->
<section style="background-color: maroon"  class="page-title">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center">
				<!-- Title text -->
				<h3>Contact Us</h3>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>
<!-- page title -->

<!-- contact us start-->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-us-content p-4">
                    <h5>Contact Us</h5>
                    <h1 class="pt-3">Hello, what's on your mind?</h1>
                    <h2> &nbsp;</h2>
                   <h2> Sell Anything from Your Online Store </h2>

                
                    
                    <p class="pt-3 pb-5"></p>
                </div>
            </div>
            <div class="col-md-6">
                    <form action="#">
                        <fieldset class="p-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 py-2">
                                        <input type="text" placeholder="Name *" class="form-control" required>
                                    </div>
                                    <div class="col-lg-6 pt-2">
                                        <input type="email" placeholder="Email *" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <select name="" id="" class="form-control w-100">
                                <option value="1">Select Category</option>
                                <option value="1">Laptop</option>
                                <option value="1">iPhone</option>
                                <option value="1">Monitor</option>
                                <option value="1">I need</option>
                            </select>
                            <textarea name="message" id=""  placeholder="Message *" class="border w-100 p-3 mt-3 mt-lg-4"></textarea>
                            <div class="btn-grounp">
                                <button type="submit" class="btn btn-primary mt-2 float-right">SUBMIT</button>
                            </div>
                        </fieldset>
                    </form>
            </div>
        </div>
    </div>
</section>
<!-- contact us end -->
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