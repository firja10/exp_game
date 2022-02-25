@extends('templates/template')

@section('content')

      <section class = "hero" data-aos="zoom-in">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{asset('assets/img/hero-carousel/hero-1.webp')}}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('assets/img/hero-carousel/hero-2.webp')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('assets/img/hero-carousel/hero-1.webp')}}" alt="Third slide">
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

          <div class="row mt-4">

    
            <div class="col-md-2 mr-3 ml-3 mt-4">            
              <div class="card" style="width: 12rem;">
                <center>
                  <img class="card-img-top" src="{{asset('assets/img/mobile_games/ML.jpg')}}" alt="Card image cap">
                </center>
               
                <div class="card-body">
                  <center>
                    <h5 class="card-title">Mobile Legend</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary beli">Buy</a>
                  </center>
     
                </div>
              </div>
            </div>

            <div class="col-md-2 mr-3 ml-3 mt-4">            
              <div class="card" style="width: 12rem;">
                <center>
                  <img class="card-img-top" src="{{asset('assets/img/mobile_games/ML.jpg')}}" alt="Card image cap">
                </center>
               
                <div class="card-body">
                  <center>
                    <h5 class="card-title">Mobile Legend</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary beli">Buy</a>
                  </center>
     
                </div>
              </div>
            </div>



            <div class="col-md-2 mr-3 ml-3 mt-4">            
              <div class="card" style="width: 12rem;">
                <img class="card-img-top" src="{{asset('assets/img/mobile_games/ML.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <center>
                    <h5 class="card-title">Mobile Legend</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Buy</a>
                  </center>
     
                </div>
              </div>
            </div>


            <div class="col-md-2 mr-3 ml-3 mt-4">            
              <div class="card" style="width: 12rem;">
                <img class="card-img-top" src="{{asset('assets/img/mobile_games/ML.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <center>
                    <h5 class="card-title">Mobile Legend</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Buy</a>
                  </center>
     
                </div>
              </div>
            </div>

            <div class="col-md-2 mr-3 ml-3 mt-4">            
              <div class="card" style="width: 12rem;">
                <img class="card-img-top" src="{{asset('assets/img/mobile_games/ML.jpg')}}" alt="Card image cap">

                <div class="card-body">
                  <center>
                    <h5 class="card-title">Mobile Legend</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </center>
     
                </div>
              </div>
            </div>



            <div class="col-md-2 mr-3 ml-3 mt-4">            
              <div class="card" style="width: 12rem;">
                <img class="card-img-top" src="{{asset('assets/img/mobile_games/ML.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <center>
                    <h5 class="card-title">Mobile Legend</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </center>
     
                </div>
              </div>
            </div>


            <div class="col-md-2 mr-3 ml-3 mt-4">            
              <div class="card" style="width: 12rem;">
                <img class="card-img-top" src="{{asset('assets/img/mobile_games/ML.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <center>
                    <h5 class="card-title">Mobile Legend</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </center>
     
                </div>
              </div>
            </div>



            







          </div>
        </div>
       

      </section>



      <section id = "rule">
        <div class="container">
          <center>
            <h1 class = "judul" id = "judul_rule"> Alur Pelayanan Kami</h1>
          </center>
         
          
          <div class="row">




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
        </div>



      </section>


@endsection



   