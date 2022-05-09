@extends('layouts.app')

@section('content')

	<!-- form -->
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2"><br><br>
					<h1 class="text-center mt-5 mb-5">Tambah Balasan</h1>

					<div class="mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Balas -> Judul Lorem Ipsum Dolor Sit</label>
					</div>

					<div class="mb-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Konten Balasan</label>
					  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="konten balasan. . ."></textarea>
					</div><br>


					<div class="mb-3">
					  <!-- <label for="formFile" class="form-label">Cover Gambar Toko</label> -->
					  <input class="form-control" type="file" id="formFile">
					</div><br><br>

					<!-- <div class="mb-5">
						<img src="assets/img1.png" class="img-fluid img-file" alt="...">
					</div> -->

					<div class="mb-5 text-center">
						<button type="button" class="btn btn-outline-primary btn-lg"><b>+ Tambah Balasan</b></button>
					</div>
				</div>
			</div>
		</div><br><br><br>

@endsection