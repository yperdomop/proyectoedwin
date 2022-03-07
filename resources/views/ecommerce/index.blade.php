<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfect Work</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
</head>

<body>
    {{--  header  --}}
    <header class="container-fluid" style="background-color:#E67E22">
        <div class="d-flex justify-content-between">
            <a class="navbar-brand" href="{{route('ecommerce.index')}}"><img src="{{ asset('img/logos/logo perfect work.svg') }}" width="154"></a>
            <div class="d-flex align-self-center">
            <div class="input-group me-2 buscar">
                <input class="form-control" type="search" placeholder="¿Qué buscas hoy?" aria-label="Search">
                <span class="input-group-text"><i class="fas fa-magnifying-glass"></i></span>
            </div>
                <button class="btn btn-outline-dark me-2"><i class="fas fa-cart-shopping"></i></button>
                <button class="btn btn-outline-dark"><i class="fas fa-user"></i></button>
            </div>
        </div>
        <div class="input-group me-2 buscar-pequeno">
            <input class="form-control" type="search" placeholder="¿Qué buscas hoy?" aria-label="Search">
            <span class="input-group-text"><i class="fas fa-magnifying-glass"></i></span>
        </div>
    </header>
    

    {{-- menu productos más vendidos --}}
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-nav">
        <div class="container-fluid">
            <label class="navbar-brand">Catálogo</label>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown"> Mega menu </a>
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
                                    </div> <!-- col-megamenu.// -->
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
                                    </div> <!-- col-megamenu.// -->
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
                                    </div> <!-- col-megamenu.// -->
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
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                            </div><!-- end row -->
                        </div> <!-- dropdown-mega-menu.// -->
                    </li>
                </ul>

            </div> <!-- navbar-collapse.// -->
        </div> <!-- container-fluid.// -->
    </nav>

    {{-- banner carrusel oferta --}}
    <section >
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                  class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="{{ asset('img/carousel.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="{{ asset('img/carousel1.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="{{ asset('img/carousel2.jpg') }}" class="d-block w-100" alt="...">
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>
    </section>

    {{-- Tarjetas --}}
    <section class="page-section pb-3">
        <h2 class="text-center page-section-heading">Los más vendidos</h2>
        <div class="container container--flex">
            <div class="column column--50-25">
                <img src="img/10.jpg" alt="" class="product__img">
                <div class="product__title">Especiales del 2017</div>
                <div class="product__price">$100</div>
            </div>
            <div class="column column--50-25">
                <img src="img/11.png" alt="" class="product__img">
                <div class="product__title">Especiales del 2018</div>
                <div class="product__price">$100</div>
            </div>
            <div class="column column--50-25">
                <img src="img/12.jpg" alt="" class="product__img">
                <div class="product__title">Especiales del 2019</div>
                <div class="product__price">$100</div>
            </div>
            <div class="column column--50-25">
                <img src="img/13.jpg" alt="" class="product__img">
                <div class="product__title">Especiales del 2020</div>
                <div class="product__price">$100</div>
            </div>
        </div>
    </section>
    
    {{-- slider2 --}}
    <section class="page-section pb-3">
        <h2 class="page-section-heading text-center mb-3">Ofertas del día</h2>

        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"><img src="img/11.png" width="100%" style="border-radius: 1em"></li>
                    <li class="splide__slide"><img src="img/12.jpg" width="100%" style="border-radius: 1em"></li>
                    <li class="splide__slide"><img src="img/13.jpg" width="100%" style="border-radius: 1em"d></li>
                </ul>
            </div>
            <div class="splide__progress">
                <div class="splide__progress__bar">
                </div>
            </div>
        </div>
    </section>

    {{-- testimonios --}}
    <section class="page-section" id="servicios">
        <div class="container">

            <!-- Sección Servicios Encabezado-->
            <h2 class="page-section-heading text-center mb-3">Testimonios</h2>

            <!-- Items Sección Servicios-->
            <div class="row justify-content-center">

                <!-- Servicios Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card testimonio-borde">
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
                    <div class="card testimonio-borde">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body" style="height: 250px">
                            <h5 class="card-title text-center">Sistemas de información</h5>
                            <p class="card-text">Administra y controla tu negocio, de una forma facíl y eficaz.
                            </p>
                            <p class="card-text fw-bold">¡Animate al cambio!.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card testimonio-borde">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body" style="height: 250px">
                            <h5 class="card-title text-center">E-Commerce</h5>
                            <p class="card-text">Aumenta las ventas en internet de tus productos y servicios, haz
                                que tu negocio crezca.</p>
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
                    <h4 class="text-uppercase mb-4 fw-bold">Dónde estamos</h4>
                    <p class="lead-footer mb-0">
                        <img src="{{ asset('img/logos/logo-footer.png') }}" width="154">
                        <br>
                        <br>
                        <i class="fas fa-fw fa-mobile"></i> (+57) 311 830 1697<br>
                        <i class="fas fa-fw fa-mobile-button"></i> (+57) 301 334 5069
                        <br>
                        <i class="fas fa-fw fa-phone"></i> PBX: (+57) 601 589 7460
                        <br>
                        <i class="fas fa-fw fa-envelope"></i> info@perfectworkpublicidad.com
                        <br>
                        <i class="fas fa-fw fa-map-location-dot"></i> Carrera 9 # 8-15
                        <br>
                        <i class="fas fa-fw fa-city"></i> Bogotá D.C, Colombia
                    </p>

                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4 fw-bold">Visita nuestras redes</h4>
                    <a class="btn btn-outline-blanconaranja btn-social mx-1" href="https://www.facebook.com/perfectworkpublicidad" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-blanconaranja btn-social mx-1" href="https://www.instagram.com/perfectworkpublicidad" target="_blank"><i class="fab fa-fw fa-instagram"></i></a>
                    <a class="btn btn-outline-blanconaranja btn-social mx-1" href="https://www.youtube.com/channel/UCrvkyHRx59GzanD7undhJLw" target="_blank"><i class="fab fa-fw fa-youtube"></i></a>
                    <a class="btn btn-outline-blanconaranja btn-social mx-1" href="https://co.linkedin.com/company/perfect-work-co" target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-blanconaranja btn-social mx-1" href="https://api.whatsapp.com/send?phone=573118301697&app=facebook&entry_point=page_cta&fbclid=IwAR3lbxrUwVzMYNioYkmZiEUV_LfNXdHIETpPeTvaaysbgPrKqCLtdbIzba4" target="_blank"><i class="fab fa-fw fa-whatsapp"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4 fw-bold">Políticas</h4>
                    <p class="lead-footer mb-0">
                        <a class="link-footer" href="">Políticas de privacidad</a>
                        <br>
                        <a class="link-footer" href="">Términos y condiciones</a>
                        <br>
                        <a class="link-footer" href="">Quiénes somos</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->

    <div class="copyright py-4 text-center text-white">

        <div class="container text-center">
            <small>Derechos reservados &copy; Perfect Work SAS 2022</small>
            <div></div>
        </div>
    </div>
    {{-- script --}}
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
