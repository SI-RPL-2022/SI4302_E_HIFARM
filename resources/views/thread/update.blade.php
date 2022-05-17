@extends('layouts.app')

@section('content')

	<!-- form -->
	<form action="{{ route('thread.update', $thread->id) }}" method="POST">
		@csrf
		<input type="hidden" name="_method" value="PUT">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2"><br><br>
					<h1 class="text-center mt-5 mb-5">Edit Thread</h1>

					<div class="mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Judul Diskusi <span class="text-danger">*</span></label>
					  <input type="text" name="title" class="form-control form-control-lg" id="exampleFormControlInput1" value="{{$thread->title}}">
					</div>

					<div class="mb-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Konten Diskusi<span class="text-danger">*</span></label>
					  <textarea class="form-control" name="content"id="exampleFormControlTextarea1" rows="5">{{$thread->content}}</textarea>
					</div><br>


					<!-- <div class="mb-3"> -->
					  <!-- <label for="formFile" class="form-label">Cover Gambar Toko</label> -->
					  <!-- <input class="form-control" type="file" id="formFile">
					</div><br><br> -->

					<!-- <div class="mb-5">
						<img src="assets/img1.png" class="img-fluid img-file" alt="...">
					</div> -->

					<div class="mb-5 text-center">
						<button type="submit" class="btn btn-outline-primary btn-lg"><b>+ Edit Diskusi</b></button>
					</div>
				</div>
			</div>
		</div><br><br><br>
	</form>

@endsection