@extends('layouts.app')

@section('content')

<!doctype html>
	<link rel="stylesheet" href="{{ asset('css/style_lihatReview.css') }}">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- Header -->
		<!-- <header id="header">
			<a href="#" class="logo"><img src="assets/Logo.png" class="img-nav"></a>
			<ul>
				<li><a href="#home" onclick="toggle()"><b>Home</b></a></li>
				<li><a href="#produk" onclick="toggle()"><b>Produk</b></a></li>
				<li><a href="#toko" onclick="toggle()"><b>Toko</b></a></li>
				<li><a href="#blog" onclick="toggle()"><b>Blog</b></a></li>
				<li><a href="#aboutUs" onclick="toggle()"><b>About Us</b></a></li>
			</ul>
			<ul class="navbar-nav me-auto mb-2 mb-lg-0 dropdown-modifed">
			  	<li class="nav-item dropdown">
			    	<img src="assets/Mask_group.png" class="img-profile">
			        <a class="nav-link dropdown-toggle dropdown-modifed-a" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			            Hallo, Brian
			        </a>
			        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			          	<div class="dropdown-modifed-menu">
			            	<li><a class="dropdown-item" href="#"><img src="assets/Group_54.png">Buka Toko</a></li>
			            </div>

			            <div class="dropdown-modifed-menu">
			            	<li><a class="dropdown-item" href="#"><img src="assets/Group_53.png">Profil</a></li>
			            </div>

			            <div class="dropdown-divider-custom">
			            	<li><hr class="dropdown-divider"></li>
			            </div>

			            <div class="dropdown-modifed-menu">
			            	<li><a class="dropdown-item" href="#"><img src="assets/Group.png">Logout</a></li>
			            </div>
		          	</ul>
			    </li>
		    </ul>
			<div class="toggle" onclick="toggle()"></div> <!-- for responsive -->
		<!--</header> -->

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

		    	<div class="col">
		    		<hr class="dividing-line">
		    	</div>

		    	<div class="col">
		      		<p class="text-center container-review"><a href="#" class="link-review">Review</a></p>
		    	</div>
		    </div>

		    <!-- row 2 -->
		    <!-- form -->
			<div class="container">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<div class="row">
							<!-- Anggota -->
							<div class="row">
								<div class="col-md-8 col-custom-flex">
									<img src="{{ URL::asset('image/noimg.jpg')}}" class="img-user" style="margin-top:14px; margin-right:15px">
							    	<div class="mt-3">
										<h4>Brian Siluman</h4>
										<h4>3/5 ★</h4>
									</div>
								</div>

							
							</div>

							<div class="row mb-3">
								<div class="review">
									<label>Tokoh ini menyediakan produk yang saya butuhkan</label>
								</div>
							</div>

							<div class="row">
								<div class="mb-5">
									<img src="assets/img1.png" class="img-fluid img-review" alt="...">
								</div>
							</div>

							<hr>

							

							<div class="mt-5 mb-5 text-center">
								<button type="submit" class="btn btn-primary btn-lg custom-btn-submit"><b>Review Toko</b></button>
							</div>
							
							
						</div>

					</div>
				</div>
			</div>
		</div>

		    
		

	<script src="assets/js/sticky_vanila_toggle.js"></script>

	<script src="assets/js/rating.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
@endsection