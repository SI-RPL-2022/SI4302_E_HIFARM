@extends('layouts.app')

@section('content')
		<!-- form -->
		<form action="{{ route('user.store')}}" method="POST" enctype="multipart/form-data"> 
		@csrf

		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2"><br><br>
					<h1 class="text-center mt-5 mb-5">Buka Toko</h1>
					
					<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
					<div class="mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Nama Toko <span class="text-danger">*</span></label>
					  <input type="text" name="store_name" class="form-control form-control-lg" id="exampleFormControlInput1">
					</div>

					<div class="mb-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Singkat <span class="text-danger">*</span></label>
					  <textarea class="form-control" name="descr" id="exampleFormControlTextarea1" rows="5"></textarea>
					</div>

					<div class="mb-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Alamat Toko <span class="text-danger">*</span></label>
					  <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="5"></textarea>
					</div>

					<div class="mb-5">
					  <label for="exampleFormControlInput1" class="form-label">No. Whatsapp <span class="text-danger">*</span></label>
					  <input type="number" name="phone" class="form-control form-control-lg" id="exampleFormControlInput1">
					</div>

					<div class="mb-3">
					  <label for="formFile" class="form-label">Cover Gambar Toko</label>
					  <input class="form-control" name="image" type="file" id="formFile">
					</div>

					<!-- <div class="mb-5">
						<img src="URL::asset('image/ss1.png')" class="img-fluid img-file" alt="...">
					</div> -->

					<div class="mb-5 text-center">
						<button type="submit" class="btn btn-primary btn-lg"><b>Submit</b></button>
					</div>
					
				</div>
			</div>
			</form>

		</div><br><br><br>


		<!-- Footer -->
		

@endsection