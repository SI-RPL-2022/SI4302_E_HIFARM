@extends('layouts.app')

@section('content')
<div class="container ">
      <div class="card mb-5">
        <img
          src="https://images.unsplash.com/photo-1594302954323-7846bf62b5a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2FwaXxlbnwwfHwwfHw%3D&w=1000&q=80"
          height="350" class="card-img-top" alt="...">
      </div>

      <div class="row mb-5">
        <div class="col-sm">
          <h2 class="fw-bold">Menjadikan Ternak Sebagai Mata Pencaharian yang Lebih Baik untuk Indonesia</h2>
          <p>HiFarm bertujuan untuk menghubungkan peternak skala kecil dengan eksposur global dalam mempromosikan produk
            ternak Indonesia yang lezat; melalui kesepakatan grosir, belanja eceran, dan kemitraan bisnis. </p>
        </div>
        <div class="col-sm">
          <img src="https://disnakkeswan.ntbprov.go.id/wp-content/uploads/2020/11/FB_IMG_1604063969568-732x380.jpg"
          height="" class="card-img-top" alt="...">
        </div>
      </div>
    </div>

    <div class="mb-5 py-4" style="background-color: #FDE57A;">
      <h3 class="text-center mb-4"><b>Bergabung Dalam Ekosistem HiFarm</b></h3>
      <div class="container row mx-auto">
        <div class="col-sm mb-2">
          <img src="https://disnakkeswan.ntbprov.go.id/wp-content/uploads/2020/11/FB_IMG_1604063969568-732x380.jpg"
          height="" class="card-img-top" alt="...">
        </div>
        <div class="col-sm mb-2">
          <img src="https://disnakkeswan.ntbprov.go.id/wp-content/uploads/2020/11/FB_IMG_1604063969568-732x380.jpg"
          height="" class="card-img-top" alt="...">
        </div>
        <div class="col-sm mb-2">
          <img src="https://disnakkeswan.ntbprov.go.id/wp-content/uploads/2020/11/FB_IMG_1604063969568-732x380.jpg"
          height="" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="text-center">
          <p class="fs-5">HiFarm membuka kesempatan untuk kamu para <br> peternak yang ingin terlibat untuk memanjukan
            <br> Peternakan Indonesia.</p>
          <a class="btn btn-primary" href="{{ route('register')}}" role="button">Gabung Sekarang</a>
        </div>
      </div>

      
    </div>

    <div class="mb-5 py-4" style="background-color: orange;">
    <h3 class="text-center mb-4"><b>Produk-Produk Terbaru</b></h3>
        <div class="row" style="margin-left:4rem; margin-right:4rem; margin-bottom:2rem;">
            @foreach ($latest as $item)
                    <div class="col-sm-4">
                        <div class="card">

                        <img src="{{ URL::asset('image/'.$item->image)}}" height="250px"  class="card-img-top" alt="gambar">
                            <div class="card-body">
                            <!--route open bracket 'vendor.product', $item->id close -->
                            <form action="" method="GET"> 
                                <br>
                                <h3 class="card-title">{{$item->name}}</h3>
                                <hr>
                                <h4>{{$item->price}}</h4>
                                <h4>{{$item->weight}}</h4>
                                <h4>{{$item->desc}}</h4>
                                <br>

                                <button type="submit" class="btn btn-primary btn-lg">Lihat</button>
                            </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
        </div>

      </div>
@endsection