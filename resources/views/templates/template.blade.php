<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('img/logo_exp.png')}}" type="image/x-icon">
    {{-- <link rel="stylesheet" href="{{asset('assets/font_awesome/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font_awesome/font-awesome.min.css')}}"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <style>

        body{
            background-color:#1e181aff;
        }

        .pricing-header{
            margin-top:20px;
        }

        #logo_exp {
            width:10%;
        }
        .kontainer {
            margin-top:20%;
        }

        .hero {
          margin-left:10%;
          margin-right:10%;
          margin-bottom:15px;
          margin-top:15px;
        }

        .cari_invoice {
          margin-left:10%;
          margin-right:10%;
          margin-bottom:15px;
          margin-top:100px;
        }

        .daftar-layanan{
          margin-top:10%;
          margin-bottom:5%;
        }
        .judul{
          color:#fff;
        }

        .beli {
          padding-right:25%;
          padding-left:25%;
          text-align:center;
          border-radius:20px;

        }

        #gambar_footer{
          width:50%;
        }
        .hiperlink{
          color:#fff;
        }

        .page-footer{
       
          background-color:#1e181aff;
        }

        .footer-copyright{
          border-top:1px solid rgba(0, 0, 0, 0.2);
        }
    
        #rule{
          background-color:#1b96dcff;
          padding-top:3%;
          padding-bottom:3%;
        }

        #judul_rule{
          margin-bottom:3%;
        }

        .alurs{
          background-color:#1b96dcff;
          border:none;
          color:#fff;
        }

        .putih{
          color:#fff;
        }

        .icon_layanan {
          font-size:50px;
          margin-bottom:10px;
        }
        .icon_header {
          font-size:20px;
        }

        .radiobtn{
    /* position: relative; */
    /* display: block; */
    margin-left:10px;
    margin-right:10px;
  }


  /* .mobile-nav-toggle{
    cursor: pointer;
  display: none;
  }
   */


  /* #logo-mobile{
    display:none;
  }
 */

  /* #logo-desktop-dua{
     display:none;
   }
   */

   #gambar_kategori_desktop{
     display:none;

   }



  @media (max-width:768px){
    /* .mobile-nav-toggle{
      display:block;
    } */

    /* #logo-desktop{
      display:none;
    } */

   #logo-mobile{
     display:block
   }

   #logo-desktop-dua{
     display:block;
   }

   #logo-desktop{
     display:none;
   }

   #carouselExampleIndicators {
     margin-top:15%;
   }
/* 
   #desktop-game{
     display:none;
   } */

   /* #android-game{
     display:block;
   } */


   #td-1{
     display:none;
   }

   #gambar_kategori_desktop{
     display:block;
     width:100px;
   }

    

  }

    
    
    </style>

    @yield('style')

    <title>
      @yield('title')
    </title>
    
  </head>
  <body>


    <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center">

        <a href="{{url('/')}}" class="logo me-auto"><img src="{{asset('img/logo_exp_2.png')}}" alt=""></a>
        {{-- <a href="index.html" class="logo me-auto"><img src="{{asset('img/logo_exp.png')}}" alt="" class="img-fluid"></a>
        &nbsp;  &nbsp;
        <h1 class="logo mr-auto">  <a href="index.html" >Exp Games</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
     
  
        <nav id="navbar" class="navbar ml-auto">


          <ul>
            <li><a class="nav-link scrollto" href="{{url('/')}}"> <i class = "icon_header fa fa-home"></i>&nbsp;&nbsp;Home</a></li>
            <li><a class="nav-link scrollto" href="{{url('/cari_invoice')}}"><i class = "icon_header fa fa-wpforms" ></i>&nbsp;&nbsp;Pesanan Anda</a></li>
           
            <li><a class="nav-link scrollto" href="#contact"><i class = "icon_header fa fa-phone" ></i>&nbsp;&nbsp;Contact</a></li>
          
            @if (Auth::check())

              @if (Auth::user()->is_admin == 1)

              <li><a class="nav-link scrollto" href="{{url('/admin/home')}}"><i class = "icon_header fa fa-tachometer" ></i>&nbsp;&nbsp;Halaman Admin</a></li>

                  
              <li>
                <a class="getstarted scrollto" href="{{ route('logout') }}" style="align-content: center; text-align:center;"  id = "keluar"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class = "icon_header fa fa-sign-out"></i>&nbsp;Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>

              </li>


              @elseif(Auth::user()->is_member == 1)
              <li><a class="nav-link scrollto" href="{{url('/member/home')}}"><i class = "icon_header fa fa-tachometer" ></i>&nbsp;&nbsp;Halaman Member</a></li>

                  
              <li>
                <a class="getstarted scrollto" href="{{ route('logout') }}" style="align-content: center; text-align:center;"  id = "keluar"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class = "icon_header fa fa-sign-out"></i>&nbsp;Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>

              </li>

              @else

              <li>
                <a class="getstarted scrollto" href="{{ route('logout') }}" style="align-content: center; text-align:center;"  id = "keluar"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class = "icon_header fa fa-sign-out"></i>&nbsp;Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>

              </li>

                  
              @endif

                
            @else

  
            <li>
              <a class="getstarted scrollto" href="{{url('/login')}}" style="align-content: center; text-align:center;"><i class = "icon_header fa fa-sign-in"></i>&nbsp;Sign In Admin / Member</a>
            </li>

            {{-- <li>
              <a class="getstarted scrollto" href="{{url('/daftar_member_baru')}}" style="align-content: center; text-align:center;"><i class = "icon_header fa fa-sign-in"></i>&nbsp;Member Register</a>
            </li> --}}

                
            @endif


        

          </ul>
                      

          <i class="fa fa-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->






      <br>
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
       
      </div>

      @yield('content')




    
      <!-- Footer -->
<footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
  
          <!-- Content -->
  
          <h5 class="text-uppercase putih"> <img src="{{asset('img/logo_exp.png')}}" alt="" id = "logo_exp"> Exp Game</h5>
          <p class = "putih">Exp Game adalah salah satu fasilitas penyedia jasa Voucher Game yang menyediakan berbagai pelayanan terbaik untuk kebutuhan anda.</p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase putih">Menu</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!" class = "hiperlink">Home</a>
            </li>
            <li>
              <a href="#!" class = "hiperlink" >Products</a>
            </li>
            <li>
              <a href="#!" class = "hiperlink" >Login</a>
            </li>
  
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase putih">List of Games</h5>
  
          <ul class="list-unstyled putih">
            <li>
              <a href="#!" class = "hiperlink" >Free Fire</a>
            </li>
            <li>
              <a href="#!" class = "hiperlink" >Call of Duty Mobile</a>
            </li>
            <li>
              <a href="#!" class = "hiperlink" >Arena of Valor</a>
            </li>
            {{-- <li>
              <a href="#!" class = "hiperlink" >Link 4</a>
            </li> --}}
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 putih">© 2022 Copyright:
      <a href="https://mdbootstrap.com/" class = "putih">Exp Game</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
  
  
  
  
        
  
  
  
        </div>
    
    
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{asset('js/main.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <script>
          Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
          });
        </script>


<script>

  $(document).ready(function(){
    var nominal = null;
  
    $(':radio[name="nominal"]').click(function(){
      nominal = this.id;
      $('.tombol-bayar').html('IDR ' + nominal);
   
      $('.tombol-bayar').show();
  
  
    })
  
  
  })
  
  </script>
  
  
  
  
  
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
  </html>