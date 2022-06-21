@extends('layouts.app')


@section('content')


<link rel="stylesheet" href="css/style_semuaToko.css">


	<!-- form -->
	<form action="{{ route('produk')}}" method='GET'>
	<div class="container" style=""><br><br><br>
		<h1 class="text-center mt-5 mb-5">Semua Produk</h1>
		<div class="custom-inpForm text-center">
			
				<input type="text" class="form-control form-control-lg" name="search" id="exampleFormControlInput1" placeholder="Search">
				<button type="submit" class="btn btn-warning btn-lg custom-btn-edit">
					Search
				</button>
			</form>
			<a href="#" data-bs-toggle="modal" data-bs-target="#modalFilter">
				<div class="filter-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
						<path d="M3.853 54.87C10.47 40.9 24.54 32 40 32H472C487.5 32 501.5 40.9 508.1 54.87C514.8 68.84 512.7 85.37 502.1 97.33L320 320.9V448C320 460.1 313.2 471.2 302.3 476.6C291.5 482 278.5 480.9 268.8 473.6L204.8 425.6C196.7 419.6 192 410.1 192 400V320.9L9.042 97.33C-.745 85.37-2.765 68.84 3.854 54.87L3.853 54.87z" />
					</svg>
				</div>
			</a>
		</div>


		<div class="row">

		<!-- REPEAT -->
		@foreach ($produk as $x)
			<div class="col-sm-6">
				<div class="card mb-6" style="max-width: 100%; border-radius: 20px; margin-top: 12px">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="{{ URL::asset('storage/'.$x->image)}}" class="img-fluid rounded-start" width="300" height="300" style="width: 300px; height: 170px;" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">{{ $x->name }}</h5>
                                <p class="card-text">Rp. {{ $x->price }}  </p>
								<p class="card-text">{{ $x->vendor->store_name }}</p>
								<p class="card-text"><a href="{{ url('home/produk/'.$x->id) }}" style="text-decoration: none; font-weight: 450; font-size: 18px;">Lihat Produk ></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
		
		</div>


	</div>
	<br><br><br>

	<div class="d-flex justify-content-center">
				{{ $produk->links() }}	
		</div>

	<!-- Modal -->
	<div class="modal fade" id="modalFilter" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalLabel">Berdasarkan Kategori</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="{{ route('produk')}}" method='GET'>
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

@endsection