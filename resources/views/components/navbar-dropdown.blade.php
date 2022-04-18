<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <span><i class="bi bi-person-fill"></i>&nbsp;</span>
        {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

        @if (Auth::user()->role == 'user')
            <a class="dropdown-item" href="{{ route('user.create')}}">
                <span><i class="bi bi-shop"></i>&nbsp;&nbsp;</span>Buka Toko</a>
            <a class="dropdown-item" href="">
                <span><i class="bi bi-person"></i>&nbsp;&nbsp;</span>Profil</a>

        @elseif (Auth::user()->role == 'vendor')
            <a class="dropdown-item" href="{{ route('vendor.store.index')}}">
                <span><i class="bi bi-shop"></i>&nbsp;&nbsp;</span>TokoKu</a>
            <a class="dropdown-item" href="">
                <span><i class="bi bi-receipt-cutoff"></i>&nbsp;&nbsp;</span>JurnalKu</a>
            <a class="dropdown-item" href="">
                <span><i class="bi bi-person"></i>&nbsp;&nbsp;</span>Profil</a>

        @elseif (Auth::user()->role == 'admin')
            <a class="dropdown-item" href="">Dashboard</a>
            <a class="dropdown-item" href="">Profil</a>
                
        @endif

        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            <span><i class="bi bi-box-arrow-in-right"></i>&nbsp;&nbsp;</span>{{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

    </div>
</li>