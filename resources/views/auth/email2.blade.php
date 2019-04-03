<!doctype html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Jekyll v3.8.5">
		<title>Signin Template · Bootstrap</title>

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
		<link href="css/forget-pass.css" rel="stylesheet">
	</head>
  	<body class="text-center">
		<div class="bg-cover">
				<header class="masthead mb-auto fixed-top bg-dark">
					<nav class="navbar navbar-expand-md navbar-dark">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						<div class="inner px-2 collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
							<a class="masthead-brand nav-link" href="cover.html">Home</a>
							</li>
							<li class="nav-item">
							<a class="masthead-brand nav-link" href="about.html">About</a>
							</li>
							<li class="nav-item">
							<a class="masthead-brand nav-link" href="features.html">Features</a>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
							<a class=" masthead-brand nav-link" href="sign_up.html">Register</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
						</ul>
						</div>
					</nav>
				</header>
				<br>
				<br>
				<br>
				<div class="container">
					<div class="row justify-content-center">
							<div class="col-md-8">
									<div class="card">
											<div class="card-header">{{ __('Reset Password') }}</div>
			
											<div class="card-body">
													@if (session('status'))
															<div class="alert alert-success" role="alert">
																	{{ session('status') }}
															</div>
													@endif
			
													<form method="POST" action="{{ route('password.email') }}">
															@csrf
			
															<div class="form-group row">
																	<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
			
																	<div class="col-md-6">
																			<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
			
																			@if ($errors->has('email'))
																					<span class="invalid-feedback" role="alert">
																							<strong>{{ $errors->first('email') }}</strong>
																					</span>
																			@endif
																	</div>
															</div>
			
															<div class="form-group row mb-0">
																	<div class="col-md-6 offset-md-4">
																			<button type="submit" class="btn btn-primary">
																					{{ __('Send Password Reset Link') }}
																			</button>
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
