 @extends('templates.template')

 @section('style')

 <style>
  
  .button-nomin{
    margin-left:10px;
    margin-right:10px;
  }






  .gambar_bayar{
    width:75px;
  }


  
  #container {
  max-width: 900px;
  margin: 0 auto;
}


.card_order {
    width: 100%;
}

.card-input-element {
    display: none;
}

.card-input {
    margin: 10px;
    padding: 0px;
}

.card-input:hover {
    cursor: pointer;
}

.card-input-element:checked + .card-input {
     box-shadow: 0 0 1px 1px #1b96dcff;
     background-color:#1b96dcff;
     color:#fff;
}





 </style>
     
 @endsection

 @section('title')
Order {{$kategori->nama_kategori}}     
 @endsection


 @section('content')
     

 
 <!-- Main content -->
 <div class="content">
    <div class="container-fluid">

      <form class="form" method = "post" enctype="multipart/form-data" action = "{{route('tambahInvoice')}}" >
        @csrf



      @if (Auth::check() && (Auth::user()->is_admin == 1 || Auth::user()->is_member == 1))
          
      <input type="hidden" value ="{{Auth::user()->id}}" name= "user_id">
          
      @endif
        


      <div class="row">
        <div class="col-lg-6">
          <div class="card card-primary card-outline">
            <div class="card-body">
              <h2 class="card-title">
                  <center>
                    <img class="card-img-top" src="{{asset('assets/img/mobile_games/'. $kategori->photo_kategori)}}" alt="Card image cap"  style = "width:35%;">
                  </center>
                  <br>
                  {{$kategori->nama_kategori}}
               
              </h2>

              <p class="card-text">
                Top Up Diamonds {{$kategori->nama_kategori}} : 
                <ol type = 1>
                  <li> Masukkan ID dan Server </li>
                  <li> Pilih Nominal Diamond </li>
                  <li> Pilih Metode Pembayaran</li>
                  <li> Isi Nomor WhatsApp Dengan Benar</li>
                  <li> Klik Order Now & Lakukan Pembayaran</li>
                  <li> Diamond/Starlight/Twilight Otomatis Masuk Ke Akunmu</li>

                  <br>




                </ol>
              </p>
              {{-- <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a> --}}
            </div>
          </div><!-- /.card -->
          <br>
        </div>
        <!-- /.col-md-6 -->
    
        <div class="col-lg-6">
          <div class="card">
            {{-- <div class="card-header">
              <h5 class="m-0">Featured</h5>
            </div> --}}
            <div class="card-body">
              <h5 class="card-title">Lengkapi Data Sebagai Berikut : </h5>
                <br>

                <?php 
                

                
                ?>

 
                 
                    <div class="form-row">

                    
                    <div class="form-group col-lg-6">
                      <label for="id_user">User ID</label>
                      <input type="number"  class="form-control" id="id_user" name = "id_user" placeholder = "ID User Anda" required>
                      {{-- <input type="hidden" name="user_id" value = "{{Auth::user()->id}}"> --}}
                    </div>

                    <div class="form-group  col-lg-6">
                      <label for="id_server">Server ID</label>
                      <input type="number" class="form-control" id="id_server" name = "id_server" placeholder = "ID Server Anda" required>
                    </div>

                    <input type="hidden" name="nama_game" value = "{{$kategori->nama_kategori}}">
                    <input type="hidden" name="status_order" value ="0">
                
                  </div>
                    {{-- <br> --}}
                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">Panduan</button>
                  {{-- </form> --}}

              {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
          </div>

          <br>
       

          <?php 
          
          // $terakhir = DB::table('orders')->latest('id')->first();
          // $array_akhir = (array) $terakhir;
          // $id_previous = (int) $array_akhir['id'] ;
          // echo $id_previous;
        
       
   
          ?>





          <div class="card">
            {{-- <div class="card-header">
              <h5 class="m-0">Featured</h5>
            </div> --}}
            <div class="card-body">
              <h5 class="card-title">Pilih Nominal : </h5>
                <br>

                {{-- <div class="row">
                    <div class="col-md-4"> --}}

                        
                      
                            {{-- <a href="#" class="btn btn-primary"> <i class = "fa fa-diamond" arria-hidden="true" ></i> &nbsp; {{$nomin->nominal_kategori}} </a> --}}
                        
                        
                            <div class="container" id = "container">
  
                                                    
                              <div class="row">
                                



                                @foreach ($data as $nomin)
                                

                                <?php   ?>

                                  <div class="col-md-4 col-lg-4 col-sm-4">
                                    
                                    <label class = "card_order">
                                      <input type="radio" name="nominal" class="card-input-element" value = "{{$nomin->id}}" id = "{{$nomin->harga_nominal}}" />
                                      {{-- <input type="hidden" name="nominal" value = "{{$nomin->id}}" /> --}}
                                        <div class="card card-default card-input">
                                          <div class="card-header"> <i class = "fa fa-diamond" arria-hidden="true" ></i>&nbsp;{{$nomin->nominal_kategori}}</div>
                                          {{-- <div class="card-body">
                                            Product specific content
                                          </div> --}}
                                        </div>
                            
                                    </label>
                                    
                                  </div>
                             
                                  @endforeach



                              </div>
                              
                            </div>


                        
                        
                    

                 




                     














                        
                    {{-- </div>
                </div> --}}

           

              {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
          </div>
          <br>








    





          <div class="card">
            {{-- <div class="card-header">
              <h5 class="m-0">Featured</h5>
            </div> --}}
            <div class="card-body">
              <h5 class="card-title">Pilih Metode Pembayaran : </h5>
                <br>

                <div class="row">
                    <div class="col-md-12">
                        
      
                      <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                              <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseBank" aria-expanded="true" aria-controls="collapseBank">
                               <strong>
                                Transfer Bank <i class = "fa fa-university" aria-hidden="true"></i>
                               </strong>
                              </button>
                            </h2>
                          </div>
                      
                          <div id="collapseBank" class="collapse" aria-labelledby="headingBank" data-parent="#accordionExample">
                            <div class="card-body">
                    

                              
                            <div class="container" id = "container">
  
                                                    
                              <div class="row">
                                
                                  <div class="col-md-12 col-lg-12 col-sm-12">
                                    
                                    <label class = "card_order">
                                      <input type="radio" name="metode_bayar" class="card-input-element" value = "BCA" />
                            
                                        <div class="card card-default card-input">
                                          <div class="card-header d-flex justify-content-between">
                                            <div>
                                              <img src="{{asset('daftar_bank/bca.svg')}}" alt="" class = "gambar_bayar"> 
                                            </div>


                                            <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                              <button class = "btn btn-primary tombol-bayar" style = "display:none;">
                                               
                                              </button>
                                            </div>

                                             
                                            </div>
                                          <div class="card-body">
                                           <h5> Bank Central Asia ( BCA )</h5>
                                          
                                          </div>
                                        </div>
                            
                                    </label>
                                    
                                  </div>




                                  <div class="col-md-12 col-lg-12 col-sm-12">
                                    
                                    <label class = "card_order">
                                      <input type="radio" name="metode_bayar" class="card-input-element" value = "BNI" />
                            
                                        <div class="card card-default card-input">
                                          <div class="card-header d-flex justify-content-between">
                                             <div>
                                              <img src="{{asset('daftar_bank/bni.png')}}" alt="" class = "gambar_bayar">    
                                            </div> 
                                          
                                            <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                              <button class = "btn btn-primary tombol-bayar" style = "display:none;">
                                               
                                              </button>
                                            </div>


                                          </div>
                                          <div class="card-body">
                                            <h5> Bank Negara Indonesia ( BNI )</h5>
                                          </div>
                                        </div>
                            
                                    </label>
                                    
                                  </div>






                                  <div class="col-md-12 col-lg-12 col-sm-12">
                                    
                                    <label class = "card_order">
                                      <input type="radio" name="metode_bayar" class="card-input-element" value = "MANDIRI" />
                            
                                        <div class="card card-default card-input">
                                          <div class="card-header d-flex justify-content-between"> 
                                            <div><img src="{{asset('daftar_bank/MANDIRI.png')}}" alt="" class = "gambar_bayar"></div>

                                            <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                              <button class = "btn btn-primary tombol-bayar" style = "display:none;">
                                               
                                              </button>
                                            </div>

                                          </div>
                                          <div class="card-body">
                                            <h5> Bank Mandiri</h5>
                                          </div>
                                        </div>
                            
                                    </label>
                                    
                                  </div>






                                  <div class="col-md-12 col-lg-12 col-sm-12">
                                    
                                    <label class = "card_order">
                                      <input type="radio" name="metode_bayar" class="card-input-element" value = "BTPN" />
                            
                                        <div class="card card-default card-input">
                                          <div class="card-header d-flex justify-content-between"> 
                                            <div><img src="{{asset('daftar_bank/BTPN.png')}}" alt="" class = "gambar_bayar"></div>

                                            <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                              <button class = "btn btn-primary tombol-bayar" style = "display:none;">
                                               
                                              </button>
                                            </div>

                                              </div>
                                          <div class="card-body">
                                            <h5> Bank BTPN</h5>
                                          </div>
                                        </div>
                            
                                    </label>
                                    
                                  </div>










                                  
                              </div>
                              
                            </div>





                            </div>
                          </div>
                        </div>

                        <br>
                      

                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                <strong>
                                 Member & Reseller <i class="fa fa-address-card" aria-hidden="true"></i>
                                </strong>
                               </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">


                            @if (Auth::check() && (Auth::user()->is_member == 1||Auth::user()->is_admin == 1))
                            
                            <div class="card-body">
                              Saat ini belum tersedia
                            </div>

                            @else
                                
                            <div class="card-body">
                              Silakan Login / Sign In Terlebih Dahulu Untuk menjadi Reseller
                            </div>
                            
                            @endif

                          

                          
                          </div>
                        </div>

                        <br>



                        {{-- <div class="card">
                          <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                              <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                <strong>
                                 Virtual Account <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                </strong>
                               </button>
                            </h2>
                          </div>
                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                              And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                            </div>
                          </div>
                        </div>

                        <br> --}}


                        <div class="card">
                          <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                              <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                <strong>
                                 Convenience Store <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </strong>
                               </button>
                            </h2>
                          </div>
                          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                             





                              <div class="col-md-12 col-lg-12 col-sm-12">
                                    
                                <label class = "card_order">
                                  <input type="radio" name="metode_bayar" class="card-input-element" value = "ALFAMART" />
                        
                                    <div class="card card-default card-input">
                                      <div class="card-header d-flex justify-content-between"> <div><img src="{{asset('daftar_bank/ALFAMART.png')}}" alt="" class = "gambar_bayar"></div> 
                                    
                                      <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                        <button class = "btn btn-primary tombol-bayar" style = "display:none;">
                                         
                                        </button>
                                      </div>
                                    
                                    </div>
                                      <div class="card-body">
                                        <h5>Alfamart</h5>
                                      </div>
                                    </div>
                        
                                </label>
                                
                              </div>





                              <div class="col-md-12 col-lg-12 col-sm-12">
                                    
                                <label class = "card_order">
                                  <input type="radio" name="metode_bayar" class="card-input-element" value = "INDOMARET" />
                        
                                    <div class="card card-default card-input">
                                      <div class="card-header d-flex justify-content-between"> <div> <img src="{{asset('daftar_bank/INDOMARET.png')}}" alt="" class = "gambar_bayar"></div> 
                                    
                                      <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                        <button class = "btn btn-primary tombol-bayar" style = "display:none;">
                                         
                                        </button>
                                      </div>
                                    
                                    </div>
                                      <div class="card-body">
                                        <h5>Indomaret</h5>
                                      </div>
                                    </div>
                        
                                </label>
                                
                              </div>




                              <div class="col-md-12 col-lg-12 col-sm-12">
                                    
                                <label class = "card_order">
                                  <input type="radio" name="metode_bayar" class="card-input-element" value = "ALFAMIDI" />
                        
                                    <div class="card card-default card-input">
                                      <div class="card-header d-flex justify-content-between"> <div><img src="{{asset('daftar_bank/ALFAMIDI.png')}}" alt="" class = "gambar_bayar"></div> 
                                    
                                      <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                        <button class = "btn btn-primary tombol-bayar" style = "display:none;">
                                         
                                        </button>
                                      </div>

                                    </div>
                                      <div class="card-body">
                                        <h5>Alfamidi</h5>
                                      </div>
                                    </div>
                        
                                </label>
                                
                              </div>









                            </div>
                          </div>
                        </div>

                        <br>


                        <div class="card">
                          <div class="card-header" id="headingSix">
                            <h2 class="mb-0">
                              <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                <strong>
                                E - Wallet <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </strong>
                               </button>
                            </h2>
                          </div>
                          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                             

                              <div class="col-md-12 col-lg-12 col-sm-12">
                                    
                                <label class = "card_order">
                                  <input type="radio" name="metode_bayar" class="card-input-element" value = "OVO" />
                        
                                    <div class="card card-default card-input">
                                      <div class="card-header d-flex justify-content-between"> <div><img src="{{asset('daftar_bank/OVO.png')}}" alt="" class = "gambar_bayar"></div>
                                    
                                      <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                        <button class = "btn btn-primary tombol-bayar" style = "display:none;">
                                         
                                        </button>
                                      </div>

                                    </div>
                                      <div class="card-body">
                                        <h5>OVO</h5>
                                      </div>
                                    </div>
                        
                                </label>
                                
                              </div>



                              <div class="col-md-12 col-lg-12 col-sm-12">
                                    
                                <label class = "card_order">
                                  <input type="radio" name="metode_bayar" class="card-input-element" value = "GOPAY" />
                        
                                    <div class="card card-default card-input">
                                      <div class="card-header d-flex justify-content-between"> <div><img src="{{asset('daftar_bank/GOPAY.png')}}" alt="" class = "gambar_bayar"></div> 
                                    
                                                                          
                                      <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                        <button class = "btn btn-primary tombol-bayar" style = "display:none;">
                                         
                                        </button>
                                      </div>

                                    
                                    
                                    </div>
                                      <div class="card-body">
                                        <h5>Go-Pay</h5>
                                      </div>
                                    </div>
                        
                                </label>
                                
                              </div>






                              <div class="col-md-12 col-lg-12 col-sm-12">
                                    
                                <label class = "card_order">
                                  <input type="radio" name="metode_bayar" class="card-input-element" value = "DANA" />
                        
                                    <div class="card card-default card-input">
                                      <div class="card-header d-flex justify-content-between"> <div><img src="{{asset('daftar_bank/DANA.png')}}" alt="" class = "gambar_bayar"></div> 
                                    
                                      <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                        <button class = "btn btn-primary tombol-bayar" style = "display:none;">
                                         
                                        </button>
                                      </div>

                                      
                                    </div>
                                      <div class="card-body">
                                        <h5>Dana</h5>
                                      </div>
                                    </div>
                        
                                </label>
                                
                              </div>




                              <div class="col-md-12 col-lg-12 col-sm-12">
                                    
                                <label class = "card_order">
                                  <input type="radio" name="metode_bayar" class="card-input-element" value = "SHOPEEPAY" />
                        
                                    <div class="card card-default card-input">
                                      <div class="card-header d-flex justify-content-between"> <div><img src="{{asset('daftar_bank/SHOPEEPAY.png')}}" alt="" class = "gambar_bayar"></div> 
                                    
                                      <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                        <button class = "btn btn-primary tombol-bayar" style = "display:none;">
                                         
                                        </button>
                                      </div>
                                    
                                    
                                    </div>
                                      <div class="card-body">
                                        <h5>Shopee-Pay</h5>
                                      </div>
                                    </div>
                        
                                </label>
                                
                              </div>






                              <div class="col-md-12 col-lg-12 col-sm-12">
                                    
                                <label class = "card_order">
                                  <input type="radio" name="metode_bayar" class="card-input-element" value = "QRIS" />
                        
                                    <div class="card card-default card-input">
                                      <div class="card-header d-flex justify-content-between"> <div><img src="{{asset('daftar_bank/QRIS.png')}}" alt="" class = "gambar_bayar"></div>
                                    
                                      <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                        <button class = "btn btn-primary tombol-bayar" style = "display:none;">
                                         
                                        </button>
                                      </div>

                                    
                                    </div>
                                      <div class="card-body">
                                        <h5>QRIS</h5>
                                      </div>
                                    </div>
                        
                                </label>
                                
                              </div>










                            </div>
                          </div>
                        </div>

                      </div>

                      <br>
         
                    </div>
                </div>

            </div>
          </div>

          <br>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Nomor Whatsapp : </h5>
                <br>
                    <div class="form-group">
                      <label for="nomor_whatsapp">Silakan Isi Nomor Whatsapp Anda </label>
                      <input type="number"  class="form-control" id="nomor_whatsapp" name = "nomor_whatsapp" placeholder = "628xxxxxxxxx" required>
                    </div>
            </div>
          </div>

          <br>
          <center>
            <button class = "btn btn-primary" type = "submit"> Order Sekarang</button>
          </center>
        
          <br>
        </div>
        <!-- /.col-md-6 -->
  
      </div>
      <!-- /.row -->

    </form>


    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->




  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Silakan Sesuaikan Dengan Gambar Berikut : </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>



  @endsection