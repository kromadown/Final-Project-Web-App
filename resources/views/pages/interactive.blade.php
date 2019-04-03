<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Islands</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">

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
    <link href="css/interactive.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  </head>
  <body>
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
          <ul class="navbar-nav ml-auto">
            @guest
            <li class="nav-item">
                <a class="masthead-brand nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="masthead-brand nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
    </header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 2732 1821"><image width="100%" height="100%" href="css/farm.jpg"/></svg>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Indonesia's best nature walk locations</h1>
            <p>Visit these places to feel the clean air and burn some calories while enjoying the beautiful scenery.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 2732 1821"><image width="100%" height="100%" href="css/waves.jpg"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Top 10 must visits for surfers</h1>
            <p>Don't forget to visit these 10 spots if you consider yourself a surfing enthusiast !!</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 2732 1821"><image width="100%" height="100%" href="css/mountain.jpg"/></svg>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Indonesia's most beautiful volcanoes.</h1>
            <p>We know Indonesia is full of exciting and beautiful volcanoes. Here are some of our favorites.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

        <!-- START THE FEATURETTES -->

    <div class="row featurette">
      <div class="col-md-7">
        <a style="color: rgb(80, 80, 80);" href="/java">
          <h2 class="featurette-heading">{{ __('Java') }}</h2>
          
        </a>
        <p class="lead">The fourth largest island in Indonesia but contains more than half of the nation’s population and dominates it politically and economically. The capital of Java and of the country is Jakarta (formerly Batavia), which is also Indonesia’s largest city.</p>
      </div>
      <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 500 500"><image width="100%" height="100%" href="css/jawa.jpg"/></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <a style="color: rgb(80, 80, 80);" href="#">
          <h2 class="featurette-heading">Sumatera</h2>
        </a>
        <p class="lead">The second largest (after Borneo) of the Greater Sunda Islands, in the Malay Archipelago. It is separated in the northeast from the Malay Peninsula by the Strait of Malacca and in the south from Java by the Sunda Strait.</p>
      </div>
      <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 500 500"><image width="100%" height="100%" href="css/sumatera.jpg"/></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <a style="color: rgb(80, 80, 80);" href="#">
          <h2 class="featurette-heading">Sulawesi</h2>
        </a>
        <p class="lead">One of the four Greater Sunda Islands, Indonesia. A curiously shaped island with four distinct peninsulas that form three major gulfs—Tomini (the largest) on the northeast, Tolo on the east, and Bone on the south.</p>
      </div>
      <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 500 500"><image width="100%" height="100%" href="css/sulawesi.jpg"/></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <a style="color: rgb(80, 80, 80);" href="#">
            <h2 class="featurette-heading">Kalimantan</h2>
          </a>
          <p class="lead">Southern three-fourths of the island of Borneo that is politically part of Indonesia; the rest of the island is divided between the Malaysian states of Sabah and Sarawak and, between them, the small sultanate of Brunei.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 500 500"><image width="100%" height="100%" href="css/kalimantan.jpg"/></svg>
        </div>
      </div>
  
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <a style="color: rgb(80, 80, 80);" href="#">
            <h2 class="featurette-heading">Papua</h2>
          </a>
          <p class="lead">Papua retains many traditional cultures and is home to some of the richest biodiversity in the world. Lorentz National Park, a UNESCO World Heritage Site and the largest protected area in the Asia-Pacific region, ranges from Papua's southwest coast to its central mountains.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 500 500"><image width="100%" height="100%" href="css/papua.jpg"/></svg>
        </div>
      </div>
  
      <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2019 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
</body>
</html>
