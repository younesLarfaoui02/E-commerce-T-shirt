@extends('admin.layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800">Ajouter Produit</h1>

        </div>
        <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger ">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="row">
                <form method="post" action="{{route('produits.store')}}" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="col-10 col-md-5 m-2">
                        <label for="validationCustom01" class="form-label">Nom Produit</label>
                        <input type="text" class="form-control" id="validationCustom01" name="nom_produit"  required placeholder="Nom Complet">
                        <div class="invalid-feedback">
                            champs obligatoire!
                        </div>
                    </div>                    
                    <div class="col-10 col-md-5 m-2">
                        <label for="validationCustom03" class="form-label">prix</label>
                        <input type="number" class="form-control w-100" id="validationCustom03" name="prix_produit" placeholder="quantite">

                    </div>
                    <div class="col-10 col-md-5 m-2">
                        <label for="validationCustom04" class="form-label">quantite</label>
                        <input type="text" class="form-control" id="validationCustom04" name="quantite_produit" placeholder="quantite_produit">
                        

                    </div>
                    <div class="col-10 col-md-5 m-2">
                        <div class="mb-3 ">
                            <label for="formFile" class="form-label">Upload Image</label>
                            <input class="" type="file" id="formFile" name="image_produit">
                        </div>

                    </div>
                    
                    <div class="col-10 col-md-5 m-2">
                        <label for="validationCustom02" class="form-label">category</label>
                        <select class="form-control" id="category" value="" name="categorie_nom">
                                <option value="">Select a category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category['id']}}">{{$category['nom']}}</option>

                                @endforeach 
                        </select>
                    </div>
                    
                    <div class="col-10 col-md-5 m-2">
                        <label for="validationCustom02" class="form-label">sous category</label>
                        <select class="form-control" id="sous_category" value="" name="sous_categorie_nom" disabled>

                        </select>
                    </div>

                    <div class="col-10 col-md-6 m-2">
                        <label for="validationCustomUsername" class="form-label">Description</label>
                        <textarea class="form-control w-100" id="validationCustomUsername" name="description_produit" required placeholder="Description"></textarea>
                        <div class="invalid-feedback">
                            Champs obligatoire!
                        </div>
                    </div>
                    <hr>
                    <div class="col-10 col-12 m-2">
                        <button class="btn btn-success" name="submit" type="submit">Ajouter</button>
                <a href="../fournisseur/list-fournisseur.php"><div class="btn btn-primary" value="">Retour</div></a>
                    </div>
                </form><!-- End Custom Styled Validation -->

            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection 