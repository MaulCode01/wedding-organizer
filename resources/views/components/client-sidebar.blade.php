<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('page.hero') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('aset/image/icon-brand.png') }}" alt="">
            <h1 class="sitename">Diary Project</h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="{{ route('page.hero') }}"
                    class="{{ request()->routeIs('page.hero') ? 'active' : '' }}">
                    Beranda
                    </a>
                </li>

                <li>
                    <a href="{{ route('page.about') }}"
                    class="{{ request()->routeIs('page.about') ? 'active' : '' }}">
                    Tentang Kami
                    </a>
                </li>

                <li class="dropdown">
                    <a href="#">
                        <span>Kategori Paket</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="{{ route('page.paket.wedding') }}">Wedding</a></li>
                        <li><a href="{{ route('page.paket.prewed') }}">Prewedding</a></li>
                        <li><a href="{{ route('page.paket.mua') }}">Mua & Busana</a></li>
                        <li><a href="{{ route('page.paket.dekor') }}">Dekorasi</a></li>
                        <li><a href="{{ route('page.paket.dokumentasi') }}">Dokumentasi</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('page.contact') }}"
                    class="{{ request()->routeIs('page.contact') ? 'active' : '' }}">
                    Kontak
                    </a>
                </li>

                <li>
                    <a href="{{ route('auth.show.login') }}" class="btn-cta">
                        <span>Sign In</span>
                        <i class="bi bi-box-arrow-in-right"></i>
                    </a>
                </li>

                @auth
                    @if (Auth::user()->role === 'client')
                        <li class="nav-item dropdown">
                            <a class="nav-link d-flex align-items-center" href="#" id="userDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ Auth::user()->image ?? asset('aset/image/icon-guest.jpg') }}"
                                    alt="Profile" class="rounded-circle me-1" width="45" height="45">
                                <i class="bi bi-caret-down-fill"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 mt-2" aria-labelledby="userDropdown">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="bi bi-person me-2"></i> Profile
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="{{ route('auth.logout') }}" method="POST" class="m-0">
                                        @csrf
                                        <button type="submit" class="dropdown-item d-flex align-items-center">
                                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif

                @endauth
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
