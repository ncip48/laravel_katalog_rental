@php
    $site = \App\Models\Site::first();
    $site->phone_wa = preg_replace('/0/', '62', $site->phone, 1);
@endphp
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="gauto | Car Rental HTML Template from Themescare" />
    <meta name="keyword" content="taxi,car,rent,hire,transport" />
    <meta name="author" content="Themescare" />
    <!-- Title -->
    <title>@yield('title') - {{ $site->name }}</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('vendor/assets/img/favicon/favicon-32x32.png') }}" />
    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/bootstrap.css') }}" />
    <!--Font Awesome css-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/font-awesome.min.css') }}" />
    <!--Magnific css-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/magnific-popup.css') }}" />
    <!--Owl-Carousel css-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/owl.theme.default.min.css') }}" />
    <!--Animate css-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/animate.min.css') }}" />
    <!--Datepicker css-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/jquery.datepicker.css') }}" />
    <!--Nice Select css-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/nice-select.css') }}" />
    <!-- Lightgallery css -->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/lightgallery.min.css') }}" />
    <!--ClockPicker css-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/jquery-clockpicker.min.css') }}" />
    <!--Slicknav css-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/slicknav.min.css') }}" />
    <!--Site Main Style css-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/style.css') }}" />
    <!--Responsive css-->
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/responsive.css') }}" />

    @stack('customStyle')
</head>

