<!-- Brand Logo -->
<a class="brand-link">
    <img src="/dist/img/logo-color.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Kasir LInk</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @if (Auth::check() && Auth::user()->role  == 'admin')
                <li class="nav-item {{ request()->routeIs('dashboard_admin') ? 'menu-open active' : '' }}">
                    <a href="{{ route('dashboard_admin') }}"
                        class="nav-link {{ request()->routeIs('dashboard_admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('produk') || request()->routeIs('formproduk') ? 'menu-open active' : '' }}">
                    <a href="{{ route('produk') }}"
                        class="nav-link {{ request()->routeIs('produk') || request()->routeIs('formproduk') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cube"></i>
                        <p>Produk</p>
                    </a>
                </li>
                @if (isset($detailPenjualan) && $detailPenjualan)
                    <li class="nav-item {{ request()->routeIs('penjualanDetail') ? 'menu-open active' : '' }}">
                        <a href="{{ route('penjualanDetail', ['id' => $detailPenjualan->id]) }}"
                            class="nav-link {{ request()->routeIs('penjualanDetail') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Pembelian</p>
                        </a>
                    </li>
                @endif
                <li class="nav-item {{ request()->routeIs('user') || request()->routeIs('formuser') ? 'menu-open active' : '' }}">
                    <a href="{{ route('user') }}"
                        class="nav-link {{ request()->routeIs('user') || request()->routeIs('formuser') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>User</p>
                    </a>
                </li>
            @endif
            @if (Auth::check())
                @if (Auth::user()->role == 'petugas')
                    <li class="nav-item {{ request()->routeIs('dashboard_ptgs') ? 'menu-open active' : '' }}">
                        <a href="{{ route('dashboard_ptgs') }}"
                            class="nav-link {{ request()->routeIs('dashboard_ptgs') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('dataProduk') ? 'menu-open active' : '' }}">
                        <a href="{{ route('dataProduk') }}"
                            class="nav-link {{ request()->routeIs('dataProduk') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-cube"></i>
                            <p>Produk</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('pembelian') || request()->routeIs('formPembelian') ? 'menu-open active' : '' }}">
                        <a href="{{ route('pembelian') }}"
                            class="nav-link {{ request()->routeIs('pembelian') || request()->routeIs('formPembelian') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>Pembelian</p>
                        </a>
                    </li>
                @endif
            @endif
        </ul>
    </nav>
</div>

<!-- /.sidebar -->
