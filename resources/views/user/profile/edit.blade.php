@extends('layouts.app')

@section('content')
<div class="py-5 text-center">
    <h2>Edit Profile</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <p class="fw-semibold fs-4">Profile Information</p>
            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s</p>
        </div>
        <div class="col">
            @if (session()->has('failed-changePass'))
                <x-alert type="danger" message="{{ session('failed-changePass') }}"/>
            @endif
            @if (session()->has('success-changeData'))
                <x-alert type="success" message="{{ session('success-changeData') }}"/>
            @endif
            <div class="mb-4">
                <form action="{{ route('profile.edit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <div class="mb-3 p-3 bg-white rounded-3 border">
                        <div class="mb-2">
                            <label for="image" class="form-label">Photo</label>
                            <img class="rounded-circle d-block mb-2" src="" alt="...">
                            <input class="form-control col-2" type="file" id="image" name="image">
                        </div>
                        <div class="mb-2">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" required>
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" id="email" name="email" class="form-control" value="{{ auth()->user()->email }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="no_hp" class="form-label">No. Handphone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $vendor->phone }}" disabled>
                        </div>
                    </div>
                    
                    <div class="mb-3 p-3 bg-white rounded-3 border">
                        <div class="mb-2">
                            <label for="password_old" class="form-label">Password Lama</label>
                            <input type="password" class="form-control" id="password_old" name="password_old">
                        </div>
                        <div class="mb-2">
                            <label for="password_new" class="form-label">Password Baru</span></label>
                            <input type="password" class="form-control" id="password_new" name="password_new">
                        </div>
                        <div class="mb-2">
                            <label for="password_new2" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="password_new2" name="password_new2">
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection