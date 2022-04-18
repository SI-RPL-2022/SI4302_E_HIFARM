@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card mb-3 mx-auto" style="max-width: 1000px;">
                <div class="row g-0">
                    
                    <div class="col-md-6 d-flex align-items-center flex-column py-5" style="background-color: #9FDA8A;">
                        <div style="margin: auto">
                            <img src="{{ asset('assets/logo.svg') }}" class="mx-auto d-block" width=150 alt="...">
                            <h4 class="text-white text-center">{{ 'Membuat ternakmu menjadi lebih unggul daripada yang lainnya.' }}</h4>
                        </div>
                    </div>
                    
                    <div class="col-md-6 p-3">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-center">{{ __('Register') }}</h4>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="mb-2">
                                    <label for="name" class="form-label">{{ __('Nama Lengkap') }}</label>
                                    <input id="name" type="Text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-2">
                                    <label for="email" class="form-label">{{ __('Email') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-2">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-2">
                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="mb-4">
                                    <label for="phone" class="form-label">{{ __('Nomor HP') }}</label>
                                    <input id="phone" type="text" class="form-control" name="phone" required autocomplete="phone">
                                </div>

                                <div class="mb-2 d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Register</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
