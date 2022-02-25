@extends('admin.template')

@section('title')
    Kategori Game
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


                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-form-kategori">
                    + Tambah Kategori Game
                  </button>


            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No. </th>
                  <th>Nama Kategori</th>
                  <th>Foto Kategori</th>
                  <th>Slug</th>
                </tr>
                </thead>
                <tbody>

                    <?php  $no = 1; ?>
                    @foreach ($kategoris as $category)
                    <tr>

                  
                            <td><?php echo $no++; ?></td>
                            <td>{{$category->nama_kategori}}</td>
                            <td>{{$category->photo_kategori}}</td>
                            <td>{{$category->slug}}</td>

                    </tr>
                @endforeach  
          
            
                </tbody>
                <tfoot>
                <tr>
                    <th>No. </th>
                    <th>Nama Kategori</th>
                    <th>Foto Kategori</th>
                    <th>Slug</th>
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




    <div class="modal fade" id="modal-form-kategori">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"> Form Kategori </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{-- <p>One fine body&hellip;</p> --}}
            


 
              <form method = "post" action = "{{route('kategori.store')}}" enctype="multipart/form-data" >
               @csrf
               
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" class="form-control" id="nama_kategori" placeholder="Masukkan Kategori" name = "nama_kategori">
                  </div>
                  <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug"  name = "slug" placeholder="Slug">
                  </div>
                  <div class="form-group">
                    <label for="photo_kategori">Foto Kategori</label>
                    <input type="file" class="form-control" id="photo_kategori" name = "photo_kategori">
                  </div>
                </div>
                <!-- /.card-body -->

                {{-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div> --}}

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-primary ml-auto" type = "submit">Submit Kategori Game</button>

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