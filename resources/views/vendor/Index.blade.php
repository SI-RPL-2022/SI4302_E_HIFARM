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
		<div class="layer" style="width:100%; height:250px; background-image: url('{{ asset('image/ranch.jpg')}}');background-repeat: no-repeat; background-size: 100% auto; background-position: center;">
            <div class="layer">
                </br>
                </br>
                </br>
                <h1 class="display-5 fw-bold" style="color:white; margin-left:2rem; ">Toko Abadi</h1>
                <p class="col-md-8 fs-4" style="color:white; margin-left:2rem; ">Jl. Sukabumi</p> 
            </div>
      </div>
		
		<!-- container -->
		<div class="container">
			
		<div class="text-center mt-3 mb-4">
		<br></br>
		    	<h2><b> Detail Toko </b></h2>	
		</div>
			<br></br>
			<h4> Deskripsi Toko </h4>
			<h5> Toko Abadi fokus dalam menyediakan hewan-hewan ternak terbaik dan berkualitas untukmu.</h5>
		<br></br>
				<h4> Lokasi Toko </h4>
				<h5>Jl. W.J. Lalamentik, Oebufu, Kec. Oebobo, Kota Kupang, Nusa Tenggara Tim.</h5>
				<br></br>
				<h4> Kontak </h4>
				<h5> <img src="https://w7.pngwing.com/pngs/752/599/png-transparent-line-app-icon-whatsapp-logo-whatsapp-grass-mobile-phones-android.png" width="50" alt=""></h5><h6>  </h6>
				<br></br>
				<h4> Buka Sejak </h4>
				<h5> 2019 </h5>


</div>
</div>
</div>
</div>
</div>
</div>



	@endsection