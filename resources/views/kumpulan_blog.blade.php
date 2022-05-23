@extends('layouts.app')


@section('content')

	<link rel="stylesheet" href="{{asset('/css/style_blog.css')}}">

		<!-- form -->
		<div class="container"><br><br><br>
		
			<div class="custom-inpForm text-center mt-5">
			<form action="{{ route('blog')}}" method='GET'>
			 	<div class="input-group mb-3">
					<input type="text" class="form-control" name="search" placeholder="Search">
					<button class="btn btn-warning btn-lg" type="submit" id="button-addon2">Search</button>
				</div>
			</form>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-link btn-sm custom-btn-filter" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
					<div class="filter-icon">
				 		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M3.853 54.87C10.47 40.9 24.54 32 40 32H472C487.5 32 501.5 40.9 508.1 54.87C514.8 68.84 512.7 85.37 502.1 97.33L320 320.9V448C320 460.1 313.2 471.2 302.3 476.6C291.5 482 278.5 480.9 268.8 473.6L204.8 425.6C196.7 419.6 192 410.1 192 400V320.9L9.042 97.33C-.745 85.37-2.765 68.84 3.854 54.87L3.853 54.87z"/></svg>
				 	</div> 
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered modal-sm">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Berdasarkan Kategori</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>

					  <form action="{{ route('blog')}}" method='GET'>
				      <div class="modal-body text-start">
				        <div class="form-check">
						  <input class="form-check-input" type="radio" name="filter" value="Hewan Ternak" id="HewanTernak">
						  <label class="form-check-label" for="HewanTernak">Hewan Ternak</label>
						</div>

						<div class="form-check">
						  <input class="form-check-input" type="radio" name="filter" value="Produk Ternak" id="ProdukTernak">
						  <label class="form-check-label" for="ProdukTernak">Produk Ternak</label>
						</div>
						
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="filter" value="Pakan Ternak" id="PakanTernak">
						  <label class="form-check-label" for="PakanTernak">Pakan Ternak</label>
						</div>

						<div class="form-check">
						  <input class="form-check-input" type="radio" name="filter" value="Lainnya" id="Lainnya">
						  <label class="form-check-label" for="Lainnya">Lainnya. . .</label>
						</div>
				      </div>
					
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Cari</button>
					 </div>
					 </form>
				    </div>
				  </div>
				</div>
			</div>
			@foreach ($blog as $article)
				@if ($loop->first) 
			<div class="container">
				<div class="row">
					<div class="d-flex">
						<img src="{{ asset('storage/'. $article->image) }}" class="img-blog-row1">
						<div class="flex-column">
							<h2 class="fw-bold">{{ $article->title }}</h2>
							<div class="desc-row1">
								<span>{{ $article->subtitle }}</span>
							</div>
						</div>
					</div>
				</div>
				@else @break
				@endif
			@endforeach

				
				<div class="row mt-5">

				@foreach ($blog as $article)
				@if ($loop->first) @continue @endif
					<div class="col me-3">
						<img src="{{ asset('storage/'. $article->image) }}" class="img-blog-row2">
						<div class="flex-column mt-3">
							<h5 class="fw-bold">{{ $article->title }}</h5>
							<div class="desc-row2">
								<span>{{ $article->subtitle }}</span>
							</div>
							 	
						</div>
					</div>
					@endforeach


					
				</div>

			</div>			

			<div class="d-flex justify-content-center">
				{{ $blog->links() }}	
			</div>



		</div>
@endsection