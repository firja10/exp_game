@extends('templates.template')



@section('title')
Pencarian Invoice
@endsection




@section('content')

<section class="cari_invoice">

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <center>

                 
                    <form action="/searchinvoice" method = "GET">
                        @csrf
                        <input type="text" class = "form-control" placeholder = "Silakan Masukkan Kode Invoice Anda" name = "searchinvoice">
                      <br>
                      <center>
                        <button class = "btn btn-primary" > Cari Invoice</button>
                      </center>    
                    </form>

                </center>


                <br>
                <br>
                <br>





                <div class="row" style = "display: none;"">
                    <div class="col-lg-12" style = "background-color:azure">







                <table id = "orderTable">

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
                        <td><img src="{{asset('assets/img/mobile_games/'. $gambar_kateg)}}" alt="" style = "width:50%; padding-top:20px;padding-bottom:20px;"></td>
                        <td>
                            <h5 class="m-0 mt-2">{{$order->nama_game}}</h5>
                            <br>
                            <span>{{$order->invoice_code}}</span>
                        </td>
                        <td>
                            <center>
                                {{$order->metode_bayar}}
                            </center>
                            
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