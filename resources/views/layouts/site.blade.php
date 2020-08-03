<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CLINIQUE HANNAH DE L'EMMANUEL">

    <!-- ========== Page Title ========== -->
    <title>{{ $title }}</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('assets/js/html5/html5shiv.min.js') }}"></script>
      <script src="{{ asset('assets/js/html5/respond.min.js') }}"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600,700,800" rel="stylesheet">

    <style>
        .bg-theme, .btn-theme, .site-heading h2::after, .site-heading h2::before {background-color: #030e9e;}
        nav.navbar.bootsnav ul.nav > li.active > a, .banner-area .content span, .site-heading h2 span,
        .breadcrumb-area .breadcrumb li.active {color: red}
        .btn-theme {border: 2px solid #030e9e; }
        .chose-us-area .info li .info::after {color: #030e9e}
        p {text-align: justify}
        footer .footer-bottom p a{color: white }
    </style>

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area inline bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-md-12 address-info text-left">
                    <div class="info box">
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i> Akpakpa, Cité Vie Nouvelle
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i> info@che.com
                            </li>
                            <li>
                                <i class="fas fa-phone"></i> +229 21 33 28 52 / 94 55 61 61 / 94 55 62 62
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    @yield('page')

    <!-- Start Footer
    ============================================= -->
    <footer>
        <div class="container">
            <div class="row">

                <div class="f-items default-padding">

                    <!-- Single Item -->
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <h4>A Propos</h4>
                            <p>
                                Ouverte 24H / 24 H, elle vous offre  également désormais des chambres de standing variés.
                                De nombreuses  chambres doubles, singles et VIP toutes climatisées sont mises à votre disposition.
                                Un service de restauration capable de prendre en charges vos interdits est fonctionnel.
                                Un personnel administratif et médical très spécialisé est mobilisé pour s'occuper
                                de votre bien être.
                            </p>
                            <h2><i class="fas fa-phone"></i> 94 55 61 61</h2>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 item">
                        <div class="f-item link">
                            <h4>Liens</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Accueil</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Spécialités</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Partenaires</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Actualités</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 item">
                        <div class="f-item contact">
                            <h4>Contact</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <p>Phone <span>+229 21 33 28 52 / 94 55 61 61 / 94 55 62 62</span></p>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <p>
                                        Email <span><a href="mailto:info@che.com">info@che.com</a></span>
                                        <span><a href="mailto:accueil@che.com">accueil@che.com</a></span>
                                        <span><a href="mailto:finance@che.com">finance@che.com</a></span>
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-map"></i>
                                    <p>Akpakpa <span>Cité Vie Nouvelle</span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-theme text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>&copy; Copyright <script> let date = new Date(); document.write(date.getFullYear());</script>. Réalisé par <a href="mailto:devmagame@gmail.com"><strong>devGame</strong></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js ') }}"></script>
    <script src="{{ asset('assets/js/equal-height.min.js ') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js ') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js ') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js ') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.13711.js ') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js ') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js ') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js ') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js ') }}"></script>
    <script src="{{ asset('assets/js/count-to.js ') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js ') }}"></script>
    <script src="{{ asset('assets/js/bootsnav.js ') }}"></script>
    <script src="{{ asset('assets/js/main.js ') }}"></script>

</body>
</html>
