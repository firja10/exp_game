@extends('member.template')

@section('title')
    Upgrade Role
@endsection

@section('style')
<style>
  /* #join_reseller{

    background-color:#fff;
    color:#343a40;

  } */


  #upgrade_role{

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
             <strong><h4>Upgrade Role</h4></strong>     
              </div>

            <div class="card-body">

              <form action="{{route('addOrderReseller')}}" method = "POST">
                @csrf

                <div>
                    <h3>
                        Current Role : <button class = "btn btn-primary" type = "button">Member</button>
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


                                  <input type="radio" name="kategori" class="card-input-element" value = "SILVER" onclick="document.getElementById('perak').click()" />
                                 

                                  {{-- <input type="hidden" name="total" value = "150000"> --}}
                        
                                    {{-- <div class="card card-default card-masukkan"> --}}
                                      <div class="card card-default card-masukkan ">
                                      <div class="card-header d-flex justify-content-between"> 
                                        <div>
                                          
                                          <h5> <strong>Silver</strong> </h5> 
                                        </div>

                                        <input type="radio" name="total" value = "150000" style = "visibility: hidden" id = "perak"/>

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
                                  <input type="radio" name="kategori" class="card-input-element" value = "GOLD" onclick="document.getElementById('emas').click()" />
                                  {{-- <input type="hidden" name="total" value = "500000"> --}}
                        
                                    {{-- <div class="card card-default card-masukkan"> --}}
                                      <div class="card card-default card-masukkan ">
                                      <div class="card-header d-flex justify-content-between"> 
                                        <div>
                                          <h5> <strong>Gold</strong> </h5> 
                                        </div>

                                        <input type="radio" name="total" value = "500000" style = "visibility: hidden" id = "emas"/>

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
                                        Rp. 500.000
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
                                    <div class="card-header d-flex justify-content-between"> 
                                      <div>
                                        <img src="{{asset('daftar_bank/bca.svg')}}" alt="" class = "gambar_bayar">
                                      </div>

                                      <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                        <button class = "btn btn-primary silver" style = "display:none;">
                                          Rp. 150.000
                                        </button>

                                        <button class = "btn btn-primary gold" style = "display:none;">
                                          Rp. 500.000
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
                      
                                  <div class="card card-default card-masukkan">
                                    <div class="card-header d-flex justify-content-between"> 
                                    <div>
                                      <img src="{{asset('daftar_bank/bni.png')}}" alt="" class = "gambar_bayar"> 
                                    </div>

                                    <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                      <button class = "btn btn-primary silver" style = "display:none;">
                                        Rp. 150.000
                                      </button>

                                      <button class = "btn btn-primary gold" style = "display:none;">
                                        Rp. 500.000
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
                      
                                  <div class="card card-default card-masukkan">
                                    <div class="card-header d-flex justify-content-between"> 
                                      <div>
                                        <img src="{{asset('daftar_bank/MANDIRI.png')}}" alt="" class = "gambar_bayar">
                                        </div> 

                                        <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                          <button class = "btn btn-primary silver" style = "display:none;">
                                            Rp. 150.000
                                          </button>
  
                                          <button class = "btn btn-primary gold" style = "display:none;">
                                            Rp. 500.000
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
                      
                                  <div class="card card-default card-masukkan">
                                    <div class="card-header d-flex justify-content-between"> 
                                      <div>
                                        <img src="{{asset('daftar_bank/BTPN.png')}}" alt="" class = "gambar_bayar">
                                        </div> 

                                        <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                          <button class = "btn btn-primary silver" style = "display:none;">
                                            Rp. 150.000
                                          </button>
  
                                          <button class = "btn btn-primary gold" style = "display:none;">
                                            Rp. 500.000
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
                                <div class="card-header d-flex justify-content-between"> 
                                  <div>
                                    <img src="{{asset('daftar_bank/ALFAMART.png')}}" alt="" class = "gambar_bayar"> 
                                    </div> 

                                    <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                      <button class = "btn btn-primary silver" style = "display:none;">
                                        Rp. 150.000
                                      </button>

                                      <button class = "btn btn-primary gold" style = "display:none;">
                                        Rp. 500.000
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
                  
                              <div class="card card-default card-masukkan">
                                <div class="card-header d-flex justify-content-between"> 
                                  <div>
                                    <img src="{{asset('daftar_bank/INDOMARET.png')}}" alt="" class = "gambar_bayar">
                                    </div> 
                                    
                                    <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                      <button class = "btn btn-primary silver" style = "display:none;">
                                        Rp. 150.000
                                      </button>

                                      <button class = "btn btn-primary gold" style = "display:none;">
                                        Rp. 500.000
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
                  
                              <div class="card card-default card-masukkan">
                                <div class="card-header d-flex justify-content-between"> 
                                  <div>
                                    <img src="{{asset('daftar_bank/ALFAMIDI.png')}}" alt="" class = "gambar_bayar"> 
                                    </div> 


                                    <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                      <button class = "btn btn-primary silver" style = "display:none;">
                                        Rp. 150.000
                                      </button>

                                      <button class = "btn btn-primary gold" style = "display:none;">
                                        Rp. 500.000
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
                  
                              <div class="card card-default card-masukkan">
                                <div class="card-header d-flex justify-content-between"> 
                                  <div>
                                    <img src="{{asset('daftar_bank/OVO.png')}}" alt="" class = "gambar_bayar"> 
                                    </div>

                                    <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                      <button class = "btn btn-primary silver" style = "display:none;">
                                        Rp. 150.000
                                      </button>

                                      <button class = "btn btn-primary gold" style = "display:none;">
                                        Rp. 500.000
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
                  
                              <div class="card card-default card-masukkan">
                                <div class="card-header d-flex justify-content-between"> 
                                  <div>
                                    <img src="{{asset('daftar_bank/GOPAY.png')}}" alt="" class = "gambar_bayar">
                                    </div> 

                                    <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                      <button class = "btn btn-primary silver" style = "display:none;">
                                        Rp. 150.000
                                      </button>

                                      <button class = "btn btn-primary gold" style = "display:none;">
                                        Rp. 500.000
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
                  
                              <div class="card card-default card-masukkan">
                                <div class="card-header d-flex justify-content-between"> 
                                  <div>
                                    <img src="{{asset('daftar_bank/DANA.png')}}" alt="" class = "gambar_bayar">
                                  </div>

                                  <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                    <button class = "btn btn-primary silver" style = "display:none;">
                                      Rp. 150.000
                                    </button>

                                    <button class = "btn btn-primary gold" style = "display:none;">
                                      Rp. 500.000
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
                  
                              <div class="card card-default card-masukkan">
                                <div class="card-header d-flex justify-content-between"> 
                                  <div>
                                    <img src="{{asset('daftar_bank/SHOPEEPAY.png')}}" alt="" class = "gambar_bayar">
                                    </div>  
                                  
                                    <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                      <button class = "btn btn-primary silver" style = "display:none;">
                                        Rp. 150.000
                                      </button>
  
                                      <button class = "btn btn-primary gold" style = "display:none;">
                                        Rp. 500.000
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
                  
                              <div class="card card-default card-masukkan">
                                <div class="card-header d-flex justify-content-between"> 
                                  <div>
                                  
                                    <img src="{{asset('daftar_bank/QRIS.png')}}" alt="" class = "gambar_bayar">

                                  </div> 



                                  <div class = "ml-auto; text-align:right;" style = "margin-left:auto">
                                    <button class = "btn btn-primary silver" style = "display:none;">
                                      Rp. 150.000
                                    </button>

                                    <button class = "btn btn-primary gold" style = "display:none;">
                                      Rp. 500.000
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


            <center>
              <button type = "submit" class = "btn btn-primary">
              <i class = "fa fa-shopping-basket"></i>
                Checkout
              </button>
            </center>


          
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