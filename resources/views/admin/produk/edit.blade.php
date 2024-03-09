@extends('admin.layouts.app')
@section('title', 'Edit Produk')
@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-body">
            <h4 class="section-title">Edit Produk</h4>
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
                            <form method="post" action="{{ route('produk.update', $produk) }}"
                                enctype="multipart/form-data">
                                @method('patch')
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="nama" class="form-label">Nama Produk</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                value="{{ $produk->nama }}" required>
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="deskripsi" class="form-label">Deskripsi</label>
                                            <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                                value="{{ $produk->deskripsi }}" required>
                                            @error('deskripsi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="harga" class="form-label">Harga</label>
                                            <input type="text" class="form-control" id="harga" name="harga"
                                                value="{{ $produk->harga }}" required>
                                            @error('harga')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="model" class="form-label">Model/Tahun</label>
                                            <input type="text" class="form-control" id="model" name="model"
                                                value="{{ $produk->model }}" required>
                                            @error('model')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="transmisi" class="form-label">Transmisi</label>
                                            <select class="form-select" name="transmisi" id="transmisi">
                                                <option value="0" {{ $produk->status == 0 ? 'selected' : '' }}>Otomatis
                                                </option>
                                                <option value="1" {{ $produk->status == 1 ? 'selected' : '' }}>Manual
                                                </option>
                                                <option value="2" {{ $produk->status == 2 ? 'selected' : '' }}>Hybrid
                                                </option>
                                                <option value="3" {{ $produk->status == 3 ? 'selected' : '' }}>Listrik
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="foto" class="form-label">Ganti Foto</label>
                                            <input type="file" class="form-control" id="foto" name="foto">
                                            @error('foto')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" name="status" id="status">
                                                <option value="1" {{ $produk->status == 1 ? 'selected' : '' }}>Aktif
                                                </option>
                                                <option value="0" {{ $produk->status == 0 ? 'selected' : '' }}>Tidak
                                                    Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer float-end">
                                    <div>
                                        <button type="submit" class="btn btn-icon icon-left btn-ungu">Save</button>
                                        <a class="btn btn-secondary" href="{{ route('produk.index') }}">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
