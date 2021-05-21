@extends('layouts.master')


@section('content')

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<!-- Brand/logo -->
<a class="navbar-brand" href="#">
  <img src="Logo.jpeg" alt="logo" style="width:70px;">
</a>
<!--Toggler-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Maps</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Project Approval</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Volunteer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul> 
      </nav>

<br>

<div class="d-flex p-3">
  <div class="p-2 border bg-light border-secondary rounded-lg flex-shrink-3">
    <h5>Facts About the National Environment Platform</h5><br>
    <ul>
      <li>Is a volunteer initiative under the guidance and initiative of the Ministry of Environment</li>
      <li>Promotes environmental protection and good governance by active citizen participation with public administration</li>
      <li>Aims to stop devastations at the inceptions clearly identifying  protected areas </li>
      <li>Aims to increase data clarity and remove information silos in environment public administration and policy making. </li>
    </ul>
  </div>
  <div class="p-2 border bg-light border-secondary rounded-lg ml-2">
    <h5>Ministry of Environment</h5>
    <p>The Minister of Environment and the government of Sri Lanka promotes a vision of environmental protection and the NEP is a core platform in achieving it. <br>We help automate:</p>
    <ul>
      <li>Land Parcel Mapping.</li>
      <li>Protected Area Mapping.</li>
      <li>Tree removal process automation.</li>
      <li>Environmental restoration projects.</li>
      <li>Development project process.</li>
      <li>Species mapping.</li>
    </ul>
    <div class="d-flex p-2 justify-content-end">
      <a href="#">Read More</a>
    </div>
  </div>
</div>

<br>

<div class="container-fluid p-20">  
  <div class="row">
    <div class="col-7 bg-light border bg-light border-secondary rounded-lg ml-3 mr-2">
      <h5 class="p-2">Blogs</h5><br>
      <div class="card-columns">
        <div class="card" style="background-color:#99A3A4">
          <div class="card-body text-center">
            <p class="card-text">Some text <br> inside the <br> first card</p>
          </div>
        </div>
        <div class="card" style="background-color:#99A3A4">
          <div class="card-body text-center">
            <p class="card-text">Some text <br> inside the <br> second card</p>
          </div>
        </div>
        <div class="card" style="background-color:#99A3A4">
          <div class="card-body text-center">
            <p class="card-text">Some text <br> inside the <br> third card</p>
          </div>
        </div>
        <div class="card" style="background-color:#99A3A4">
          <div class="card-body text-center">
            <p class="card-text">Some text <br> inside the <br> fourth card</p>
          </div>
        </div>
        <div class="card" style="background-color:#99A3A4">
          <div class="card-body text-center">
            <p class="card-text">Some text <br> inside the <br> fifth card</p>
          </div>
        </div>
        <div class="card" style="background-color:#99A3A4">
          <div class="card-body text-center">
            <p class="card-text">Some text <br> inside the <br> sixth card</p>
          </div>
        </div>
    </div>
    </div>


    <div class="col border bg-light border-secondary rounded-lg bg-light mr-3">
      <h5 class="p-2">Events</h5><br>
      <div id="accordion">

        <div class="card">
          <div class="card-header">
            <a class="card-link" data-toggle="collapse" href="#collapseOne">
              Event #1
            </a>
          </div>
          <div id="collapseOne" class="collapse show" data-parent="#accordion">
            <div class="card-body">
              event event event event event event event event event event event event event event event event event event
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
            Event #2
            </a>
          </div>
          <div id="collapseTwo" class="collapse" data-parent="#accordion">
            <div class="card-body">
            event event event event event event event event event event event event event event event event event event
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
            Event #3
            </a>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordion">
            <div class="card-body">
            event event event event event event event event event event event event event event event event event event
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<br><br>


<div class="container-fluid p-20">  
  <div class="row mb-3">
    <div class="col bg-light border bg-light border-secondary rounded-lg mr-2">
      <h5 class="p-2">Gazette Updates</h5><br>
        <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action">Gazette Update1</a>
          <a href="#" class="list-group-item list-group-item-action">Gazette Update2</a>
          <a href="#" class="list-group-item list-group-item-action">Gazette Update3</a>
        </div>
    </div>


    <div class="col border bg-light border-secondary rounded-lg bg-light mr-2">
      <h5 class="p-2">Projects</h5><br>
        <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action">Project1</a>
          <a href="#" class="list-group-item list-group-item-action">Project2</a>
          <a href="#" class="list-group-item list-group-item-action">Project3</a>
        </div>
    </div>

    <div class="col border bg-light border-secondary rounded-lg bg-light">
      <h5 class="p-2">Resolved Crimes</h5><br>
      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            crime1 crime1 crime1 crime1 crime1 crime1 crime1 <br>
            crime crime crime crime crime crime crime <br>
            crime crime crime crime crime crime crime <br>
            crime crime crime crime crime crime crime <br>
          </div>
          <div class="carousel-item">
            crime2 crime2 crime2 crime2 crime2 crime2 crime2 <br>
            crime crime crime crime crime crime crime <br>
            crime crime crime crime crime crime crime <br>
            crime crime crime crime crime crime crime <br>
          </div>
          <div class="carousel-item">
            crime3 crime3 crime3 crime3 crime3 crime3 crime3 <br>
            crime crime crime crime crime crime crime <br>
            crime crime crime crime crime crime crime <br>
            crime crime crime crime crime crime crime <br>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

      </div>

    </div>
  </div>
</div>

@endsection