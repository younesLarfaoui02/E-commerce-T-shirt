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
                   <a href="{{route('subcategories.create')}}" class="text-decoration-none text-light font-weight-bold">Ajouter Nouveau</a>
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
                            <td>
                                
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