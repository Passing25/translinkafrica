@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/datatables.min.css') }}">
@endsection
@section('content')
    <div class="row row-sm">
        <div class="col-lg-12">
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                    {{ $message }}
                    <button aria-label="Fermer" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show my-1" role="alert">
                    {{ $message }}
                    <button aria-label="Fermer" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card custom-card">
                <div class="card-header d-flex justify-content-between align-items-center py-2">
                    <h4 class="my-auto">Liste des Expéditions</h4>
                    <div>
                        <a href="{{ route('expedition.create') }}" class="btn ripple btn-main-primary">
                            <span>Ajouter</span>
                            <i class="si si-notebook"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table" class="table table-striped table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th class="text-center">Type de marchandise</th>
                                    <th class="text-center">Lieu de Depart</th>
                                    <th class="text-center">Lieu de Livraison</th>
                                    <th class="text-center">Statut</th>
                                    <th class="text-center">Détails</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expeditions as $expedition)
                                    <tr>
                                        <td class="text-center">
                                            {{ $expedition->type_de_marchandise }}
                                        </td>
                                        <td class="text-center">
                                            {{ $expedition->adresse_de_depart }}
                                        </td>
                                        <td class="text-center">
                                            {{ $expedition->adresse_de_livraison }}
                                        </td>
                                        <td class="text-center">
                                            {{ $expedition->status }}
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('expedition.show', $expedition->id)}}" class="btn btn-info">Détails</a>
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
@endsection
@section('additional-scripts')
    <script src="{{ URL::asset('assets/plugins/jquery-datatable/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                "responsive": false,
                "lengthChange": false,
                "autoWidth": false,
                "paging": true,
                "buttons": ["excel", "pdf", "csv"],
                "language": {
                    "searchPlaceholder": "Rechercher ...",
                    "lengthMenu": "Afficher MENU enregistrements par page",
                    "zeroRecords": "Aucune donnée trouvée",
                    "info": "Showing page PAGE of PAGES",
                    "infoEmpty": "",
                    "infoFiltered": "(Filtré à partir de la liste MAX.)",
                    "lengthMenu": "Montrer _MENU_ enrégistrement(s).",
                    "loadingRecords": "Chargement...",
                    "processing": "En cours...",
                    "search": "_INPUT_",
                    "placeholder": "Rechercher",
                    "info": "_TOTAL_ enrégistrement(s)",
                    "infoEmpty": "0 enregistrement",
                    "zeroRecords": "Aucune donnée trouvée",
                    "paginate": {
                        "first": "Prémier",
                        "last": "Dernier",
                        "next": "Suivant",
                        "previous": "Précédent"
                    },
                }
            });
        });
    </script>
@endsection
