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

    

    <style>
        #header{
            background-color:#a4518cff;
            color:#fff;
            /* box-shadow:2px 2px 2px 2px black; */
            border-bottom:none;
            width:100%;
            position:fixed;
            z-index:100;
            top:0;
            padding-bottom:20px;
            
     
        }

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


  .mobile-nav-toggle{
    cursor: pointer;
  display: none;
  }
  


  #logo-mobile{
    display:none;
  }


  #logo-desktop-dua{
     display:none;
   }
  

 



  @media (max-width:768px){
    .mobile-nav-toggle{
      display:block;
    }

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
     margin-top:35%;
   }
/* 
   #desktop-game{
     display:none;
   } */

   /* #android-game{
     display:block;
   } */

    

  }

    
    
    </style>

    @yield('style')

    <title>
      @yield('title')
    </title>
    
  </head>
  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-5 shadow-sm" id = "header">
      {{-- <div class="container d-flex align-items-center" id = "header"> --}}


      {{-- <center> --}}
        {{-- <h5 class="my-0 mr-md-auto font-weight-normal" id = "logo-desktop"> --}}
          <h5 class="mr-md-auto font-weight-normal" id = "logo-desktop">
          <img src="{{asset('img/logo_exp.png')}}" alt="" id = "logo_exp">
          Exp Game</h5>
      {{-- </center> --}}


            <center>
              <h5 class="me-auto font-weight-normal" id = "logo-desktop-dua">
                <img src="{{asset('img/logo_exp.png')}}" alt="" id = "logo_exp">
                Exp Game</h5>
            </center>
      







            <center>


        <nav class="my-2 my-md-0 mr-md-3" id = "navbar">
          <a class="p-2 text-white my-2" href="{{url('/')}}"> <i class = "icon_header fa fa-home"></i> Home</a>
          <a class="p-2 text-white my-2" href="{{url('/cari_invoice')}}"> <i class = "icon_header fa fa-wpforms" ></i> Pesanan Anda</a>
          {{-- <a class="p-2 text-white" href="#">Support</a>
          <a class="p-2 text-white" href="#">Pricing</a> --}}


          @if(Auth::check())




          @if(Auth::user()->is_admin == 1)

          <a class="p-2 text-white my-2" href="{{url('/admin/home')}}"> <i class = "icon_header fa fa-home"></i> Halaman Admin</a>
              
          @endif




          <a class = "btn btn-primary mr-2 ml-2 my-2" href="{{ route('logout') }}" id = "keluar"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
              
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          


          @else

          <a class="btn btn-primary mr-2 ml-2 my-2" href="{{url('/login')}}"> <i class = "icon_header fa fa-sign-in"></i> Sign In Admin</a>
          {{-- <a class="btn btn-outline-light mr-2 ml-2" href="{{url('/register')}}">Sign up</a> --}}
          @endif

          
       
        </nav>

      </center>



      {{-- <nav id = "navbar">

        <ul style = "list-style: none;">
          <li  style = "display:inline;float:left;"><h5 class=" font-weight-normal" id = "logo-mobile">
            <img src="{{asset('img/logo_exp.png')}}" alt="" id = "logo_exp">
            Exp Game</h5></li>
          <li  style = "display:inline;float:right;">
          <button class="btn mobile-nav-toggle item-center">
            <i class = "fa fa-list "></i>
          </button></li>
        </ul>

      </nav> --}}







    






 


      </div>
  
      <br>
      <br>
      <br>
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        {{-- <h1 class="display-4">Pricing</h1>
        <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p> --}}
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