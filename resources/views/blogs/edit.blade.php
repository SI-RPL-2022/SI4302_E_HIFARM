@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <x-sidebar-navigation/>

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('Edit Produk') }}</div>
                <div class="card-body">
                    <form action="/vendor/blog/edit/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $data->user_id }}">
                        <input type="hidden" name="oldImage" value="{{ $data->image }}">

                        <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label">{{ __('Banner Blog') }}</label>
                            <div class="col-sm-10">
                                @if ($data->image)
                                    <img src="{{ asset('storage/'.$data->image) }}" class="mb-3 col-sm-5 img-preview img-fluid">
                                @else
                                    <img class="mb-3 col-sm-5 img-preview img-fluid">
                                @endif
                                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="title" class="col-sm-2 col-form-label">{{ __('Judul Blog') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="subtitle" class="col-sm-2 col-form-label">{{ __('Ringkasan Blog') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $data->subtitle }}">
                            </div>
                        </div>

                        {{-- <div class="mb-3 row">
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
                        </div> --}}

                        <div class="mb-3 row">
                            <label for="content" class="col-sm-2 col-form-label">{{ __('Deskripsi') }}</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="content" id="content" value="{{ $data->content }}">
                                <trix-editor input="content"></trix-editor>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-danger me-md-2" href="{{ route('vendor.blog.index') }}">{{ __('Cancel') }}</a>
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
