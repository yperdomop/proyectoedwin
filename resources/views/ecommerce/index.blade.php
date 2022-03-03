<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfect Work</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/splide-default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    <style type="text/css">
      .navbar .megamenu{ padding: 1rem; }
      /* ============ desktop view ============ */
      @media all and (min-width: 992px) {
        
        .navbar .has-megamenu{position:static!important;}
        .navbar .megamenu{left:0; right:0; width:100%; margin-top:0;  }
        
      }	
      /* ============ desktop view .end// ============ */
      
      
      /* ============ mobile view ============ */
      @media(max-width: 991px){
        .navbar.fixed-top .navbar-collapse, .navbar.sticky-top .navbar-collapse{
          overflow-y: auto;
            max-height: 90vh;
            margin-top:10px;
        }
      }
      /* ============ mobile view .end// ============ */
      </style>
</head>
<body>
    {{--  navegación  --}}
    <nav class="navbar navbar-expand-lg" style="background-color:#E67E22">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="{{asset('img/logos/logo perfect work.svg')}}" width="154" height="74"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="¿Qué buscas hoy?" aria-label="Search">
              <button class="btn btn-outline-dark me-2" type="submit">Buscar</button>
              <button class="btn btn-outline-dark"><i class="fas fa-cart-shopping"></i></button>
            </form>
          </div>
        </div>
    </nav>
    {{--  menu productos  --}}
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color:#303030">
      <div class="container-fluid">
        <label class="navbar-brand">Catálogo</label>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
          <ul class="navbar-nav">
            
            <li class="nav-item dropdown has-megamenu">
              <a class="nav-link" href="#" data-bs-toggle="dropdown"> Mega menu  </a>
              <div class="dropdown-menu megamenu" role="menu">
                <div class="row g-3">
                  <div class="col-lg-3 col-6">
                    <div class="col-megamenu">
                      <h6 class="title">Title Menu One</h6>
                      <ul class="list-unstyled">
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                      </ul>
                    </div>  <!-- col-megamenu.// -->
                  </div><!-- end col-3 -->
                  <div class="col-lg-3 col-6">
                    <div class="col-megamenu">
                      <h6 class="title">Title Menu Two</h6>
                      <ul class="list-unstyled">
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                      </ul>
                    </div>  <!-- col-megamenu.// -->
                  </div><!-- end col-3 -->
                  <div class="col-lg-3 col-6">
                    <div class="col-megamenu">
                      <h6 class="title">Title Menu Three</h6>
                      <ul class="list-unstyled">
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                      </ul>
                    </div>  <!-- col-megamenu.// -->
                  </div>    
                  <div class="col-lg-3 col-6">
                    <div class="col-megamenu">
                      <h6 class="title">Title Menu Four</h6>
                      <ul class="list-unstyled">
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                      </ul>
                    </div>  <!-- col-megamenu.// -->
                  </div><!-- end col-3 -->
                </div><!-- end row --> 
              </div> <!-- dropdown-mega-menu.// -->
            </li>
          </ul>
          
        </div> <!-- navbar-collapse.// -->
      </div> <!-- container-fluid.// -->
    </nav>

       {{--  banner carrusel --}}

       <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('img/carousel.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/carousel1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/carousel2.jpg')}}" class="d-block w-100" alt="...">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{--  Tarjetas  --}}

    <section class="page-section pb-3">
      <h2 class="text-center page-section-heading" style="color: #303030">Los más vendidos</h2>
      <div class="container container--flex">
          <div class="column column--50-25">
              <img src="img/10.jpg" alt="" class="today-special__img">
              <div class="today-special__title">Especiales del 2017</div>
              <div class="today-special__price">$100</div>
          </div>
          <div class="column column--50-25">
              <img src="img/11.png" alt="" class="today-special__img">
              <div class="today-special__title">Especiales del 2018</div>
              <div class="today-special__price">$100</div>
          </div>
          <div class="column column--50-25">
              <img src="img/12.jpg" alt="" class="today-special__img">
              <div class="today-special__title">Especiales del 2019</div>
              <div class="today-special__price">$100</div>
          </div>
          <div class="column column--50-25">
              <img src="img/13.jpg" alt="" class="today-special__img">
              <div class="today-special__title">Especiales del 2020</div>
              <div class="today-special__price">$100</div>
          </div>
      </div>
  </section>
  {{--  slider2  --}}
  <section class="page-section pb-3">
    <h2 class="page-section-heading text-center mb-3" style="color: #303030">Ofertas del día</h2>

    <div class="splide">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide"><img src="img/14.jpg"></li>
          <li class="splide__slide"><img src="img/15.jpg"></li>
          <li class="splide__slide"><img src="img/16.png"></li>
        </ul>
      </div>
      <div class="splide__progress">
        <div class="splide__progress__bar">
        </div>
      </div>
    </div>
  </section>  
  
  {{--  testimonios  --}}
  <section class="page-section" id="servicios">
    <div class="container">

        <!-- Sección Servicios Encabezado-->
        <h2 class="page-section-heading text-center mb-3" style="color: #303030">Testimonios</h2>
        
        <!-- Items Sección Servicios-->
        <div class="row justify-content-center">

            <!-- Servicios Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card">
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body" style="height: 250px">
                        <h5 class="card-title text-center">Programación web</h5>
                        <p class="card-text">Dale mas vida a tu negocio con un sitio en internet</p> 
                        <p class="card-text fw-bold">¡Nosotros te ayudamos!.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card">
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body" style="height: 250px">
                        <h5 class="card-title text-center">Sistemas de información</h5>
                        <p class="card-text">Administra y controla tu negocio, de una forma facíl y eficaz.</p>
                        <p class="card-text fw-bold">¡Animate al cambio!.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <!-- Portfolio Item 3-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="card">
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body" style="height: 250px">
                        <h5 class="card-title text-center">E-Commerce</h5>
                        <p class="card-text">Aumenta las ventas en internet de tus productos y servicios, haz que tu negocio crezca.</p>
                        <p class="card-text fw-bold">¡Nosotros te ayudamos con marketing digital!.</p>
                      <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

