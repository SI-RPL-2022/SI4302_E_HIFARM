@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <x-sidebar-navigation/>

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('Lihat Produk') }}</div>

                {{-- @if (session()->has('success-add'))
                    <div class="mx-3 my-2 alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success-add') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
                <div class="m-3 row">

                    {{-- <div class="col-sm-5 mb-3">
                        <img class="rounded-3 img-fluid" src="https://asset.kompas.com/crops/zVVKpzO6-s0G0VcQEWR-0toI_i8=/0x0:1280x853/750x500/data/photo/2021/03/19/60541dce85442.jpg" width="400" alt="">
                    </div>
                    <div class="col-sm-5">
                        <h3 class="fw-bold">{{ $data->name }}</h3>
                        <h4>{{ $data->price }}</h3>
                        <h5>Deskripsi:</h5>
                        {!! $data->desc !!}
                    </div> --}}

                    <div class="card mb-3" style="border: none">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://asset.kompas.com/crops/zVVKpzO6-s0G0VcQEWR-0toI_i8=/0x0:1280x853/750x500/data/photo/2021/03/19/60541dce85442.jpg" class="img-fluid rounded-3" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title fw-bold">{{ $data->name }}</h3>
                                    <p class="card-text">{{ $data->price }}</p>
                                    <p class="card-text fw-bold">Deskripsi</p>
                                    {!! $data->desc !!}
                                    {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
