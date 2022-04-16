<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/logo.svg') }}" width="75" alt="HiFarm-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                
                    <li class="nav-item me-2">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('index')}}">Home</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="">Produk</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link {{ Request::is('toko') ? 'active' : '' }}" href="{{ route('toko')}}">Toko</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="">Blog</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="">About Us</a>
                    </li>

                    @guest
                        @if (Route::has('register'))
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif

                        @if (Route::has('login'))
                            <li class="nav-item me-2">
                                <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                    @endguest

                    @auth
                    <x-navbar-dropdown/>
                    @endauth

            </ul>
        </div>
    </div>
</nav>