@extends('layouts.site')


@section('page')

@include('includes.site', ['page' => 'accueil'])

<!-- Start Banner
    ============================================= -->
    <div class="banner-area heading-exchange text-dark">
        <div id="bootcarousel" class="carousel transparent-nav inc-top-heading slide carousel-fade animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="item active">
                    <div class="slider-thumb bg-cover" style="background-image: url({{ asset('storage/banner/5.jpg') }})"></div>
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated slideInLeft"><span>CHE</span></h1>
                                            <p data-animation="animated slideInUp">
                                                Le défi santé est relevé par nous au Bénin.
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="{{ route('contact') }}">Contactez-nous</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-cover" style="background-image: url({{ asset('storage/banner/6.jpg') }})"></div>
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated slideInLeft"><span>CHE</span></h1>
                                            <p data-animation="animated slideInUp">
                                                Pour toutes vos pathologies, une solution est proposée.
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="{{ route('specialite') }}">Nos Spécialités</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-cover" style="background-image: url({{ asset('storage/banner/7.jpg') }})"></div>
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated slideInLeft"><span>CHE</span></h1>
                                            <p data-animation="animated slideInUp">
                                                Votre bien être reste notre unique priorité.
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="{{ route('contact') }}">Contactez-nous</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Why Chose Us
    ============================================= -->
    <div class="chose-us-area">
        <div class="container-full">
            <div class="row">
                <div class="col-md-6 thumb bg-cover" style="background-image: url({{ asset('storage/banner/6.jpg') }});"></div>
                <div class="col-md-6 info">
                    <div class="heading">
                        <h2>Mot du Directeur</h2>
                        <p>
                            La Clinique HANNAH sise au lot J 30 Cité Vie Nouvelle Akpakpa PK 3, exerçant sous l'autorisation
                            N° 092/MS/DC/SGM/CTJ/DNPS/SRS/SA/081SGG19 et immatriculée sous le Numéro IFU 3201001416113,
                            vous offre désormais une gamme variée de spécialités.
                            Elle  a pour vocation d'assurer le bien être de sa clientèle dans un cadre chaleureux.
                            Cette Polyclinique répond aux normes sanitaires internationales. <br>
                            Votre bien être reste notre priorité.
                        </p>
                    </div>
                    <ul>
                        <li>
                            <div class="info">
                                <h4>Qualified facilities</h4>
                                <p>
                                    Consider may dwelling old him her surprise finished families graceful. Gave led past poor met fine was new.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h4>Top Level Doctors</h4>
                                <p>
                                    Consider may dwelling old him her surprise finished families graceful. Gave led past poor met fine was new.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h4>Dedicated patient care</h4>
                                <p>
                                    Consider may dwelling old him her surprise finished families graceful. Gave led past poor met fine was new.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Chose Us -->

    <!-- Start Doctors
    ============================================= -->
    <div class="doctor-area carousel-shadow default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <h2>Nos <span>Spécialités</span></h2>
                    <p class="text-center">
                        La Clinique Hannah offre à son aimable clientèle une gamme riche et variée de services animée par des professionnels de la Médecine.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="doctor-items doctor-carousel owl-carousel owl-theme text-center">
                        @foreach($services as $key => $value)
                    @php($i = rand(1, 6))
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <a><img src="{{ asset('storage/services/' . $i . '.jpg' ) }}" alt="{{ $value['libelle'] }}"></a>
                        </div>
                        <div class="info">
                            <h4>
                                <a>{{ $value['libelle'] }}</a>
                            </h4>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Doctors -->

    <!-- Start Newsletter
    ============================================= -->
    <div class="newsletter-area default-padding shadow dark bg-fixed text-center text-light" style="background-image: url({{ asset('storage/banner/7.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Clinique HANNAH de l'EMANUEL</h4>
                    <h2>Autorisation N° 092/MS/DC/SGM/CTJ/DNPS/SRS/SA/081SGG19 du 08/07/2019</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter -->

@stop
