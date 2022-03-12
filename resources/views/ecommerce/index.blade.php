<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/logos/favicon.png') }}" type="image/x-icon">
    <title>Perfect Work - Impresos y Publicidad</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">  --}}
</head>

<body>
    {{-- header --}}

  {{--    Precarcaraga
    <div class="center section" id="circulo">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue-only">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div><div class="gap-patch">
            <div class="circle"></div>
          </div><div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
    </div>
         <div class="hide" id="contenido">  --}}
    {{--  header  --}}
    <header class="container-fluid bg-naranja pb-1">
        <div class="d-flex justify-content-between">
            <a class="navbar-brand" href="{{ route('ecommerce.index') }}"><img src="{{ asset('img/logos/logo perfect work.svg') }}" width="154"></a>
            <div class="d-flex align-self-center">
                <div class="input-group me-2 buscar">
                    <input class="form-control no-focus border-dark" type="text" placeholder="¿Qué buscas hoy?">
                    <span class="input-group-text bg-naranja border-dark"><i class="fas fa-magnifying-glass"></i></span>
                </div>
                <button class="btn btn-outline-dark me-2" title="Mi carrito"><i class="fas fa-cart-shopping"></i></button>
                <button class="btn btn-outline-dark" title="Mi usuario"><i class="fas fa-user"></i></button>
            </div>
        </div>
        <div class="input-group me-2 buscar-pequeno">
            <input class="form-control no-focus border-dark" type="text" placeholder="¿Qué buscas hoy?">
            <span class="input-group-text bg-naranja border-dark"><i class="fas fa-magnifying-glass"></i></span>
        </div>
    </header>

    {{-- menu mobile --}}
    <div class="offcanvas offcanvas-start bg-nav" id="offcanvasMobile">
        <div class="offcanvas-header">
          <h1 class="offcanvas-title text-white">Menú</h1>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <a href="#" class="col-11 h5 linkprincipal-mobile" data-bs-toggle="collapse">Mega menu</a>
                <a href="#demo" class="fa fa-chevron-up col-1 megamenu-mobile my-auto collapsed" data-bs-toggle="collapse"></a>
            </div>
            <div id="demo" class="collapse bg-white">
                <div class="d-flex ps-1 pt-1">
                    <a href="#" class="h6 title flex-grow-1" data-bs-toggle="collapse">Title Menu One</a>
                    <div><a href="#submenu1" class="fa fa-chevron-up pe-1 submegamenu-mobile collapsed" data-bs-toggle="collapse"></a></div>
                </div>
                <div id="submenu1" class="collapse">
                    <ul class="list-unstyled mb-0">
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                    </ul>
                </div>
            </div>
            <div id="demo" class="collapse bg-white">
                <div class="d-flex ps-1 pt-1">
                    <a href="#" class="h6 title flex-grow-1" data-bs-toggle="collapse">Title Menu One</a>
                    <div><a href="#submenu2" class="fa fa-chevron-up pe-1 submegamenu-mobile collapsed" data-bs-toggle="collapse"></a></div>
                </div>
                <div id="submenu2" class="collapse">
                    <ul class="list-unstyled mb-0">
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                    </ul>
                </div>
            </div>
            <div id="demo" class="collapse bg-white">
                <div class="d-flex ps-1 pt-1">
                    <a href="#" class="h6 title flex-grow-1" data-bs-toggle="collapse">Title Menu One</a>
                    <div><a href="#submenu3" class="fa fa-chevron-up pe-1 submegamenu-mobile collapsed" data-bs-toggle="collapse"></a></div>
                </div>
                <div id="submenu3" class="collapse">
                    <ul class="list-unstyled mb-0">
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                    </ul>
                </div>
            </div>
            <div id="demo" class="collapse bg-white">
                <div class="d-flex ps-1 pt-1">
                    <a href="#" class="h6 title flex-grow-1" data-bs-toggle="collapse">Title Menu One</a>
                    <div><a href="#submenu4" class="fa fa-chevron-up pe-1 submegamenu-mobile collapsed" data-bs-toggle="collapse"></a></div>
                </div>
                <div id="submenu4" class="collapse">
                    <ul class="list-unstyled mb-0">
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                        <li><a class="link-producto ps-2" href="#">Custom Menu</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- menu pc --}}
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-cart-flatbed"></i> Mi pedido</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMobile">
                <span class="navbar-toggler-icon"></span>
            </button>            
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown"> Mega menu </a>
                        <div class="dropdown-menu megamenu" role="menu">
                            <div class="row">
                                <div class="col">
                                    <div class="col-megamenu">
                                        <h6><a class="title" href="#">Title Menu One</a></h6>
                                        <ul class="list-unstyled">
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col">
                                    <div class="col-megamenu">
                                        <h6 class="title">Title Menu Two</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                                <div class="col">
                                    <div class="col-megamenu">
                                        <h6 class="title">Title Menu Three</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div>
                                <div class="col">
                                    <div class="col-megamenu">
                                        <h6 class="title">Title Menu Four</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                            <li><a class="link-producto" href="#">Custom Menu</a></li>
                                        </ul>
                                    </div> <!-- col-megamenu.// -->
                                </div><!-- end col-3 -->
                            </div><!-- end row -->
                        </div> <!-- dropdown-mega-menu.// -->
                    </li>
                </ul>
            </div>
        </div> <!-- container-fluid.// -->
    </nav>

    {{-- banner carrusel oferta --}}
    <section>
        <div class="container">
            <div class="splide" id="splidePrincipal">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="{{ asset('img/carousel.jpg') }}" class="d-block w-100" alt="..." height="400px">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/carousel.jpg') }}" class="d-block w-100" alt="..." height="400px">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/carousel.jpg') }}" class="d-block w-100" alt="..." height="400px">
                        </li>
                    </ul>
                </div>
                <div class="splide__progress">
                    <div class="splide__progress__bar bg-degrado">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-3 p-3">
            <div class="row text-center">
                <div class="col-12 col-sm">
                    <p><i class="fas fa-cloud fa-3x text-icon"></i></p>
                    <p class="text-icon-txt">Somos tú imprenta online</p>
                </div>
                <div class="col-12 col-sm">
                    <p><i class="fas fa-hand-holding-dollar fa-3x text-icon"></i></p>
                    <p class="text-icon-txt">Siempre precios justos</p>
                </div>
                <div class="col-12 col-sm">
                    <p><i class="fas fa-truck fa-3x text-icon"></i></p>
                    <p class="text-icon-txt">Envíos a nivel nacional</p>
                </div>
                <div class="col-12 col-sm">
                    <p><i class="fas fa-award fa-3x text-icon"></i></p>
                    <p class="text-icon-txt">Calidad Garantizada</p>
                </div>
                <div class="col-12 col-sm">
                    <p><i class="fas fa-handshake-angle fa-3x text-icon"></i></p>
                    <p class="text-icon-txt">Contamos con el mejor servicio</p>
                </div>
                <div class="col-12 col-sm">
                    <p><i class="fas fa-user-plus fa-3x text-icon"></i></p>
                    <p class="text-icon-txt">Regístrate y obtén beneficios</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Tarjetas --}}
    <section class="page-section pb-3">
        <h2 class="text-center page-section-heading">Los más vendidos</h2>
        <div class="container container--flex">
            <div class="card column column--50-25">
                <div class="etiqueta fw-bold">Promoción</div>
                <img src="img/10.jpg" alt="" class="product__img">
                <div class="product__title">Especiales del 2017</div>
                <div class="product__price">$100</div>
                <a href="#" class="stretched-link"></a>
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
        <div class="container">
            <div class="splide" id="splidePromo">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="column">
                                <div class="etiqueta fw-bold">Promoción</div>
                                <img src="img/10.jpg" alt="" class="product__img">
                                <div class="product__title">Especiales del 2017</div>
                                <div class="product__price">$100</div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="column">
                                <img src="img/11.png" alt="" class="product__img">
                                <div class="product__title">Especiales del 2018</div>
                                <div class="product__price">$100</div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="column">
                                <img src="img/12.jpg" alt="" class="product__img">
                                <div class="product__title">Especiales del 2019</div>
                                <div class="product__price">$100</div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="column">
                                <img src="img/13.jpg" alt="" class="product__img">
                                <div class="product__title">Especiales del 2020</div>
                                <div class="product__price">$100</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Casos exito --}}
    <section class="page-section" id="servicios">
        <div class="container">

            <!-- Sección Servicios Encabezado-->
            <h2 class="page-section-heading text-center mb-3">Casos de éxito</h2>

            <!-- Items Sección Servicios-->
            <div class="row justify-content-center">

                <!-- Servicios Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="testimonio-borde">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body" style="height: 250px">
                            <h5 class="card-title text-center">Programación web</h5>
                            <p class="card-text">Dale mas vida a tu negocio con un sitio en internet</p>
                            <p class="card-text fw-bold">¡Nosotros te ayudamos!.</p>
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
                        <img src="https://thumbs.dreamstime.com/z/vector-el-icono-del-avatar-del-usuario-para-el-sitio-web-o-el-m%C3%B3vil-45836554.jpg" class="mx-auto d-block img-fluid rounded-circle" width="100" height="100">
                        <div class="card-body" style="height: 250px">
                            <p class="card-text font-comentario">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi odit distinctio assumenda harum esse dicta repudiandae vitae eveniet quae, explicabo laboriosam, deleniti maiores pariatur eum officiis. Vitae doloribus nostrum facilis?"</p>
                            <p class="card-text fw-bold">Fulano de tal</p>
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
                    <a class="btn btn-outline-blanconaranja btn-social mx-1" href="https://www.facebook.com/perfectworkpublicidad" target="_blank">
                        <i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-blanconaranja btn-social mx-1" href="https://www.instagram.com/perfectworkpublicidad" target="_blank">
                        <i class="fab fa-fw fa-instagram"></i></a>
                    <a class="btn btn-outline-blanconaranja btn-social mx-1" href="https://www.youtube.com/channel/UCrvkyHRx59GzanD7undhJLw" target="_blank">
                        <i class="fab fa-fw fa-youtube"></i></a>
                    <a class="btn btn-outline-blanconaranja btn-social mx-1" href="https://co.linkedin.com/company/perfect-work-co" target="_blank">
                        <i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-blanconaranja btn-social mx-1" href="https://api.whatsapp.com/send?phone=573118301697" target="_blank">
                        <i class="fab fa-fw fa-whatsapp"></i></a>
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
{{--  </div>  --}}
    {{-- script --}}
    <script src="{{ mix('js/app.js') }}"></script>

    {{--  Precarga  --}}
    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  --}}

   {{--   <script>
        window.addEventListener('load', () => {
         
           setTimeout(carga,2000);
           
           function carga() {

            document.getElementById('circulo').className='hide';
            document.getElementById('contenido').className='';

           }

          
        })
    </script>  --}}
</body>

</html>
