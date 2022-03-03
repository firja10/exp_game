@extends('templates.template')

@section('title')
Invoice {{$orders->invoice_code}}
    
@endsection


@section('style')
<style>
  .invoice_bayar{
    width:50%;
    margin-bottom:10%;
    margin-top:10%;
  }
</style>
    
@endsection




@section('content')

 <!-- Main content -->
 <div class="content">
    <div class="container-fluid">
      <div class="row">
        {{-- <div class="col-lg-2">

        </div> --}}
       
        <!-- /.col-md-6 -->

        <center>
          
        </center>


        <?php
        
        if($orders->status_order == 0)
        {

        ?>

        <div class="col d-flex justify-content-center invoice_bayar">
          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <div>
                <h5 class="m-0">Invoice Number : #{{$orders->invoice_code}}</h5>
              </div>
              
              <div>
                <span>Status : <button class = "btn btn-warning">Pending</button></span>
              </div>

              {{-- <table>
                <tbody>
                  <tr>
                  <td><h5 class="m-0">Invoice Number : #{{$orders->invoice_code}}</h5></td>
                  <td style = "justify-content: right; text-align:right"><span> Status </span></td>
                </tr>
                </tbody>
              </table> --}}
              
              
              
            </div>
            <div class="card-body">
              <?php 
                
                $tanggal_mulai = $orders->created_at;
                $tanggal_akhir = $tanggal_mulai->addDays(1) ;
                
                
                
                ?>
              <h6 class="card-title">Tanggal Dibuat : {{$orders->created_at}}</h6>
              <h6 class="card-title" style = "color:red;">Tanggal Kadaluarsa : <?php echo $tanggal_akhir;  ?> </h6>

              <div class="alert alert-warning">
                <p class="card-text">Harap Segera Melakukan Pembayaran sebelum 1 x 24 jam setelah Pemesanan ! </p>
              </div>

              <center>


                <?php 

                    $nominal = (array) $nominals;
                    // var_dump($nominal['nominal_kategori']);
                    
                
                     

                  
                  ?>
              

              <table class="table" style = "text-align: center">
                <thead>
                  <tr>
                   
                    <th scope="col">Nama Layanan</th>
                    <th scope="col">ID User</th>
                    <th scope="col">Metode Pembayaran</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                
                    <td>{{$orders->nama_game}} ( <?php echo $nominal['nominal_kategori']; ?> )</td>
                    <td>IDR <?php echo $nominal['harga_nominal']; ?></td>
                    <td>{{$orders->metode_bayar}}</td>
                  </tr>
        
                </tbody>
              </table>

              <div class="row">
                <div class="col-md-6" style = "text-align: left;">
                  <strong>
                    <p class="card-text">Silakan Transfer ke nomor berikut : </p>
                    <h5> 1780002961999 a/n Fairuz Firjatullah </h5>
                    <p class="card-text">Harap Bayar sebelum 1 x 24 jam !</p>
                  </strong>
                  <p class = "card-text">Pembayaran sesuai dengan "Total Yang Harus Dibayar"</p>
                  


                </div>
                <br><br>
                <div class="col-md-6 mt-4" style = "text-align:left;">

                    

                  <table class="table" style = "text-align: left">
                    <thead>
                      {{-- <tr>
                       
                        <th scope="col">Nama Layanan</th>
                        <th scope="col">ID User</th>
                        <th scope="col">Metode Pembayaran</th>
                      </tr> --}}
                    </thead>
                    <tbody>
                      <tr>
                        <td>Harga</td>
                        <td>IDR {{$orders->id_user}}</td>
                      </tr>

                      <tr>
                        <td>Biaya Admin</td>
                        <td>IDR {{$orders->id_user}}</td>
                      </tr>

                      <tr>
                        <td> <strong>Total Yang Harus Dibayar</strong> </td>
                        <td> <strong>IDR {{$orders->id_user}}</strong> </td>
                      </tr>
            
                    </tbody>
                  </table>
                  

                </div>
              </div>


            </center>
              
             <br>

            <center>
              {{-- <a href="#" class="btn btn-primary">Lakukan Konfirmasi Pembayaran</a> --}}


              <button class = "btn btn-primary" type = "button" data-toggle = "modal" data-target = "#ModalKonfirmasi"> Lakukan Konfirmasi Pembayaran</button>

            </center>
              
            </div>
          </div>

        

        </div>





        <?php 
      }

        elseif($orders->status_order == 1) {

        ?>




            <div class="col-lg-12 mb-4">
              <div class="card">

                <div class="alert alert-danger">
                  <center>
                    <p class = "card-text">Tunggu Konfirmasi Pembayaran</p>
                  </center>
                </div>

              </div>
            </div>










      <?php
              }

        elseif($orders->status_order == 2)
        {

      ?>


      <div class="col-lg-12 mb-4">
        <div class="card">

          <div class="alert alert-success">
            <center>
              <p class = "card-text"> Anda Telah Melakukan Pembayaran. Terima Kasih</p>
            </center>
          </div>


        </div>
      </div>
      







          <?php 
          }

          ?>



        {{-- <div class="col-lg-2">

        </div> --}}


        <!-- /.col-md-6 -->





      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->











  <!-- Modal -->
<div class="modal fade" id="ModalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="ModalKonfirmasiLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>



      <form method = "post" action = "{{route('invoice.update', $orders->id)}}" enctype = "multipart/form-data"  >
        @csrf
        @method('PATCH')
      


        <div class="modal-body">
        
          <div class="form-group">
            <label for="uploadFile">Silakan Upload Bukti Pembayaran</label>
            <input type="file" class="form-control" id="uploadFile" name = "bukti_bayar">
            {{-- <input type="hidden" value = "1" name = "status_order"> --}}
          </div>
      
          {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit Bukti Bayar</button>
      </div>

    </form>




    </div>
  </div>
</div>
















    
@endsection