@extends('member.template')

@section('title')
    Join Reseller
@endsection

@section('style')
<style>
  #join_reseller{

    background-color:#fff;
    color:#343a40;

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

.card-masukkan {
    /* margin: 10px;
    padding: 0px;
    width:100%; */
}

.card-masukkan:hover {
    cursor: pointer;
}

.card-input-element:checked + .card-masukkan {
     box-shadow: 0 0 1px 1px #1b96dcff;
     background-color:#1b96dcff;
     color:#fff;
     
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
              <div class="card-header bg-light">
                <h4>Upgrade Role</h4>  
              </div>

            <div class="card-body">

              <form action="">



                <div>
                    <h3>
                        Current Role : <button class = "btn btn-primary">Member</button>
                    </h3>
                </div>
                <hr>

                <div>
                    <h5>Select Plan</h5>
                </div>



                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">

                   
                            

                                {{-- <div class="col-lg-12 col-md-12 col-sm-12"> --}}
                                {{-- <label class = "card_order">
                                    <input type="radio" name="nominal" class="card-input-element" value = "" />
                          
                                      <div class="card card-default card-masukkan">
                                        <div class="card-header"> <i class = "fa fa-diamond" arria-hidden="true" ></i>&nbsp;Silver</div>
                                      </div>
                                  </label> --}}
                                {{-- </div> --}}
                             



                                
                                <label class = "card_order">
                                  <input type="radio" name="metode_bayar" class="card-input-element" value = "DANA" />
                        
                                    {{-- <div class="card card-default card-masukkan"> --}}
                                      <div class="card card-default card-masukkan ">
                                      <div class="card-header d-flex justify-content-between"> 
                                        <div>
                                          <h5> <strong>Silver</strong> </h5> 
                                        </div>

                                        <div style = "ml-auto; text-align:right;">
                                        </div>

                                        <div style = "ml-auto; text-align:right;">          
                                      </div>




                                      <div style = "ml-auto; text-align:right;">
                                    </div>


                                    <div style = "ml-auto; text-align:right;">
                                    </div>


                                    <div style = "ml-auto; text-align:right;">
                                    </div>

                                    <div style = "ml-auto; text-align:right;">
                                    </div>

                                    <div style = "ml-auto; text-align:right;">
                                    </div>

                                    <div style = "ml-auto; text-align:right;">
                                    </div>

                                    <div style = "ml-auto; text-align:right;">
                                    </div>

                                    <div style = "ml-auto; text-align:right;">
                                    </div>


                                    <div style = "ml-auto; text-align:right;">
                                          
                                      <button class = "btn btn-primary">
                                        Rp. 150.000
                                      </button>
                                   
                                  </div>


                                        
                                        </div>
                                      <div class="card-body">
                                        <p style = "font-weight:450">Akun Silver dapat harga murah</p>
                                      </div>
                                    </div>
                                </label>











                                <label class = "card_order">
                                  <input type="radio" name="metode_bayar" class="card-input-element" value = "DANA" />
                        
                                    {{-- <div class="card card-default card-masukkan"> --}}
                                      <div class="card card-default card-masukkan ">
                                      <div class="card-header d-flex justify-content-between"> 
                                        <div>
                                          <h5> <strong>Silver</strong> </h5> 
                                        </div>

                                        <div style = "ml-auto; text-align:right;">
                                        </div>

                                        <div style = "ml-auto; text-align:right;">          
                                      </div>




                                      <div style = "ml-auto; text-align:right;">
                                    </div>


                                    <div style = "ml-auto; text-align:right;">
                                    </div>


                                    <div style = "ml-auto; text-align:right;">
                                    </div>

                                    <div style = "ml-auto; text-align:right;">
                                    </div>

                                    <div style = "ml-auto; text-align:right;">
                                    </div>

                                    <div style = "ml-auto; text-align:right;">
                                    </div>

                                    <div style = "ml-auto; text-align:right;">
                                    </div>

                                    <div style = "ml-auto; text-align:right;">
                                    </div>


                                    <div style = "ml-auto; text-align:right;">
                                          
                                      <button class = "btn btn-primary">
                                        Rp. 150.000
                                      </button>
                                   
                                  </div>


                                        
                                        </div>
                                      <div class="card-body">
                                        <p style = "font-weight:450">Akun Silver dapat harga murah</p>
                                      </div>
                                    </div>
                                </label>





                        </div>
                    </div>
                </div>

                <hr>

                <div>
                  <h5>Select Payment Method</h5>
                </div>










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
                      
                                  <div class="card card-default card-masukkan">
                                    <div class="card-header"> <img src="{{asset('daftar_bank/bca.svg')}}" alt="" class = "gambar_bayar"> </div>
                                    <div class="card-body">
                                     <h5> Bank Central Asia ( BCA )</h5>
                                    
                                    </div>
                                  </div>
                      
                              </label>
                              
                            </div>




                            <div class="col-md-12 col-lg-12 col-sm-12">
                              
                              <label class = "card_order">
                                <input type="radio" name="metode_bayar" class="card-input-element" value = "BNI" />
                      
                                  <div class="card card-default card-masukkan">
                                    <div class="card-header"> <img src="{{asset('daftar_bank/bni.png')}}" alt="" class = "gambar_bayar"> </div>
                                    <div class="card-body">
                                      <h5> Bank Negara Indonesia ( BNI )</h5>
                                    </div>
                                  </div>
                      
                              </label>
                              
                            </div>






                            <div class="col-md-12 col-lg-12 col-sm-12">
                              
                              <label class = "card_order">
                                <input type="radio" name="metode_bayar" class="card-input-element" value = "MANDIRI" />
                      
                                  <div class="card card-default card-masukkan">
                                    <div class="card-header"> <img src="{{asset('daftar_bank/MANDIRI.png')}}" alt="" class = "gambar_bayar"> </div>
                                    <div class="card-body">
                                      <h5> Bank Mandiri</h5>
                                    </div>
                                  </div>
                      
                              </label>
                              
                            </div>






                            <div class="col-md-12 col-lg-12 col-sm-12">
                              
                              <label class = "card_order">
                                <input type="radio" name="metode_bayar" class="card-input-element" value = "BTPN" />
                      
                                  <div class="card card-default card-masukkan">
                                    <div class="card-header"> <img src="{{asset('daftar_bank/BTPN.png')}}" alt="" class = "gambar_bayar"> </div>
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
                  
                              <div class="card card-default card-masukkan">
                                <div class="card-header"> <img src="{{asset('daftar_bank/ALFAMART.png')}}" alt="" class = "gambar_bayar"> </div>
                                <div class="card-body">
                                  <h5>Alfamart</h5>
                                </div>
                              </div>
                  
                          </label>
                          
                        </div>





                        <div class="col-md-12 col-lg-12 col-sm-12">
                              
                          <label class = "card_order">
                            <input type="radio" name="metode_bayar" class="card-input-element" value = "INDOMARET" />
                  
                              <div class="card card-default card-masukkan">
                                <div class="card-header"> <img src="{{asset('daftar_bank/INDOMARET.png')}}" alt="" class = "gambar_bayar"> </div>
                                <div class="card-body">
                                  <h5>Indomaret</h5>
                                </div>
                              </div>
                  
                          </label>
                          
                        </div>




                        <div class="col-md-12 col-lg-12 col-sm-12">
                              
                          <label class = "card_order">
                            <input type="radio" name="metode_bayar" class="card-input-element" value = "ALFAMIDI" />
                  
                              <div class="card card-default card-masukkan">
                                <div class="card-header"> <img src="{{asset('daftar_bank/ALFAMIDI.png')}}" alt="" class = "gambar_bayar"> </div>
                                <div class="card-body">
                                  <h5>Alfamidi</h5>
                                </div>
                              </div>
                  
                          </label>
                          
                        </div>




                      </div>
                    </div>
                  </div>














          



         






            </div>


          </form>
          </div>

          
    
        </div>


















        
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->




@endsection