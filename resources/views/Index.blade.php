@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container ">
    <div class="mb-5">
        <img src="{{ asset('image/home1.png') }}" height="350" class="card-img-top" style="border-radius: 25px"
            alt="home1">
    </div>

    <div class="row mb-5">
        <div class="col-sm d-flex align-items-center">
            <div>
                <h1 class="fw-bold">Menjadikan Ternak Sebagai Mata Pencaharian yang Lebih Baik untuk Indonesia</h1>
                <h5>HiFarm bertujuan untuk menghubungkan peternak skala kecil dengan eksposur global dalam mempromosikan
                    produk
                    ternak Indonesia yang lezat; melalui kesepakatan grosir, belanja eceran, dan kemitraan bisnis. </h5>
            </div>
        </div>
        <div class="col-sm">
            <img src="{{ asset('image/home2.jpg') }}" height="" class="card-img-top" style="border-radius: 25px" alt="home2">
        </div>
    </div>
</div>

<div class="py-5" style="background-color: #9FC088;">
    <h3 class="mb-4 text-center fw-bold">Bergabung Dalam Ekosistem HiFarm</h3>
    <div class="container row mx-auto">
        <div class="col-sm mb-2">
            <img src="{{ asset('image/home3.png') }}" height="" class="card-img-top rounded-lg" alt="home3">
        </div>
        <div class="col-sm mb-2">
            <img src="{{ asset('image/home4.png') }}" height="" class="card-img-top" alt="home4">
        </div>
        <div class="col-sm mb-2">
            <img src="{{ asset('image/home5.png') }}" height="" class="card-img-top" alt="home5">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="text-center">
            <p class="fs-5">HiFarm membuka kesempatan untuk kamu para <br> peternak yang ingin terlibat untuk memanjukan
                <br> Peternakan Indonesia.</p>
            <a class="btn btn-lg btn-primary" href="{{ route('register')}}" role="button">Gabung Sekarang</a>
        </div>
    </div>
    <br>
</div>

<div class="py-5 container"> <br>
    <h3 class="text-center mb-4"><b>Produk-Produk Terbaru</b></h3>
    <div class="row" style="margin-left:4rem; margin-right:4rem; margin-bottom:2rem;">
        @foreach ($latest as $item)
            <div class="col-sm-4">
                <div class="card">
                    <img src="{{ URL::asset('storage/'.$item->image)}}" height="250px" class="card-img-top" alt="gambar">
                    <div class="card-body">
                        <h3 class="card-title">{{$item->name}}</h3>
                        <p class="card-text">{{$item->price}}</p>
                        <p class="card-text">{{$item->weight}}</p>
                        <p class="card-text">{!!$item->desc!!}</p>
                        <button type="submit" class="btn btn-primary">Lihat</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row justify-content-center">
        <div class="text-center">
            <p class="fs-5">Lihat produk lebih jauh.</p>
            <a class="btn btn-lg btn-primary" href="{{ route('toko.index')}}" role="button">Browse Toko</a>
        </div>
    </div>
</div>
@endsection