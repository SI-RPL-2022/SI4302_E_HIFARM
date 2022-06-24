@extends('layouts.app')

@section('title', 'TokoKu')

@section('content')
<div class="container">
    <div class="row">
        <x-sidebar-navigation/>

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('Profil TokoKu') }}</div>

                {{-- @if (session()->has('success-add'))
                    <div class="mx-3 my-2 alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success-add') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
                <div class="m-3">
                    @if (session()->has('success-add'))
                        <x-alert type="success" message="{{ session('success-add') }}"/>
                    @endif

                    @if (session()->has('success-update'))
                        <x-alert type="success" message="{{ session('success-update') }}"/>
                    @endif
                    
                    @if (session()->has('success-remove'))
                        <x-alert type="success" message="{{ session('success-remove') }}"/>
                    @endif

                    <form action="{{ route('vendor.product.index') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="vendor_id" value="{{ $data->vendor_id }}">

                        {{-- <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label">{{ __('Gambar Produk') }}</label>
                            <div class="col-sm-10">
                                <img class="mb-3 col-sm-5 img-preview img-fluid">
                                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                            </div>
                        </div> --}}

                        <div class="mb-3 row">
                            <label for="store_name" class="col-sm-2 col-form-label">{{ __('Nama Toko') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="store_name" name="store_name" value="{{ $data->store_name }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="address" class="col-sm-2 col-form-label">{{ __('Alamat Toko') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" name="address" value="{{ $data->address }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-2 col-form-label">{{ __('Nomor Kontak') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $data->phone }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="descr" class="col-sm-2 col-form-label">{{ __('Deskripsi') }}</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="descr" id="descr" value="{{ $data->descr }}">
                                <trix-editor input="descr"></trix-editor>
                                {{-- <textarea class="form-control" id="desc" name="desc" rows="3"></textarea> --}}
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            {{-- <a class="btn btn-danger me-md-2" href="{{ route('vendor.product.index') }}">{{ __('Cancel') }}</a> --}}
                            <button class="btn btn-primary" type="submit">{{ __('Submit') }}</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
