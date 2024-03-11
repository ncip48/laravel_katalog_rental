@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-body">
            <h4 class="section-title">Dashboard</h4>
            <div class="row">
                <div class="col-12">
                    @include('admin.layouts.alert')
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="col-12 col-md-4 d-flex align-items-stretch">
                        <!-- earnings card -->
                        <div class="card card-primary w-100">
                            <div class="card-body p-3">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title text-dark">Produk</h4>
                                    <div class="ms-auto">
                                        <span
                                            class="btn btn-lg btn-primary btn-circle d-flex align-items-center justify-content-center">
                                            <i class="mdi mdi-format-list-bulleted"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <h2 class="fs-8 text-dark mb-0">{{ $produk }}</h2>
                                    <span class="text-dark op-5">Jumlah Produk</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-7">
                                        <div id='calendar'></div>
                                    </div>
                                    <div class="col-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <canvas id="myChart" height="200px"></canvas>
                                            </div>
                                            <div class="col-12">
                                                <canvas id="myChart2" height="200px"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
