@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style_tambahReview.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Toko</title>
	</head>

	<body>
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
		<!-- </header> -->

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
		    <div class="row">
		    	<p class="mb-5 text-center container-detailToko"><a href="#" class="link-detailToko">Review Toko</a></p>

		    	<div class="mt-4 rating">
					<input type="radio" name="star" id="star1"><label for="star1"></label>
					<input type="radio" name="star" id="star2"><label for="star2"></label>
					<input type="radio" name="star" id="star3"><label for="star3"></label>
					<input type="radio" name="star" id="star4"><label for="star4"></label>
					<input type="radio" name="star" id="star5"><label for="star5"></label>
				</div>

		    	<div class="mb-3">
					<textarea class="form-control textarea-custom" id="exampleFormControlTextarea1" rows="5" placeholder="Bagaimana tanggapan anda mengeni toko kami?"></textarea>
				</div><br>

				<div class="mb-3">
					<!-- <label for="formFile" class="form-label">Cover Gambar Toko</label> -->
					<input class="form-control" type="file" id="formFile">
				</div><br><br>

				<div class="mb-5 text-center">
					<button type="button" class="btn btn-outline-primary btn-lg"><b>+ Tambah Review</b></button>
				</div>
			</div>
		</div>

		    
		<!-- Footer -->
		<!-- <div class="footer-custom">
			<div class="container">
				<div class="row">
					<div class="col-5 col-custom1">
						<img src="assets/Logo.png" class="footer-logo">
						<p class="footer-textLeft-title">PT. Hifarm Satu Nusantara</p>
						<p class="footer-textLeft-desc">Perdagangan Peternakan Terintegrasi. Misi kami adalah menjadikan peternakan sebagai mata pencaharian yang lebih baik bagi semua orang dengan menciptakan ekosistem peternakan yang adil dan berkelanjutan</p>

						<p class="footer-textLeft-title2">Head Office</p>
						<p class="footer-textLeft-desc2">Jl. TelekomunikasiNo. 1, Terusan Buahbatu - Bojongsoang, Sukapura,Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</p>
					</div>

					<div class="col-3 col-custom2">
						<p class="footer-textCenter-title">Company</p>
						<a href="#" class="footer-decsLink"><p class="footer-textCenter-desc">About HiFarm</p></a>
						<a href="#" class="footer-decsLink"><p class="footer-textCenter-desc">Blog & News</p></a>
						<a href="#" class="footer-decsLink"><p class="footer-textCenter-desc">Partnership</p></a>
						<a href="#" class="footer-decsLink"><p class="footer-textCenter-desc">Community Development</p></a>
						<a href="#" class="footer-decsLink"><p class="footer-textCenter-desc">Privacy Policy</p></a>
					</div>

					<div class="col-3 col-custom3">
						<p class="footer-textRight-title">Contact Us</p>

						<div class="flex-icon">
							<a href="#" style="border-radius: 50%;">
								<div class="footer-icon1">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
								</div>
							</a>

							<a href="#" style="border-radius: 50%;">
								<div class="footer-icon2">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
								</div>
							</a>

							<a href="#" style="border-radius: 50%;">
								<div class="footer-icon2">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
								</div>
							</a>

							<a href="#" style="border-radius: 50%;">
								<div class="footer-icon2">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
								</div>
							</a>

							<a href="#" style="border-radius: 50%;">
								<div class="footer-icon2">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div> -->

	<script src="assets/js/sticky_vanila_toggle.js"></script>

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
@endsection