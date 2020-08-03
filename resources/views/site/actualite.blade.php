@extends('layouts.site')


@section('page')

@include('includes.site', ['page' => 'actualite'])

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url({{ asset('storage/banner/2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Nos Actualités</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Accueil</a></li>
                        <li class="active">Actualités</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

     <!-- Start Department
    ============================================= -->
    <div class="departments-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center">
                        <h2>Nos <span>Actualités</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Department -->

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
