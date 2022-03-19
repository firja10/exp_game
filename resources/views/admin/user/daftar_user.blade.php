@extends('admin.template')

@section('title')
Daftar User
@endsection



@section('style')
<style>
  #daftar_user{

    background-color:#fff;
    color:#343a40;

  }
</style>
    

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


                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-form-">
                    + Tambah  Game
                  </button> --}}


            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No. </th>
                  <th>Nama </th>
                  <th>Email </th>
                  <th>Nomor Whatsapp</th>
                  <th>Komitmen</th>
                  <th>Salin Komitmen</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                    <?php  $no = 1; ?>
                    @foreach ($users as $user)
                    <tr>

                  
                            <td><?php echo $no++; ?></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->nomor_whatsapp}}</td>
                            <td>{{$user->komitmen}}</td>
                            <td>{{$user->salin_komitmen}}</td>
                            <td>
                                <form action="{{route('SendWhatsApp', $user->id)}}" method = "POST">
                                    @csrf
                                    <button type="submit" class = "btn btn-primary"> Konfirmasi </button>

                                </form>
                            </td>

                    </tr>
                @endforeach  
          
            
                </tbody>
                <tfoot>
                <tr>
                    <th>No. </th>
                    <th>Nama </th>
                    <th>Email </th>
                    <th>Nomor Whatsapp</th>
                    <th>Komitmen</th>
                    <th>Salin Komitmen</th>
                    <th>Aksi</th>
                </tr>
                </tfoot>
              </table>


              {{-- <div class="d-flex justify-content-center">
                {!! $users->links() !!}
              </div> --}}


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




    <div class="modal fade" id="modal-form-">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"> Form  </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{-- <p>One fine body&hellip;</p> --}}
            


 
              <form method = "post" action = "" enctype="multipart/form-data" >
               @csrf
               
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name </label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan " name = "name">
                  </div>
                  <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug"  name = "slug" placeholder="Slug">
                  </div>
                  <div class="form-group">
                    <label for="photo">Foto </label>
                    <input type="file" class="form-control" id="photo" name = "photo">
                  </div>
                </div>
                <!-- /.card-body -->

                {{-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div> --}}

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-primary ml-auto" type = "submit">Submit  Game</button>

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