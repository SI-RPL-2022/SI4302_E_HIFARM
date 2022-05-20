@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-lg-9">
            @foreach ($data as $key)
                <a class="btn btn-sm btn-info me-1 mb-1 text-white" href="/blog/{{ $key->id }}"> {{ __('View') }} </a>
            @endforeach
        </div>
    </div>
</div>
@endsection