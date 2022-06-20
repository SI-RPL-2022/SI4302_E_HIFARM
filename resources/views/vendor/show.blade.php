@extends('layouts.app')

@section('content')

	<link rel="stylesheet" href="{{ asset('css/style_kunjungiTokoAdmin.css')}}">
	<link rel="stylesheet" href="{{ asset('css/style_lihatReview.css') }}">
	@if (session()->has('success-add'))
                    <div class="mx-3 my-2 alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success-add') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
	@endif
		<!-- banner -->
		<div class="layer" style="width:100%; height:250px; background-image: url('{{ asset('image/'.$vendor->image)}}');background-repeat: no-repeat; background-size: 100% auto; background-position: center;">
            <div class="layer">
                </br>
                </br>
                </br>
                <h1 class="display-5 fw-bold" style="color:white; margin-left:2rem; ">{{ $vendor->store_name }}</h1>
                <p class="col-md-8 fs-4" style="color:white; margin-left:2rem; ">{{ $vendor->address }}</p> 
            </div>
      	</div>
		
		<!-- container -->
		<div class="container">

		<!-- row 1 -->
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Products</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Detail Toko</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Review</button>
			</li>
			</ul>
			<div class="tab-content" id="myTabContent">

			<!-- ISI PRODUK + PAGINATION -->
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
			<br></br>
			<div class="row mb-5 custom-row">
				@foreach ($product as $item)
		    	<div class="col-4" style="margin-top:2%;">
		    		<div class="card" style="width: 25rem;">
					  <img src="{{ URL::asset('storage/'.$item->image)}}" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">{{$item->name}}</h5>
					    <p class="card-text">
					    	<span>Rp. {{$item->price}}-</span><br>
					    	<span>Bobot: {{$item->weight}}kg</span>
							<br>
							<br>
							<span>Kategori: {{$item->category}}</span>
					    </p>
						
					    	<a href="{{ route('product.show', ['id' => $item->id]) }}" class="btn btn-primary float-right" style="border-radius: 10px; width:4cm">Lihat</a>
					  </div>
					</div>
		    	</div>
				@endforeach

		    	
				
		    </div>
			<div class="d-flex justify-content-center">
				{{ $product->links() }}	
		    </div>
			

			<!-- <div class="pagination-position">
			    <nav aria-label="Page navigation example">
				  <ul class="pagination">
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <li class="page-item"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div> -->

			</div>

			<!-- ISI DETAIL TOKO -->
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="container">
					
						<div class="text-center mt-3 mb-4">
						<br></br>
								<h2><b> Detail Toko </b></h2>	
						</div>
							<br></br>
							<h4> <b>Deskripsi Toko</b> </h4>
							<h5> {{$vendor->descr}}</h5>
						<br></br>
								<h4> <b>Lokasi Toko</b> </h4>
								<h5>{{ $vendor->address }}</h5>
								<br></br>
								<h4> <b>Kontak</b> </h4>
								<h5> <img src="https://w7.pngwing.com/pngs/752/599/png-transparent-line-app-icon-whatsapp-logo-whatsapp-grass-mobile-phones-android.png" width="50" alt=""></h5><h6>{{ $vendor->phone }}  </h6>
								<br></br>
								<h4> <b> Buka Sejak </b></h4>
								<h5> {{ $vendor->created_at }} </h5>
						<br></br>

				</div>
			</div>


			<!-- ISI REVIEW -->
			<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
			<div class="container">
					<!-- form -->
					<div class="container">
						<form action="{{ route('review.create', $vendor->id ) }}" method="GET">
							@csrf
							<div class="mt-5 mb-5 text-center">
												<button type="submit" class="btn btn-primary btn-lg custom-btn-submit"><b>Review Toko</b></button>
											</div>
						</form>
						<div class="row">
							<div class="col-md-10 offset-md-1">
								<div class="row">
									<!-- foreach -->
									@foreach ($review as $rev)
									<div class="row">
										<div class="col-md-8 col-custom-flex">
											<img src="{{ URL::asset('image/noimg.jpg')}}" class="img-user" style="margin-top:14px; margin-right:15px">
											<div class="mt-3">
												<h4>{{$rev->user->name}}</h4>
												<h4>{{$rev->rating}}/5 ★</h4>
											</div>
										</div>

									
									</div>

									<div class="row mb-3">
										<div class="review">
											<label>{{$rev->review}}</label>
										</div>
									</div>

									<div class="row">
										<div class="mb-5">
											<img src="{{ URL::asset('image/'.$rev->image)}}" class="img-fluid img-review" alt="...">
										</div>
									</div>
									
									@if (Auth::id() == $rev->user_id)
									<div class="d-flex justify-content-end" style="margin-bottom:1rem">
											<button type="button" style="width:100px" class="btn btn-danger btn-sm custom-btn-tutupToko float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus
										</button>
									</div>
						

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Hapus Review</h5>
								        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								      </div>
								      <div class="modal-body text-center">
								        <b>Apakah Anda yakin ingin menghapus Review anda pada toko ini?</b>
								      </div>
									  <form action="{{  route('review.delete', $rev->id ) }}" method="POST">
										@csrf
										<div class="modal-footer">
											<input type="hidden" name="_method" value="DELETE">
											<button type="submit" class="btn btn-warning text-white" ><b>Yakin</b></button>
											<button type="button" class="btn btn-primary" data-bs-dismiss="modal"><b>Kembali</b></button>
										</div>
									</form>
								    </div>
									</div>
									</div>
								  
									@endif
									
									<hr>
									@endforeach

									

									
									
									
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<br></br>
		    

		    
		</div>



@endsection