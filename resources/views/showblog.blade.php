@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-lg-9">
            <div class="mb-3">
                <a href="/blog" class="text-decoration-none"><span><i class="bi bi-arrow-left-short"></i></span>
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
</div>
@endsection