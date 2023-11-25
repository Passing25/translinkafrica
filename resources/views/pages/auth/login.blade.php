@extends('layouts.master2')
@section('css')
@endsection
@section('content')

		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages text-center">
				<div class="col-md-12">
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @endif
					<div class="card">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
								<div class="mt-5 pt-4 p-2 pos-absolute">
									<img src="{{URL::asset('assets/img/brand/logo-light.png')}}" class="header-brand-img mb-4" alt="logo">
									<div class="clearfix"></div>
									<img src="{{URL::asset('assets/img/svgs/user.svg')}}" class="ht-100 mb-0" alt="user">
									<h5 class="mt-4 text-white">Slogan</h5>
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<img src="{{URL::asset('assets/img/brand/logo.png')}}" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
											<div class="clearfix"></div>
											<form method="POST" action="{{route('connecter')}}">
                                                @csrf
												<h5 class="text-left mb-2">Se Connecter </h5>
												<div class="form-group text-left">
													<label>Email</label>
													<input class="form-control" name="email" id="email" placeholder="Entrer votre email" type="text">
                                                    @error("confirmation_email_admin")
                                                        <p class="text-danger">{{$message}}</p>
                                                     @enderror
												</div>
												<div class="form-group text-left">
													<label>Password</label>
													<input class="form-control" name="password" id="password" placeholder="saisissez votre mot de passe" type="password" required>
                                                    @error("password")
                                                    <p class="text-danger">{{$message}}</p>
                                                     @enderror
												</div>
												<button class="btn ripple btn-main-primary btn-block" type="submit">Se connecter</button>
											</form>
											<div class="text-left mt-5 ml-0">
												<div class="mb-1"><a href="">Mot de passe oublié ?</a></div>
												<div>Créer un compte<a href="#">S'inscrire ici ! </a></div>
											</div>
										</div>
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