<!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Dónde estamos</h4>
                        <p class="lead mb-0">
                            Perfect Work Publicidad
                            <br>
                            <i class="fas fa-fw fa-phone"></i> PBX: (+57) 601 589 7460
                            <br>
                            <i class="fas fa-fw fa-info"></i>info@perfectworkpublicidad.com
                            <br>
                            <i class="fas fa-fw fa-map-location-dot"></i> Carrera 9 # 8-15
                            <br>
                            <i class="fas fa-fw fa-city"></i> Bogotá D.C, Colombia
                            </p>

                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Visita nuestras redes</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-whatsapp"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Políticas</h4>
                        <p class="lead mb-0">
                            <a class="text-white" href="">Políticas de privacidad</a>
                            <br>
                            <a class="text-white" href="">Términos y condiciones</a>
                            <br>
                            <a class="text-white" href="">Quiénes somos</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->

        <div class="copyright py-4 text-center text-white">
            
            <div class="d-flex justify-content-between align-self-center">
              <div><img class="" src="{{asset('img/logos/logo perfect work.svg')}}" width="100" height="50"></div>
              <small>Derechos reservados &copy; Perfect Work 2022</small>
              <div></div>
            </div>
        </div>
{{--  script  --}}
<script src="{{ mix('js/app.js') }}" defer></script>
<script src="{{ asset('js/splide.min.js') }}"></script>
<script>
  var splide = new Splide( '.splide', {
    autoplay    : true,
    rewind      : true,
    pauseOnHover: false,
    perPage      : 2,
    gap: 10,
    fixedHeight: 320,
    pauseOnFocus: false,
    breakpoints: {
      320: {
        fixedHeight: 80
      },
      375: {
        fixedHeight: 100
      },
      425: {
        fixedHeight: 110
      },
      768: {
        fixedHeight: 200
      },
      1024: {
        fixedHeight: 280
      },
    }
  } );
  
  splide.mount();
  
</script>
</body>
</html>