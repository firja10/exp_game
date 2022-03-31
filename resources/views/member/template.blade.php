<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin_lte/dist/css/adminlte.min.css')}}">
  <link rel="shortcut icon" href="{{asset('img/logo_exp.png')}}" type="image/x-icon">




  <link rel="stylesheet" href="{{asset('admin_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">


  <style>
    /* #sidebar{
      background-color:#a4518cff;
    } */

    /* .nav-link{
      color:#fff;
    } */
  </style>



  @yield('style')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>






      
     
      
 

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    {{-- <aside class="main-sidebar elevation-4" id = "sidebar"> --}}
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('img/logo_exp.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      
      <span class="brand-text font-weight-light"> <strong>Exp Games</strong> </span>

      {{-- <img src="{{asset('img/logo_exp_2.png')}}" alt="EXP GAME LOGO" class="brand-image" style="opacity: .8"> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin_lte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            {{Auth::user()->name}}
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         

          <li class="nav-item">
            <a href="{{url('member/home')}}" class="nav-link" id = "memberhome">
              <i class="nav-icon fas fa-th"></i>
                <p>
                  Member Home
                    {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
              </a>
          </li>    


          
          <li class="nav-item">
            <a href="{{url('member/profile')}}" class="nav-link" id = "memberprofile">
              <i class="nav-icon fas fa-user-circle"></i>
                <p>
                  Member Profile
                    {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
              </a>
          </li>    



          <li class="nav-item">
            {{-- <a href="{{url('/member/join_reseller')}}" class="nav-link" id = "join_reseller"> --}}
              <a href="{{url('/member/upgrade_role')}}" class="nav-link" id = "upgrade_role">
              <i class="fa fa-list nav-icon"></i>
              {{-- <i class="nav-icon fas fa-th"></i> --}}
                <p>
                 Upgrade Role
                    {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
              </a>
          </li>   
          
          
          

          <li class="nav-item">
            <a href="{{url('/home')}}" class="nav-link" id = "Home">
              <i class="fa fa-home nav-icon"></i>
              {{-- <i class="nav-icon fas fa-th"></i> --}}
                <p>
                 Home
                    {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
              </a>
          </li>   













         
          {{-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li> --}}



          
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> @yield('title') </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    @yield('content')
  

  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer text-white" style = "background: #a4518cff;">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline text-white">
      Pelayanan Terbaik
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php echo date('Y') ?>  <a href="https://adminlte.io">Exp Games</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('admin_lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->


<script src="{{asset('admin_lte/dist/js/adminlte.min.js')}}"></script>






<script>

$(document).ready(function() {
  var category = null;
  $(':radio[name="kategori"]').click(function() {
    category = this.value;

    if(category == 'SILVER')
    {

      $('.silver').show();
      $('.gold').hide();

    }
    else if (category == 'GOLD')
    {

      $('.silver').hide();
      $('.gold').show();

    }

    else {
      $('.silver').hide();
      $('.gold').hide();
    }

  })
})


</script>


<script>

$(document).ready(function(){
  var nominal = null;

  $(':radio[name="nominal"]').click(function(){
    nominal = this.value;
 
    $('.tombol_bayar').show();


  });


  $(window).load(function(){

var $radios = $('input[type=radio]');

$radios.filter('[class="perak"]').attr('checked',true);

});






})

</script>











<script src="{{asset('admin_lte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>



<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>




<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });
</script>



<script>
  
</script>














</body>
</html>
