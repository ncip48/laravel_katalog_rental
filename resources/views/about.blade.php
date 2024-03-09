@extends('layouts.app')
@section('title', 'Tentang Kami')
@section('content')
    <!-- Breadcromb Area Start -->
    <section class="gauto-breadcromb-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h3>{{ __('Tentang Kami') }}</h3>
                        <ul>
                            <li><i class="fa fa-home"></i></li>
                            <li><a href="{{ route('home') }}">{{ __('Beranda') }}</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>{{ __('Tentang Kami') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->

    <section class="about-page-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-page-left">
                        <h4>{{ __('Tentang Kami') }}</h4>
                        <h3>{{ __('Kami berkomitmen untuk memberikan solusi berkendara yang aman') }}</h3>
                        <p>
                            {!! html_entity_decode($site->about) !!}
                        </p>
                        <div class="about-page-call">
                            <div class="page-call-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="call-info">
                                <p>Butuh Bantuan?</p>
                                <h4><a href="#">{{ $site->phone }}</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-page-right">
                        <img src="{{ asset('vendor/assets/img/about-page.jpg') }}" alt="about page">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
