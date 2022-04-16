@extends('layouts.app')

@section('title', 'Toko Profile')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style_kunjungiTokoAdmin.css') }}">

<div class="container">
	<div class="row">
		<x-sidebar-navigation />

		<div class="col-lg-10">
			<div class="card">
				<div class="card-header">{{ __('Detail Toko') }}</div>
				<div class="card-body">

					<!-- banner -->
					<div class="layer"style="width:100%; height:250px; background-image: url('{{ asset('image/'.$vendor->image)}}');background-repeat: no-repeat; background-size: 100% auto; background-position: center;">
						<div class="layer">
							<h1 class="display-5 fw-bold" style="color:white; margin-left:2rem; ">
								{{ $vendor->store_name }}</h1>
							<p class="col-md-8 fs-4" style="color:white; margin-left:2rem; ">{{ $vendor->address }}</p>
						</div>
					</div>

					<div class="py-3 px-3">
						<div class="mb-3">
							<h2 class="fw-bold text-center">Detail Toko</h2>
						</div>
						<div class="mb-4">
							<h4 class="fw-bold">Deskripsi Toko</h4>
							<h5>{!! $vendor->descr !!}</h5>
						</div>
						<div class="mb-4">
							<h4 class="fw-bold">Lokasi Toko</h4>
							<h5>{{ $vendor->address }}</h5>
						</div>
						<div class="mb-4">
							<h4 class="fw-bold">Kontak</h4>
							<div>
								<img class="d-inline" src="https://w7.pngwing.com/pngs/752/599/png-transparent-line-app-icon-whatsapp-logo-whatsapp-grass-mobile-phones-android.png" width="35" alt="">
								<h5 class="d-inline p-2">{{ $vendor->phone }}</h5>
							</div>
						</div>
						<div class="mb-4">
							<h4 class="fw-bold">Buka Sejak</h4>
							<h5>{{ $vendor->created_at }}</h5>
						</div>
					</div>

					<div class="text-center mt-3 mb-4">
						<a class="btn btn-lg btn-primary me-1 mb-1 text-white" href="/dashboard/vendor/store/{{ Auth::user()->id }}"> {{ __('Edit Profil') }} </a>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection