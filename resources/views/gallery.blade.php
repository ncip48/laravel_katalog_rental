@extends('layouts.app')
@section('title', 'Galeri')
@section('content')
    <!-- Breadcromb Area Start -->
    <section class="gauto-breadcromb-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h3>{{ __('Galeri') }}</h3>
                        <ul>
                            <li><i class="fa fa-home"></i></li>
                            <li><a href="{{ route('home') }}">{{ __('Beranda') }}</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>{{ __('Galeri') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->

    <!-- Gallery Area Start -->
    <section class="gauto-gallery-area section_70">
        <div class="container">
            <div class="row" id="lightgallery">
                @foreach ($galeri as $g)
                    <div class="col-lg-4" data-src="{{ asset('/img/gedung/' . $g->url) }}">
                        <div class="single-gallery">
                            <div class="img-holder">
                                <img src="{{ asset('/img/gedung/' . $g->url) }}" alt="{{ $g->tag }}"
                                    style="height: 250px" />
                                <div class="overlay-content">
                                    <div class="inner-content">
                                        <div class="title-box">
                                            <h3>
                                                <a href="#">{{ $g->tag }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Gallery Area End -->
@endsection
