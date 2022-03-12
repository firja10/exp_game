@extends('admin.template')

@section('title')
    Kategori Game
@endsection



@section('style')
<style>
  #daftar_invoice{

    background-color:#fff;
    color:#343a40;

  }
</style>
    
@endsection





@section('content')
    


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                  {{-- DataTable with minimal features & hover style --}}
     
                </h3>


                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-form-kategori">
                    + Tambah Kategori Game
                  </button> --}}


            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No. </th>
                  <th>Nama Game</th>
                  <th>Invoice Code</th>
                  <th>Nominal</th>
                  <th>Harga</th>
                  <th>Tanggal Pemesanan</th>
                  <th>Tanggal Berakhir</th>
                  <th>Bukti Pembayaran</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                    <?php  $no = 1; ?>
                    @foreach ($orders as $order)
                    <tr>

                        <?php 
                            
                            $nominals = DB::table('nominals')->where('id', $order->nominal)->first();
                            $nomin = (array) $nominals;
                            
                            ?>
                  
                            <td><?php echo $no++; ?></td>
                            <td>{{$order->nama_game}}</td>
                            <td>{{$order->invoice_code}}</td>
                            <td> <?php
                             echo $nomin['nominal_kategori'];
                              ?> </td>
                            
                            <td>
                                IDR
                              <?php
                             echo $nomin['harga_nominal'];
                              ?>  
                            </td>
                            <td>{{$order->created_at}}</td>
                            <td>
                               <?php 
                               $tanggal_mulai = $order->created_at;
                               $tanggal_akhir = $tanggal_mulai->addDays(1);
                               echo $tanggal_akhir;
                               ?>
                            </td>
                            <td>
                                <?php
                                    if($order->status_order == 1)
                                    {

                                    
                                
                                    ?>
                                <button type = "button" class = "btn btn-dark" data-toggle = "modal" data-target="#modalOrder{{$order->id}}">Lihat Bukti</button>
                                <?php }
                                elseif($order->status_order == 0)
                                {
                                ?>
                                 <button class = "btn btn-warning" type = "button">Belum Upload Bukti</button>

                                <?php }
                                elseif($order->status_order == 2)
                                {

                                
                                ?>

                                <button class = "btn btn-success" type = "button">Sudah dikonfirmasi</button>

                            
                                <?php }
                                elseif($order->status_order == 3)
                                {

                                
                                ?>

                                <button class = "btn btn-danger" type = "button">Bukti Kurang Tepat</button>

                                <?php } ?>

                                



                            </td>
                            <td>

                                

                                <?php 
                                if($order->status_order == 1)
                                {
                                ?>

                                <form action="{{route('updatekonfirmasiinvoice', $order->id)}}" method = "POST" enctype="multipart/form-data" >
                                  @csrf
                                  @method('PATCH')

                                  <input type="hidden" name="nomor_whatsapp" value = "{{$order->nomor_whatsapp}}">

                                  <button class = "btn btn-primary" type = "submit">Konfirmasi</button>
                                </form>
                                <br> <br>

                                <form action="{{route('updateGagalinvoice', $order->id)}}" method = "POST" enctype="multipart/form-data" >
                                  @csrf
                                  @method('PATCH')

                                 

                                <button class = "btn btn-danger" type = "submit">Tolak</button>
                                
                                </form>

                                <?php }
                                elseif($order->status_order == 0 || $order->status_order == 2 || $order->status_order == 3)
                                {
                                ?>
                             <button class = "btn btn-primary" disabled>Konfirmasi</button>
                             <br> <br>
                             <button class = "btn btn-danger" disabled>Tolak</button>

                             <?php } ?>


                            </td>

                            

                    </tr>
                @endforeach  
          
            
                </tbody>
                <tfoot>
                <tr>
                    <th>No. </th>
                    <th>Nama Game</th>
                    <th>Invoice Code</th>
                    <th>Nominal</th>
                    <th>Harga</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Tanggal Berakhir</th>
                    <th>Bukti Pembayaran</th>
                    <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          



        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->




    @foreach ($orderdua as $orderduas)





    <div class="modal fade" id="modalOrder{{$orderduas->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"> Gambar Invoice #{{$orderduas->invoice_code}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{-- <p>One fine body&hellip;</p> --}}
            
            
            <img src="{{asset('storage/Order/'.$orderduas->bukti_bayar)}}" alt="" style = "width:400px">



            </div>
            <div class="modal-footer justify-content-between">
              {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->




        
    @endforeach

    







  </section>
  <!-- /.content -->

  
@endsection