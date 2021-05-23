@extends('layouts.master')
@section('content')

    <div class="container">





        <div class="row">
            <div class="col">
                <marquee width="100%" direction="left" height="100px">
                    <h1 style="color: #b20000; font-family: redse"> <b>WELCOME TO YOUR ONLINE SHOP</b></h1>
                </marquee>

            </div>
        </div>


        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-plus"></i></span>

                    <div class="info-box-content">
                        <a href="{{ route('shops.index') }}" style="color: black"><span class="info-box-number">NEW
                                SHOP</span></a>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-plus"></i></span>

                    <div class="info-box-content">
                        <a href="#" style="color: black"><span class="info-box-number">NEW
                                CATEGORY</span></a>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-plus"></i></span>

                    <div class="info-box-content">
                        <a href="{{ route('products.index') }}" style="color: black"><span class="info-box-number">NEW
                                PRODUCT</span></a>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-plus"></i></span>

                    <div class="info-box-content">
                        <a href="{{ route('promotions.index') }}" style="color: black"><span class="info-box-number">NEW
                                PROMO</span></a>

                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            {{-- <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>30</h3>

                                <p>Registerd Shops</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{ route('shops.index') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="small-box  bg-warning">
                            <div class="inner">
                                <h3>20<sup style="font-size: 20px"></sup></h3>

                                <p>Categories</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>150</h3>

                                <p>Products </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{ route('products.index') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="small-box  bg-warning">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px"></sup></h3>

                                <p>Users</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>


        <div class="row">
            <div class="jumbotron" style="margin-left: 50px; background-color: gold">
                <div class="col">
                    <h2 style="text-align:center"><b>Welcome! Complete the to-do list to start your selling journey!</b>
                    </h2>

                    <h3 style="text-align:center">Three Simple Steps to Market Your Shop on hamadema.lk</h3>

                    <ol style="padding-left: 20px">
                        <li>
                            <h4>Sign Up</h4>
                        </li>

                        <li>
                            <h4>Set Up Your Shop</h4>
                        </li>

                        <li>
                            <h4>Maintain Your Shops With Updates</h4>
                        </li>
                    </ol>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                1 of 3
            </div>
            <div class="col">
                2 of 3
            </div>
            <div class="col">
                3 of 3
            </div>
        </div>
    </div>

@endsection
