<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Yogyakarta</title>

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
    <link href="css/city-style.css" rel="stylesheet">
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
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1600 854"><image height="100%" width="100%" href="css/yogyakarta.jpg"/></svg>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Candi Prambanan</h1>
            <p>Discover the history of this ancient temple</p>
          
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1600 1059"><image width="100%" height="100%" href="css/alun-alun kidul.jpg"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Alun Alun Kidul</h1>
            <p>Discover many activities that you can do in this vast garden</p>
            
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 2560 1440"><image width="100%" height="100%" href="css/borobudur-10.jpg"/></svg>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Candi Borobudur</h1>
            <p>Explore this iconic Yogyakarta ancient temple</p>
            
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
        <p class="lead">This famous Buddhist temple, dating from the 8th and 9th centuries, Candi Borobudur is located in central Java. It was built in three tiers: a pyramidal base with five concentric square terraces, the trunk of a cone with three circular platforms and, at the top, a monumental stupa. The walls and balustrades are decorated with fine low reliefs, covering a total surface area of 2,500 m2. Around the circular platforms are 72 openwork stupas, each containing a statue of the Buddha. The monument was restored with UNESCO's help in the 1970s.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 500 500"><image width="100%" height="100%" href="css/borobudur.jpg"/></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <p class="lead">Alun-alun Kidul­ is a southern region of Yogyakarta Palace. Many activities could be seen in Alun-alun Kidul­. Approaching evening, Alun-alun Kidul­ becomes an interesting recreation place. Formerly used by the kingdom's army to work out, the place has now transformed into a public space flocked by visitors, people of all communities and ages are gathering here. </p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 500 500"><image width="100%" height="100%" href="css/alunalun.jpg"/></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <p class="lead">Built in the 10th century, Candi Prambanan is the largest temple compound dedicated to Shiva in Indonesia. Rising above the centre of the last of these concentric squares are three temples decorated with reliefs illustrating the epic of the Ramayana, dedicated to the three great Hindu divinities (Shiva, Vishnu and Brahma) and three temples dedicated to the animals who serve them.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image mx-auto" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 500 500"><image width="100%" height="100%" href="css/Legenda-Candi-Prambanan.jpg"/></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <p class="lead">Explore the beautiful city of Yogyakarta by purchasing our tour packages.</p>
        </div>
        <div class="col-md-5 text-center">
            <p><a class="btn btn-lg" href="/checkout" role="button">{{ __('Purchase') }}</a></p>
        </div>
        <!-- <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
        </div> -->
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
