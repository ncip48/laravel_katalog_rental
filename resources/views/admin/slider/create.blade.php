@extends('admin.layouts.app')
@section('title', 'Tambah Slider')
@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-body">
            <h4 class="section-title">Tambah Slider</h4>
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
                            <form method="post" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="title" class="form-label">Judul</label>
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
                                        <div class="col-md-12 mb-3">
                                            <label for="description" class="form-label">Deskripsi</label>
                                            <textarea type="text" class="form-control" id="description" name="description" required>{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="file" class="form-label">Foto</label>
                                            <input type="file" class="form-control" id="file" name="file">
                                            @error('file')
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
                                        <a class="btn btn-secondary" href="{{ route('slider.index') }}">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
