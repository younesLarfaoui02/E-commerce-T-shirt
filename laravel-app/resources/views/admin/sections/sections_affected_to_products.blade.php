@extends('admin.layouts.app')
@section('content')
    <!-- Begin Page Content -->

      <div class="container-fluid">
          <div class="row justify-content-center align-items-start">
              <div class="col-xl-4  col-12">
                  <div class="card shadow mb-4 col-md-6 m-auto">

                      <div class="card-header py-3">
                          <h1 class="h3 mb-2 text-gray-800">Ajouter Section</h1>
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
                              <form method="post" action="{{route('sections.store')}}" class="row g-3 needs-validation" novalidate>
                                  @csrf
                                  <div class="col-md-5 col-12 m-2">
                                      <label for="validationCustom01" class="form-label">Category</label>
                                      <select class="form-control w-100">

                                      </select>
                                      <div class="div w-50">
                                          @error('section_name')
                                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12 m-2">
                                      <label for="validationCustom01" class="form-label">SubCategory</label>
                                      <select class="form-control w-100" disabled>
                                      </select>
                                      <div class="div w-50">
                                          @error('section_name')
                                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-10 col-md-12 m-2">
                                      <label for="validationCustomUsername" class="form-label">Produit</label>
                                      <input type="text" class="form-control"/>
                                  </div>

                                  <hr>
                                  <div class="col-12 m-2">
                                      <button class="btn btn-success" name="{{route('sections.store')}}" type="submit">Ajouter</button>
                                      <a href="../fournisseur/list-fournisseur.php"><div class="btn btn-primary" value="">Retour</div></a>
                                  </div>
                              </form><!-- End Custom Styled Validation -->
                          </div>

                      </div>
                  </div>
                  <!-- DataTales Example -->
              </div>
              <div class="col-xl-8 my-4 col-12">
                  <div class="card shadow mb-4 col-md-6 m-auto">

                      <div class="card-header py-3">
                          <h1 class="h3 mb-2 text-gray-800">Ajouter Section</h1>
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
                                  </tbody>
                              </table>
                          </div>

                      </div>
                  </div>
                  <!-- DataTales Example -->
              </div>
          </div>
      </div>
    <!-- /.container-fluid -->
@endsection
