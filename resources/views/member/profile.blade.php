@extends('member.template')

@section('title')
    Profile {{Auth::user()->name}}
@endsection

@section('style')
<style>
  #memberprofile{

    background-color:#fff;
    color:#343a40;

  }
</style>
    
@endsection



@section('content')
    


  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
       
        <?php 
          
          $orders_count = DB::table('orders')->count();
          $kategoris_count = DB::table('kategoris')->count();
          $nominals_count = DB::table('nominals')->count();
          ?>




        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card">

            <div class="card-body">
            

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <th>No. </th>
                  <th>Nama Game</th>
                  <th>Invoice Code</th>
                  <th>Nominal</th>
                  <th>Harga</th>
                  <th>Tanggal Pemesanan</th>
                  <th>Tanggal Berakhir</th>
                  <th>Bukti Pembayaran</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                <?php 
                  $no = 1;
                  ?>

                  @foreach ($orders as $order)
                  <?php
                    $nominals = DB::table('nominals')->where('id', $order->nominal)->first();
                            $nomin = (array) $nominals;
                  
                  ?>

                  <tr>
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
                          <a href = "{{url('/daftar_invoice/'.$order->id)}}" class = "btn btn-warning" type = "button">Belum Upload Bukti</a>

                         <?php }
                         elseif($order->status_order == 2)
                         {

                         
                         ?>

                         <a href = "{{url('/daftar_invoice/'.$order->id)}}" class = "btn btn-success" type = "button">Sudah dikonfirmasi</a>

                     
                         <?php }
                         elseif($order->status_order == 3)
                         {

                         
                         ?>

                         <button class = "btn btn-danger" type = "button">Bukti Kurang Tepat</button>

                         <?php } ?>

                         



                     </td>
                     <td>

                      <?php 
                        if($order->status_order == 0 || $order->status_order == 3)
                        {
                        ?>

                      <form action="{{route('deleteinvoiceMember', $order->id)}}" method = "POST">
                        @csrf 
                        @method('DELETE')

                        <button class = "btn btn-danger">Batalkan Order</button>
                      </form>
                      

                      <?php
                        } elseif($order->status_order == 2)
                        {
                      ?>

                            <form action="{{route('deleteinvoiceMember', $order->id)}}" method = "POST">
                              @csrf 
                              @method('DELETE')

                              <button class = "btn btn-danger">Hapus Order</button>
                            </form>

                      <?php } ?>

                     </td>

                  </tr>
           
                      
                  @endforeach


                </tbody>

                <tfoot>
                  <th>No. </th>
                  <th>Nama Game</th>
                  <th>Invoice Code</th>
                  <th>Nominal</th>
                  <th>Harga</th>
                  <th>Tanggal Pemesanan</th>
                  <th>Tanggal Berakhir</th>
                  <th>Bukti Pembayaran</th>
                  <th>Aksi</th>
                  </tbody>
                <tfoot>
                  <tr>
                </tfoot>
              </table>
















            </div>



          </div>
        </div>



















        
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection