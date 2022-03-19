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





      .register{
    /* background: -webkit-linear-gradient(left, #3931af, #00c6ff); */
    background: #a4518cff;
    margin-top: 3%;
    padding: 3%;
    border-radius:25px;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    /* border-radius: 1.5rem; */
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    /* border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%; */
      /* border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%; */
    border-radius:20px;
    
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding-top: 10%;
    padding-left:10%;
    padding-right:10%;
    padding-bottom:5%;
    margin-top: 10%;
}
.btnRegister{
    /* float: center; */
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    /* background: #0062cc; */
    background: #a4518cff;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}




  </style>

</head>
<body class="hold-transition login-page">
{{-- <div class="login-box mt-2" > --}}

    <form action="{{route('daftaranggotabaru')}}" method = "post">
        @csrf

  <div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="{{asset('img/logo_exp.png')}}" alt=""/>
            <h3> <strong>Selamat Datang</strong> </h3>
            <p>Silakan Lakukan Pendaftaran Sebagai Member Baru di form yang sudah tersedia !</p>
            {{-- <input type="submit" name="" value="Login"/><br/> --}}
        </div>


  


        <div class="col-md-9 register-right">
            {{-- <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                </li>
            </ul> --}}


            @if($message = Session::get('anggota_baru'))
            <br>
            <br>
            <div class="alert alert-success"> {{ $message }}</div>
            @endif

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading"> <strong>Pendaftaran Member Baru</strong> </h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name *"  name = "name" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" name = "email" required />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *"  name = "password"/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="Confirm Password *" name = "password_confirmation"/>
                            </div>
                            {{-- <div class="form-group">
                                <div class="maxl">
                                    <label class="radio inline"> 
                                        <input type="radio" name="gender" value="male" checked>
                                        <span> Male </span> 
                                    </label>
                                    <label class="radio inline"> 
                                        <input type="radio" name="gender" value="female">
                                        <span>Female </span> 
                                    </label>
                                </div>
                            </div> --}}

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address *" name = "alamat_rumah" />
                                {{-- <textarea name="alamat_rumah" class = "form-control" id="" cols="10" rows="5" placeholder="Alamat Rumah"></textarea> --}}
                            </div>
                            <div class="form-group">
                                <input type="text" minlength="11" maxlength="13" name="nomor_whatsapp" class="form-control" placeholder="Your Whatsapp *" value="" />
                            </div>
                            <div class="form-group">
                                <select class="form-control" name = "komitmen">
                                    <option class="hidden" value = ""  selected disabled>Apakah Anda Komitmen Untuk Menjadi Member ? </option>
                                    <option value = "Iya">Iya</option>
                                    <option value = "Tidak">Tidak</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Alasan Komitmen menjadi member *" value="" name = "salin_komitmen" />
                            </div>
                            <center>
                              <input type="submit" class="btnRegister"  value="Register"/>
                            </center>
                            
                        </div>


                        
                    </div>

                    {{-- <center>
                      <input type="submit" class="btnRegister"  value="Register"/>
                    </center> --}}
                </div>
             
            </div>
        </div>
    </div>

</div>

</form>


{{-- </div> --}}
<!-- /.daftar_anggota_baru-box -->

<!-- jQuery -->
<script src="{{asset('admin_lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin_lte/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
