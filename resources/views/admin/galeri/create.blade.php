@extends('admin.layouts.app')
@section('title', 'Tambah Galeri')
@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-body">
            <h4 class="section-title">Tambah Galeri</h4>
            <div class="row">
                <div class="col-12">
                    @include('admin.layouts.alert')
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="card-header-action">
                                <div class="row">
                                </div>
                            </div>
                            <form method="post" action="{{ route('galeri.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="title" class="form-label">Nama Foto</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                value="{{ old('title') }}" required>
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="foto" class="form-label">Foto</label>
                                            <input type="file" class="form-control" id="foto" name="foto">
                                            @error('foto')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer float-end">
                                    <div>
                                        <button type="submit" class="btn btn-icon icon-left btn-ungu">Save</button>
                                        <a class="btn btn-secondary" href="{{ route('galeri.index') }}">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
