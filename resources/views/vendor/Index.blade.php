@extends('layouts.app')

@section('content')


	<link rel="stylesheet" href="{{ asset('css/style_kunjungiTokoAdmin.css') }}">

	<!-- Bootstrap CSS
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Toko</title>
	</head> -->

	<body>
	<div class="container">
    <div class="row">
        <x-sidebar-navigation/>

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('Detail Toko') }}</div>
                <div class="card-body">


		<!-- banner -->
		<div class="layer" style="width:100%; height:250px; background-image: url('{{ asset('image/'.$vendor->image)}}');background-repeat: no-repeat; background-size: 100% auto; background-position: center;">
            <div class="layer">
                </br>
                </br>
                </br>
                <h1 class="display-5 fw-bold" style="color:white; margin-left:2rem; ">{{ $vendor->store_name }}</h1>
                <p class="col-md-8 fs-4" style="color:white; margin-left:2rem; ">{{ $vendor->address }}</p> 
            </div>
      	</div>
		
		<!-- container -->
		<div class="container">
			
		<div class="text-center mt-3 mb-4">
		<br></br>
		    	<h2><b> Detail Toko </b></h2>	
		</div>
			<br></br>
			<h4> <b>Deskripsi Toko</b> </h4>
			<h5> {{$vendor->descr}}</h5>
		<br></br>
				<h4> <b>Lokasi Toko</b> </h4>
				<h5>{{ $vendor->address }}</h5>
				<br></br>
				<h4> <b>Kontak</b> </h4>
				<h5> <img src="https://w7.pngwing.com/pngs/752/599/png-transparent-line-app-icon-whatsapp-logo-whatsapp-grass-mobile-phones-android.png" width="50" alt=""></h5><h6>{{ $vendor->phone }}  </h6>
				<br></br>
				<h4> <b> Buka Sejak </b></h4>
				<h5> {{ $vendor->created_at }} </h5>
		<br></br>

		<div class="text-center mt-3 mb-4">
		<form action="{{ route('vendor.edit', Auth::user()->id)}}" method="GET" enctype="multipart/form-data"> 
  		@csrf
		    	<button type="submit" class="btn btn-primary btn-lg"><b>Edit Detail Toko</b></button>	
		    </div>
		</form>

</div>
</div>
</div>
</div>
</div>
</div>



	@endsection