@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <!-- Slider Area Start -->
    <section class="gauto-slider-area fix">
        <div class="gauto-slide owl-carousel">
            @foreach ($sliders as $s)
                <div class="gauto-main-slide" style="background: url({{ asset('img/slider/' . $s->foto) }})">
                    <div class="gauto-main-caption">
                        <div class="gauto-caption-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="slider-text">
                                            <p>{{ $s->title }}</p>
                                            <h2>
                                                {{ $s->description }}
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Slider Area End -->

    {{-- <!-- Find Area Start -->
    <section class="gauto-find-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="find-box">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="find-text">
                                    <h3>Search Your Best Cars here.</h3>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="find-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>
                                                    <input type="text" placeholder="From Address" />
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    <input type="text" placeholder="To Address" />
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    <select>
                                                        <option data-display="Select">
                                                            AC Car
                                                        </option>
                                                        <option>
                                                            Non-AC Car
                                                        </option>
                                                    </select>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>
                                                    <input id="reservation_date" name="reservation_date"
                                                        placeholder="Journey Date" data-select="datepicker"
                                                        type="text" />
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="input-group clockpicker" data-placement="bottom" data-align="top"
                                                    data-autoclose="true">
                                                    <input type="text" class="form-control" placeholder="Journey Time" />
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    <button type="submit" class="gauto-theme-btn">
                                                        Find Car
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Find Area End --> --}}

    <!-- About Area Start -->
    <section class="gauto-about-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-left">
                        <h4>{{ __('Tentang Kami') }}</h4>
                        <h2>{{ __('Selamat Datang di ') . $site->name }}</h2>
                        <p>
                            {!! $site->about !!}
                        </p>
                        <div class="about-signature">
                            <div class="signature-left">
                                <img src="/vendor/assets/img/signature.png" alt="signature" />
                            </div>
                            <div class="signature-right">
                                <h3>{{ $site->owner }}</h3>
                                <p>{{ __('Owner') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right">
                        <img src="{{ asset('vendor/assets/img/about.png') }}" alt="car" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->

    <!-- Service Area Start -->
    <section class="gauto-service-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading">
                        <h4>{{ __('Layanan Yang') }}</h4>
                        <h2>{{ __('Kami Berikan') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="service-slider owl-carousel">
                        <div class="single-service">
                            <span class="service-number">01 </span>
                            <div class="service-icon">
                                <img src="{{ asset('vendor/assets/img/city-transport.png') }}" alt="city trasport" />
                            </div>
                            <div class="service-text">
                                <a href="#">
                                    <h3>Antar Kota</h3>
                                </a>
                                <p>
                                    Kami menyediakan transportasi antar kota/dalam kota
                                </p>
                            </div>
                        </div>
                        <div class="single-service">
                            <span class="service-number">02 </span>
                            <div class="service-icon">
                                <img src="{{ asset('vendor/assets/img/airport-transport.png') }}" alt="airport trasport" />
                            </div>
                            <div class="service-text">
                                <a href="#">
                                    <h3>Antar Bandara</h3>
                                </a>
                                <p>
                                    Kami menyediakan jasa untuk mengantar ke bandara sesuai tujuan
                                </p>
                            </div>
                        </div>
                        <div class="single-service">
                            <span class="service-number">03 </span>
                            <div class="service-icon">
                                <img src="{{ asset('vendor/assets/img/hospital-transport.png') }}"
                                    alt="hospital trasport" />
                            </div>
                            <div class="service-text">
                                <a href="#">
                                    <h3>Antar Provinsi</h3>
                                </a>
                                <p>
                                    Kami siap menyediakan layanan antar provinsi bahkan lintas pulau
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->

    <!-- Offers Area Start -->
    <section class="gauto-offers-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading">
                        <h4>{{ __('Mobil Yang') }}</h4>
                        <h2>{{ __('Kami Tawarkan') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="offer-tabs">
                        {{-- <ul class="nav nav-tabs" id="offerTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab"
                                    aria-controls="all" aria-selected="true">{{ __('Semua') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nissan-tab" data-toggle="tab" href="#nissand" role="tab"
                                    aria-controls="nissan" aria-selected="false">nissan</a>
                            </li>
                        </ul> --}}
                        <div class="tab-content" id="offerTabContent">
                            <!-- All Tab Start -->
                            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                <div class="row">
                                    @forelse ($produks as $p)
                                        <div class="col-lg-4">
                                            <div class="single-offers">
                                                <div class="offer-image">
                                                    <a href="#">
                                                        <img src="{{ asset('img/produk/' . $p->foto) }}" alt="offer 1" />
                                                    </a>
                                                </div>
                                                <div class="offer-text">
                                                    <a href="#">
                                                        <h3>{{ $p->nama }}</h3>
                                                    </a>
                                                    <h4>
                                                        @currency($p->harga)<span>/ {{ __('Hari') }}</span>
                                                    </h4>
                                                    <ul>
                                                        <li>
                                                            <i class="fa fa-car"></i>Model:{{ $p->model }}
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-cogs"></i>{{ $p->transmisi_name }}
                                                        </li>
                                                    </ul>
                                                    <div class="offer-action">
                                                        <a href="#" class="offer-btn-1"></a>
                                                        <a target="_blank"
                                                            href="https://wa.me/{{ $site->phone_wa }}?text=Halo saya mau pesan mobil {{ $p->nama }}"
                                                            class="offer-btn-2">Pesan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        Belum ada produk
                                    @endforelse
                                </div>
                            </div>
                            <!-- All Tab End -->

                            <!-- Nissan Tab Start -->
                            <div class="tab-pane fade" id="nissand" role="tabpanel" aria-labelledby="nissan-tab">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image">
                                                <a href="#">
                                                    <img src="assets/img/bmw-offer.png" alt="offer 1" />
                                                </a>
                                            </div>
                                            <div class="offer-text">
                                                <a href="#">
                                                    <h3>BMW X3</h3>
                                                </a>
                                                <h4>
                                                    $50.00<span>/ Day</span>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-car"></i>Model:2017
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-cogs"></i>Automatic
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-dashboard"></i>20kmpl
                                                    </li>
                                                </ul>
                                                <div class="offer-action">
                                                    <a href="#" class="offer-btn-1">Rent Car</a>
                                                    <a href="#" class="offer-btn-2">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image">
                                                <a href="#">
                                                    <img src="assets/img/audi-offer.png" alt="offer 1" />
                                                </a>
                                            </div>
                                            <div class="offer-text">
                                                <a href="#">
                                                    <h3>Audi Q3</h3>
                                                </a>
                                                <h4>
                                                    $75.00<span>/ Day</span>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-car"></i>Model:2017
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-cogs"></i>Automatic
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-dashboard"></i>20kmpl
                                                    </li>
                                                </ul>
                                                <div class="offer-action">
                                                    <a href="#" class="offer-btn-1">Rent Car</a>
                                                    <a href="#" class="offer-btn-2">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image">
                                                <a href="#">
                                                    <img src="assets/img/toyota-offer-2.png" alt="offer 1" />
                                                </a>
                                            </div>
                                            <div class="offer-text">
                                                <a href="#">
                                                    <h3>Toyota Camry</h3>
                                                </a>
                                                <h4>
                                                    $55.00<span>/ Day</span>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-car"></i>Model:2017
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-cogs"></i>Automatic
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-dashboard"></i>20kmpl
                                                    </li>
                                                </ul>
                                                <div class="offer-action">
                                                    <a href="#" class="offer-btn-1">Rent Car</a>
                                                    <a href="#" class="offer-btn-2">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Nissan Tab End -->

                            <!-- Toyota Tab Start -->
                            <div class="tab-pane fade" id="Toyota" role="tabpanel" aria-labelledby="Toyota-tab">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image">
                                                <a href="#">
                                                    <img src="assets/img/nissan-offer.png" alt="offer 1" />
                                                </a>
                                            </div>
                                            <div class="offer-text">
                                                <a href="#">
                                                    <h3>Nissan 370Z</h3>
                                                </a>
                                                <h4>
                                                    $75.00<span>/ Day</span>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-car"></i>Model:2017
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-cogs"></i>Automatic
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-dashboard"></i>20kmpl
                                                    </li>
                                                </ul>
                                                <div class="offer-action">
                                                    <a href="#" class="offer-btn-1">Rent Car</a>
                                                    <a href="#" class="offer-btn-2">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image">
                                                <a href="#">
                                                    <img src="assets/img/offer-toyota.png" alt="offer 1" />
                                                </a>
                                            </div>
                                            <div class="offer-text">
                                                <a href="#">
                                                    <h3>Toyota Alphard</h3>
                                                </a>
                                                <h4>
                                                    $50.00<span>/ Day</span>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-car"></i>Model:2017
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-cogs"></i>Automatic
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-dashboard"></i>20kmpl
                                                    </li>
                                                </ul>
                                                <div class="offer-action">
                                                    <a href="#" class="offer-btn-1">Rent Car</a>
                                                    <a href="#" class="offer-btn-2">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image">
                                                <a href="#">
                                                    <img src="assets/img/audi-offer.png" alt="offer 1" />
                                                </a>
                                            </div>
                                            <div class="offer-text">
                                                <a href="#">
                                                    <h3>Audi Q3</h3>
                                                </a>
                                                <h4>
                                                    $45.00<span>/ Day</span>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-car"></i>Model:2017
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-cogs"></i>Automatic
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-dashboard"></i>20kmpl
                                                    </li>
                                                </ul>
                                                <div class="offer-action">
                                                    <a href="#" class="offer-btn-1">Rent Car</a>
                                                    <a href="#" class="offer-btn-2">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Toyota Tab Start -->

                            <!-- Audi Tab Start -->
                            <div class="tab-pane fade" id="Audi" role="tabpanel" aria-labelledby="Audi-tab">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image">
                                                <a href="#">
                                                    <img src="assets/img/audi-offer.png" alt="offer 1" />
                                                </a>
                                            </div>
                                            <div class="offer-text">
                                                <a href="#">
                                                    <h3>Audi Q3</h3>
                                                </a>
                                                <h4>
                                                    $45.00<span>/ Day</span>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-car"></i>Model:2017
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-cogs"></i>Automatic
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-dashboard"></i>20kmpl
                                                    </li>
                                                </ul>
                                                <div class="offer-action">
                                                    <a href="#" class="offer-btn-1">Rent Car</a>
                                                    <a href="#" class="offer-btn-2">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image">
                                                <a href="#">
                                                    <img src="assets/img/nissan-offer.png" alt="offer 1" />
                                                </a>
                                            </div>
                                            <div class="offer-text">
                                                <a href="#">
                                                    <h3>Nissan 370Z</h3>
                                                </a>
                                                <h4>
                                                    $75.00<span>/ Day</span>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-car"></i>Model:2017
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-cogs"></i>Automatic
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-dashboard"></i>20kmpl
                                                    </li>
                                                </ul>
                                                <div class="offer-action">
                                                    <a href="#" class="offer-btn-1">Rent Car</a>
                                                    <a href="#" class="offer-btn-2">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image">
                                                <a href="#">
                                                    <img src="assets/img/toyota-offer-2.png" alt="offer 1" />
                                                </a>
                                            </div>
                                            <div class="offer-text">
                                                <a href="#">
                                                    <h3>Toyota Alphard</h3>
                                                </a>
                                                <h4>
                                                    $50.00<span>/ Day</span>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-car"></i>Model:2017
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-cogs"></i>Automatic
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-dashboard"></i>20kmpl
                                                    </li>
                                                </ul>
                                                <div class="offer-action">
                                                    <a href="#" class="offer-btn-1">Rent Car</a>
                                                    <a href="#" class="offer-btn-2">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Audi Tab End -->

                            <!-- Marcedes Tab Start -->
                            <div class="tab-pane fade" id="mercedes" role="tabpanel" aria-labelledby="mercedes-tab">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image">
                                                <a href="#">
                                                    <img src="assets/img/marcedes-offer.png" alt="offer 1" />
                                                </a>
                                            </div>
                                            <div class="offer-text">
                                                <a href="#">
                                                    <h3>
                                                        marcedes S-class
                                                    </h3>
                                                </a>
                                                <h4>
                                                    $50.00<span>/ Day</span>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-car"></i>Model:2017
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-cogs"></i>Automatic
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-dashboard"></i>20kmpl
                                                    </li>
                                                </ul>
                                                <div class="offer-action">
                                                    <a href="#" class="offer-btn-1">Rent Car</a>
                                                    <a href="#" class="offer-btn-2">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image">
                                                <a href="#">
                                                    <img src="assets/img/audi-offer.png" alt="offer 1" />
                                                </a>
                                            </div>
                                            <div class="offer-text">
                                                <a href="#">
                                                    <h3>Audi Q3</h3>
                                                </a>
                                                <h4>
                                                    $45.00<span>/ Day</span>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-car"></i>Model:2017
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-cogs"></i>Automatic
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-dashboard"></i>20kmpl
                                                    </li>
                                                </ul>
                                                <div class="offer-action">
                                                    <a href="#" class="offer-btn-1">Rent Car</a>
                                                    <a href="#" class="offer-btn-2">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image">
                                                <a href="#">
                                                    <img src="assets/img/nissan-offer.png" alt="offer 1" />
                                                </a>
                                            </div>
                                            <div class="offer-text">
                                                <a href="#">
                                                    <h3>Nissan 370Z</h3>
                                                </a>
                                                <h4>
                                                    $75.00<span>/ Day</span>
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-car"></i>Model:2017
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-cogs"></i>Automatic
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-dashboard"></i>20kmpl
                                                    </li>
                                                </ul>
                                                <div class="offer-action">
                                                    <a href="#" class="offer-btn-1">Rent Car</a>
                                                    <a href="#" class="offer-btn-2">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Marcedes Tab End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offers Area End -->
@endsection

@push('customScript')
    <script>
        $(document).ready(function() {

            function convertDate(date) {
                var dates = new Date(date);
                var yyyy = dates.getFullYear().toString();
                var mm = (dates.getMonth() + 1).toString();
                var dd = dates.getDate().toString();

                var mmChars = mm.split('');
                var ddChars = dd.split('');

                return yyyy + '-' + (mmChars[1] ? mm : "0" + mmChars[0]) + '-' + (ddChars[1] ? dd : "0" + ddChars[
                    0]);
            }

            $("#tgl").on('change', function() {
                var tgl = $(this).val();
                var tgl_convert = convertDate(tgl);
                $("#date").val(tgl_convert);
            });


            $("#btn-cari").click(function() {
                cariJadwal();
            });

            function cariJadwal() {
                $(".result").html('');
                var tanggal = $("#tanggal").val();
                tanggal = convertDate(tanggal);
                var gedung = $("#gedung").val();
                console.log(tanggal);
                field = $(".field").val();
                $.ajax({
                    type: "GET",
                    url: "api/cek-gedung?tanggal=" + tanggal + "&id_gedung=" + gedung,
                    success: function(data) {
                        console.log(data);
                        if (data.success) {
                            $(".result").html('<h5 class="text-center mb-0 pb-0 mr-3">' + data.message +
                                '</h5> <a href="{{ url('/booking') }}" class="btn btn-primary btn-sm">Lanjutkan Booking</a>'
                            );
                        } else {
                            $(".result").html('<h5 class="text-center mb-0 pb-0">' + data.message +
                                '</h5>');
                        }
                    }
                });
            }
        });
    </script>
@endpush
