<!doctype html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Jekyll v3.8.5">
		<title>Sign In</title>

		<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

		<!-- Bootstrap core CSS -->
		<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


		<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
			font-size: 3.5rem;
			}
		}
		</style>
		<!-- Custom styles for this template -->
		<link href="css/sign_in-style.css" rel="stylesheet">
	</head>
  	<body class="text-center">
		<div class="bg-cover">
			<div class="d-flex w-100 h-100 px-3 mx-auto flex-column">
			<header class="masthead">
				<div class="inner">
					<h5><a class="masthead-brand nav-link" href="/">Home</a></h5>
					<h5><a class="masthead-brand nav-link" href="/about">About</a></h5>
					<h5><a class="masthead-brand nav-link" href="/features">Features</a></h5>
				
				</div>
			</header>
		{{-- <form class="form-signin mx-auto">
			<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
				<div class="checkbox mb-3">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
				</div>
  			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  			<p class="mt-4 mb-3 text-muted">&copy; 2017-2019</p>
		</form>
		</div> --}}
		<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="card">
							<div class="card-header">{{ __('Login') }}</div>
			
							<div class="card-body">
								<form method="POST" action="{{ route('login') }}">
									@csrf
			
									<div class="form-group row">
										<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
			
										<div class="col-md-6">
											<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
			
											@if ($errors->has('email'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
											@endif
										</div>
									</div>
			
									<div class="form-group row">
										<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
			
										<div class="col-md-6">
											<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
			
											@if ($errors->has('password'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('password') }}</strong>
												</span>
											@endif
										</div>
									</div>
			
									<div class="form-group row">
										<div class="col-md-6 offset-md-4">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
			
												<label class="form-check-label" for="remember">
													{{ __('Remember Me') }}
												</label>
											</div>
										</div>
									</div>
			
									<div class="form-group row mb-0">
										<div class="col-md-8 offset-md-4">
											<button type="submit" class="btn btn-primary">
												{{ __('Login') }}
											</button>
			
											@if (Route::has('password.request'))
												<a class="btn btn-link" href="{{ route('password.request') }}">
													{{ __('Forgot Your Password?') }}
												</a>
											@endif
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</body>
</html>
