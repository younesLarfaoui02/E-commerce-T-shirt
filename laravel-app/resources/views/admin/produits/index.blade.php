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
    <h1 class="h3 mb-2 text-gray-800">Produits</h1>
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 text-primary text-right">
                <div class="btn btn-success">
                   <a href="{{route('produits.create')}}" class="text-decoration-none text-light font-weight-bold">Ajouter Nouveau</a>
                </div>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            {{-- <th>#</th> --}}
                            <th>Nom</th>
                            <th>Description</th>
                            <th class="text-center">Image</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Category_Type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($produits as $produit)
                            <tr>
                                {{-- <td>{{$loop->iteration}}</td> --}}
                                <td style="vertical-align: middle;">{{$produit['nom_produit']}}</td>
                                <td style="vertical-align: middle;">{{$produit['description_produit']}}</td>
                                <td style=" vertical-align: middle;text-align : center">
                                    <img  src="{{asset('/admin/images/'.$produit['image_produit'])}}" class="" height="85px"/>
                                </td>
                                <td>{{$produit['quantite_produit']}}</td>
                                <td>{{$produit['prix_produit']}}</td>
                                <td>{{$produit->sous_category->nom}}</td>
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
