@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <x-sidebar-navigation/>

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('Edit Produk') }}</div>
                <div class="card-body">
                    <form action="" method="">
                        @csrf

                        <div class="mb-3 row">
                            <label for="gambar" class="col-sm-2 col-form-label">{{ __('Gambar Produk') }}</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="gambar" name="gambar">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">{{ __('Nama Produk') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="harga" class="col-sm-2 col-form-label">{{ __('Harga Produk') }}</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="harga" name="harga" min="1">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="berat" class="col-sm-2 col-form-label">{{ __('Berat Produk') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="berat" name="berat">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="kategori" class="col-sm-2 col-form-label">{{ __('Kategori Produk') }}</label>
                            <div class="col-sm-10">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kategori" id="inlineRadio1"
                                        value="Hewan Ternak">
                                    <label class="form-check-label" for="inlineRadio1">{{ __('Hewan Ternak') }}</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kategori" id="inlineRadio2"
                                        value="Produk Ternak">
                                    <label class="form-check-label" for="inlineRadio2">{{ __('Produk Ternak') }}</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kategori" id="inlineRadio3"
                                        value="Pakan Ternak">
                                    <label class="form-check-label" for="inlineRadio3">{{ __('Pakan Ternak') }}</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kategori" id="inlineRadio4"
                                        value="Lainnya">
                                    <label class="form-check-label" for="inlineRadio4">{{ __('Lainnya') }}</label>
                                </div>

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="keterangan" class="col-sm-2 col-form-label">{{ __('Keterangan') }}</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-danger me-md-2" href="{{ route('product.index') }}">{{ __('Cancel') }}</a>
                            <button class="btn btn-primary" type="submit">{{ __('Submit') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
