<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es">
<!--<![endif]-->


<!-- Mirrored from quomodosoft.com/html/dawat/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 19:58:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dawat Restaurant is a simple restaraunt website for restaurant business" />
    <meta name="keywords" content="restaurant, pizza, burger, business, house, online, delevery, html, coffee, cafe, bar" />
    <meta name="author" content="BDEXPERT" />

    <!--====== TITLE TAG ======-->
    <title>Inicio Restaurante Dawat</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="{{ asset ('frontend/img/favicon.png') }} " />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="{{ asset ('frontend/css/normalize.css') }} ">
    <link rel="stylesheet" href="{{ asset ('frontend/css/animate.css') }} ">
    <link rel="stylesheet" href="{{ asset ('frontend/css/pogo-slider.css') }} ">
    <link rel="stylesheet" href="{{ asset ('frontend/css/owl.carousel.css') }} ">
    <link rel="stylesheet" href="{{ asset ('frontend/css/datepicker.css') }} ">
    <link rel="stylesheet" href="{{ asset ('frontend/css/timepicker.min.css') }} ">
    <link rel="stylesheet" href="{{ asset ('frontend/css/magnific-popup.css') }} ">
    <link href="{{ asset ('frontend/css/bootstrap.min.css') }} "  rel="stylesheet">
    <link href="{{ asset ('frontend/css/font-awesome.min.css') }} "  rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{ asset ('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset ('frontend/css/responsive.css') }} " rel="stylesheet">

    <script src="{{ asset ('frontend/js/vendor/modernizr-2.8.3.min.js') }} "></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"><i class="fa fa-cutlery"></i></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="header-top-area">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 col-sm-8">
                            <div class="call-to-action">
                                <p><i class="fa fa-envelope-o"></i>Envíe un correo electrónico a: <a href="#">info@restaurant.com</a></p>
                                <p><i class="fa fa-phone"></i>Teléfono: <a href="#">+1 800 234 5678</a></p>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-6 col-sm-4">
                            <div class="book-table-popup">
                                <a href="#reservation-form-modal" data-toggle="modal">Reservar una mesa</a>
                            </div>
                            <div class="top-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-feed"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="collapsed navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-scrollspy">
                                <span class="sr-only">Alternar la navegación</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="#home" class="navbar-brand"><img src="{{ asset ('frontend/img/main_logo_black.png') }} " alt="logo"></a>
                            <a href="#home" class="navbar-brand white"><img src="{{ asset ('frontend/img/main_logo.png') }} " alt="logo"></a>
                        </div>
                        <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
                            <div class="search-form-area">
                                <div class="search-form-overlay"></div>
                                <a class="search-form-trigger" href="#search-form">Buscar en<span></span></a>
                                <div id="search-form" class="search-form">
                                    <form>
                                        <input type="search" placeholder="Buscar...">
                                    </form>
                                </div>
                            </div>
                            <ul id="nav" class="nav navbar-nav">
                                <li class="active"><a href="#home">Inicio</a> </li>
                                <li><a href="#about">sobre nosotros</a></li>
                                <li><a href="#promotion">Oferta</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <li><a href="#team">equipo</a></li>
                                <li><a href="#blog">blog</a></li>
                                {{-- <li><a href="#gallery">Galería</a></li> --}}
                                <li><a href="#contact">Contacte con</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>

        <!--HHOME SLIDER AREA-->
        <div class="slider-area">
            <div class="pogoSlider">
                <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background:url({{ asset ('frontend/img/slider/slide_1.jpg') }}) no-repeat scroll 0 0 / cover;">
                    <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="flipX" data-duration="700">Bienvenido a</h2>
                    <h1 class="pogoSlider-slide-element" data-in="expand" data-out="flipX" data-duration="1500"><span>Dawat</span> Café y restaurante</h1>
                    <h3 class="pogoSlider-slide-element" data-in="slideUp" data-out="flipX" data-duration="700"><a  href="#reservation-form-modal" data-toggle="modal">Reservar ahora</a></h3>
                </div>
                <div class="pogoSlider-slide" data-transition="fade" style="background:url({{ asset ('frontend/img/slider/slide_2.jpg') }}) no-repeat scroll 0 0 / cover;">
                    <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="flipX" data-duration="700">Nuestros menús</h2>
                    <h1 class="pogoSlider-slide-element" data-in="expand" data-out="flipX" data-duration="1500">Vea lo que <span>nuevo</span> hoy</h1>
                    <h3 class="pogoSlider-slide-element" data-in="slideUp" data-out="flipX" data-duration="700"><a href="#menu">Menú de hoy</a></h3>
                </div>
                <div class="pogoSlider-slide" data-transition="fade" style="background:url({{ asset ('frontend/img/slider/slide_3.jpg') }}) no-repeat scroll 0 0 / cover;">
                    <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="flipX" data-duration="700">Prepárate</h2>
                    <h1 class="pogoSlider-slide-element" data-in="expand" data-out="flipX" data-duration="1500">a <span>Únase a</span> con nosotros</h1>
                    <h3 class="pogoSlider-slide-element" data-in="slideUp" data-out="flipX" data-duration="700"><a  href="#reservation-form-modal" data-toggle="modal">Reservar una mesa</a></h3>
                </div>
            </div>
        </div>
        <!--HOME SLIDER AREA END-->

    </header>
    <!--END TOP AREA-->

    <!--ABOUT AREA-->
    <section class="about-area section-padding" id="about">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Nuestra historia</h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-content">
                        <p><span class="big-text">M</span> enc non elit libero. Quisque massa porta ut placerat lentesque non diam. Nam convallis porta rhoncus. Maecenas varius eget turpis suscipit porta sapien tinc Mauris tempor libero fringilla orci vivrra faucibue fringilla orci vivrra faucibus. Integer ullamcorper erat in tellus efficitur, quis porta sapien tincidunt. Nunc mattis lectus sed semper semper. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="right-about-content">
                        <p>Quisque sit amet turpis et ipsum elementum facilisis. Quisque sed placerat libero. Pellentesque nec tellus sollicitudin, sollicitudin ligula non, tristique nibh Donec vitae turpis sagittis, cursus nunc ac, aliquet nunc. Donec viverra vel massa at posuere. Aliquam et fringilla augue consequat posuere sem, eu ornares viverra veleso massa at posuere. Aliquam et fringilla augue</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="about-author-sign text-center">
                        <img src="{{ asset ('frontend/img/about/about_sign.png') }} "                        alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--SPEACIAL PROMOTIONS AREA-->
    <section class="promotions-area section-padding" id="promotion">
        <div class="promotion-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Paquete especial</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="menu-discount-offer col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="single-promotions">
                        <div class="promotions-img">
                            <img src="{{ asset ('frontend/img/promotions/promo_slide_1.jpg') }} " alt="">
                        </div>
                        <div class="promotions-details">
                            <h3>40% de descuento en pizzas de 9'' - 12'' - Sólo miércoles, jueves y viernes</h3>
                            <p>Pizza de 12 pulgadas + 1 guarnición + Botella de Coca-Cola de 1,5L Sólo desde 209.000</p>
                            <a href="#" class="read-more">Pedir ahora</a>
                        </div>
                    </div>
                    <div class="single-promotions">
                        <div class="promotions-img">
                            <img src="{{ asset ('frontend/img/promotions/promo_slide_2.jpg') }} " alt="">
                        </div>
                        <div class="promotions-details">
                            <h3>40% de descuento en pizzas de 9'' - 12'' - Sólo miércoles, jueves y viernes</h3>
                            <p>Pizza de 12 pulgadas + 1 guarnición + Botella de Coca-Cola de 1,5L Sólo desde 209.000</p>
                            <a href="#" class="read-more">Pedir ahora</a>
                        </div>
                    </div>
                    <div class="single-promotions">
                        <div class="promotions-img">
                            <img src="{{ asset ('frontend/img/promotions/promo_slide_3.jpg') }} " alt="">
                        </div>
                        <div class="promotions-details">
                            <h3>40% de descuento en pizzas de 9'' - 12'' - Sólo miércoles, jueves y viernes</h3>
                            <p>Pizza de 12 pulgadas + 1 guarnición + Botella de Coca-Cola de 1,5L Sólo desde 209.000</p>
                            <a href="#" class="read-more">Pedir ahora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SPEACIAL PROMOTIONS AREA END-->

    <!--MENUS AREA-->
    <section class="menus-area section-padding" id="menu">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>El menú de hoy</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="food-menu-list-menu">
                        <ul>
                            <li class="filter active" data-filter="all">Todo</li>
                            <li class="filter" data-filter=".breakfast">Desayuno</li>
                            <li class="filter" data-filter=".lunch">Almuerzo</li>
                            <li class="filter" data-filter=".dinner">Cena</li>
                            <li class="filter" data-filter=".coffee">Café</li>
                            <li class="filter" data-filter=".snacks">Aperitivos</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row food-menu-list">
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu breakfast coffee snacks">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="{{ asset ('frontend/img/menu/menu_1.jpg') }} " alt=""></div>
                        <div class="food-menu-details">
                            <h3>Recetas de magdalenas <span class="menu-price">$20.00</span></h3>
                            <p class="menu-speacification"><span>- Zumo de frutas</span> <span>- Checken</span> <span>- Cereza</span></p>
                            <p class="menu-speacification"><span>- Vegetales</span> <span>- Leche</span> <span>- Patata</span></p>
                            <p class="menu-speacification"><span>- Tomate</span> <span>- Chilli</span> <span>- Sésamo</span></p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu dinner snacks">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="{{ asset ('frontend/img/menu/menu_2.jpg') }} " alt=""></div>
                        <div class="food-menu-details">
                            <h3>Cupcake Recipes <span class="menu-price">$22.00</span></h3>
                            <p class="menu-speacification"><span>- Zumo de frutas</span> <span>- Checken</span> <span>- Cereza</span></p>
                            <p class="menu-speacification"><span>- Vegetales</span> <span>- Leche</span> <span>- Patata</span></p>
                            <p class="menu-speacification"><span>- Tomate</span> <span>- Chilli</span> <span>- Sésamo</span></p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu breakfast">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="{{ asset ('frontend/img/menu/menu_3.jpg') }} " alt=""></div>
                        <div class="food-menu-details">
                            <h3>Cupcake Recipes <span class="menu-price">$17.00</span></h3>
                            <p class="menu-speacification"><span>- Zumo de frutas</span> <span>- Checken</span> <span>- Cereza</span></p>
                            <p class="menu-speacification"><span>- Vegetales</span> <span>- Leche</span> <span>- Patata</span></p>
                            <p class="menu-speacification"><span>- Tomate</span> <span>- Chilli</span> <span>- Sésamo</span></p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu dinner lunch breakfast snacks">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="{{ asset ('frontend/img/menu/menu_4.jpg') }} " alt=""></div>
                        <div class="food-menu-details">
                            <h3>Cupcake Recipes <span class="menu-price">$28.00</span></h3>
                            <p class="menu-speacification"><span>- Zumo de frutas</span> <span>- Checken</span> <span>- Cereza</span></p>
                            <p class="menu-speacification"><span>- Vegetales</span> <span>- Leche</span> <span>- Patata</span></p>
                            <p class="menu-speacification"><span>- Tomate</span> <span>- Chilli</span> <span>- Sésamo</span></p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu lunch coffee">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="{{ asset ('frontend/img/menu/menu_5.jpg') }} " alt=""></div>
                        <div class="food-menu-details">
                            <h3>Cupcake Recipes <span class="menu-price">$120.00</span></h3>
                            <p class="menu-speacification"><span>- Zumo de frutas</span> <span>- Checken</span> <span>- Cereza</span></p>
                            <p class="menu-speacification"><span>- Vegetales</span> <span>- Leche</span> <span>- Patata</span></p>
                            <p class="menu-speacification"><span>- Tomate</span> <span>- Chilli</span> <span>- Sésamo</span></p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu breakfast">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="{{ asset ('frontend/img/menu/menu_6.jpg') }} " alt=""></div>
                        <div class="food-menu-details">
                            <h3>Cupcake Recipes <span class="menu-price">$100.00</span></h3>
                            <p class="menu-speacification"><span>- Zumo de frutas</span> <span>- Checken</span> <span>- Cereza</span></p>
                            <p class="menu-speacification"><span>- Vegetales</span> <span>- Leche</span> <span>- Patata</span></p>
                            <p class="menu-speacification"><span>- Tomate</span> <span>- Chilli</span> <span>- Sésamo</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--MENUS AREA END-->

    <!--RESERVATION BUTTON AREA-->
    <section class="reservation-button-area section-padding" id="reservation-button">
        <div class="reservation-button-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="resarvation-from-button text-center wow fadeIn">
                        <h2>Reserve una mesa ahora !</h2>
                        <a href="#reservation-form-modal" class="reservation-button" data-toggle="modal">Reservar ahora</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <!-- RESERVATION FORM MODAL -->
                    <div class="modal fade" id="reservation-form-modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Formulario de reserva de mesa</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="reservation-form">
                                        <form action="#" class="table-booking-form" id="reservation">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="name"><i class="fa fa-user-o"></i></label>
                                                    <input type="text" name="name" id="name" placeholder="Nombre...">
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="email"><i class="fa fa-at"></i></label>
                                                    <input type="email" name="email" id="email" placeholder="Envíe un correo electrónico a...">
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="mobile"><i class="fa fa-phone"></i></label>
                                                    <input type="text" name="mobile" id="mobile" placeholder="Telefono...">
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="date"><i class="fa fa-calendar"></i></label>
                                                    <input type="text" name="date" id="date" data-select="datepicker" placeholder="Fecha...">
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="time"><i class="fa fa-clock-o"></i></label>
                                                    <input type="text" id="time" placeholder="Hora...">
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="person"><i class="fa fa-user"></i></label>
                                                    <select name="person" id="person">
                                                        <option value="2">2 Persona</option>
                                                        <option value="3">3 Persona</option>
                                                        <option value="4">4 Persona</option>
                                                        <option value="5">5 Persona</option>
                                                        <option value="6">6 Persona</option>
                                                        <option value="7">7 Persona</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-sm-offset-3  col-md-offset-3  col-lg-offset-3 col-xs-12">
                                                    <button type="submit">reservar una mesa</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- RESERVATION FORM MODAL -->
                </div>
            </div>
        </div>
    </section>
    <!--RESERVATION BUTTON AREA END-->

    <!--TEAM AREA-->
    <section class="team-area section-padding" id="team">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Nuestros chefs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 team-slider">
                    <div class="single-team-member text-center">
                        <div class="team-member-img ">
                            <img src="{{ asset ('frontend/img/team/team-1.jpg') }} " alt="">
                            <div class="member-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-details">
                            <h3>Mark Angelila</h3>
                            <p>Cras senunc massa quisque tempor dolor sit amet </p>
                        </div>
                    </div>
                    <div class="single-team-member text-center">
                        <div class="team-member-img ">
                            <img src="{{ asset ('frontend/img/team/team-2.jpg') }} " alt="">
                            <div class="member-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-details">
                            <h3>Ángel Meskat</h3>
                            <p>Cras senunc massa quisque tempor dolor sit amet </p>
                        </div>
                    </div>
                    <div class="single-team-member text-center">
                        <div class="team-member-img ">
                            <img src="{{ asset ('frontend/img/team/team-3.jpg') }} " alt="">
                            <div class="member-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-details">
                            <h3>Jon Doe</h3>
                            <p>Cras senunc massa quisque tempor dolor sit amet </p>
                        </div>
                    </div>
                    <div class="single-team-member text-center">
                        <div class="team-member-img ">
                            <img src="{{ asset ('frontend/img/team/team-4.jpg') }} " alt="">
                            <div class="member-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-details">
                            <h3>Angel Di Maria</h3>
                            <p>Cras senunc massa quisque tempor dolor sit amet </p>
                        </div>
                    </div>
                    <div class="single-team-member text-center">
                        <div class="team-member-img ">
                            <img src="{{ asset ('frontend/img/team/team-5.jpg') }} " alt="">
                            <div class="member-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-details">
                            <h3>Park Ji Sung</h3>
                            <p>Cras senunc massa quisque tempor dolor sit amet </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TEAM AREA END-->

    <!--BLOG AREA-->
    <section class="blog-area section-padding" id="blog">
        <div class="blog-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Últimas noticias</h2>
                    </div>
                </div>
            </div>
            <div class="row post-slider">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-post text-center">
                        <div class="blog-post-img ">
                            <img src="{{ asset ('frontend/img/blog/blog-3.jpg') }} " alt="">
                        </div>
                        <div class="post-details">
                            <h3><a href="single-blog.html">Recibido el primer día primera reserva</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias itaque eaque deserunt atque laborum ex ad facilis praesentium placeat tenetur.</p>
                            <p class="post-meta"><a href="#">24 febrero, 2017</a> - <a href="#">5 comentarios</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-post text-center">
                        <div class="blog-post-img ">
                            <img src="{{ asset ('frontend/img/blog/blog-1.jpg') }} " alt="">
                        </div>
                        <div class="post-details">
                            <h3><a href="single-blog.html">Inicio para conseguir el borrado de su casa ?</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias itaque eaque deserunt atque laborum ex ad facilis praesentium placeat tenetur.</p>
                            <p class="post-meta"><a href="#">24 febrero, 2017</a> - <a href="#">5 comentarios</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-post text-center">
                        <div class="blog-post-img ">
                            <img src="{{ asset ('frontend/img/blog/blog-2.jpg') }} " alt="">
                        </div>
                        <div class="post-details">
                            <h3><a href="single-blog.html">Reunión del día de bienvenida al restaurante</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias itaque eaque deserunt atque laborum ex ad facilis praesentium placeat tenetur.</p>
                            <p class="post-meta"><a href="#">24 febrero, 2017</a> - <a href="#">5 comentarios</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->

    <!--INSTAGRAM GALLERY FEED-->
    {{-- <section class="gallery-area section-padding" id="gallery">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Galería</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="instagram-feed-content text-center">
                        <div class="instagram" id="instagram"></div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--INSTAGRAM GALLERY FEED END-->

    <!--FOOER AREA-->
    <div class="footer-area" id="contact">
        <div class="footer-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="footer-top section-padding text-center">
                        <div class="footer-logo">
                            <a href="#"><img src="{{ asset ('frontend/img/main_logo.png') }} " alt=""></a>
                        </div>
                        <div class="footer-address">
                            <p>20, piso, edificio Queenslad Victoria. 60 california street california USA</p>
                            <p><a href="mailto:mehedidb@gmail.com">hello@dawat.com</a></p>
                            <p><a href="callto:+8800000001111">+88 000 0000 1111</a></p>
                        </div>
                        <div class="footer-social-bookmark">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Equipos de uso</a></li>
                            <li><a href="#">Política de privacidad</a></li>
                            <li><a href="#">Mapa del sitio</a></li>
                            <li><a href="#">Contacte con</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="footer-copyright">
                        <p>&copy; 2017 <a href="#">Dawat Restaurant</a> Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="{{ asset ('frontend/js/vendor/jquery-1.12.4.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/vendor/bootstrap.min.js') }} "></script>

    <!--====== PLUGINS JS ======-->
    <script src="{{ asset ('frontend/js/vendor/jquery.easing.1.3.js') }} "></script>
    <script src="{{ asset ('frontend/js/vendor/jquery-migrate-1.2.1.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.pogo-slider.js') }} "></script>
    <script src="{{ asset ('frontend/js/owl.carousel.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/stellar.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.mixitup.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/instafeed.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/datepicker.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/timepicker.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/wow.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.magnific-popup.min.js') }} "></script>
    <script src="{{ asset ('frontend/js/jquery.sticky.js') }} "></script>

    <!--===== ACTIVE JS=====-->
    <script src="{{ asset ('frontend/js/main.js') }} "></script>
</body>


<!-- Mirrored from quomodosoft.com/html/dawat/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 19:59:29 GMT -->
</html>
