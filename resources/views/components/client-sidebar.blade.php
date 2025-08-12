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
                        <li><a href="{{ route('page.paket.wedding') }}">Paket Wedding</a></li>
                        <li><a href="{{ route('page.paket.prewed') }}">Prewedding</a></li>
                        <li><a href="{{ route('page.paket.mua') }}">Mua & Busana</a></li>
                        <li><a href="{{ route('page.paket.dekor') }}">Dekorasi</a></li>
                        <li><a href="{{ route('page.paket.dokumentasi') }}">Dokumentasi</a></li>
                    </ul>
                </li>

                @guest
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
                @endguest

                @auth
                    @if(Auth::check() && Auth::user()->role === 'client')
                        <li class="nav-item dropdown pe-3">
                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" id="userDropdown">
                                <img src="{{ Auth::user()->image ?? asset('aset/image/icon-guest.png') }}"
                                    alt="Profile" class="rounded-circle" width="40" height="40">
                                <span class="d-none d-md-block ps-2">
                                    {{ Auth::user()->nama_lengkap }}
                                </span>
                                <i class="bi bi-caret-down-fill arrow ms-1"></i>
                            </a>

                            <ul class="dropdown-menu p-3 text-center" id="userDropdownMenu">
                                <li class="mb-2">
                                    <h6 class="mb-0 text-dark">{{ Auth::user()->nama_lengkap }}</h6>
                                    <small class="text-muted">{{ Auth::user()->role }}</small>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a href="{{ route('client.produk', Auth::user()->id) }}" class="dropdown-item d-flex align-items-center justify-content-start gap-2">
                                        <i class="bi bi-cart-check"></i>
                                        <span>Product Saya</span>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a href="{{ route('client.profile', Auth::user()->id ) }}" class="dropdown-item d-flex align-items-center justify-content-start gap-2">
                                        <i class="bi bi-person"></i>
                                        <span>Profile Saya</span>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a href="#" class="dropdown-item d-flex align-items-center justify-content-start gap-2 text-danger" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>Logout</span>
                                    </a>
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


<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin keluar dari akun ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form method="POST" action="{{ route('auth.logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">Ya, Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
