@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-lg-9">
            <div class="mb-3">
                <a href="{{ url()->previous() }}" class="text-decoration-none"><span><i class="bi bi-arrow-left-short"></i></span>
                    Kembali ke sebelumnya</a>
            </div>

            <h3 class="fw-bold">{{ $data->title }}</h3>
            <h5 class="text-black-50">{{ $data->subtitle }}</h5>
            <h5 class="text-black-50">by {{ $data->user->name }}</h5>
            <h5 class="text-black-50">Kategori : {{ $data->category }}</h5>
            <p class="text-black-50">{{ $data->created_at }}</p>

            <br>
            <div class="d-inline-block">
                <img src="{{ asset('storage/'. $data->image) }}" class="img-fluid rounded-3" width="1000" alt="...">
            </div>
            <br><br>
            <h5>{!! $data->content !!}</h5>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection