@extends('layouts.app')


@section('content')


<link rel="stylesheet" href="css/style_semuaToko.css">


	<!-- form -->
	<form action="{{ route('toko')}}" method='GET'>
	<div class="container" style=""><br><br><br>
		<h1 class="text-center mt-5 mb-5">Semua Toko</h1>
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


		<div class="row mb-3">

		<!-- REPEAT -->
		@foreach ($toko as $vendor)
			<div class="col">
				<div class="card mb-5" style="max-width: 100%; border-radius: 20px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="{{ URL::asset('image/'.$vendor->image)}}" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">{{ $vendor->store_name }}</h5>
								<p class="card-text">{{ $vendor->store_name }}</p>
								<p class="card-text"><a href="{{ url('visit/'.$vendor->id) }}" style="text-decoration: none; font-weight: 450; font-size: 18px;">Kunjungi Toko ></a></p>
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
				{{ $toko->links() }}	
		</div>

	<!-- Modal -->
	<div class="modal fade" id="modalFilter" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalLabel">Berdasarkan Abjad</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="{{ route('toko')}}" method='GET'>
					<div class="modal-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col">
									<div class="form-check">
										<input type="radio" name="filter" value="A" class="form-check-input" id="a">
										<label class="form-check-label"  for="a">A</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="B" class="form-check-input" id="b">
										<label class="form-check-label"  for="b">B</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="C" class="form-check-input" id="c">
										<label class="form-check-label"  for="c">C</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="D" class="form-check-input" id="d">
										<label class="form-check-label"  for="d">D</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="E" class="form-check-input" id="e">
										<label class="form-check-label"  for="e">E</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="F" class="form-check-input" id="f">
										<label class="form-check-label"  for="f">F</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="G" class="form-check-input" id="g">
										<label class="form-check-label"  for="g">G</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="H" class="form-check-input" id="h">
										<label class="form-check-label"  for="h">H</label>
									</div>
								</div>
								<div class="col">
									<div class="form-check">
										<input type="radio" name="filter" value="I" class="form-check-input" id="i">
										<label class="form-check-label"  for="i">I</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="J" class="form-check-input" id="j">
										<label class="form-check-label"  for="j">J</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="K" class="form-check-input" id="k">
										<label class="form-check-label"  for="k">K</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="L" class="form-check-input" id="l">
										<label class="form-check-label"  for="l">L</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="M" class="form-check-input" id="m">
										<label class="form-check-label"  for="m">M</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="N" class="form-check-input" id="n">
										<label class="form-check-label"  for="n">N</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="O" class="form-check-input" id="o">
										<label class="form-check-label"  for="o">O</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="P" class="form-check-input" id="p">
										<label class="form-check-label"  for="p">P</label>
									</div>
								</div>
								<div class="col">
									<div class="form-check">
										<input type="radio" name="filter" value="Q" class="form-check-input" id="q">
										<label class="form-check-label"  for="q">Q</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="R" class="form-check-input" id="r">
										<label class="form-check-label"  for="r">R</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="S" class="form-check-input" id="s">
										<label class="form-check-label"  for="s">S</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="T" class="form-check-input" id="t">
										<label class="form-check-label"  for="t">T</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="U" class="form-check-input" id="u">
										<label class="form-check-label"  for="u">U</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="V" class="form-check-input" id="v">
										<label class="form-check-label"  for="v">V</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="W" class="form-check-input" id="w">
										<label class="form-check-label"  for="w">W</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter"value="X" class="form-check-input" id="x">
										<label class="form-check-label"  for="x">X</label>
									</div>
								</div>
								<div class="col">
									<div class="form-check">
										<input type="radio" name="filter" value="Y" class="form-check-input" id="y">
										<label class="form-check-label"  for="y">Y</label>
									</div>
									<div class="form-check">
										<input type="radio" name="filter" value="Z" class="form-check-input" id="z">
										<label class="form-check-label"  for="z">Z</label>
									</div>
								</div>
							</div>
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