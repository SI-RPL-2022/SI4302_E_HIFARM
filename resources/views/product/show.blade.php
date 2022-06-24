@extends('layouts.app')

@section('title', 'Produk')

@section('content')

<link rel="stylesheet" href="{{ asset('css/pembelian.css') }}">

<!-- form -->
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1"><br><br>
            <h1 class="text-center mt-5 mb-5">Detail Produk</h1>

            <!-- Detail Produk -->
            <div class="row">
                <div class="col">
                    <img src="{{ URL::asset('storage/'.$product->image)}}" class="img-produk">
                </div>

                <div class="col">
                    <h2>{{$product->name}}</h2>
                    <h4>Rp. {{$product->price}} -</h4>
                    <br>
                    <h6>Jumlah Transaksi : {{$product->views}}</h6>
                    <br>
                    <h5><img src="{{ URL::asset('image/'.$product->vendor->image)}}"
                            class="img-toko rounded-circle">{{ $product->vendor->store_name}}</h5>
                    <hr>
                    <p class="title-deskripsi">Deskripsi:</p>
                    <p class="content-deskripsi">{!!$product->desc!!}</p>

                    <!-- Button trigger modal -->
                    @guest
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg custom-btn-pesan text-white">Pesan</a>
                    @endguest

                    @auth
                    <button type="button" class="btn btn-primary btn-lg custom-btn-pesan text-white"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <b>Pesan</b>
                    </button>
                    @endauth

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Anda akan diarahkan ke
                                        laman WhatsApp penjual!</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('produk.whatsapp',$product->id)}}" method="GET">
                                    <div class="modal-body text-center">
                                        <button type="submit" class="btn btn-warning me-5"><b>Yakin</b></button>
                                        <button type="button" class="btn btn-primary"
                                            data-bs-dismiss="modal"><b>Kembali</b></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="line-area">
            <hr class="line-moreProduk"><br>

            <div class="row more-produk">
                <h4>Produk Lainnya</h4><br><br><br>
                @foreach ($more as $item)
                @if ($item->id == $product->id)

                @else

                <div class="col-3">
                    <a href="{{ route('product.show', ['id' => $item->id]) }}"><img
                            src="{{ URL::asset('storage/'.$item->image)}}" class="img-thumbnail img-moreProduk"
                            alt="Produk1"></a>
                    <p class="title-moreProduk">{{$item->name}}</p>
                    <p class="price-moreProduk">{{$item->price}}</p>
                </div>
                @endif
                @endforeach


            </div><br><br><br>
        </div>
    </div>
</div>
@endsection