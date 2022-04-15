@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card mb-3 mx-auto" style="max-width: 1000px;">
                <div class="row g-0">

                <div class="col-md-6 d-flex align-items-center flex-column py-5" style="background-color: #48C2F8;">
                        <div style="margin: auto">
                            <img src="{{ asset('image/logo.png') }}" class="mx-auto d-block" width=150 alt="...">
                            <h4 class="text-white text-center">{{ 'Membuat ternakmu menjadi lebih unggul daripada yang lainnya.' }}</h4>
                        </div>
                    </div>

                    <div class="col-md-6 p-3">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-center">Login</h4>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-2">
                                    <label for="email" class="form-label">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-2">
                                    <label for="password" class="form-label">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    @if (Route::has('password.request'))
                                        <a class="text-decoration-none" href="{{ route('password.request') }}">Lupa password?</a>
                                    @endif
                                </div>

                                <div class="mb-4 form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>

                                <div class="mb-2 d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Login</button>
                                </div>

                                <div class="text-center">
                                    <p>Belum punya akun? <span><a class="text-decoration-none" href="{{ route('register') }}">Registrasi disini</a></span></p>
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
