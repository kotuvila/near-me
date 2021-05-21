<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>

  
 @include('layouts.partials.head')

 <style>
  .input-group>.input-group-prepend {
    flex: 0 0 25%;
}
  .input-group .input-group-text {
    width: 120%;
}
</style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
      <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  @include('layouts.partials.topnav')


  @include('layouts.partials.sidebar')



   {{-- @if (Auth::user()->dashboard=='admin')
   @include('layouts.partials._sidebar_admin')
   @endif

   @if (Auth::user()->dashboard=='manager')
   @include('layouts.partials._sidebar_manager')
   @endif --}}


  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
    {{-- @include('flash::message') --}}
    <div style="padding-top: 20px; padding-left: 10px" class="container">
    @yield('content')
    </div>

  </div>
  <!-- /.content-wrapper -->


  @include('layouts.partials.footer');


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('layouts.partials.footer-script')

</body>
</html>
