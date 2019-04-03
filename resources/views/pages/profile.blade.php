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
        <link href="css/profile-style.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.js"></script>
    </head>
    <body class="bg-dark">
        <div class="container bootstrap snippet">
            <header class="masthead mb-auto fixed-top bg-dark">
              <nav class="navbar navbar-expand-md navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="inner px-2 collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="masthead-brand nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="masthead-brand nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="masthead-brand nav-link" href="/features">Features</a>
                    </li>
                  </ul>
                  <nav class="nav nav-masthead justify-content-center">
                      @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>
    
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              
                              <a class="dropdown-item" href="/profile">{{ __('Profile') }}</a>
                                
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>
                              
    
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
                    </nav>
                    </li>
                  </ul>
                </div>
              </nav>
            </header>
            
            <div class="d-flex w-100 h-100 p-3 flex-column mt">
            <main role="main">
            <div class="row">
                <div class="col-md-3 ">
                    <div class="list-group ">
                         <a href="#" class="list-group-item list-group-item-action active">Profile</a>
                         <a href="#" class="list-group-item list-group-item-action">History</a>
                    </div>
                </div>
                <div class="col-md-9">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                          <div class="col-md-12">
                              <h4>Your Profile</h4>
                              <hr>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <form>
                            <div class="form-group row">
                              <label for="fullname" class="col-4 col-form-label"> Full Name:</label> 
                              <div class="col-8">
                                  <span>{{ Auth::user()->name }} <span class="caret"></span>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="email" class="col-4 col-form-label">Email:</label> 
                              <div class="col-8">
                                  {{ Auth::user()->email }} <span class="caret"></span>
                              </div>
                            </div>
                         
                        </div>
                            <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">b</div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            </main>
            </div>
    </div>
    </body>