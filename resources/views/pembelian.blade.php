@extends('layouts.app')

@section('content')
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
@endsection