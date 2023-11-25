@extends('layouts.master')
@section('css')
@endsection
@section('content')

		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages justify-content-center  text-center">
				<div class="col-md-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{$message}}
                        </div>
                    @endif
					<div class="card">
						<div class="container-fluid">
                            <div class="row row-sm">
                                <div class="card-body mt-2 mb-2">
                                    <img src="{{URL::asset('assets/img/brand/logo.png')}}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="text-left mb-2">Soumettre une nouvelle expédition</h5>
                                    <form method="POST" action="{{route('expedition.store')}}">
                                        @csrf
                                        <div class="form-group text-left">
                                            <label>Lieu de départ</label>
                                            <input class="form-control" name="lieu_depart" id="lieu_depart" placeholder="Entrer lieu de depart (ex: Ouagadougou, Burkina Faso)" type="text" value="{{old('lieu_depart')}}" required>
                                            @error("lieu_depart")
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group text-left">
                                            <label>Lieu de Livraison</label>
                                            <input class="form-control" name="lieu_livraison" id="lieu_livraison" placeholder="Entrer le lieu de livraison (ex:Lome,Togo)" type="text" value="{{old('lieu_livraison')}}" required>
                                            @error("lieu_livraison")
                                                        <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group text-left">
                                            <label>Type de marchandise</label>
                                            <input class="form-control" name="type_marchandise" id="type_marchandise" placeholder="Entrer le type de marchandise (ex:Aliment, Electronique,)" type="text" value="{{old('type_marchandise')}}" required>
                                            @error("type_marchandise")
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                        </div>
                                        <div class="form-group text-left">
                                            <label>Date de départ</label>
                                            <input class="form-control" name="date_depart" id="date_depart" placeholder="Entrer la date de depart de votre marchandise" type="date" required>
                                            @error("date_depart")
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                        </div>
                                        <div class="form-group text-left">
                                            <label>Date de livraison</label>
                                            <input class="form-control" name="date_livraison" id="date_livraison" placeholder="Entrer la date limite de livraison" type="date" required>
                                            @error("date_livraison")
                                                        <p class="text-danger">{{$message}}</p>
                                             @enderror
                                        </div>
                                        <div class="form-group text-left">
                                            <label>Prix</label>
                                            <input class="form-control" name="prix_expedition" id="prix_expedition" placeholder="Proposer un prix" type="number" value="{{old('prix_expedition')}}" required>
                                            @error("prix_expedition")
                                                        <p class="text-danger">{{$message}}</p>
                                             @enderror
                                        </div>
                                        <div class="form-group text-left">
                                            <label>Numero de serie </label>
                                            <input class="form-control" name="numero_serie" id="numero_serie" placeholder="Entrer le numero de serie de la marchandise" type="text" value="{{old('numero_serie')}}" required>
                                            @error("numero_serie")
                                                        <p class="text-danger">{{$message}}</p>
                                             @enderror
                                        </div>

                                        <button class="btn ripple btn-main-primary btn-block" type="submit">Soumettre</button>
                                    </form>

                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->

@endsection
@section('script')
@endsection
