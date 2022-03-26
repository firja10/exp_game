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

                            <form action="">

                                {{-- <div class="col-lg-12 col-md-12 col-sm-12"> --}}
                                <label class = "card_order">
                                    <input type="radio" name="nominal" class="card-input-element" value = "" />
                          
                                      <div class="card card-default card-input">
                                        <div class="card-header"> <i class = "fa fa-diamond" arria-hidden="true" ></i>&nbsp;Silver</div>
                                        {{-- <div class="card-body">
                                          Product specific content
                                        </div> --}}
                                      </div>
                          
                                  </label>
                                {{-- </div> --}}
                             
            
                            </form>



                        </div>
                    </div>
                </div>




          



         






            </div>



          </div>
        </div>



















        
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection