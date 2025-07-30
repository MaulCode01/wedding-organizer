<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('aset/image/logo.png') }}" alt="">
        <span class="d-none d-lg-block">Dashboard</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li>

            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="dashboard/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ $admin->username }}</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ $admin->username }}</h6>
                        <span>{{ $admin->role }}</span>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-person"></i>
                            <span>Profile Saya</span>
                        </a>
                    </li>
                    <li>
                    <hr class="dropdown-divider">
                    </li>

                    <li>
                        <form method="POST" action="{{ route('auth.logout') }}">
                        @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<aside id="sidebar" class="sidebar">
<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('dashboard-admin') ? '' : 'collapsed' }}" href="{{ route('dashboard-admin') }}">
            <i class="bi bi-speedometer2"></i>
            <span>Dashboard</span>
        </a>
    </li>

    {{-- Halaman Client --}}
    @php
        $clientActive = request()->routeIs('admin.page-client') || request()->routeIs('admin.page.about-client') || request()->routeIs('admin.page.contact-client');
    @endphp
    <li class="nav-item">
        <a class="nav-link {{ $clientActive ? '' : 'collapsed' }}" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journals"></i><span>Halaman Client</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse {{ $clientActive ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('admin.page-client') }}" class="{{ request()->routeIs('admin.page-client') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Halaman Hero</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.page.about-client') }}" class="{{ request()->routeIs('admin.page.about-client') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Halaman Tentang</span>
                </a>
            </li>
        </ul>
    </li>

    {{-- Paket Layanan --}}
    @php
        $paketActive = request()->routeIs('admin.package-*');
    @endphp
    <li class="nav-item">
        <a class="nav-link {{ $paketActive ? '' : 'collapsed' }}" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-archive"></i><span>Paket Layanan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse {{ $paketActive ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('admin.package-wedding') }}" class="{{ request()->routeIs('admin.package-wedding') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Wedding</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.package-prewed') }}" class="{{ request()->routeIs('admin.package-prewed') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Prewed</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.package-dekorasi') }}" class="{{ request()->routeIs('admin.package-dekorasi') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Dekorasi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.package-dokumentasi') }}" class="{{ request()->routeIs('admin.package-dokumentasi') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Dokumentasi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.package-mua') }}" class="{{ request()->routeIs('admin.package-mua') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Mua & Busana</span>
                </a>
            </li>
        </ul>
    </li>

    {{-- Other Pages --}}
    <li class="nav-heading">Pages</li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.show.booking') ? '' : 'collapsed' }}" href="{{ route('admin.show.booking') }}">
            <i class="bi bi-bookmark"></i>
            <span>Booking Masuk</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.testimoni') ? '' : 'collapsed' }}" href="{{ route('admin.testimoni') }}">
            <i class="bi bi-star"></i>
            <span>Testimoni</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.data-pengguna') ? '' : 'collapsed' }}" href="{{ route('admin.data-pengguna') }}">
            <i class="bi bi-person"></i>
            <span>Data Pengguna</span>
        </a>
    </li>
</ul>
</aside>

