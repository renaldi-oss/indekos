<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Website Indekos">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>INDEKOS</title>

  {{-- <link rel="shortcut icon" href="/assets/favicon.ico" type="image/png"> --}}

  <link rel="stylesheet" href="/css/magnific-popup.css">
  <link rel="stylesheet" href="/css/slick.css">
  <link rel="stylesheet" href="/css/LineIcons.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/default.css">
  <link rel="stylesheet" href="/css/landing-page.css">
</head>

<body>

  {{-- preload --}}
  <div class="preloader">
    <div class="loader">
      <div class="ytp-spinner">
        <div class="ytp-spinner-container">
          <div class="ytp-spinner-rotator">
            <div class="ytp-spinner-left">
              <div class="ytp-spinner-circle"></div>
            </div>
            <div class="ytp-spinner-right">
              <div class="ytp-spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- navbar --}}
  <section class="navbar-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav navbar-brand">
              <li class="nav-item active"><a class="page-scroll" href="/home">INDEKOS</a></li>
            </ul>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
              <ul class="navbar-nav m-auto">
                <li class="nav-item active"><a class="page-scroll" href="#home">home</a></li>
                <li class="nav-item"><a class="page-scroll" href="#job">Room</a></li>
                <li class="nav-item"><a class="page-scroll" href="#about">About</a></li>
              </ul>
            </div>
            
            <div class="navbar-btn d-none d-sm-inline-block">
              <ul>
                <li><a class="solid" href="/register">Register</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>

  {{-- home --}}
  <section id="home" class="slider_area">
    <div id="carouselThree" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
        <li data-target="#carouselThree" data-slide-to="1"></li>
        <li data-target="#carouselThree" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="slider-content">
                  <h1 class="title">Offer Room Vacancy</h1>
                  <ul class="slider-btn rounded-buttons">
                    <li><a class="main-btn rounded-one" href="/home">GET STARTED</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-image-box d-none d-lg-flex align-items-end">
            <div class="slider-image">
              <img src="/images/landing-page/slider/1.png" alt="Hero">
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="slider-content">
                  <h1 class="title">Find Spesific Room</h1>
                  <ul class="slider-btn rounded-buttons">
                    <li><a class="main-btn rounded-one" href="/register">GET STARTED</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-image-box d-none d-lg-flex align-items-end">
            <div class="slider-image">
              <img src="/images/landing-page/slider/3.png" alt="Hero">
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="slider-content">
                  <h1 class="title">Find Affordable Dorm room</h1>
                  <ul class="slider-btn rounded-buttons">
                    <li><a class="main-btn rounded-one" href="/register">GET STARTED</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-image-box d-none d-lg-flex align-items-end">
            <div class="slider-image">
              <img src="/images/landing-page/slider/2.png" alt="Hero">
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
        <i class="lni lni-arrow-left"></i>
      </a>
      <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
        <i class="lni lni-arrow-right"></i>
      </a>
    </div>
  </section>

  {{-- services --}}
  {{-- <section id="services" class="features-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="section-title text-center pb-10">
            <h3 class="title">Our Services</h3>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-7 col-sm-9">
          <div class="single-features mt-40">
            <div class="features-title-icon d-flex justify-content-between">
              <h4 class="features-title"><a href="#">Find Spesific Job</a></h4>
              <div class="features-icon">
                <i class="lni lni-briefcase"></i>
                <img class="shape" src="/images/landing-page/f-shape-1.svg" alt="Shape">
              </div>
            </div>
            <div class="features-content">
              <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit deserunt possimus ab maxime ratione, nam pariatur libero tempora sapiente repudiandae, repellat impedit exercitationem, qui nobis!</p>
              <a class="features-btn" href="/home">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-7 col-sm-9">
          <div class="single-features mt-40">
            <div class="features-title-icon d-flex justify-content-between">
              <h4 class="features-title"><a href="#">Application Letter</a></h4>
              <div class="features-icon">
                <i class="lni lni-book"></i>
                <img class="shape" src="/images/landing-page/f-shape-1.svg" alt="Shape">
              </div>
            </div>
            <div class="features-content">
              <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit deserunt possimus ab maxime ratione, nam pariatur libero tempora sapiente repudiandae, repellat impedit exercitationem, qui nobis!</p>
              <a class="features-btn" href="/home">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-7 col-sm-9">
          <div class="single-features mt-40">
            <div class="features-title-icon d-flex justify-content-between">
              <h4 class="features-title"><a href="#">Company Letter</a></h4>
              <div class="features-icon">
                <i class="lni lni-apartment"></i>
                <img class="shape" src="/images/landing-page/f-shape-1.svg" alt="Shape">
              </div>
            </div>
            <div class="features-content">
              <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit deserunt possimus ab maxime ratione, nam pariatur libero tempora sapiente repudiandae, repellat impedit exercitationem, qui nobis!</p>
              <a class="features-btn" href="/home">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- job --}}
  <section id="job" class="pricing-area ">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="section-title text-center pb-25">
            <h3 class="title">Dorm For You</h3>
            {{-- <p class="text">There is job for you</p> --}}
          </div>
        </div>
      </div>
      <div class="row justify-content-center">

        @foreach ($rooms as $room)
          <div class="col-lg-4 col-md-7 col-sm-9">
            <div class="pricing-style mt-30">
              <div class="pricing-icon text-center">
                <img src="{{ asset('storage/'. $room->company->photo ) }}" alt="poto" class="rounded">
              </div>
              <div class="pricing-header text-center">
                <h5 class="sub-title">{{ $room->company->name. ' at ' . $room->company->city}}</h5>
              </div>
              <div class="pricing-list">
                <ul>
                  <li><i class="lni lni-check-mark-circle"></i>Description : {{ Str::limit($room->description, 35, ' ...') }}</li>
                  <li><i class="lni lni-check-mark-circle"></i>Price       : {{ $room->price }}</li>
                </ul>
              </div>
              <div class="pricing-btn rounded-buttons text-center">
                <a class="main-btn rounded-one" href="/rooms/{{ $room->id }}">GET STARTED</a>
              </div>    
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- About --}}
  <section id="about" class="about-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="faq-content mt-45">
            <div class="about-title">
              <h6 class="sub-title">A Little More About This Project</h6>
              <h4 class="title">Frequently Asked Questions <br> About Indekos</h4>
            </div>
            <div class="about-accordion">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What is Indekos?</a>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="text">Indekos is a website for people who want to find Dorm room.</p>
                    </div>
                  </div> 
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Why and when was Indekos created?</a>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="text">Indekos was created for the end of semester project for Website-Based Programming in 2022 with Laravel Framework.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Does Indekos really exist and operate?</a>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="text">Indekos is just a website project to us</p>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="about-image mt-50">
            <img src="{{ asset('storage/images/test/test.jpg' ) }}" alt="about">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="footer-area footer-dark">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <ul class="social text-center">
            <li><a href="hhttps://github.com/renaldi-oss"><i class="lni lni-github-original"></i></a></li>
            <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
            <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
            <li><a href="#"><i class="lni lni-world"></i></a></li>
          </ul>
          <div class="link text-center mt-3">
            <a href="/">Indekos - 2022</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  {{-- back to top --}}
  <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

  <script src="/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="/js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/slick.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/ajax-contact.js"></script>
  <script src="/js/images/landing-pageloaded.pkgd.min.js"></script>
  <script src="/js/isotope.pkgd.min.js"></script>
  <script src="/js/jquery.easing.min.js"></script>
  <script src="/js/scrolling-nav.js"></script>
  <script src="/js/main.js"></script>
</body>

</html>