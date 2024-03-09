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
