@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <x-sidebar-navigation/>

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('Edit Produk') }}</div>
                <div class="card-body">
                    <form action="/vendor/product/edit/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="vendor_id" value="{{ $vendor_id }}">

                        <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label">{{ __('Gambar Produk') }}</label>
                            <div class="col-sm-10">
                                <img class="mb-3 col-sm-5 img-preview img-fluid">
                                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">{{ __('Nama Produk') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="price" class="col-sm-2 col-form-label">{{ __('Harga Produk') }}</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="price" name="price" min="1" value="{{ $data->price }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="weight" class="col-sm-2 col-form-label">{{ __('Berat Produk') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="weight" name="weight" value="{{ $data->weight }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="category" class="col-sm-2 col-form-label">{{ __('Kategori Produk') }}</label>
                            <div class="col-sm-10">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category" id="inlineRadio1"
                                        value="Hewan Ternak" @if($data->category == 'Hewan Ternak') checked @endif>
                                    <label class="form-check-label" for="inlineRadio1">{{ __('Hewan Ternak') }}</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category" id="inlineRadio2"
                                        value="Produk Ternak" @if($data->category == 'Produk Ternak') checked @endif>
                                    <label class="form-check-label" for="inlineRadio2">{{ __('Produk Ternak') }}</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category" id="inlineRadio3"
                                        value="Pakan Ternak" @if($data->category == 'Pakan Ternak') checked @endif>
                                    <label class="form-check-label" for="inlineRadio3">{{ __('Pakan Ternak') }}</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="category" id="inlineRadio4"
                                        value="Lainnya" @if($data->category == 'Lainnya') checked @endif>
                                    <label class="form-check-label" for="inlineRadio4">{{ __('Lainnya') }}</label>
                                </div>

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="desc" class="col-sm-2 col-form-label">{{ __('Keterangan') }}</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="desc" id="desc" value="{{ $data->desc }}">
                                <trix-editor input="desc"></trix-editor>
                                {{-- <textarea class="form-control" id="desc" name="desc" rows="3">{{ $data->desc }}</textarea> --}}
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-danger me-md-2" href="{{ route('vendor.product.index') }}">{{ __('Cancel') }}</a>
                            <button class="btn btn-primary" type="submit">{{ __('Submit') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection
