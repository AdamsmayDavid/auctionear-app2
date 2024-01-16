    
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Big Bike</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Styles -->

        <!-- carousel -->
        <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
        <script src="assets/js/main.js"></script>
        
    <style>
        #picturebox{
        width: 80%
        background-color: grey;
        color: white;
        }

    
    </style>
    </head>

    <body>
        
              <!-- nav -->
              <nav id="NavBar" class="navbar sticky-top navbar-expand-lg navbar-trans bg-light p-4 ">
      <div class="container">
        <a class="navbar-brand text-primary" href="/seller/home"><b>Auctio<span style="color:#FF6C22;">near</span></b> </a>
        <button id="TogglerIcon" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-0 active" aria-current="page" href="seller/home">Home</a>
            </li>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Vehicle
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark bg-primary">
                        <li><a class="dropdown-item" href="/sellerMotorcycle">Motorcycle</a></li>
                        <li><a class="dropdown-item" href="/sellerSedan">Sedan</a></li>
                        <li><a class="dropdown-item" href="/sellerSuv">Suv</a></li>
                        <li><a class="dropdown-item" href="/sellerVan">Ban</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
            <li class="nav-item">
              <a class="nav-link mx-0" href="#">How to sell</a>
            </li>
            <li class="logout nav-item dropdown mt-1">
                                <a id="navbarDropdown" class="btn btn-primary btn-sm dropdown-toggle text-light"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                &nbsp;{{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-dark dropdown-menu-end  bg-primary" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-light2" href="#">
                                        {{ __('Message') }}
                                    </a>
                                
                                    <a class="dropdown-item text-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
          </ul>
        </nav>
        <div class="container mt-5">
            <h1 class="text-center text-primary">MOTORCYCLE</h1>
             <!-- creation btn for seller -->
             <nav class="navbar bg-body-tertiary">
                        <div class="container-fluid">
                            <a class="btn btn-outline-primary btn-lg" href="/createAuction">Create Auction</a>
                            <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary btn-md" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
             <!-- creation btn for seller end-->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 ">
                <div class="col">
                    <div class="card">
                    <img src="assets/images/red.jpg" class="card-img-top" alt="Item 1">
                    <div class="card-body">
                        <h5 class="card-title">Item 1</h5>
                        <p class="card-text">Description </p>
                        <p class="card-text">Recent Bid: </p>
                        <a href="/sellerBiddingPage" class="btn btn-primary">View</a>
                    </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                    <img src="assets/images/red.jpg" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <h5 class="card-title">Item 2</h5>
                        <p class="card-text">Description .</p>
                        <p class="card-text">Recent Bid:</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                    </div>
                </div>


     <!-- script file -->
     <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/owlcarousel/owl.carousel.min.js"></script>
            <script src="assets/js/main.js"></script>


    </body>
    </html>

