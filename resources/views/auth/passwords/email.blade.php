@extends('layouts.app')

@section('content')
  <div class="container py-5" style="width: 13cm; height: 500px;">

    <div class="p-2 mb-4 bg-light rounded-3">
      <div class="container-fluid py-3">
        <center>
        <p class="display fw-bold" style="font-size: 150%;">Reset Password</p>
        </center>
        <div class="card-body">
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif

        <form method="POST" action="{{ route('password.email') }}">
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="fst-normal" >Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

        
        <center>
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary fw-bolder" >Send Password Reset Link</button>
          </div></center>
        </form>
      </div>
    </div>
@endsection