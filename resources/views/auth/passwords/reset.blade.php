@extends('layouts.app')

@section('content')  
  <div class="container py-5" style="width: 13cm; height: 500px;">

    <div class="p-2 mb-4 bg-light rounded-3">
      <div class="container-fluid py-3">
        <center>
        <p class="display fw-bold" style="font-size: 150%;">Reset Password</p>
        </center>
        <form method="POST" action="{{ route('password.update') }}">
          @csrf

          <input type="hidden" name="token" value="{{ $token }}">
          <div class="mb-3">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

            <div class="mb-3">
              <label for="password" class="fst-normal" >Password Baru</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="password-confirm" class="fst-normal">Ulangi Password</label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        

          <center>
          <div class="d-grid gap-2">
            <button class="btn btn-primary fw-bolder" type="submit">Submit</button>
          </div></center>
          </form>
      </div>
    </div>
@endsection
  