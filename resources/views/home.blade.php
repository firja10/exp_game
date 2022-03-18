@extends('templates/template')

@section('style')
<style>
    #desktop-game{
     display:flex;
   }

   #android-game{
     display:none;
   }


   @media (max-width:768px){ 
    #android-game{
     display:flex;
   }

   #desktop-game{
     display:none;
   }

   }

</style>
@endsection

@section('title')
Selamat Datang di Exp Game
@endsection

@section('content')

      <section class = "hero" data-aos="zoom-in">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{asset('poster/poster_1.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('poster/poster_2.png')}}" alt="Second slide">
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>


      </section>


      <section class = "daftar-layanan">

        <div class="container">
          <center>
            <h1 class = "judul">Daftar Layanan Kami</h1>
        </center>









<center>

 
<div class="row mt-4 justify-content-center" style = "text-align: center" id = "android-game">

@foreach ($kategoris as $kateg)

<center>

  <div class="col-sm-2 mt-3 justify-content-center items-center d-flex align-items-stretch">         
    <div class="card" style="width: 10rem;">
      <center>
        <img class="card-img-top" src="{{asset('assets/img/mobile_games/'. $kateg->photo_kategori)}}" alt="Card image cap" style = "width:50%; margin-top:10%;">
      </center>
     
      <div class="card-body">
        <center>
          <h5 class="card-title">{{$kateg->nama_kategori}}</h5>
          <p class="card-text"></p>
          <a href="{{route('Order', $kateg->id)}}" class="btn btn-primary beli">Buy</a>
        </center>

      </div>
    </div>
    
  </div>
</center>


                
 @endforeach

          </div>

        </center> 














        <center>

 
          <div class="row mt-4 justify-content-center" style = "text-align: center" id = "desktop-game">
          
          @foreach ($kategoris as $kateg)
          
          
            <div class="col-sm-2 mt-3 justify-content-center items-center d-flex align-items-stretch">         
              <div class="card" style="width: 10rem;">
                <center>
                  <img class="card-img-top" src="{{asset('assets/img/mobile_games/'. $kateg->photo_kategori)}}" alt="Card image cap" style = "width:50%; margin-top:10%;">
                </center>
               
                <div class="card-body">
                  <center>
                    <h5 class="card-title">{{$kateg->nama_kategori}}</h5>
                    <p class="card-text"></p>
                    <a href="{{route('Order', $kateg->id)}}" class="btn btn-primary beli">Buy</a>
                  </center>
          
                </div>
              </div>
            </div>


               
           @endforeach
          
                    </div>
          
                  </center> 

























        </div>
       

      </section>



      <section id = "rule">
        <div class="container">
          <center>
            <h1 class = "judul" id = "judul_rule"> Alur Pelayanan Kami</h1>
          </center>
         
          <center>

          
          <div class="row justify-content-center">




            <div class="col-md-3">
              <div class="card alurs" style="width: 18rem;">
                {{-- <img class="card-img-top" src="{{asset('assets/img/mobile_games/ML.jpg')}}" alt="Card image cap"> --}}
               
                <div class="card-body">
                  <center>
                    <i class="fa fa-mouse-pointer icon_layanan" aria-hidden="true"></i>
                    <h5 class="card-title">Pilih Game Yang Diminati</h5>
                    <p class="card-text">Pilihlah Game yang akan dipilih karena tersedia banyak game di sini seperti PUBG, Mobile Legend, dan lain - lain</p>
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                  </center>
     
                </div>
              </div>
            </div>





            <div class="col-md-3">
              <div class="card alurs" style="width: 18rem;">
                {{-- <img class="card-img-top" src="{{asset('assets/img/mobile_games/ML.jpg')}}" alt="Card image cap"> --}}
               
                <div class="card-body">
                  <center>
                    <i class="fa fa-wpforms icon_layanan" aria-hidden="true"></i>
                    <h5 class="card-title">Lengkapi Form Order</h5>
                    <p class="card-text">Silakan untuk melengkapi Form Order setelah memilih Game yang telah dipilih. Isi form meliputi Pilih Nominal, Metode Pembayaran, Nomor Whatsapp, dan Kode Diskon ( Jika Ada )</p>
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                  </center>
     
                </div>
              </div>
            </div>




            <div class="col-md-3">
              <div class="card alurs" style="width: 18rem;">
                {{-- <img class="card-img-top" src="{{asset('assets/img/mobile_games/ML.jpg')}}" alt="Card image cap"> --}}
               
                <div class="card-body">
                  <center>
                    <i class="fa fa-money icon_layanan" aria-hidden="true"></i>
                    <h5 class="card-title">Lakukan Pembayaran</h5>
                    <p class="card-text">Lakukan Pembayaran apabila telah melengkapi Form Di Atas</p>
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                  </center>
     
                </div>
              </div>
            </div>






            <div class="col-md-3">
              <div class="card alurs" style="width: 18rem;">
                {{-- <img class="card-img-top" src="{{asset('assets/img/mobile_games/ML.jpg')}}" alt="Card image cap"> --}}
               
                <div class="card-body">
                  <center>
                    <i class="fa fa-gamepad icon_layanan" aria-hidden="true"></i>
                    <h5 class="card-title">Pilih Game Yang Akan Dipilih</h5>
                    <p class="card-text">Pilihlah Game yang akan dipilih karena tersedia banyak game di sini seperti PUBG, Mobile Legend, dan lain - lain</p>
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                  </center>
     
                </div>
              </div>
            </div>









            






          </div>


        </center>

        </div>



      </section>


@endsection



  