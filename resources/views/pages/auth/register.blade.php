@extends('layouts.master2')
@section('css')
@endsection
@section('content')

		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages justify-content-center  text-center">
				<div class="col-md-8">
					<div class="card">
						<div class="container-fluid">
                            <div class="row row-sm">
                                <div class="card-body mt-2 mb-2">
                                    <img src="{{URL::asset('assets/img/brand/logo.png')}}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <h5 class="text-left mb-2">S'inscrire Gratuitement !</h5>
                                    <form method="POST" action="{{route('enregistrement')}}">
                                        @csrf
                                        <div class="row sm">
                                            <div class="col-md-6">
                                                <div class="form-group text-left">
                                                    <label>Nom</label>
                                                    <input class="form-control" name="nom_admin" id="nom_admin" placeholder="Entrer votre nom" type="text">
                                                    @error("nom_admin")
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group text-left">
                                                    <label>Prénom</label>
                                                    <input class="form-control" name="prenom_admin" id="prenom_admin" placeholder="Entrer votre prénom" type="text">
                                                    @error("prenom_admin")
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group text-left">
                                            <label>Société</label>
                                            <input class="form-control" name="nom_societe" id="nom_societe" placeholder="Entrer le nom de votre Entreprise" type="text" required>
                                            @error("nom_societe")
                                                        <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group text-left">
                                            <label>Secteur d'activité</label>
                                            <select class="form-control" name="secteur_activite" id="secteur_activite" required>
                                                @foreach ($secteurs as $secteur)
                                                    <option value="{{$secteur}}">{{$secteur}}</option>
                                                @endforeach
                                            </select>
                                            @error("secteur_activite")
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                        </div>
                                        <div class="form-group text-left">
                                            <label>Email</label>
                                            <input class="form-control" name="email_admin" id="email_admin" placeholder="Entrer votre email" type="text" required>
                                            @error("email_admin")
                                                        <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                        </div>
                                        <div class="form-group text-left">
                                            <label>Confirmer votre email</label>
                                            <input class="form-control" name="confirmation_email_admin" id="confirmation_email_admin" placeholder="Entrer votre email" type="text" required>
                                            @error("confirmation_email_admin")
                                                        <p class="text-danger">{{$message}}</p>
                                             @enderror
                                        </div>
                                        <div class="form-group text-left">
                                            <label>Mot de passe</label>
                                            <input class="form-control" name="password_admin" id="password_admin" placeholder="Entrer votre mot de passe" type="password" required>
                                            @error("password_admin")
                                                        <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group text-left">
                                            <label>Confirmer votre mot de passe</label>
                                            <input class="form-control" name="confirmation_password_admin" id="confirmation_password_admin" placeholder="Entrer votre mot de passe" type="password" required>
                                            @error("confirmation_password_admin")
                                                        <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <button class="btn ripple btn-main-primary btn-block" type="submit">s'inscrire</button>
                                    </form>
                                    <div class="text-left mt-5 ml-0">
                                        <p class="mb-0">Vous avez deja un compte? <a href="{{url('login')}}">Se connecter</a></p>
                                    </div>
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
