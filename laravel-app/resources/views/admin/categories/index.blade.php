@extends('admin.layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    @if(session('success'))
    <div class="alert alert-success">
    {{ session('success') }}
    </div>
    @endif


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Categories</h1>
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 text-primary text-right">
                <div class="btn btn-success">
                    <a  class="text-decoration-none text-light font-weight-bold" data-toggle="modal" data-target="#exampleModalCenter">
                        Create Category
                    </a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" id='category-create' action="{{route('categories.store')}}" class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    <div class="col-md-12 m-2 text-center">
                                        <label for="validationCustom01" class="form-label">Nom Category</label>
                                        <input type="text" class="form-control @error('nom') is-invalid @enderror " id="nom" name="nom"  required placeholder="Nom Complet">

                                        <div class="div w-50">
                                            @error('nom')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <hr>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button class="btn btn-success" name="{{route('categories.store')}}" type="submit">Ajouter</button>
                            </div>
                                </form><!-- End Custom Styled Validation -->
                            </div>
                        </div>
                    </div>
                </div>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive table-responsive2">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                    @foreach($categories as $category)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$category['nom']}}</td>
                            <td class="d-flex justify-content-around">
                                <a class="btn text-warning " data-toggle="modal" data-target="#update-category{{$loop->iteration}}">
                                    <i class="fas fa-edit fa-fw"></i>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="update-category{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" id='category-update' action="{{route('categories.update',$category->id)}}" class="row g-3 needs-validation" novalidate>
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="col-md-12 m-2 text-center">
                                                        <label for="validationCustom01" class="form-label">Nom Category</label>
                                                        <input type="text" class="form-control @error('nom') is-invalid @enderror " id="nom" value="{{$category->nom}}" name="nom"  required placeholder="Nom Complet">

                                                        <div class="div w-50">
                                                            @error('nom')
                                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <hr>


                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button class="btn btn-success"  type="submit">Update</button>
                                                    </div>
                                                </form><!-- End Custom Styled Validation -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form method="POST" action="{{route('categories.destroy',$category->id)}}" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn text-danger">
                                        <i class="fas fa-trash "></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-header py-3">
            <h6 class="m-0 text-danger text-right">
                <form data-action="{{route('delete-all-categories')}}" method="POST" id="delete-category">
                    @csrf
                    <button class="btn btn-danger" type="submit" >
                        Remove All
                    </button>
                </form>
            </h6>
        </div>

    </div>

</div>
<!-- /.container-fluid -->
@endsection
