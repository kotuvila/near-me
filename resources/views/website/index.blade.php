<!DOCTYPE html>
<html lang="en">

<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hamadema.lk</title>




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>sales market - One page HTML Responsive</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style1.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->






















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
    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 450px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }

    </style>
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
                                    <a class="nav-link text-white add-button" style="background-color: #4CAF50"
                                        href="{{ route('login') }}"><i class="fa fa-plus-circle"></i>
                                        {{ __('Login') }}</a>
                                </li>
                                &nbsp;
                                <li class="nav-item">
                                    <a class="nav-link text-white add-button" style="background-color: #4CAF50"
                                        href="{{ route('register') }}"><i class="fa fa-plus-circle"></i>
                                        {{ __('Register') }}</a>
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

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <div>
                    <img src="images/home/add1.png" style="width: 190px;" alt="">
                </div>
                <div>
                    <img src="images/home/add3.png" style="width: 190px;" alt="">
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
            </div>
            <div class="col-sm-8 text-left">


                <!--===============================
  =            Hero Area            =
  ================================-->

                {{-- <section class="hero-area bg-1 text-center overly" style="background-image: url(images/home/hero2.jpg)">
                    <!-- Container Start -->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Header Contetnt -->
                                <form action="{{ route('search') }}" method="GET" enctype="multipart/form-data">
                                    @csrf
                                    <div class="content-block">
                                        <h1 style="color:yellow">hamadema.lk</h1>
                                        <h3 style="color:#D96C00">Buy & Sell Near You </h3>
                                        <p style="color:#ffd700">THE LARGEST STORES NETWORK</p>
                                        <div class="short-popular-category-list text-center">
                                            <h2 style="color:#ffd700">Popular Category</h2>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a style="color:#D96C00; background-color: black; font-size: 3ch"
                                                        href="/category"><i class="fas fa-chalkboard-teacher"></i>
                                                        Tution Classes
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a style="color:#D96C00; background-color: black; font-size: 3ch"
                                                        href="/category"><i class="fas fa-plug"></i> Hardwares </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a style="color:#D96C00; background-color: black; font-size: 3ch"
                                                        href="/category"><i class="fas fa-chair"></i> Furniture
                                                        shops </a>
                                                </li>
                                                <br>
                                                <br>
                                                <br>
                                                <li class="list-inline-item">
                                                    <a style="color:#D96C00; background-color: black; font-size: 3ch"
                                                        href="/category"><i class="fa fa-stethoscope"></i> Medical
                                                        Centers </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a style="color:#D96C00; background-color: black; font-size: 3ch"
                                                        href="/category"><i class="fas fa-cut"></i>
                                                        Tailor shops</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </form>
                                <!-- Advance Search -->
                                <div class="advance-search">
                                    <div class="container-fluid">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12 col-md-12 align-content-center">

                                                <form action="{{ route('searchby') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-row">

                                                        <div class="form-group col-md-5">
                                                            <select name="area"
                                                                class="w-100 form-control mt-lg-1 mt-md-2">
                                                                <option disabled selected>Select Area
                                                                </option>

                                                                @foreach ($areas as $are)

                                                                    <option value="{{ $are->id }}">
                                                                        {{ $are->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>






                                                        <div class="form-group col-md-5">
                                                            <select name="cat"
                                                                class="w-100 form-control mt-lg-1 mt-md-2">
                                                                <option disabled selected>Select Category
                                                                </option>

                                                                @foreach ($cats as $cat1)

                                                                    <option value="{{ $cat1->id }}">
                                                                        {{ $cat1->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <div class="form-group col-md-2 align-self-center">
                                                            <button style="background-color: #4CAF50" type="submit"
                                                                class="btn text-white"><i></i>
                                                                &nbsp; &nbsp;&nbsp;&nbsp;Search&nbsp;&nbsp;
                                                        </div>


                                                    </div>


                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Advance Search -->
                                <div class="advance-search">
                                    <div class="container-fluid">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12 col-md-12 align-content-center">
                                                <form>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-8">
                                                            <input type="text" class="form-control my-2 my-lg-1"
                                                                id="inputtext4" placeholder="What are you looking for">
                                                        </div>
                                                        <div class="form-group col-md-2 align-self-center">
                                                            <button type="submit" style="background-color: #4CAF50"
                                                                class="btn text-white">Search
                                                                Now</button>
                                                        </div>
                                                        <div class="form-group col-md-2 align-self-center">
                                                            <button type="submit" style="background-color: #4CAF50"
                                                                class="btn text-white"><i
                                                                    class="fa fa-location-arrow"></i> &nbsp;&nbsp;Near
                                                                Me
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- Container End -->
                </section> --}}

                <!--===================================
  =            Client Slider            =
  ====================================-->


                <div id="banner" style="background-image: url(images/home/hero3.jpeg); background-repeat: no-repeat">

                    <div class="pad-top-100 parallax">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                        <div class="banner-text">
                                            <div class="banner-cell">
                                                <h2 class="block-title text-center"
                                                    style=" align-content: center; color: white;">
                                                    The Largest Stores Network</h2>

                                                <h1 style="padding-top: 0%; color: #fff973">
                                                    hamadema.lk<span class="typer" id="some-id" data-delay="200"
                                                        data-delim=":" data-words="....."
                                                        data-colors="gold"></span><span class="cursor"
                                                        data-cursorDisplay="" data-owner="some-id"></span></h1>
                                                <br>

                                                <h2 style="padding-top: 0%; color: gold"><span class="typer"
                                                        id="some-id" data-delay="200" data-delim=":" data-words="....."
                                                        data-colors="red"></span><span class="cursor"
                                                        data-cursorDisplay="Join With Us......."
                                                        data-owner="some-id"></span></h2>

                                                <br>
                                                <br>
                                                <br>



                                            </div>
                                            <!-- end banner-cell -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end container -->
                    </div>
                    <!-- end special-menu -->
                </div>


                <div class="special-box" style="background-color:black;">


                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Header Contetnt -->
                                <div class="content-block">
                                    {{-- <h1 style="color:yellow">hamadema.lk</h1>
                                        <h3 style="color:#D96C00">Buy & Sell Near You </h3>
                                        <p style="color:#ffd700">THE LARGEST STORES NETWORK</p> --}}
                                    <div class="short-popular-category-list text-center">
                                        <h2 style="color:black">Popular Categories</h2>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a style="color:#D96C00; font-size: 3ch" href="/category"><i
                                                        class="fas fa-chalkboard-teacher"></i>
                                                    Tution Classes
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a style="color:#D96C00;  font-size: 3ch" href="/category"><i
                                                        class="fas fa-plug"></i>
                                                    Hardwares </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a style="color:#D96C00;  font-size: 3ch" href="/category"><i
                                                        class="fas fa-chair"></i> Furniture
                                                    shops </a>
                                            </li>
                                            <br>
                                            <br>
                                            <br>
                                            <li class="list-inline-item">
                                                <a style="color:#D96C00; font-size: 3ch" href="/category"><i
                                                        class="fa fa-stethoscope"></i> Medical
                                                    Centers </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a style="color:#D96C00;  font-size: 3ch" href="/category"><i
                                                        class="fas fa-cut"></i>
                                                    Tailor shops</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <br>
                                <br>

                                <!-- Advance Search -->
                                <div class="advance-search">
                                    <div class="container-fluid">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12 col-md-12 align-content-center">

                                                <form action="{{ route('searchby') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-row">

                                                        <div class="form-group col-md-5">
                                                            <select name="area" class="w-100 input-lg mt-lg-1 mt-md-2">
                                                                <option disabled selected>Select
                                                                    Area
                                                                </option>

                                                                @foreach ($areas as $are)

                                                                    <option value="{{ $are->id }}">
                                                                        {{ $are->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>






                                                        <div class="form-group col-md-5">
                                                            <select name="cat" class="w-100   input-lg mt-lg-1 mt-md-2">
                                                                <option disabled selected>Select
                                                                    Category
                                                                </option>

                                                                @foreach ($cats as $cat1)

                                                                    <option value="{{ $cat1->id }}">
                                                                        {{ $cat1->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <div class="form-group col-md-2 align-self-center">
                                                            <button style="background-color: #4CAF50; height: 45px;"
                                                                type="submit" class="btn text-white"><i></i>
                                                                &nbsp;
                                                                &nbsp;&nbsp;&nbsp;Search&nbsp;&nbsp;
                                                        </div>


                                                    </div>


                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Advance Search -->
                                <div class="advance-search">
                                    <div class="container-fluid">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12 col-md-12 align-content-center">

                                                <div class="form-row">
                                                    {{-- <div class="form-group col-md-8">
                                                            <input type="text" class="form-control input-lg"
                                                                id="inputtext4" placeholder="What are you looking for">
                                                        </div>
                                                        <div class="form-group col-md-2 align-self-center">
                                                            <button type="submit" style="background-color: #4CAF50"
                                                                class="btn text-white">Search
                                                                Now</button>
                                                        </div> --}}

                                                    {{-- <div class="form-group col-md-10 align-self-center">
                                                            <button type="submit" style="background-color: #4CAF50"
                                                                class="btn text-white">Search
                                                                Now</button>
                                                        </div> --}}


                                                    <div class="form-group col-md-2 align-self-center">
                                                        <form action="{{ route('nearme') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <button type="submit"
                                                                style="background-color: #4CAF50; width: 790px; height: 50px;"
                                                                class="btn text-white"><i
                                                                    class="fa fa-location-arrow"></i>
                                                                &nbsp;&nbsp;Near
                                                                Me
                                                            </button>
                                                        </form>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <!-- end special-box -->

























                <!--===========================================
  =            Popular deals section            =
  ============================================-->

                <section class="popular-deals section bg-gray">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2>Trending Shops</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- offer 01 -->
                            <div class="col-lg-12">
                                <div class="trending-ads-slide">





                                    {{-- @foreach ($shops as $shop)
                                        <h1> {{ $shop->name }} </h1>
                                    @endforeach --}}





                                    @foreach ($shops as $shop)
                                        <div class="col-sm-12 col-lg-4">
                                            <!-- product card -->
                                            <div class="product-item bg-light">
                                                <div class="card">
                                                    <div class="thumb-content">
                                                        <!-- <div class="price">$200</div> -->
                                                        <a href="single.html">

                                                            {{-- <img src="{{ asset('/storage/files/' . $shop->photo) }}"
                                                                width="300px"> --}}
                                                            <img class="card-img-top img-fluid"
                                                                src="{{ asset('/storage/files/' . $shop->photo) }}"
                                                                alt="Card image cap"
                                                                style="height: 200px; width: 300px">
                                                        </a>
                                                    </div>
                                                    <div class="card-body" style="height: 400px">

                                                        <h4 class="card-title"><a href="/store">{{ $shop->name }}</a>


                                                        </h4>
                                                        <ul class="list-inline product-meta">
                                                            <li class="list-inline-item">
                                                                <a href="single.html"><i
                                                                        class="fa fa-folder-open-o"></i>{{ $shop->category->name }}</a>
                                                            </li>
                                                            <br>
                                                            <li class="list-inline-item">
                                                                <a href="#"><i class="fa fa-calendar"></i>23th
                                                                    May</a>
                                                            </li>
                                                        </ul>
                                                        <p class="card-text">{{ $shop->description }}</p>
                                                        <p class="card-text">{{ $shop->address }}</p>
                                                        <p class="card-text">{{ $shop->area->name }}</p>
                                                        <p class="card-text">T.P {{ $shop->telephone }}</p>
                                                        <div class="product-ratings">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item selected"><i
                                                                        class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item selected"><i
                                                                        class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item selected"><i
                                                                        class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item selected"><i
                                                                        class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--==========================================
  =            All Category Section            =
  ===========================================-->

                <section class=" section">
                    <!-- Container Start -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <!-- Section title -->
                                <div class="section-title">
                                    <h2>All Categories</h2>
                                </div>
                                <div class="row">
                                    <!-- Category list -->
                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">
                                            <div class="header">
                                                <i class="fa fa-laptop icon-bg-1"></i>
                                                <h4>Texttile</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">Laptops <span>93</span></a></li>
                                                <li><a href="category.html">Iphone <span>233</span></a></li>
                                                <li><a href="category.html">Microsoft <span>183</span></a></li>
                                                <li><a href="category.html">Monitors <span>343</span></a></li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->
                                    <!-- Category list -->
                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">
                                            <div class="header">
                                                <i class="fa fa-cart-plus icon-bg-2"></i>
                                                <h4>Hardware</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">Cafe <span>393</span></a></li>
                                                <li><a href="category.html">Restaurants <span>13</span></a></li>
                                                <li><a href="category.html">Glosary<span>43</span></a></li>
                                                <li><a href="category.html">Texttile<span>43</span></a></li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->
                                    <!-- Category list -->
                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">
                                            <div class="header">
                                                <i class="fa fa-home icon-bg-3"></i>
                                                <h4>Bookshop</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">Farms <span>93</span></a></li>
                                                <li><a href="category.html">Gym <span>23</span></a></li>
                                                <li><a href="category.html">Hospitals <span>83</span></a></li>
                                                <li><a href="category.html">Parolurs <span>33</span></a></li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->
                                    <!-- Category list -->
                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">
                                            <div class="header">
                                                <i class="fa fa-graduation-cap icon-bg-4"></i>
                                                <h4>Saloon</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">Tution Class <span>53</span></a></li>
                                                <li><a href="category.html">Text Books <span>212</span></a></li>
                                                <li><a href="category.html">Education Institutes <span>133</span></a>
                                                </li>
                                                <li><a href="category.html">Vocational Institutes<span>143</span></a>
                                                </li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->
                                    <!-- Category list -->
                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">
                                            <div class="header">
                                                <i class="fa fa-briefcase icon-bg-5"></i>
                                                <h4>Furniture</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">It Jobs <span>93</span></a></li>
                                                <li><a href="category.html">Cleaning & Washing <span>233</span></a></li>
                                                <li><a href="category.html">Management <span>183</span></a></li>
                                                <li><a href="category.html">Voluntary Works <span>343</span></a></li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->
                                    <!-- Category list -->
                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">
                                            <div class="header">
                                                <i class="fa fa-car icon-bg-6"></i>
                                                <h4>Cafe</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">Bus <span>193</span></a></li>
                                                <li><a href="category.html">Cars <span>23</span></a></li>
                                                <li><a href="category.html">Motobike <span>33</span></a></li>
                                                <li><a href="category.html">Rent a car <span>73</span></a></li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->
                                    <!-- Category list -->
                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">
                                            <div class="header">
                                                <i class="fa fa-paw icon-bg-7"></i>
                                                <h4>Computer</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">Cats <span>65</span></a></li>
                                                <li><a href="category.html">Dogs <span>23</span></a></li>
                                                <li><a href="category.html">Birds <span>113</span></a></li>
                                                <li><a href="category.html">Others <span>43</span></a></li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->
                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">
                                            <div class="header">
                                                <i class="fa fa-paw icon-bg-8"></i>
                                                <h4>Communication</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">Cats <span>65</span></a></li>
                                                <li><a href="category.html">Dogs <span>23</span></a></li>
                                                <li><a href="category.html">Birds <span>113</span></a></li>
                                                <li><a href="category.html">Others <span>43</span></a></li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->
                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">
                                            <div class="header">
                                                <i class="fa fa-paw icon-bg-1"></i>
                                                <h4>Pharmacy</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">Cats <span>65</span></a></li>
                                                <li><a href="category.html">Dogs <span>23</span></a></li>
                                                <li><a href="category.html">Birds <span>113</span></a></li>
                                                <li><a href="category.html">Others <span>43</span></a></li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->
                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">
                                            <div class="header">
                                                <i class="fa fa-paw icon-bg-2"></i>
                                                <h4>Medical Centers</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">Cats <span>65</span></a></li>
                                                <li><a href="category.html">Dogs <span>23</span></a></li>
                                                <li><a href="category.html">Birds <span>113</span></a></li>
                                                <li><a href="category.html">Others <span>43</span></a></li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->
                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">
                                            <div class="header">
                                                <i class="fa fa-paw icon-bg-3"></i>
                                                <h4>Garaj</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">Cats <span>65</span></a></li>
                                                <li><a href="category.html">Dogs <span>23</span></a></li>
                                                <li><a href="category.html">Birds <span>113</span></a></li>
                                                <li><a href="category.html">Others <span>43</span></a></li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->
                                    <!-- Category list -->
                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">

                                            <div class="header">
                                                <i class="fa fa-laptop icon-bg-4"></i>
                                                <h4>Printing</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">Cleaning <span>93</span></a></li>
                                                <li><a href="category.html">Car Washing <span>233</span></a></li>
                                                <li><a href="category.html">Clothing <span>183</span></a></li>
                                                <li><a href="category.html">Business <span>343</span></a></li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->

                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">

                                            <div class="header">
                                                <i class="fa fa-laptop icon-bg-5"></i>
                                                <h4>Tution</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">Cleaning <span>93</span></a></li>
                                                <li><a href="category.html">Car Washing <span>233</span></a></li>
                                                <li><a href="category.html">Clothing <span>183</span></a></li>
                                                <li><a href="category.html">Business <span>343</span></a></li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->


                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">

                                            <div class="header">
                                                <i class="fa fa-laptop icon-bg-6"></i>
                                                <h4>Restaurant</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">Cleaning <span>93</span></a></li>
                                                <li><a href="category.html">Car Washing <span>233</span></a></li>
                                                <li><a href="category.html">Clothing <span>183</span></a></li>
                                                <li><a href="category.html">Business <span>343</span></a></li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->


                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">

                                            <div class="header">
                                                <i class="fa fa-laptop icon-bg-7"></i>
                                                <h4>Tailor Shops</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">Cleaning <span>93</span></a></li>
                                                <li><a href="category.html">Car Washing <span>233</span></a></li>
                                                <li><a href="category.html">Clothing <span>183</span></a></li>
                                                <li><a href="category.html">Business <span>343</span></a></li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->


                                    <div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                                        <div class="category-block">

                                            <div class="header">
                                                <i class="fa fa-car icon-bg-8"></i>
                                                <h4>vehical Sale</h4>
                                            </div>
                                            <ul class="category-list">
                                                {{-- <li><a href="category.html">Cleaning <span>93</span></a></li>
                                                <li><a href="category.html">Car Washing <span>233</span></a></li>
                                                <li><a href="category.html">Clothing <span>183</span></a></li>
                                                <li><a href="category.html">Business <span>343</span></a></li> --}}
                                            </ul>
                                        </div>
                                    </div> <!-- /Category List -->



                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Container End -->
                </section>


                <!--====================================
  =            Call to Action            =
  =====================================-->

                <section class="call-to-action overly bg-3 section-sm">
                    <!-- Container Start -->
                    <div class="container-fluid">
                        <div class="row justify-content-md-center text-center">
                            <div class="col-md-8">
                                <div class="content-holder">
                                    <h2>Start today to get more market exposure and
                                        grow your business</h2>
                                    <ul class="list-inline mt-30">
                                        <li class="list-inline-item"><a class="btn btn-main"
                                                href="ad-listing.html">Register</a>
                                        </li>
                                        <li class="list-inline-item"><a class="btn btn-secondary"
                                                href="category.html">Browser
                                                Listing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Container End -->
                </section>

                <!--============================
=            Footer            =
=============================-->

                <footer class="footer section section-sm">
                    <!-- Container Start -->
                    <div class="container-fluid">
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
                                        <a href="#" class=" ml-3"><img src="images/apps/instergrame.png"
                                                class="img-fluid" alt=""></a>
                                        <a href="#" class=" ml-3"><img src="images/apps/Facebook.png" class="img-fluid"
                                                alt=""></a>
                                        <a href="#" class=" ml-3"><img src="images/apps/Messenger.png" class="img-fluid"
                                                alt=""></a>

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


            </div>
            <div class="col-sm-2 sidenav">
                <div>
                    <img src="images/home/add3.png" style="width: 190px;" alt="">
                </div>
                <div>
                    <img src="images/home/add1.png" style="width: 190px;" alt="">
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPTS -->
    <script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap-slider.js') }}"></script>

    <!-- tether js -->
    <script src="{{ asset('plugins/tether/js/tether.min.js') }}"></script>
    <script src="{{ asset('plugins/raty/jquery.raty-fa.js') }}"></script>
    <script src="{{ asset('plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('plugins/fancybox/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('plugins/smoothscroll/SmoothScroll.min.js') }}"></script>

    <!-- google map -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places">
    </script>
    <script src="{{ asset('plugins/google-map/gmap.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>




    <!-- ALL JS FILES -->
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- ALL PLUGINS -->
    <script src="{{ asset('js/custom.js') }}"></script>






    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#form_name");
            var email = $("#email");
            var subject = $("#form_name");
            var body = $("#discription");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'JSON',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        body: body.val()
                    },
                    success: function(response) {
                        if (response.status == "success")
                            alert(
                                'Email Sent Successfully!!!, your message has been submitted to us.Thank you'
                            );

                        else {
                            alert('Please Try Again!');
                            console.log(response);
                        }
                    }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }

    </script>


</body>

</html>
