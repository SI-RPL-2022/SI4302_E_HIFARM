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
                <div class="card-header">{{ __('Buat Produk') }}</div>
                <div class="card-body">


		<!-- banner -->
		<div class="banner">
			<div class="custom-container">
				<img src="assets/discord2.png" class="img-profil-toko">
				<h1 class="text-white title-banner">Toko Abadi</h1>
			</div>
			<p class="text-white desc-banner">Menyediakan berbagai daging terbaik</p>
		</div>
		
		<!-- container -->
		<div class="container">
			<!-- row 1 -->
			<div class="row mt-2 mb-4">
		    	<div class="col">
		      		<p class="text-center container-produk"><a href="#" class="link-produk">Produk</a></p>
		    	</div>

		    	<div class="col">
		    		<hr class="dividing-line">
		    	</div>

		    	<div class="col">
		      		<p class="text-center container-detailToko"><a href="#" class="link-detailToko">Detail Toko</a></p>
		    	</div>
		    </div>

		    <div class="text-center mt-3 mb-4">
		    	<button type="button" class="btn btn-primary btn-lg"><b>+ Tambah Produk</b></button>	
		    </div>
		    
		    <!-- row 2 -->
		    <div class="row mb-5 custom-row">
		    	<div class="col-4">
		    		<div class="card" style="width: 18rem;">
					  <img src="assets/image_3.png" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Sapi jantan unggulan</h5>
					    <p class="card-text">
					    	<span>Rp. 24.450.000,-</span><br>
					    	<span>Bobot: 200-250kg</span>
					    </p>

					    <span class="city">Bandung<a href="#" class="btn btn-primary btn-pesan" style="border-radius: 10px;">Pesan</a></span>
					  </div>
					</div>
		    	</div>

		    	<div class="col-4">
		    		<div class="card" style="width: 18rem;">
					  <img src="assets/image_3.png" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Sapi biasa aja</h5>
					    <p class="card-text">
					    	<span>Rp. 24.450.000,-</span><br>
					    	<span>Bobot: 200-250kg</span>
					    </p>

					    <span class="city">Bandung<a href="#" class="btn btn-primary btn-pesan" style="border-radius: 10px;">Pesan</a></span>
					  </div>
					</div>
		    	</div>

		    	<div class="col-4">
		    		<div class="card" style="width: 18rem;">
					  <img src="assets/image_3.png" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Sapi galak ternama</h5>
					    <p class="card-text">
					    	<span>Rp. 24.450.000,-</span><br>
					    	<span>Bobot: 200-250kg</span>
					    </p>

					    <span class="city">Bandung<a href="#" class="btn btn-primary btn-pesan" style="border-radius: 10px;">Pesan</a></span>
					  </div>
					</div>
		    	</div>
		    </div>

		    <!-- row 3 -->
		    <div class="row mb-5 custom-row">
		    	<div class="col-4">
		    		<div class="card" style="width: 18rem;">
					  <img src="assets/image_3.png" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Sapi jantan unggulan</h5>
					    <p class="card-text">
					    	<span>Rp. 24.450.000,-</span><br>
					    	<span>Bobot: 200-250kg</span>
					    </p>

					    <span class="city">Bandung<a href="#" class="btn btn-primary btn-pesan" style="border-radius: 10px;">Pesan</a></span>
					  </div>
					</div>
		    	</div>

		    	<div class="col-4">
		    		<div class="card" style="width: 18rem;">
					  <img src="assets/image_3.png" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Sapi jantan unggulan</h5>
					    <p class="card-text">
					    	<span>Rp. 24.450.000,-</span><br>
					    	<span>Bobot: 200-250kg</span>
					    </p>

					    <span class="city">Bandung<a href="#" class="btn btn-primary btn-pesan" style="border-radius: 10px;">Pesan</a></span>
					  </div>
					</div>
		    	</div>

		    	<div class="col-4">
		    		<div class="card" style="width: 18rem;">
					  <img src="assets/image_3.png" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Sapi jantan unggulan</h5>
					    <p class="card-text">
					    	<span>Rp. 24.450.000,-</span><br>
					    	<span>Bobot: 200-250kg</span>
					    </p>

					    <span class="city">Bandung<a href="#" class="btn btn-primary btn-pesan" style="border-radius: 10px;">Pesan</a></span>
					  </div>
					</div>
		    	</div>
		    </div>

		    <div class="pagination-position">
			    <nav aria-label="Page navigation example">
				  <ul class="pagination">
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <li class="page-item"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>


</div>
</div>
</div>
</div>
</div>
</div>



	@endsection