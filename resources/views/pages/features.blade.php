<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Features</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Javascripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

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
    <link href="{{ asset('/css/features-style.css') }}" rel="stylesheet">
</head>
<body class="text-center">
    <div class="bg-cover">
      <div class="d-flex w-100 h-100 px-3 mx-auto flex-column">
        <header class="masthead mb-auto">
          <div class="inner">
            <h5><a class="masthead-brand nav-link" href="/">Home</a></h5>
            <h5><a class="masthead-brand nav-link" href="/about">About</a></h5>
            <h5><a class="masthead-brand nav-link" href="/features">Features</a></h5>
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
          </div>
        </header>
        <h1 class="cover-heading">Why use Jelajah ?</h1>
        {{-- <div class="cover-container d-flex w-100 h-100 p-3 mt-10 mx-auto flex-column">
        <main role="main" class="inner cover"> --}}
         
          
          <h2  style="color: #FFFFFF;
          font-family: -apple-system,BlinkMacSystemFont, Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
          font-size: 35px;
          line-height: 45px;
          text-align: left;">Customizable Packages</h2>
          
          <p  style="color: #FFFFFF;
          font-family: -apple-system,BlinkMacSystemFont, Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
          font-size: 29px;
          font-weight: 200;
          line-height: 37px;
          text-align: left;"> Tour packages can be customized to suit the user’s needs</p>

          <br>
          <br>
          <br>

          <h2  style="color: #FFFFFF;
          font-family: -apple-system,BlinkMacSystemFont, Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
          font-size: 35px;
          line-height: 45px;
          text-align: right;">Scheduled and Unscheduled</h2>

          <p  style="color: #FFFFFF;
          font-family: -apple-system,BlinkMacSystemFont, Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
          font-size: 29px;
          font-weight: w00;
          line-height: 37px;
          text-align: right;"> Users can buy scheduled or unscheduled tour packages</p>

          <h2  style="color: #FFFFFF;
          font-family: -apple-system,BlinkMacSystemFont, Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
          font-size: 35px;
          line-height: 45px;
          text-align: left;">Detailed Options</h2>
          
          <p  style="color: #FFFFFF;
          font-family: -apple-system,BlinkMacSystemFont, Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
          font-size: 29px;
          font-weight: 200;
          line-height: 37px;
          text-align: left;">Users can explore Indonesia in more detail compared to our competitors</p>
        
        </main>
{{--     
        <footer class="mastfoot mt-auto">
          <div class="inner">
            <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
          </div>
        </footer> --}}
      {{-- </div> --}}
    </div>
  </div>
    
    
</body>