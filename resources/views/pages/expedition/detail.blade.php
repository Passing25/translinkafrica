@extends('layouts.master')
@section('css')
@endsection
@section('content')

<div class="row row-sm">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">
                    Détails de l'expédition
                </h1>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered text-nowrap">
                        <tbody>
                            <tr>
                                <td>Type de marchandise</td>
                                <td>{{$expedition->type_de_marchandise}}</td>
                            </tr>
                            <tr>
                                <td>Lieu de Depart</td>
                                <td>{{$expedition->adresse_de_depart}}</td>
                            </tr>
                            <tr>
                                <td>Lieu de Livraison</td>
                                <td>{{$expedition->adresse_de_livraison}}</td>
                            </tr>
                            <tr>
                                <td>Date de depart</td>
                                <td>{{$expedition->date_de_depart}}</td>
                            </tr>
                            <tr>
                                <td>Date de Livraison</td>
                                <td>{{$expedition->date_de_livraison}}</td>
                            </tr>
                            <tr>
                                <td>Prix</td>
                                <td>{{$expedition->prix}}</td>
                            </tr>
                            <tr>
                                <td>Numero de Serie</td>
                                <td>{{$expedition->numero_de_serie}}</td>
                            </tr><tr>
                                <td>Statut</td>
                                <td>{{$expedition->status}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5 col-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Liste des proposition</h1>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th class="text-center">Nom de la Societe</th>
                                <th class="text-center">Prix</th>
                                <th class="text-center">Message</th>
                                <th class="text-center">Type de proposition</th>
                                <th class="text-center">Statut</th>

                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
