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
                
                    <td>{{$orders->nama_game}} ({{$orders->nominal}})</td>
                    <td>{{$orders->id_user}}</td>
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
              <a href="#" class="btn btn-primary">Lakukan Konfirmasi Pembayaran</a>
            </center>
              
            </div>
          </div>

        

        </div>





        {{-- <div class="col-lg-2">

        </div> --}}


        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
    
@endsection