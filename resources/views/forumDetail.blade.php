@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/style_forumDiskusiDetail.css') }}">

	<!-- form -->
		<div class="container">
			<div class="row mt-5">
				<br><br>
				<h1 class="mt-5 mb-5">Forum Diskusi</h1>			    
			</div>

			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="row">
						<form action="{{ route('thread.comment.create', $thread->id)}}" method="GET">
						<div class="text-end">
							<button type="submit" class="btn btn-outline-primary btn-lg"><b>+ Tambah Balasan</b></button>
						</div>
						</form>
					</div>

					<div class="row">
						<h3>{{ $thread->title }}</h3>
						<!-- Anggota -->
						<div class="row">
							<div class="col-md-8 col-custom-flex">
								<img src="{{ URL::asset('image/noimg.jpg')}}" class="img-profile rounded-circle" alt="User Image" width="72" height="72" style="margin-right:1rem">
						    	<div class="mb-3">
									<h4>{{ $thread->user->name }}</h4>
									@if($thread->user->role == 'vendor')
									<span>Peternak</span>
									@else
									<span>Anggota</span>
									@endif
								</div>
							</div>

							<div class="col-md-4">
								<div class="d-grid d-grid-custom">
									<div class="d-flex">
										<span>{{ $thread->created_at }}</span>
										<div class="icon-thread">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"/></svg>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row mb-3">
								<label style="margin-bottom:1.5rem;">{{ $thread->content }}</label>
								<br>
						
								@if (Auth::id() == $thread->user_id)
						<form action="{{  route('thread.edit', $thread->id ) }}" method='GET'>
							<div class="text-end">		
							
								<button type="submit" class="btn btn-warning btn-sm custom-btn-edit text-white me-3">
									<div class="d-flex">
										<b>Edit</b>
										<div class="icon-edit">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M421.7 220.3L188.5 453.4L154.6 419.5L158.1 416H112C103.2 416 96 408.8 96 400V353.9L92.51 357.4C87.78 362.2 84.31 368 82.42 374.4L59.44 452.6L137.6 429.6C143.1 427.7 149.8 424.2 154.6 419.5L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3zM492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75z"/></svg>
										</div>
									</div>
								</button>
							

								<!-- Button trigger modal -->
								<button type="button" class="btn btn-danger btn-sm custom-btn-tutupToko" data-bs-toggle="modal" data-bs-target="#exampleModal">
								  <div class="d-flex">
									<b>Hapus</b>
									<div class="icon-hapus">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z"/></svg>
									</div>
								  </div>
								</button>
						

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Hapus Diskusi</h5>
								        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								      </div>
								      <div class="modal-body text-center">
								        <b>Apakah Anda yakin ingin menghapus Thread diskusi?</b>
								      </div>
									  <form action="{{  route('thread.delete', $thread->id ) }}" method="POST">
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
							</div>
							</form>
						</div>
						
						@endif
						<br>
						<hr>
						




						<span>Balasan ({{$num}})</span>
					</div>

				</div>
			</div>

			<!-- Comments -->
			@foreach($comment as $comments)
			<div class="row mt-3">
				<div class="col-md-8 offset-md-2 box-user">
					<div class="content-user">
						<div class="row">
							<div class="col-md-8 col-custom-flex">
								<img src="{{ URL::asset('image/noimg.jpg')}}" class="img-profile rounded-circle" width="60" height="60" style="margin-right:1rem;">
						    	<div class="mb-3">
									<h4>{{ $comments->user->name }}</h4>
									@if($comments->user->role == 'vendor')
									<span>Peternak</span>
									@else
									<span>Anggota</span>
									@endif
								</div>
							</div>

							<div class="col-md-4">
								<div class="d-grid d-grid-custom">
									<div class="d-flex">
										<span>{{ $comments->created_at }}</span>
										<div class="icon-thread">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"/></svg>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row mb-3">
								<label>{{ $comments->comment }}</label>
							

								@if (Auth::id() == $comments->user_id)
								<form action="{{  route('thread.comment.edit', $comments->id ) }}" method='GET'>
							<div class="text-end">		
								
								<button type="submit" class="btn btn-warning btn-sm custom-btn-edit text-white me-3">
									<div class="d-flex">
										<b>Edit</b>
										<div class="icon-edit">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M421.7 220.3L188.5 453.4L154.6 419.5L158.1 416H112C103.2 416 96 408.8 96 400V353.9L92.51 357.4C87.78 362.2 84.31 368 82.42 374.4L59.44 452.6L137.6 429.6C143.1 427.7 149.8 424.2 154.6 419.5L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3zM492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75z"/></svg>
										</div>
									</div>
								
								</button>
								

								<!-- Button trigger modal form delete-->
								
								<button type="button" class="btn btn-danger btn-sm custom-btn-tutupToko" data-bs-toggle="modal" data-bs-target="#exampleModal2">
								  <div class="d-flex">
									<b>Hapus</b>
									<div class="icon-hapus">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z"/></svg>
									</div>
								  </div>
								</button>
								
								<!-- Modal -->
								<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Hapus Diskusi</h5>
								        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								      </div>
								      <div class="modal-body text-center">
								        <b>Apakah Anda yakin ingin menghapus Balasan?</b>
								      </div>
									<form action="{{  route('thread.comment.delete', $comments->id ) }}" method="POST">
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

							</div>
							</form>
							@endif

						</div>
					</div>
				</div>
			</div>
			@endforeach
			

		</div>

		<br><br><br>

@endsection