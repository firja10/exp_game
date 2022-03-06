@extends('templates.template')

@section('title')
Pencarian Invoice
@endsection


@section('content')

<section class="hero">

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <center>

                 
                    <form action="/searchinvoice" method = "GET">
                        @csrf
                        <input type="text" class = "form-control" placeholder = "Silakan Cari Invoice Anda" name = "searchinvoice">
                      <br>
                      <center>
                        <button class = "btn btn-primary" > Cari Invoice</button>
                      </center>    
                    </form>

                </center>


                <br>
                <br>
                <br>





                <div class="row">
                    <div class="col-lg-12" style = "background-color:#fff">







                <table id = "orderTable" class = "table">

                    @foreach ($orders as $order)


                    <?php 
                
                
                    $kategoris = DB::table('kategoris')->where('nama_kategori',$order->nama_game)->get();
                  $nominals = DB::table('nominals')->where('id', $order->nominal)->get();
    
                  foreach ($kategoris as $kateg) {
                      # code...
                      $gambar_kateg = $kateg->photo_kategori;
                  }
    
                    
                    ?>
    





                        
                            <tr>
                                <td><img src="{{asset('assets/img/mobile_games/'. $gambar_kateg)}}" alt="" style = "width:80%; padding-top:20px;padding-bottom:20px;"></td>
                                <td>
                                    <center>
                                        <h5 class="m-0 mt-2">{{$order->nama_game}}</h5>
                                    
                                        <span>{{$order->invoice_code}}</span>
                                        <br>
                                        <span>{{$order->metode_bayar}}</span> 
                                        <br>

                                      

                                       
                                    </center>
  
                                </td>
                                <td style = "text-align:center;">
                                    {{-- <center>

                                        <a href="" class="btn btn-primary">Lihat Detail Transaksi</a>
                                   
                                    </center> --}}


                                    <?php

                                    $statuses = $order->status_order;
                                    
                                    switch ($statuses) {
                                        case 0:
                                            # code...
                                            echo " <button class = 'btn btn-warning' type = 'button'>Belum Dilakukan Pembayaran</button> ";
                                            break;

                                        case 1:
                                            # code...
                                            echo " <button class = 'btn btn-primary' type = 'button'>Telah Upload Bukti Bayar</button> ";
                                            break;

                                        case 2:
                                            # code...
                                            echo " <button class = 'btn btn-success' type = 'button'>Telah Upload Bukti Bayar</button> ";
                                            break;

                                        case 3:
                                            # code...
                                            echo " <button class = 'btn btn-danger' type = 'button'>Transaksi Ditolak</button> ";
                                            break;
                                        
                                        default:
                                            # code...
                                            break;
                                    }

                                    
                                    ?>

                                    <br> <br>
                                    <a href="{{route('Invoice', $order->id)}}" class="btn btn-primary">Lihat Detail Transaksi</a>
                                    

                                </td>
                            </tr>

                    @endforeach


                </table>















                </div>
            </div>




        </div>
    </div>






        </div>
    </div>



</section>


@endsection