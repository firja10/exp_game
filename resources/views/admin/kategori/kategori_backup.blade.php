@extends('admin.template')
@section('content')
    

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Kategori Game</h1>
        <ol class="breadcrumb mb-4">
            {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
        </ol>
           
        <div class="card mb-4">
            <div class="card-header">
                {{-- <i class="fas fa-table me-1"></i>
                DataTable Example --}}
                
            </div>
            <div class="card-body">

                <button class = "btn btn-primary mb-4" id = "addModal"  data-toggle="modal" data-target="#addModal" >+ Add Button</button>
                <br>
                
                <table id="datatablesSimple">
                
                

                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Nama Kategori</th>
                            <th>Foto Kategori</th>
                            <th>Slug</th>
                  
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No. </th>
                            <th>Nama Kategori</th>
                            <th>Foto Kategori</th>
                            <th>Slug</th>
              
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1; ?>

                    @foreach ($kategoris as $category)
                        <tr>
                      
                                <td><?php $no++; ?></td>
                                <td>{{$category->nama_kategori}}</td>
                                <td>{{$category->photo_kategori}}</td>
                                <td>{{$category->slug}}</td>

                        </tr>
                    @endforeach  
                
                    </tbody>
                </table>


                
            </div>
        </div>
    </div>






   










</main>







@endsection