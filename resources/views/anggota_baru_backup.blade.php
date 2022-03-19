<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Member | Exp Games</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->

  <link rel="shortcut icon" href="{{asset('img/logo_exp.png')}}" type="image/x-icon">

  <link rel="stylesheet" href="{{asset('admin_lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin_lte/dist/css/adminlte.min.css')}}">

  <style>
      .login-page{
        background-color:#1e181aff;
      }
      .judul_logo {
          color:#fff;
      }

      .card-body{
          border-radius:100px;
          background-color: rgba(255,255,255,0.4)
      }

  </style>

</head>
<body class="hold-transition login-page">
<div class="login-box mt-2" >
  <div class="login-logo">
      <center>
          <img src="{{asset('img/logo_exp.png')}}" alt="" style = "width:25%;">
      </center>
    {{-- <a href="{{asset('admin_lte/index2.html')}}" class = "judul_logo"><b>Exp</b> Games</a> --}}

    <h2 class = "judul_logo"> <b>Exp</b> Games </h2>

  </div>


  <div class="container">
    <div class="row">



      <div class="col-lg-12">



  <!-- /.daftar_anggota_baru-logo -->
  <div class="card login_card">
    <div class="card-body login-card-body">


      @if($message = Session::get('anggota_baru'))
      <br>
      <div class="alert alert-success"> {{ $message }}</div>
      @endif

      <p class="login-box-msg">Silakan Lakukan Pendaftaran Anggota Baru</p>

      <form method="POST" action="{{ route('daftaranggotabaru') }}">
        @csrf
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name = "name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name = "email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name = "password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name = "password_confirmation">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

                
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Nomor Whatsapp" name = "nomor_whatsapp">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        


        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Nomor Whatsapp" name = "nomor_whatsapp">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        
        



        <div class="row">
        
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Daftar Anggota Baru</button>
          </div>
          <!-- /.col -->
        </div>
      </form>



      {{-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> --}}



      <!-- /.social-auth-links -->
      <br>
      <center>
        <p class="mb-1">
            {{-- <a href="forgot-password.html">Saya Lupa Password</a> --}}
          </p>
    
      </center>

    </div>
    <!-- /.daftar_anggota_baru-card-body -->
  </div>



        
      </div>
    </div>
  </div>





</div>
<!-- /.daftar_anggota_baru-box -->

<!-- jQuery -->
<script src="{{asset('admin_lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin_lte/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
