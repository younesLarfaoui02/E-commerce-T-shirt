@extends('admin.layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4 col-md-6 m-auto">

            <div class="card-header py-3">
                <h1 class="h3 mb-2 text-gray-800">Ajouter Sous Category</h1>
            </div>
            <div class="card-body">
                {{-- @if ($errors->any())
            <div class="alert alert-danger ">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif --}}

                <div class="row">
                    <form method="post" action="{{ route('subcategories.store') }}" class="row g-3 needs-validation"
                        novalidate>
                        @csrf
                        <div class="col-md-12 m-2">
                            <label for="validationCustom01" class="form-label">Nom </label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror " id="nom"
                                name="nom" required placeholder="Nom Complet">

                            <div class="div w-50">
                                @error('nom')
                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 m-2">
                            <label for="validationCustom01" class="form-label">Category </label>
                            <select
                                class="form-control  @error('categorie_id')
                                is-invalid
                            @enderror "
                                value="" name="categorie_id">
                                <option value="">Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category['id'] }}"
                                        {{ old('categorie_id') == $category['id'] ? 'selected' : '' }}>
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
                        <div class="col-12 m-2">
                            <button class="btn btn-success" name="{{ route('subcategories.store') }}"
                                type="submit">Ajouter</button>
                            <a href="../fournisseur/list-fournisseur.php">
                                <div class="btn btn-primary" value="">Retour</div>
                            </a>
                        </div>
                    </form><!-- End Custom Styled Validation -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
