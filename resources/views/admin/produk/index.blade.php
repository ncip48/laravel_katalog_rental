@extends('admin.layouts.app')
@section('title', 'List Gedung')
@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-body">
            <h4 class="section-title">List Gedung</h4>
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
                                    <div class="col-4">
                                        <div class="">
                                            <a class="btn btn-icon icon-left btn-ungu"
                                                href="{{ route('produk.create') }}">Tambah</a>
                                        </div>
                                    </div>
                                    <div class="col-8 col-md-4 ms-auto">
                                        <form id="search" method="GET" action="{{ route('produk.index') }}">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="cari...">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <tbody>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Name</th>
                                                <th>Harga</th>
                                                <th>Model/Tahun</th>
                                                <th>Transmisi</th>
                                                <th>Foto</th>
                                                <th>Status</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                            @foreach ($produks as $key => $produk)
                                                <tr class="align-middle">
                                                    <td class="text-center">
                                                        {{ ($produks->currentPage() - 1) * $produks->perPage() + $key + 1 }}
                                                    </td>
                                                    <td>{{ $produk->nama }}</td>
                                                    <td>@currency($produk->harga)</td>
                                                    <td>{{ $produk->model }}</td>
                                                    <td>{{ $produk->transmisi_name }}</td>
                                                    <td><img src="{{ asset('img/produk/' . $produk->foto) }}"
                                                            tag="{{ $produk->nama }}" style="height:70px;width:100px;" />
                                                    </td>
                                                    <td><span
                                                            class='badge {{ $produk->status == 1 ? 'bg-warning text-dark' : 'bg-danger' }}'>{{ $produk->status == 1 ? 'Aktif' : 'Tidak Aktif' }}</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="d-flex justify-content-end">
                                                            <a href="{{ route('produk.edit', $produk->id) }}"
                                                                class="btn btn-sm btn-oren btn-icon me-2"><i
                                                                    class="fa fa-edit"></i>
                                                                Edit</a>
                                                            <form action="{{ route('produk.destroy', $produk->id) }}"
                                                                method="POST">
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <input type="hidden" name="_token"
                                                                    value="{{ csrf_token() }}">
                                                                <button class="btn btn-sm btn-danger btn-icon "><i
                                                                        class="fa fa-times"></i> Delete </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $produks->links('vendor.pagination.bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
