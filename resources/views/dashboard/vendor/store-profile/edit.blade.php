@extends('layouts.app')

@section('title', 'Edit Toko')

@section('content')
<div class="container">
    <div class="row">
        <x-sidebar-navigation />

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('Edit Detail Toko') }}</div>
                <div class="card-body">
                    {{-- <form action="{{ route('vendor.update', Auth::user()->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="_method" value="PUT">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 offset-md-2"><br><br>
                                    <h1 class="text-center mt-5 mb-5">Buka Toko</h1>

                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Toko <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="store_name" value="{{ $vendor->store_name }}"
                                            class="form-control form-control-lg" id="exampleFormControlInput1">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Singkat
                                            <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="descr" id="exampleFormControlTextarea1"
                                            rows="5">{{$vendor->descr}}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat Toko <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1"
                                            rows="5">{{ $vendor->address }}</textarea>
                                    </div>

                                    <div class="mb-5">
                                        <label for="exampleFormControlInput1" class="form-label">No. Whatsapp <span
                                                class="text-danger">*</span></label>
                                        <input type="number" name="phone" value="{{$vendor->phone}}"
                                            class="form-control form-control-lg" id="exampleFormControlInput1">
                                    </div>

                                    <div class="mb-3">
                                        <input type="hidden" name="imageName" value="{{ $vendor->image }}"
                                            class="form-control form-control-lg" id="exampleFormControlInput1">
                                        <label for="formFile" class="form-label">Cover Gambar Toko</label>
                                        <input class="form-control" name="image" type="file" id="formFile">
                                    </div>

                                    <div class="mb-5">
                                        <img src="{{ URL::asset('image/'.$vendor->image)}}" class="img-fluid img-file"
                                            alt="...">
                                    </div>

                                    <div class="mb-5 text-center">
                                        <!--<button type="button" class="btn btn-warning btn-lg custom-btn-edit text-white"><b>Edit</b></button>-->
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning btn-lg custom-btn-edit"
                                            data-bs-toggle="modal" data-bs-target="#edit">
                                            <b>Edit Toko</b>
                                        </button>

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger btn-lg custom-btn-tutupToko"
                                            data-bs-toggle="modal" data-bs-target="#tutup">
                                            <b>Tutup Toko</b>
                                        </button>

                                        <!-- Modal edit -->
                                        <div class="modal fade" id="edit" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Toko</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin melakukan perubahan toko?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success text-white"
                                                            data-bs-dismiss="modal">Yakin</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Kembali</button>
                    </form> --}}

					<form action="{{ route('vendor.store.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        {{-- <input type="hidden" name="vendor_id" value="{{ $vendor->vendor_id }}"> --}}
                        {{-- <input type="hidden" name="oldImage" value="{{ $vendor->image }}"> --}}

                        <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label">{{ __('Gambar Toko') }} <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                @if ($vendor->image)
                                    <img src="{{ asset('storage/'.$vendor->image) }}" class="mb-3 col-sm-5 img-preview img-fluid">
                                @else
                                    <img class="mb-3 col-sm-5 img-preview img-fluid">
                                @endif
                                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="store_name" class="col-sm-2 col-form-label">{{ __('Nama Toko') }} <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="store_name" name="store_name" value="{{ $vendor->store_name }}">
                            </div>
                        </div>

						<div class="mb-3 row">
                            <label for="descr" class="col-sm-2 col-form-label">{{ __('Keterangan') }} <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="hidden" name="descr" id="descr" value="{{ $vendor->descr }}">
                                <trix-editor input="descr"></trix-editor>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="address" class="col-sm-2 col-form-label">{{ __('Alamat Toko') }} <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" name="address" value="{{ $vendor->address }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-2 col-form-label">{{ __('No. Whatsapp') }} <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="phone" name="phone" min="1" value="{{ $vendor->phone }}">
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-danger me-md-2" href="{{ route('vendor.store.index') }}">{{ __('Cancel') }}</a>
                            <button class="btn btn-primary" type="submit">{{ __('Submit') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal tutup -->
    <div class="modal fade" id="tutup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tutup Toko</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin melakukan tutup toko?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('vendor.store.delete',Auth::user()->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-success text-white" data-bs-dismiss="modal">Yakin</button>
                    </form>

                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
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

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection