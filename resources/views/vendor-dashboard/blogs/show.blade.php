@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-lg-9">
            <div class="mb-3">
                <a href="{{ route('vendor.blog.index') }}" class="text-decoration-none"><span><i class="bi bi-arrow-left-short"></i></span>
                    Kembali ke sebelumnya</a>
            </div>

            <h3 class="fw-bold">{{ $data->title }}</h3>
            <h5 class="text-black-50">{{ $data->subtitle }}</h5>
            <p class="text-black-50">{{ $data->created_at }}</p>
            <div class="d-inline-block">
                <img src="{{ asset('storage/'. $data->image) }}" class="img-fluid rounded-3" width="200" alt="...">
            </div>
            <p>{!! $data->content !!}</p>
        </div>
    </div>

    {{-- <div class="row">
        <x-sidebar-navigation/>

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('Lihat Produk') }}
</div>

<div class="m-3 row">
    <div class="card mb-3" style="border: none">
        <div class="row g-0">

            <div class="col-md-4">
                <img src="{{ asset('storage/'. $data->image) }}" class="img-fluid rounded-3" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title fw-bold">{{ $data->name }}</h3>
                    <p class="card-text">{{ $data->price }}</p>
                    <p class="card-text fw-bold">Deskripsi</p>
                    {!! $data->desc !!}
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</div> --}}

</div>
@endsection