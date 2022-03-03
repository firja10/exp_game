@extends('templates.template')

@section('title')
Daftar Invoice 
@endsection

@section('content')



 <!-- Main content -->
 <div class="content">
    <div class="container-fluid">

      <center>
        <h1 class = "judul mb-4">Daftar Invoice</h1>
      </center>
      

      <div class="row mb-4">

        @foreach ($orders as $item)

          <!-- /.col-md-6 -->
          <div class="col-lg-12 mb-4">
            <center>
            <div class="card">

              <?php 
                  
              $kategoris = DB::table('kategoris')->where('nama_kategori',$item->nama_game)->get();
              $nominals = DB::table('nominals')->where('id', $item->nominal)->get();
              echo "<br>";

               foreach($nominals as $nomin)
               {

                $harga_nomin = $nomin->harga_nominal;

                $hasil_rupiah = "Rp. ". number_format($harga_nomin,2,',','.');;

                $nama_nomin = $nomin->nominal_kategori;

               }

             
               foreach($kategoris as $kateg)
               {
                 $gambar_kateg = $kateg->photo_kategori;
               }

               ?>



              <div class="card-header">

                <img class="card-img-top" src="{{asset('assets/img/mobile_games/'. $kateg->photo_kategori)}}" alt="Card image cap"  style = "width:15%;">
                  <br>

                <h5 class="m-0 mt-2">{{$item->nama_game}}
                
                  
                
                
                </h5>
              </div>
              <div class="card-body">

      

                <h6 class="card-title">
                  <?php 
                    echo $item->metode_bayar;          
                    ?>

                  


                </h6>
  
                <p class="card-text"><?php echo $nama_nomin ?></p>
                <p class="card-text"><?php echo $hasil_rupiah ?></p>
                <a href="#" class="btn btn-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
  
        </center>
          <br>
            
        @endforeach

      


  






        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->









    
@endsection