@extends('layouts.app')

@section('content')

	<!-- form -->
	<form action="{{ route('thread.store')}}" method="POST">
	@csrf
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2"><br><br>
					<h1 class="text-center mt-5 mb-5">Tambah Diskusi</h1>

					<div class="mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Judul Diskusi <span class="text-danger">*</span></label>
					  <input type="text" name="title" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Judul Diskusi...">
					</div>

					<div class="mb-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Konten Diskusi<span class="text-danger">*</span></label>
					  <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="5" placeholder="konten diskusi..."></textarea>
					</div><br>


					<div class="mb-3">

					  <!-- <input class="form-control" name="img" type="file" id="formFile">
					</div><br><br> -->
					
						<div class="mb-5 text-center">
							<button type="submit" class="btn btn-outline-primary btn-lg"><b>+ Tambah Diskusi</b></button>
						</div>
					
				</div>
			</div>

		</div>
		</form>
		<br><br><br>

@endsection