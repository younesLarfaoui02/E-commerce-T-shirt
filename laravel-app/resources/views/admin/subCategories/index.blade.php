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
    <h1 class="h3 mb-2 text-gray-800">Sub Categories</h1>
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 text-primary text-right">
                <div class="btn btn-success">
                    <a  class="text-decoration-none text-light font-weight-bold" data-toggle="modal" data-target="#create-subcategory">
                        Create SubCategory
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="create-subcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" id='category-create' action="{{route('subcategories.store')}}" class="row g-3 needs-validation" novalidate>
                                        @csrf
                                        <div class="col-md-12 m-2 text-center">
                                            <label for="validationCustom01" class="form-label text-dark">Nom SubCategory</label>
                                            <input type="text" class="form-control @error('nom') is-invalid @enderror " id="nom" name="nom"  required placeholder="Nom Complet">

                                            <div class="div w-50">
                                                @error('nom')
                                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-2 ">
                                            <label for="validationCustom01" class="form-label text-center text-dark">Category </label>
                                            <select
                                                class="form-control  @error('category_id') is-invalid  @enderror "
                                                value="" name="category_id">
                                                <option value="">Select a category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category['id'] }}"
                                                        {{ old('categorie_id') == $category['id'] ? 'selected' : '' }}>
                                                        {{ $category['nom'] }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            <div class="div w-50">
                                                @error('categorie_id')
                                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button class="btn btn-success"  type="submit">Ajouter</button>
                                        </div>
                                    </form><!-- End Custom Styled Validation -->
                                </div>
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
                            <th>category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subcategories as $subcategory)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$subcategory['nom']}}</td>
                            <td>
                                {{$subcategory->category->nom}}
                            </td>
                            <td class="d-flex justify-content-around">
                                <a class="btn text-warning " data-toggle="modal" data-target="#update-subcategory{{$loop->iteration}}">
                                    <i class="fas fa-edit fa-fw"></i>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="update-subcategory{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" id='category-update' action="{{route('subcategories.update',$subcategory->id)}}" class="row g-3 needs-validation" novalidate>
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="col-md-12 m-2 text-center">
                                                        <label for="validationCustom01" class="form-label">Nom Category</label>
                                                        <input type="text" class="form-control @error('nom') is-invalid @enderror " id="nom" value="{{$subcategory->nom}}" name="nom"  required placeholder="Nom Complet">
                                                        <div class="div w-50">
                                                            @error('nom')
                                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 m-2 ">
                                                        <label for="validationCustom01" class="form-label text-center">Category </label>
                                                        <select
                                                            class="form-control  @error('category_id') is-invalid  @enderror "
                                                             name="category_id">
                                                            <option value="">Select a category</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category['id'] }}"
                                                                    {{ old('categorie_id') == $category['id'] ? 'selected' : '' }}
                                                                    {{ $subcategory->category_id == $category['id'] ? 'selected' : '' }}

                                                                >
                                                                    {{ $category['nom'] }} </option>
                                                            @endforeach
                                                        </select>

                                                        <div class="div w-50">
                                                            @error('categorie_id')
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

                                <form method="POST" action="{{route('subcategories.destroy',$subcategory->id)}}" >
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
    </div>

</div>
<!-- /.container-fluid -->
@endsection
