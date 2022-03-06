@extends('admin.template')

@section('title')
   Nominal Game
@endsection

@section('style')
<style>
  #nominal{

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


                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-form-nominal">
                    + Tambah Nominal Game
                  </button>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No. </th>
                  <th>Nama Nominal</th>
                  <th>Harga Nominal</th>
                  <th>ID Kategori</th>
                </tr>
                </thead>
                <tbody>

                    <?php  $no = 1; ?>
                    @foreach ($nominal as $nominals)
                    <tr>

                  
                            <td><?php echo $no++; ?></td>
                            <td>{{$nominals->nominal_kategori}}</td>
                            <td>{{$nominals->harga_nominal}}</td>
                            <td>{{$nominals->kategori_id}}</td>

                    </tr>
                @endforeach  
          
            
                </tbody>
                <tfoot>
                <tr>
                    <th>No. </th>
                    <th>Nama Nominal</th>
                    <th>Harga Nominal</th>
                    <th>ID Kategori</th>
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




    <div class="modal fade" id="modal-form-nominal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"> Form Nominal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{-- <p>One fine body&hellip;</p> --}}
            


 
              <form method = "post" action = "{{route('nominal.store')}}" enctype="multipart/form-data" >
               @csrf
               
                <div class="card-body">

                  <div class="form-group">
                    <label for="nominal_kategori">Nama Nominal</label>
                    <input type="text" class="form-control" id="nominal_kategori" placeholder="Masukkan Nominal" name = "nominal_kategori">
                  </div>


                  <div class="form-group">
                    <label for="harga_nominal">Harga Nominal</label>
                    <input type="text" class="form-control" id="harga_nominal" placeholder="Masukkan Harga Nominal" name = "harga_nominal">
                  </div>

                  <div class="form-group">
                    <label for="kategori_id">Kategori</label>

                    <select name="kategori_id" id="kategori_id" class = "form-control">
                        @foreach ($kategoris as $kateg)
                          <option value="{{$kateg->id}}">{{$kateg->nama_kategori}}</option>
                        @endforeach
                        
                    </select>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
    
                </div>

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-primary ml-auto" type = "submit">Submit Nominal</button>

              </form>




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







  </section>
  <!-- /.content -->

  
@endsection