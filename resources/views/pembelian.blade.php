@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/style_header.css">
	<link rel="stylesheet" href="assets/css/style_footer.css">
	<link rel="stylesheet" href="assets/css/style_detailProdukMember.css">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Detail Produk</title>
	</head>

	<body>
		

		<!-- form -->
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1"><br><br>
					<h1 class="text-center mt-5 mb-5">Detail Produk</h1>

					<!-- Detail Produk -->
					<div class="row">
						<div class="col">
					  		<img src="assets/discord1.png" class="img-produk">
						</div>

						<div class="col">
					  		<h2>Sapi Jantan Unggulan</h2>
					  		<h4>Rp. 15.000.000,-</h4><br>
					  		<h5><img src="assets/Group_54.png" class="img-toko">Nama Toko</h5>
					  		<hr>
					  		<p class="title-deskripsi">Deskripsi:</p>
					  		<p class="content-deskripsi">Assalamualaikum.<br> 
					  		Saya Menjual Sapi Qurban.<br> 
					  		SAPI JANTAN UNGGULAN. <br>
					  		*Berat 480 Kg-an. <br>
					  		*Tinggi 150 Cm-an <br>
					  		*Panjang 200 Cm-an. <br>
					  		*Warna Coklat. <br>
					  		*Kondisi Sehat dan Terawat. <br>
					  		*Gratis Ongkir.</p>

					  		<!-- Button trigger modal -->
					  		<button type="button" class="btn btn-primary btn-lg custom-btn-pesan text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
					  			<b>Pesan</b>
					  		</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-dialog-centered">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title text-center" id="exampleModalLabel">Anda akan diarahkan ke laman WhatsApp penjual!</h5>
							        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							      </div>
							      <div class="modal-body text-center">
							        <button type="button" class="btn btn-warning me-5" data-bs-dismiss="modal"><a href="https://api.whatsapp.com/send?phone=6285784092679&text=Apakah%20produk%20masih%20ada?.%20.%20:D" class="link-wa"><b>Yakin</b></a></button>
							        <button type="button" class="btn btn-primary"><b>Kembali</b></button>
							      </div>
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
						<div class="col-3">
							<img src="assets/discord3.png" class="img-thumbnail img-moreProduk" alt="Produk1">
							<p class="title-moreProduk">Sapi Tanduk Suci</p>
							<p class="price-moreProduk">Rp. 12.000.000,-</p>
						</div>

						<div class="col-3">
							<img src="assets/discord3.png" class="img-thumbnail img-moreProduk" alt="Produk2">
							<p class="title-moreProduk">Sapi Tanduk Suci</p>
							<p class="price-moreProduk">Rp. 12.000.000,-</p>
						</div>

						<div class="col-3">
							<img src="assets/discord3.png" class="img-thumbnail img-moreProduk" alt="Produk3">
							<p class="title-moreProduk">Sapi Tanduk Suci</p>
							<p class="price-moreProduk">Rp. 12.000.000,-</p>
						</div>

						<div class="col-3">
							<img src="assets/discord3.png" class="img-thumbnail img-moreProduk" alt="Produk4">
							<p class="title-moreProduk">Sapi Tanduk Suci</p>
							<p class="price-moreProduk">Rp. 12.000.000,-</p>
						</div>
					</div><br><br><br>
				</div>
			</div>
		</div>

		
	<script src="assets/js/sticky_vanila_toggle.js"></script>

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>