@php
    $isAdmin = auth()->user()->role == 'administrator';
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Rental Mobil</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><b>{{ auth()->user()->username }}</b> @ {{ auth()->user()->role }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href=" {{ url('/mobil') }}" class="nav-link">
                        <i class="fa fa-car"></i>
                        <p>
                            Daftar Mobil
                        </p>
                    </a>
                </li>
                @if ($isAdmin)
                    {{-- <li class="nav-item">
                    <a href=" {{ url('/perawatan') }}" class="nav-link">
                        <i class=" fa fa-wrench"></i>
                        <p>
                            Daftar Perawatan
                        </p>
                    </a>
                </li> --}}
                    <li class="nav-item">
                        <a href=" {{ url('/sewa') }}" class="nav-link">
                            <i class="fa fa-check "></i>
                            <p>
                                Daftar Penyewaan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link">
                            <i class="fa fa-users"></i>
                            <p>
                                Daftar users
                            </p>
                        </a>
                    </li>
                @endif
                <br>
                <li class="nav-item bg-danger rounded text-center">
                    <a class="nav-link" href=" {{ route('logout') }}">LOGOUT</a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