<body>
    <!-- Header Top Area Start -->
    <section class="gauto-header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="header-top-left">
                        <p>
                            {{ __('Butuh Bantuan?') }}: <i class="fa fa-phone"></i> {{ __('Telp') }}:
                            {{ $site->phone }}
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-top-right">
                        <a href="{{ route('login') }}">
                            <i class="fa fa-key"></i>
                            login
                        </a>
                        {{-- <a href="#">
                            <i class="fa fa-key"></i>
                            login
                        </a>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            register
                        </a> --}}
                        {{-- Localization --}}
                        {{-- <div class="dropdown">
                            <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang"
                                data-toggle="dropdown" aria-haspopup="true">
                                <img src="{{ asset('vendor/assets/img/en.png') }}" alt="lang" />
                                English
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                                <li>
                                    <img src="{{ asset('vendor/assets/img/ca.png') }}" alt="lang" />
                                    Canada
                                </li>
                                <li>
                                    <img src="{{ asset('vendor/assets/img/fa.png') }}" alt="lang" />
                                    French
                                </li>
                                <li>
                                    <img src="{{ asset('vendor/assets/img/ja.png') }}" alt="lang" />
                                    Japanese
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Top Area End -->

    <!-- Main Header Area Start -->
    <header class="gauto-main-header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="site-logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('img/' . $site->logo) }}" alt="gauto" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-9">
                    <div class="header-promo">
                        <div class="single-header-promo">
                            <div class="header-promo-icon">
                                <img src="{{ asset('vendor/assets/img/globe.png') }}" alt="globe" />
                            </div>
                            <div class="header-promo-info">
                                <h3>Indonesia</h3>
                                <p>{{ $site->city }}</p>
                            </div>
                        </div>
                        <div class="single-header-promo">
                            <div class="header-promo-icon">
                                <img src="{{ asset('vendor/assets/img/clock.png') }}" alt="clock" />
                            </div>
                            <div class="header-promo-info">
                                <h3>{{ $site->haribuka }}</h3>
                                <p>{{ $site->jambuka }} - {{ $site->jamtutup }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="header-action">
                        <a target="_blank" href="https://wa.me/{{ $site->phone_wa }}"><i class="fa fa-phone"></i>
                            {{ __('Butuh bantuan') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Header Area End -->

    <!-- Mainmenu Area Start -->
    <section class="gauto-mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="mainmenu">
                        <nav>
                            <ul id="gauto_navigation">
                                <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                    <a href="{{ route('home') }}">{{ __('Beranda') }}</a>
                                </li>
                                <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                    <a href="{{ route('about') }}">{{ __('Tentang Kami') }}</a>
                                </li>
                                <li class="{{ request()->routeIs('gallery') ? 'active' : '' }}">
                                    <a href="{{ route('gallery') }}">{{ __('Galeri') }}</a>
                                </li>
                                <li class="{{ request()->routeIs('sk') ? 'active' : '' }}">
                                    <a href="{{ route('sk') }}">{{ __('Syarat & Ketentuan') }}</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="main-search-right">
                        <!-- Responsive Menu Start -->
                        <div class="gauto-responsive-menu"></div>
                        <!-- Responsive Menu Start -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mainmenu Area End -->

    @yield('content')

    <!-- Footer Area Start -->
    <footer class="gauto-footer-area">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-footer">
                            <div class="footer-logo">
                                <a href="#">
                                    <img src="{{ asset('img/' . $site->logo) }}" alt="footer-logo" />
                                </a>
                            </div>
                            <div class="footer-address">
                                <h3>{{ __('Kantor Kami') }}</h3>
                                <p>{{ $site->address }}</p>
                                <ul>
                                    <li>Tel: {{ $site->phone }}</li>
                                    <li>Email: {{ $site->email }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-footer quick_links">
                            <h3>Quick Links</h3>
                            <ul class="quick-links">
                                <li>
                                    <a href="{{ url('about') }}">{{ __('Tentang Kami') }}</a>
                                </li>
                                <li>
                                    <a href="{{ url('syarat-ketentuan') }}">{{ __('Syarat & Ketentuan') }}</a>
                                </li>
                            </ul>
                            <!-- <ul class="quick-links">
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">latest News</a></li>
                                </ul> -->
                        </div>
                        <div class="single-footer newsletter_box">
                            <h3>newsletter</h3>
                            <form>
                                <input type="email" placeholder="Email Address" />
                                <button type="submit">
                                    <i class="fa fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-footer">
                            <h3>Social Links</h3>
                            <div class="footer-social">
                                <ul>
                                    <li class="ml-0">
                                        <a href="{{ $site->facebook }}" target="_blank"><i
                                                class="fa fa-2x fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $site->twitter }}" target="_blank"><i
                                                class="fa fa-2x fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $site->instagram }}" target="_blank"><i
                                                class="fa fa-2x fa-instagram"></i></a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{ $site->whatsapp }}" target="_blank"><i
                                                class="fa fa-2x fa-whatsapp"></i></a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>
                                &copy; {{ now()->year }} {{ $site->name }}
                            </p>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="footer-social">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!--Jquery js-->
    <script src="{{ asset('vendor/assets/js/jquery.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('vendor/assets/js/popper.min.js') }}"></script>
    <!--Bootstrap js-->
    <script src="{{ asset('vendor/assets/js/bootstrap.min.js') }}"></script>
    <!--Owl-Carousel js-->
    <script src="{{ asset('vendor/assets/js/owl.carousel.min.js') }}"></script>
    <!--Lightgallery js-->
    <script src="{{ asset('vendor/assets/js/lightgallery-all.js') }}"></script>
    <script src="{{ asset('vendor/assets/js/custom_lightgallery.js') }}"></script>
    <!--Slicknav js-->
    <script src="{{ asset('vendor/assets/js/jquery.slicknav.min.js') }}"></script>
    <!--Magnific js-->
    <script src="{{ asset('vendor/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!--Nice Select js-->
    <script src="{{ asset('vendor/assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- Datepicker JS -->
    <script src="{{ asset('vendor/assets/js/jquery.datepicker.min.js') }}"></script>
    <!--ClockPicker JS-->
    <script src="{{ asset('vendor/assets/js/jquery-clockpicker.min.js') }}"></script>
    <!--Main js-->
    <script src="{{ asset('vendor/assets/js/main.js') }}"></script>

    @stack('customScript')
</body>

</html>
