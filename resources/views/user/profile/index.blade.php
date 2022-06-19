@extends('layouts.app')

@section('content')
<div class="py-4 text-center">
    <h2>Profile</h2>
</div>
<div class="p-4 mb-4 col-5 mx-auto bg-white rounded-3 border">
    <div class="mb-2">
        <label for="photo" class="col-sm-3 col-form-label fw-bold">Photo</label>
        <img class="rounded-circle d-block" src="" alt="...">
    </div>
    <div class="mb-1 row">
        <label for="name" class="col-sm-3 col-form-label fw-bold">Nama Lengkap</label>
        <div class="col-sm-9">
          <input type="text" readonly class="form-control-plaintext" id="name" name="name" value="{{ auth()->user()->name }}">
        </div>
    </div>
    <div class="mb-1 row">
        <label for="email" class="col-sm-3 col-form-label fw-bold">Email</label>
        <div class="col-sm-9">
          <input type="text" readonly class="form-control-plaintext" id="email" name="email" value="{{ auth()->user()->email }}">
        </div>
    </div>
    <div class="mb-1 row">
        <label for="no_hp" class="col-sm-3 col-form-label fw-bold">No. Handphone</label>
        <div class="col-sm-9">
          <input type="text" readonly class="form-control-plaintext" id="no_hp" name="no_hp" value="{{ auth()->user()->no_hp }}">
        </div>
    </div>
    <div class="d-grid gap-2 mt-3">
        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
    </div>
</div>
@endsection