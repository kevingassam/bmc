@extends('layouts.back')
@section('title', 'Ajouter Secteur activité')

@section('content')
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">
                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">ajouter category</h1>
                        </div>
                        <div class="row p-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="container bootstrap snippet  ">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="card p-5">
                                                <div class="card-header">
                                                    <div class="card-title" _msthash="3392506" _msttexthash="591578">
                                                        <a href="/admin/project_category/create"><button
                                                                class="btn btn-red"><i class="bi bi-arrow-return-left"></i>
                                                                retour</button></a>
                                                        Ajouter un Secteur d'activité
                                                    </div>
                                                </div>
                                                <form action="{{ route('admin.project_category.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="mb-5"><label class="form-label"
                                                                for="exampleFormControlInput1">
                                                                <strong>Nom du Secteur d'activité</strong>
                                                            </label>
                                                            <input class="form-control" name="nom" id="name"
                                                                type="text" required>

                                                        </div>
                                                        <div class="mb-5"><label class="form-label"
                                                                for="exampleFormControlInput1">
                                                                <strong>Decription</strong>
                                                            </label>
                                                            <p>
                                                                <textarea class="form-control" name="description" id="exampleTextarea" rows="3" required> </textarea>
                                                            </p>

                                                        </div>
                                                        <div class="mb-5"><label class="form-label"
                                                                for="exampleFormControlInput1">
                                                                <strong>Image d'illustration</strong>
                                                            </label>
                                                            <input class="form-control" name="image" type="file"
                                                                required>

                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-red" type="submit">Ajouter</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('js')
        <script src={{ asset('ckeditor/ckeditor.js') }}></script>

        <script>
            ClassicEditor
                .create(document.querySelector('#exampleTextarea'))
                .catch(error => {
                    console.error(error);
                });
        </script>

    @endsection
