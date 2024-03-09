@extends('layouts.app')
@section('title', 'Syarat & Ketentuan')
@section('content')
    <!-- Breadcromb Area Start -->
    <section class="gauto-breadcromb-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h3>{{ __('Syarat & Ketentuan') }}</h3>
                        <ul>
                            <li><i class="fa fa-home"></i></li>
                            <li><a href="{{ route('home') }}">{{ __('Beranda') }}</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>{{ __('Syarat & Ketentuan') }}</li>
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
                <div class="col-lg-12">
                    <p>
                        {!! html_entity_decode($site->sk) !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
