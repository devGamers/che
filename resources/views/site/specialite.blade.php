@extends('layouts.site')


@section('page')

@include('includes.site', ['page' => 'specialite'])

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url({{ asset('storage/banner/2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Nos Spécialités</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Accueil</a></li>
                        <li class="active">Spécialités</li>
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
                        <h2>Nos <span>Spécialités</span></h2>
                        <p class="text-center">
                            La Clinique Hannah offre à son aimable clientèle une gamme riche et variée de services animée par des professionnels de la Médecine.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="department-items text-center">
                    @foreach($services as $key => $value)
                    @php($i = rand(1, 6))
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
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
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Department -->
@stop
