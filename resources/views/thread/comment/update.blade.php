@extends('layouts.app')

@section('content')

	<!-- form -->
	<form action="{{ route('thread.comment.update', $comment->id) }}" method="POST">
		@csrf
		<input type="hidden" name="_method" value="PUT">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2"><br><br>
					<h1 class="text-center mt-5 mb-5">Edit Balasan</h1>

					<div class="mb-3">
					  <label for="exampleFormControlInput1" class="form-label">RE: {{$comment->thread->title}} ></label>
					</div>

					<div class="mb-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Balasan<span class="text-danger">*</span></label>
					  <textarea class="form-control" name="comment"id="exampleFormControlTextarea1" rows="5">{{$comment->comment}}</textarea>
					</div><br>


					<!-- <div class="mb-3"> -->
					  <!-- <label for="formFile" class="form-label">Cover Gambar Toko</label> -->
					  <!-- <input class="form-control" type="file" id="formFile">
					</div><br><br> -->

					<!-- <div class="mb-5">
						<img src="assets/img1.png" class="img-fluid img-file" alt="...">
					</div> -->

					<div class="mb-5 text-center">
						<button type="submit" class="btn btn-outline-primary btn-lg"><b>+ Edit Balasan</b></button>
					</div>
				</div>
			</div>
		</div><br><br><br>
	</form>

@endsection