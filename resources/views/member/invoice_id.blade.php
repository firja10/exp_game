@extends('templates.template')

@section('title')
Invoice {{$order_resellers->invoice_code}}
    
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
        
        if($order_resellers->status_order == 0)
        {

        ?>

        <div class="col d-flex justify-content-center invoice_bayar">
          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <div>
                <h5 class="m-0">Invoice Number : #{{$order_resellers->invoice_code}}</h5>
              </div>
              
              <div>
                <span>Status : <button class = "btn btn-warning">Pending</button></span>
              </div>

              {{-- <table>
                <tbody>
                  <tr>
                  <td><h5 class="m-0">Invoice Number : #{{$order_resellers->invoice_code}}</h5></td>
                  <td style = "justify-content: right; text-align:right"><span> Status </span></td>
                </tr>
                </tbody>
              </table> --}}
              
              
              
            </div>
            <div class="card-body">
              <?php 
                
                $tanggal_mulai = $order_resellers->created_at;
                $tanggal_akhir = $tanggal_mulai->addDays(1) ;
                
                
                
                ?>
              <h6 class="card-title">Tanggal Dibuat : {{$order_resellers->created_at}}</h6>
              <h6 class="card-title" style = "color:red;">Tanggal Kadaluarsa : <?php echo $tanggal_akhir;  ?> </h6>

              <div class="alert alert-warning">
                <p class="card-text">Harap Segera Melakukan Pembayaran sebelum 1 x 24 jam setelah Pemesanan ! </p>
              </div>

              <center>


                <?php 

                    // $nominal = (array) $nominals;
                    // var_dump($nominal['nominal_kategori']);
                    
                
                     

                  
                  ?>




                                             <?php
                      
                          $harga_order = $order_resellers->total;
                          $metode_bayar = $order_resellers->metode_bayar;
     
                          switch ($metode_bayar) {
                            case 'BCA':
                              # code...
                              $biaya_admin = 600;
                              // return $biaya_admin;
                              break;
                            
                            case 'BNI':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
     
                            case 'MANDIRI':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
     
                            case 'ALFAMART':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
                            
                           
                             case 'ALFAMIDI':
                              # code...
                              $biaya_admin = 600;
                             //  return $biaya_admin;
                              break;
     
                              
                            case 'OVO':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
     
     
                             
                            case 'GOPAY':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
     
                           
                              case 'DANA':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
     
     
                              
                            case 'SHOPEEPAY':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
     
     
                           
                              case 'QRIS':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
     
     
     
                            default:
                              # code...
                              $biaya_admin = "";
                             //  return $biaya_admin;
                              break;
                          }
     
                          $total = $order_resellers->total + $biaya_admin;


                           ?>


              

              <table class="table" style = "text-align: center">
                <thead>
                  <tr>
                   
                    <th scope="col">Nama Layanan</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Metode Pembayaran</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                
                    <td>{{$order_resellers->kategori}}</td>
                    <td>IDR <?php echo $total; ?></td>
                    <td>{{$order_resellers->metode_bayar}}</td>
                  </tr>
        
                </tbody>
              </table>

              <div class="row">
                <div class="col-md-6" style = "text-align: left;">



                  <strong>
                    
                     <?php 
                      
                      switch ($order_resellers->metode_bayar) {
                        case 'BCA':
                          # code..
                          $harga = '1380466712';
                          break;

                        case 'BRI':
                          # code..
                          $harga = '404201015030531';
                          break;

                        case 'BNI':
                          # code..
                          $harga = '0574340986';
                          break;


                        case 'MANDIRI':
                          # code..
                          $harga = '1770006605734';
                          break;

                        
                        case 'BTPN':
                          # code..
                          $harga = '90290073959';
                          break;

                     case 'OVO' || 'GOPAY' || 'DANA':
                          # code..
                          $harga = '082374747455';
                          break;   

                        case 'SHOPEEPAY':
                          # code..
                          $harga = '081912323051';
                          break;


                        
                        default:
                          # code...

                          $harga = "";
                          break;
                      }

                      
                      ?>
                    
                    <p class="card-text">Silakan Transfer ke nomor berikut : </p>
                    <h5> <?php echo $harga; ?> a/n Sofyan Al Fauzi</h5>
                    
                    
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

                      <?php 
                        
                        

                        ?>

                      <tr>
                        <td>Harga</td>
                        <td>IDR {{$order_resellers->total}}</td>
                      </tr>

                      <?php
                      
                     $harga_order = $order_resellers->total;
                     $metode_bayar = $order_resellers->metode_bayar;

                     switch ($metode_bayar) {
                       case 'BCA':
                         # code...
                         $biaya_admin = 600;
                         // return $biaya_admin;
                         break;
                       
                       case 'BNI':
                         # code...
                         $biaya_admin = 500;
                        //  return $biaya_admin;
                         break;

                       case 'MANDIRI':
                         # code...
                         $biaya_admin = 500;
                        //  return $biaya_admin;
                         break;

                       case 'ALFAMART':
                         # code...
                         $biaya_admin = 500;
                        //  return $biaya_admin;
                         break;
                       
                      
                        case 'ALFAMIDI':
                         # code...
                         $biaya_admin = 600;
                        //  return $biaya_admin;
                         break;

                         
                       case 'OVO':
                         # code...
                         $biaya_admin = 500;
                        //  return $biaya_admin;
                         break;


                        
                       case 'GOPAY':
                         # code...
                         $biaya_admin = 500;
                        //  return $biaya_admin;
                         break;

                      
                         case 'DANA':
                         # code...
                         $biaya_admin = 500;
                        //  return $biaya_admin;
                         break;


                         
                       case 'SHOPEEPAY':
                         # code...
                         $biaya_admin = 500;
                        //  return $biaya_admin;
                         break;


                      
                         case 'QRIS':
                         # code...
                         $biaya_admin = 500;
                        //  return $biaya_admin;
                         break;



                       default:
                         # code...
                         $biaya_admin = "";
                        //  return $biaya_admin;
                         break;
                     }

                     
                      ?>

                      <tr>
                        <td>Biaya Admin</td>
                        <td>IDR <?php 
                       echo $biaya_admin;

                       $total = $order_resellers->total + $biaya_admin;

                      

                         ?> </td>
                      </tr>

                      <tr>
                        <td> <strong>Total Yang Harus Dibayar</strong> </td>
                        <td> <strong>IDR <?php echo $total; ?></strong> </td>
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

        elseif($order_resellers->status_order == 1) {

        ?>







            <div class="col d-flex justify-content-center invoice_bayar">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div>
                    <h5 class="m-0">Invoice Number : #{{$order_resellers->invoice_code}}</h5>
                  </div>
                  
                  <div>
                    <span>Status : <button class = "btn btn-warning">Pending</button></span>
                  </div>
    
                  {{-- <table>
                    <tbody>
                      <tr>
                      <td><h5 class="m-0">Invoice Number : #{{$order_resellers->invoice_code}}</h5></td>
                      <td style = "justify-content: right; text-align:right"><span> Status </span></td>
                    </tr>
                    </tbody>
                  </table> --}}
                  
                  
                  
                </div>
                <div class="card-body">
                  <?php 
                    
                    $tanggal_mulai = $order_resellers->created_at;
                    $tanggal_akhir = $tanggal_mulai->addDays(1) ;
                    
                    
                    
                    ?>
                  <h6 class="card-title">Tanggal Dibuat : {{$order_resellers->created_at}}</h6>
                  <h6 class="card-title" style = "color:red;">Tanggal Kadaluarsa : <?php echo $tanggal_akhir;  ?> </h6>
    
                  <div class="alert alert-danger">
                    <p class="card-text">Harap tunggu Konfirmasi Pembayaran untuk Invoice ini </p>
                  </div>
    
                  <center>
    
    
                    <?php 
    
                        // $nominal = (array) $nominals;
                        // var_dump($nominal['nominal_kategori']);
                        
                    
                         
    
                      
                      ?>




                                             <?php
                      
                          $harga_order = $order_resellers->total;
                          $metode_bayar = $order_resellers->metode_bayar;
     
                          switch ($metode_bayar) {
                            case 'BCA':
                              # code...
                              $biaya_admin = 600;
                              // return $biaya_admin;
                              break;
                            
                            case 'BNI':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
     
                            case 'MANDIRI':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
     
                            case 'ALFAMART':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
                            
                           
                             case 'ALFAMIDI':
                              # code...
                              $biaya_admin = 600;
                             //  return $biaya_admin;
                              break;
     
                              
                            case 'OVO':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
     
     
                             
                            case 'GOPAY':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
     
                           
                              case 'DANA':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
     
     
                              
                            case 'SHOPEEPAY':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
     
     
                           
                              case 'QRIS':
                              # code...
                              $biaya_admin = 500;
                             //  return $biaya_admin;
                              break;
     
     
     
                            default:
                              # code...
                              $biaya_admin = "";
                             //  return $biaya_admin;
                              break;
                          }
     
                          $total = $order_resellers->total + $biaya_admin;


                           ?>

                  
    
                  <table class="table" style = "text-align: center">
                    <thead>
                      <tr>
                       
                        <th scope="col">Nama Layanan</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Metode Pembayaran</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                    
                        <td>{{$order_resellers->kategori}}</td>
                        <td>IDR <?php echo $total; ?></td>
                        <td>{{$order_resellers->metode_bayar}}</td>
                      </tr>
            
                    </tbody>
                  </table>
    
                  <div class="row">
                    <div class="col-md-6" style = "text-align: left;">



                      <?php 
                      
                      switch ($order_resellers->metode_bayar) {
                        case 'BCA':
                          # code..
                          $harga = '1380466712';
                          break;

                        case 'BRI':
                          # code..
                          $harga = '404201015030531';
                          break;

                        case 'BNI':
                          # code..
                          $harga = '0574340986';
                          break;


                        case 'MANDIRI':
                          # code..
                          $harga = '1770006605734';
                          break;

                        
                        case 'BTPN':
                          # code..
                          $harga = '90290073959';
                          break;

                     case 'OVO' || 'GOPAY' || 'DANA':
                          # code..
                          $harga = '082374747455';
                          break;   

                        case 'SHOPEEPAY':
                          # code..
                          $harga = '081912323051';
                          break;


                        
                        default:
                          # code...

                          $harga = "";
                          break;
                      }

                      
                      ?>



                      <strong>
                        <p class="card-text">Silakan Transfer ke nomor berikut : </p>
                        <h5> <?php echo $harga; ?> a/n Sofyan Al Fauzi </h5>
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
                            <td>IDR {{$order_resellers->total}}</td>
                          </tr>
    
                          <tr>
                            <td>Biaya Admin</td>
                            <td>IDR <?php echo $biaya_admin ?></td>
                          </tr>
    
                          <tr>
                            <td> <strong>Total Yang Harus Dibayar</strong> </td>
                            <td> <strong>IDR <?php echo $total ?></strong> </td>
                          </tr>
                
                        </tbody>
                      </table>
                      
    
                    </div>
                  </div>
    
    
                </center>
                  
                 <br>
    
                <center>
                  {{-- <a href="#" class="btn btn-primary">Lakukan Konfirmasi Pembayaran</a> --}}
    
    
                  <button disabled class = "btn btn-primary" type = "button" data-toggle = "modal" data-target = "#ModalKonfirmasi"> Lakukan Konfirmasi Pembayaran</button>
    
                </center>
                  
                </div>
              </div>
    
            
    
            </div>
    










      <?php
              }

        elseif($order_resellers->status_order == 2)
        {

      ?>








      <div class="col d-flex justify-content-center invoice_bayar">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <div>
              <h5 class="m-0">Invoice Number : #{{$order_resellers->invoice_code}}</h5>
            </div>
            
            <div>
              <span>Status : <button class = "btn btn-success">Done</button></span>
            </div>

            {{-- <table>
              <tbody>
                <tr>
                <td><h5 class="m-0">Invoice Number : #{{$order_resellers->invoice_code}}</h5></td>
                <td style = "justify-content: right; text-align:right"><span> Status </span></td>
              </tr>
              </tbody>
            </table> --}}
            
            
            
          </div>
          <div class="card-body">
            <?php 
              
              $tanggal_mulai = $order_resellers->created_at;
              $tanggal_akhir = $tanggal_mulai->addDays(1) ;
              
              
              
              ?>
            <h6 class="card-title">Tanggal Dibuat : {{$order_resellers->created_at}}</h6>
            <h6 class="card-title" style = "color:red;">Tanggal Kadaluarsa : <?php echo $tanggal_akhir;  ?> </h6>

            <div class="alert alert-success">
              <p class="card-text">Telah Dilakukan Pembayaran Untuk Invoice Inii </p>
            </div>

            <center>


              <?php 

                  // $nominal = (array) $nominals;
                  // var_dump($nominal['nominal_kategori']);
                  
              
                   

                
                ?>
            



            <?php
                      
            $harga_order = $order_resellers->total;
            $metode_bayar = $order_resellers->metode_bayar;

            switch ($metode_bayar) {
              case 'BCA':
                # code...
                $biaya_admin = 600;
                // return $biaya_admin;
                break;
              
              case 'BNI':
                # code...
                $biaya_admin = 500;
               //  return $biaya_admin;
                break;

              case 'MANDIRI':
                # code...
                $biaya_admin = 500;
               //  return $biaya_admin;
                break;

              case 'ALFAMART':
                # code...
                $biaya_admin = 500;
               //  return $biaya_admin;
                break;
              
             
               case 'ALFAMIDI':
                # code...
                $biaya_admin = 600;
               //  return $biaya_admin;
                break;

                
              case 'OVO':
                # code...
                $biaya_admin = 500;
               //  return $biaya_admin;
                break;


               
              case 'GOPAY':
                # code...
                $biaya_admin = 500;
               //  return $biaya_admin;
                break;

             
                case 'DANA':
                # code...
                $biaya_admin = 500;
               //  return $biaya_admin;
                break;


                
              case 'SHOPEEPAY':
                # code...
                $biaya_admin = 500;
               //  return $biaya_admin;
                break;


             
                case 'QRIS':
                # code...
                $biaya_admin = 500;
               //  return $biaya_admin;
                break;



              default:
                # code...
                $biaya_admin = "";
               //  return $biaya_admin;
                break;
            }

            $total = $order_resellers->total + $biaya_admin;


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
              
                  <td>{{$order_resellers->kategori}}</td>
                  <td>IDR <?php echo $total; ?></td>
                  <td>{{$order_resellers->metode_bayar}}</td>
                </tr>
      
              </tbody>
            </table>

            <div class="row">
              <div class="col-md-6" style = "text-align: left;">


                <?php 
                      
                switch ($order_resellers->metode_bayar) {
                  case 'BCA':
                    # code..
                    $harga = '1380466712';
                    break;

                  case 'BRI':
                    # code..
                    $harga = '404201015030531';
                    break;

                  case 'BNI':
                    # code..
                    $harga = '0574340986';
                    break;


                  case 'MANDIRI':
                    # code..
                    $harga = '1770006605734';
                    break;

                  
                  case 'BTPN':
                    # code..
                    $harga = '90290073959';
                    break;

               case 'OVO' || 'GOPAY' || 'DANA':
                    # code..
                    $harga = '082374747455';
                    break;   

                  case 'SHOPEEPAY':
                    # code..
                    $harga = '081912323051';
                    break;


                  
                  default:
                    # code...

                    $harga = "";
                    break;
                }

                
                ?>


                <strong>
                  <p class="card-text">Silakan Transfer ke nomor berikut : </p>
                  <h5> <?php echo $harga ; ?> a/n Sofyan Al Fauzi </h5>
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
                      <td>IDR {{$order_resellers->total}}</td>
                    </tr>

                    <tr>
                      <td>Biaya Admin</td>
                      <td>IDR <?php echo $biaya_admin; ?> </td>
                    </tr>

                    <tr>
                      <td> <strong>Total Yang Harus Dibayar</strong> </td>
                      <td> <strong>IDR <?php echo $total; ?></strong> </td>
                    </tr>
          
                  </tbody>
                </table>
                

              </div>
            </div>


          </center>
            
           <br>

          <center>
            {{-- <a href="#" class="btn btn-primary">Lakukan Konfirmasi Pembayaran</a> --}}


            <button disabled class = "btn btn-primary" type = "button" data-toggle = "modal" data-target = "#ModalKonfirmasi"> Lakukan Konfirmasi Pembayaran</button>

          </center>
            
          </div>
        </div>

      

      </div>












        <?php
        }

        elseif($order_resellers->status_order == 3)
        {

        ?>






<div class="col d-flex justify-content-center invoice_bayar">




  <div class="card">

    <div class="alert alert-danger">
      <p class="card-text">Invoice Ini Gagal Upload Bukti, Silakan Ulangi Konfirmasi / Pembayaran </p>
    </div>


    <div class="card-header d-flex justify-content-between">
      <div>
        <h5 class="m-0">Invoice Number : #{{$order_resellers->invoice_code}}</h5>
      </div>
      
      <div>
        <span>Status : <button class = "btn btn-danger">Failed</button></span>
      </div>

      {{-- <table>
        <tbody>
          <tr>
          <td><h5 class="m-0">Invoice Number : #{{$order_resellers->invoice_code}}</h5></td>
          <td style = "justify-content: right; text-align:right"><span> Status </span></td>
        </tr>
        </tbody>
      </table> --}}
      
      
      
    </div>
    <div class="card-body">
      <?php 
        
        $tanggal_mulai = $order_resellers->created_at;
        $tanggal_akhir = $tanggal_mulai->addDays(1) ;
        
        
        
        ?>
      <h6 class="card-title">Tanggal Dibuat : {{$order_resellers->created_at}}</h6>
      <h6 class="card-title" style = "color:red;">Tanggal Kadaluarsa : <?php echo $tanggal_akhir;  ?> </h6>

      <div class="alert alert-warning">
        <p class="card-text">Harap Segera Melakukan Pembayaran sebelum 1 x 24 jam setelah Pemesanan ! </p>
      </div>

      <center>


        <?php 

            // $nominal = (array) $nominals;
            // var_dump($nominal['nominal_kategori']);
            
        
             

          
          ?>






              <?php
                      
              $harga_order = $order_resellers->total;
              $metode_bayar = $order_resellers->metode_bayar;

              switch ($metode_bayar) {
                case 'BCA':
                  # code...
                  $biaya_admin = 600;
                  // return $biaya_admin;
                  break;
                
                case 'BNI':
                  # code...
                  $biaya_admin = 500;
                 //  return $biaya_admin;
                  break;

                case 'MANDIRI':
                  # code...
                  $biaya_admin = 500;
                 //  return $biaya_admin;
                  break;

                case 'ALFAMART':
                  # code...
                  $biaya_admin = 500;
                 //  return $biaya_admin;
                  break;
                
               
                 case 'ALFAMIDI':
                  # code...
                  $biaya_admin = 600;
                 //  return $biaya_admin;
                  break;

                  
                case 'OVO':
                  # code...
                  $biaya_admin = 500;
                 //  return $biaya_admin;
                  break;


                 
                case 'GOPAY':
                  # code...
                  $biaya_admin = 500;
                 //  return $biaya_admin;
                  break;

               
                  case 'DANA':
                  # code...
                  $biaya_admin = 500;
                 //  return $biaya_admin;
                  break;


                  
                case 'SHOPEEPAY':
                  # code...
                  $biaya_admin = 500;
                 //  return $biaya_admin;
                  break;


               
                  case 'QRIS':
                  # code...
                  $biaya_admin = 500;
                 //  return $biaya_admin;
                  break;



                default:
                  # code...
                  $biaya_admin = "";
                 //  return $biaya_admin;
                  break;
              }

              $total = $order_resellers->total + $biaya_admin;


               ?>


      

      <table class="table" style = "text-align: center">
        <thead>
          <tr>
           
            <th scope="col">Nama Layanan</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Metode Pembayaran</th>
          </tr>
        </thead>
        <tbody>
          <tr>
        
            <td>{{$order_resellers->kategori}}</td>
            <td>IDR <?php echo $total; ?></td>
            <td>{{$order_resellers->metode_bayar}}</td>
          </tr>

        </tbody>
      </table>

      <div class="row">
        <div class="col-md-6" style = "text-align: left;">
          <strong>
            <p class="card-text">Silakan Transfer ke nomor berikut : </p>

            

            <?php

            $metode_pembayaran = $order_resellers->metode_bayar;
            
              switch ($metode_pembayaran) {
                case 'MANDIRI':
                  # code...
                  echo "<h5> 1770006605734 a/n Sofyan Al Fauzi </h5>";
                  break;
                
                case 'BNI': 
                  echo "<h5> 0574340986 a/n Sofyan Al Fauzi </h5>";
                  break;

                case 'BRI':
                  echo "<h5> 404201015030531 a/n Sofyan Al Fauzi </h5>";
                  break;
                
                case 'BCA':
                  echo "<h5> 1380466712 a/n Sofyan Al Fauzi </h5>";
                  break;
                
                case 'OVO':
                  echo "<h5> 082374747455 a/n Sofyan Al Fauzi </h5>";
                  break;

                case 'GOPAY':
                  echo "<h5> 082374747455 a/n Sofyan Al Fauzi </h5>";
                  break;

                case 'DANA':
                  echo "<h5> 082374747455 a/n Sofyan Al Fauzi </h5>";
                  break;
                
                
                default:
                  # code...
                  echo "Belum Ada";
                  break;
              }
            
            ?>




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
                <td>IDR {{$order_resellers->total}}</td>
              </tr>

              <tr>
                <td>Biaya Admin</td>
                <td>IDR <?php echo $biaya_admin; ?> </td>
              </tr>

              <tr>
                <td> <strong>Total Yang Harus Dibayar</strong> </td>
                <td> <strong>IDR <?php echo $total; ?> </strong> </td>
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



      <form method = "post" action = "{{route('invoice.update', $order_resellers->id)}}" enctype = "multipart/form-data"  >
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