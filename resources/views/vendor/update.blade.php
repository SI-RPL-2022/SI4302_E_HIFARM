@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <x-sidebar-navigation/>
		<div class="col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('Edit Detail Toko') }}</div>
                <div class="card-body">
<form action="{{ route('vendor.update', Auth::user()->id)}}" method="POST" enctype="multipart/form-data"> 
		@csrf

		<input type="hidden" name="_method" value="PUT">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2"><br><br>
					<h1 class="text-center mt-5 mb-5">Buka Toko</h1>
					
					<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
					<div class="mb-3">
					  <label for="exampleFormControlInput1" class="form-label">Nama Toko <span class="text-danger">*</span></label>
					  <input type="text" name="store_name" value="{{ $vendor->store_name }}" class="form-control form-control-lg" id="exampleFormControlInput1">
					</div>

					<div class="mb-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Singkat <span class="text-danger">*</span></label>
					  <textarea class="form-control" name="descr"  id="exampleFormControlTextarea1" rows="5">{{$vendor->descr}}</textarea>
					</div>

					<div class="mb-3">
					  <label for="exampleFormControlTextarea1" class="form-label">Alamat Toko <span class="text-danger">*</span></label>
					  <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="5">{{ $vendor->address }}</textarea>
					</div>

					<div class="mb-5">
					  <label for="exampleFormControlInput1" class="form-label">No. Whatsapp <span class="text-danger">*</span></label>
					  <input type="number" name="phone" value="{{$vendor->phone}}"class="form-control form-control-lg" id="exampleFormControlInput1">
					</div>

					<div class="mb-3">
					<input type="hidden" name="imageName" value="{{ $vendor->image }}" class="form-control form-control-lg" id="exampleFormControlInput1">
					  <label for="formFile" class="form-label">Cover Gambar Toko</label>
					  <input class="form-control" name="image"  type="file" id="formFile">
					</div>

					<div class="mb-5">
						<img src="{{ URL::asset('image/'.$vendor->image)}}" class="img-fluid img-file" alt="...">
					</div>

					<div class="mb-5 text-center">
						<!--<button type="button" class="btn btn-warning btn-lg custom-btn-edit text-white"><b>Edit</b></button>-->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning btn-lg custom-btn-edit" data-bs-toggle="modal" data-bs-target="#edit">
						  <b>Edit Toko</b>
						</button>

						<!-- Button trigger modal -->
						<button type="button" class="btn btn-danger btn-lg custom-btn-tutupToko" data-bs-toggle="modal" data-bs-target="#tutup">
						  <b>Tutup Toko</b>
						</button>

						<!-- Modal edit -->
						<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Edit Toko</h5>
						        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
						        Apakah Anda yakin melakukan perubahan toko?
						      </div>
						      <div class="modal-footer">
						        <button type="submit" class="btn btn-success text-white" data-bs-dismiss="modal">Yakin</button>
						        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
								</form>
						      </div>
						    </div>
						  </div>
						</div>
						

						<!-- Modal tutup -->
						<div class="modal fade" id="tutup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Tutup Toko</h5>
						        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
						        Apakah Anda yakin melakukan tutup toko?
						      </div>
						      <div class="modal-footer">
							  <form action="{{ route('vendor.delete',Auth::user()->id)}}" method="POST" enctype="multipart/form-data"> 
									@csrf

									<input type="hidden" name="_method" value="DELETE">
						        <button type="submit" class="btn btn-success text-white" data-bs-dismiss="modal">Yakin</button>
								</form>

						        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
						      </div>
						    </div>
						  </div>
						</div>
						
					</div>
				</div>
			</div>
		</div><br><br><br>
		</div>
            </div>
        </div>
		</div>

</div>

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>


@endsection