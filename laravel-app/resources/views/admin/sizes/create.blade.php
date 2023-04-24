
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
                <h1 class="h3 mb-2 text-gray-800">Ajouter Taille </h1>
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
                    <form method="post" action="{{route('sizes.store')}}" class="row g-3 needs-validation" novalidate>
                        @csrf
                        <div class="col-md-12 m-2">
                            <label for="validationCustom01" class="form-label">Nom Size</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror " id="nom" name="size_name"  required placeholder="Nom Complet">

                            <div class="div w-50">
                                @error('size_name')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <hr>
                        <div class="col-12 m-2">
                            <button class="btn btn-success"  type="submit">Ajouter</button>
                            <a href="{{route('sizes.index')}}"><div class="btn btn-primary" value="">Retour</div></a>
                        </div>
                    </form><!-- End Custom Styled Validation -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
