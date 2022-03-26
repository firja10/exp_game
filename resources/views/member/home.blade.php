@extends('member.template')

@section('title')
    Beranda Member
@endsection

@section('style')
<style>
  #memberhome{

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
          
          $orders_count = DB::table('orders')->where('user_id', Auth::user()->id)->count();
          $kategoris_count = DB::table('kategoris')->count();
          $nominals_count = DB::table('nominals')->count();
          
          ?>



        {{-- <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php 
                //echo $nominals_count;
                  ?></h3>

              <p>Nominal</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{url('/admin/nominal')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
         --}}


        <!-- ./col -->


        {{-- <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php 
                //echo $kategoris_count; 
                 ?></h3>

              <p>Kategori Game</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{url('/admin/kategori')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div> --}}

        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $orders_count;  ?></h3>

              <p>Jumlah Order</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{url('/member/profile')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->


        
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection