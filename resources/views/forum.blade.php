@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/style_forumDiskusi.css">


	<!-- form -->
		<div class="container">
			<div class="row mt-5">
				<br><br>
				<h1 class="text-center mt-5 mb-5">Forum Diskusi</h1>				    
			</div>

			<div class="row">
				<div class="col-md-10 offset-md-1 ">
					<div class="row">
						<div class="col-md-8">
					    	<div class="input-group mb-3 position-relative">
							<form action="{{ route('forum')}}" method='GET'>
								<input type="text" class="form-control position-absolute top-0 start-0" name="search" placeholder="Cari Diskusi. . ." aria-label="Recipient's username" aria-describedby="button-addon2">
								<button class="btn btn-primary position-absolute top-0 end-0" type="submit" id="button-addon2">Search</button>
							</form>
							</div>
						
						</div>

						<div class="col-md-4">
							<div class="d-grid">
								<button type="button" class="btn btn-outline-primary"><b>+ Tambah Diskusi</b></button>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<h2>Diskusi Terbaru</h2>
					</div>
					<br><br>
				</div>
			</div>

			<!-- Diskusi Terbaru -->
			<!-- REPEAT-->
			@foreach ($forum as $thread)
			
				<div class="col-md-8 offset-md-2">
					<div class="row">
						
						<div class="col-md-8 col-custom-flex">
							<img src="{{ URL::asset('image/noimg.jpg')}}" class="img-profile rounded-circle" alt="User Image" width="52" height="52" style="margin-right:2%">
							<a style="text-decoration: none; --hover-color: blue" href="{{ url('thread/'.$thread->id) }}">
								<div class="mb-3" >
									<h4  >{{ $thread->title }}</h4> </a>
									<span>{{ $thread->user->name }}</span>
								</div>
							
						</div>

						<div class="col-md-4">
							<div class="d-grid d-grid-custom">
								<div class="d-flex">
									<span class="balasan">{{$thread->comments_count }} balasan</span>
									<div class="icon-thread">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 31.1c-141.4 0-255.1 93.12-255.1 208c0 49.62 21.35 94.98 56.97 130.7c-12.5 50.37-54.27 95.27-54.77 95.77c-2.25 2.25-2.875 5.734-1.5 8.734c1.249 3 4.021 4.766 7.271 4.766c66.25 0 115.1-31.76 140.6-51.39c32.63 12.25 69.02 19.39 107.4 19.39c141.4 0 255.1-93.13 255.1-207.1S397.4 31.1 256 31.1zM127.1 271.1c-17.75 0-32-14.25-32-31.1s14.25-32 32-32s32 14.25 32 32S145.7 271.1 127.1 271.1zM256 271.1c-17.75 0-31.1-14.25-31.1-31.1s14.25-32 31.1-32s31.1 14.25 31.1 32S273.8 271.1 256 271.1zM383.1 271.1c-17.75 0-32-14.25-32-31.1s14.25-32 32-32s32 14.25 32 32S401.7 271.1 383.1 271.1z"/></svg>
									</div>
								</div>
								<div class="d-flex">
									<span>27 maret 2022</span>
									<div class="icon-thread">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"/></svg>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row mb-3">
							<label>{{ Str::limit($thread->content, 200) }}</label>
					</div>
					<hr>
				</div>
			</div>
			@endforeach
			
		</div><br><br>


		<br><br><br>


@endsection