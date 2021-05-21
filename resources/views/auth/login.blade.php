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
                        <a class="navbar-brand" href="/">
                            <img src="images/logo.png" href="/" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto main-nav ">
                                <li class="nav-item">
                                    <a class="nav-link" href="/about-us"><b>About Us</b></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="/contact-us"><b>Contact Us</b></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="/store"><b>Market</b></a>
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
                                    <a class="nav-link text-white add-button" href="{{ route('login') }}"><i
                                            class="fa fa-plus-circle"></i> {{ __('Login') }}</a>
                                </li>
                                &nbsp;
                                <li class="nav-item">
                                    <a class="nav-link text-white add-button" href="{{ route('register') }}"><i
                                            class="fa fa-plus-circle"></i> {{ __('Register') }}</a>
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

    <x-guest-layout>

        {{-- <x-jet-authentication-card> --}}
        <x-jet-validation-errors class="mb-4" />


        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <section class="login py-5 border-top-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8 align-item-center">
                        <div class="border">
                            <h3 class="bg-gray p-4">Login Now</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <fieldset class="p-4">

                                    <input placeholder="Email" class="border p-3 w-100 my-2" id="email"
                                        class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                        required autofocus />
                                    <input placeholder="Password" class="border p-3 w-100 my-2" id="password"
                                        class="block mt-1 w-full" type="password" name="password" required
                                        autocomplete="current-password" />

                                    <div class="loggedin-forgot">
                                        <input type="checkbox" id="remember_me" name="remember" />
                                        <label for="remember_me" class="pt-3 pb-2">Keep me logged in</label>
                                    </div>

                                    <x-jet-button
                                        class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">
                                        {{ __('Log in') }}
                                    </x-jet-button>

                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 mt-3 d-block  text-primary"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif

                                    <a class="mt-3 d-inline-block text-primary" href="register.html">Register
                                        Now</a>
                                </fieldset>
                            </form>
                            {{-- </x-jet-authentication-card> --}}
    </x-guest-layout>
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
                            <a href="#" class=" ml-3"><img src="images/apps/instergrame.png" class="img-fluid"
                                    alt=""></a>
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

                            </script>. All Rights Reserved,<a class="text-primary"
                                href="https://www.facebook.com/pages/category/Brand/C-S-sale-market-100845178196454/"
                                target="_blank"> C & S Sale Market </a></p>
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <!-- Social Icons -->
                    <ul class="social-media-icons text-right">
                        <li><a class="fa fa-facebook"
                                href="https://www.facebook.com/pages/category/Brand/C-S-sale-market-100845178196454/"
                                target="_blank"></a></li>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places">
    </script>
    <script src="plugins/google-map/gmap.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
