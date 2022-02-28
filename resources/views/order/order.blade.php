 @extends('templates.template')

 @section('style')

 <style>
  
  .button-nomin{
    margin-left:10px;
    margin-right:10px;
  }






  .gambar_bayar{
    width:10%;
  }







  .container {
  max-width: 900px;
  margin: 0 auto;
}


/**
  Component
**/

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

      <form class="form" method = "post" enctype="multipart/form-data" action = "{{route('invoice.store')}}" >
        @csrf


      <div class="row">
        <div class="col-lg-6">
          <div class="card card-primary card-outline">
            <div class="card-body">
              <h5 class="card-title">
                  <center>
                    <img class="card-img-top" src="{{asset('assets/img/mobile_games/'. $kategori->photo_kategori)}}" alt="Card image cap"  style = "width:35%;">
                  </center>
                  <br>
                  {{$kategori->nama_kategori}}
               
              </h5>

              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's
                content.
              </p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
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
                      <input type="number"  class="form-control" id="id_user" name = "id_user" placeholder = "ID User Anda">
                      {{-- <input type="hidden" name="user_id" value = "{{Auth::user()->id}}"> --}}
                    </div>

                    <div class="form-group  col-lg-6">
                      <label for="id_server">Server ID</label>
                      <input type="number" class="form-control" id="id_server" name = "id_server" placeholder = "ID Server Anda">
                    </div>

                </div>
                    {{-- <br> --}}
                    <button type="submit" class="btn btn-primary mb-2">Panduan</button>
                  {{-- </form> --}}

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
              <h5 class="card-title">Pilih Nominal : </h5>
                <br>

                {{-- <div class="row">
                    <div class="col-md-4"> --}}

                        
                        @foreach ($data as $nomin)
                            {{-- <a href="#" class="btn btn-primary"> <i class = "fa fa-diamond" arria-hidden="true" ></i> &nbsp; {{$nomin->nominal_kategori}} </a> --}}
                        
                        
                            <div class="container" id = "container">
  
                                                    
                              <div class="row">
                                
                                  <div class="col-md-4 col-lg-4 col-sm-4">
                                    
                                    <label class = "card_order">
                                      <input type="radio" name="nominal" class="card-input-element" value = "{{$nomin->harga_nominal}}" />
                            
                                        <div class="card card-default card-input">
                                          <div class="card-header"> <i class = "fa fa-diamond" arria-hidden="true" ></i>&nbsp;{{$nomin->nominal_kategori}}</div>
                                          {{-- <div class="card-body">
                                            Product specific content
                                          </div> --}}
                                        </div>
                            
                                    </label>
                                    
                                  </div>
                             



                              </div>
                              
                            </div>


                        
                        
                        @endforeach


                 




                     














                        
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
                                      <input type="radio" name="metode_bayar" class="card-input-element" value = "tf_bca" />
                            
                                        <div class="card card-default card-input">
                                          <div class="card-header"> <img src="{{asset('daftar_bank/bca.svg')}}" alt="" class = "gambar_bayar"> </div>
                                          <div class="card-body">
                                           <h5> Bank Central Asia ( BCA )</h5>
                                          
                                          </div>
                                        </div>
                            
                                    </label>
                                    
                                  </div>


                                  <div class="col-md-12 col-lg-12 col-sm-12">
                                    
                                    <label class = "card_order">
                                      <input type="radio" name="metode_bayar" class="card-input-element" value = "tf_bni" />
                            
                                        <div class="card card-default card-input">
                                          <div class="card-header"> <img src="{{asset('daftar_bank/bni.png')}}" alt="" class = "gambar_bayar"> </div>
                                          <div class="card-body">
                                            <h5> Bank Negara Indonesia ( BNI )</h5>
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
                            <div class="card-body">
                              And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                            </div>
                          </div>
                        </div>

                        <br>

                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                <strong>
                                 Virtual Account <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                </strong>
                               </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                            </div>
                          </div>
                        </div>

                        <br>


                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                <strong>
                                 Convenience Store <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </strong>
                               </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                            </div>
                          </div>
                        </div>

                        <br>


                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                <strong>
                                E - Wallet <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </strong>
                               </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
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
                      <input type="number"  class="form-control" id="nomor_whatsapp" name = "nomor_whatsapp" placeholder = "08xxx">
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



  @endsection