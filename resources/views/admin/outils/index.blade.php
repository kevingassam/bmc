@extends('layouts.back')
@section('title', 'Liste des outils')
@section('content')
    <div class="page">
        <div class="page-main">
        </div>
        <div class="main-content app-content mt-0">
            <div class="side-app">
                <!-- CONTAINER -->
                <div class="main-container container-fluid">
                    <!-- PAGE-HEADER -->
                    <div class="page-header">

                    </div>
                    {{-- composant qui sera charger d'afficher les messages d'erreur et de success --}}
                    @include('admin.composants.alert_success')
                    <!-- PAGE-HEADER END -->
                    <div class="card">
                        <div class="card-header">
                            <!--button ajout-->
                            <a class="btn btn-xs btn-red" href="/admin/ajouter_outils">
                                Ajouter une outil
                            </a>
                        </div>
                        <div class="card-body">

                            <div class="container">
                                <div class="row">

                                    <table id="example" class="table table-striped " style="width:100%">
                                        <thead class="table-danger">
                                            <tr>
                                                <th>Image</th>
                                                <th>titre</th>
                                                <th>Description</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-bordered">
                                            @foreach ($outils as $item)
                                                <tr>
                                                    <td>
                                                        <img src="/uploads/{{ $item->image }}"
                                                            alt="{{ $item->created_at }}" style="width: 100px;"
                                                            srcset="">
                                                    </td>
                                                    <td>{{ $item->titre }}</td>
                                                    <td>{{ $item->description }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <a href="/admin/update_outils/{{ $item->id }}"
                                                                        type="button" class="btn btn-icon  btn-info">
                                                                        <i class="fa fa-pencil-square-o"></i>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="/admin/delete_outils/{{ $item->id }}"
                                                                        onclick="return confirm('voulez-vous vraiment supprimer ce métier ?')"
                                                                        type="button" class="btn btn-icon  btn-danger">
                                                                        <i class="fe fe-trash"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-2 -->
            </div>
        </div>
    </div>
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
@endsection
@section('js')

    <script>
        $(document).ready(function() {
            $('#example').DataTable();

        });
    </script>
@endsection
