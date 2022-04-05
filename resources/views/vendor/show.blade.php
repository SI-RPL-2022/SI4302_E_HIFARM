@extends('layouts.app')

@section('content')

	<link rel="stylesheet" href="{{ asset('css/style_kunjungiTokoAdmin.css')}}">

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

		<!-- row 1 -->
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Products</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Detail Toko</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Review</button>
			</li>
			</ul>
			<div class="tab-content" id="myTabContent">

			<!-- ISI PRODUK + PAGINATION -->
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			<br></br>
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

			<!-- ISI DETAIL TOKO -->
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


			</div>


			<!-- ISI REVIEW -->
			<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">lolololo</div>
			</div>
			<br></br>
		    

		    
		</div>



@endsection