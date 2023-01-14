@php
    $isAdmin = auth()->user()->role == 'administrator';
@endphp
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href=" {{ url('/dashboard') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href=" {{ url('/mobil') }}" class="nav-link">Daftar Mobil</a>
        </li>
        @if ($isAdmin)
            <li class="nav-item d-none d-sm-inline-block">
                <a href=" {{ url('/users') }}" class="nav-link">Daftar Users</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href=" {{ url('/sewa') }}" class="nav-link">Daftar Penyewaan</a>
            </li>
        @endif
    </ul>

    <!-- Right navbar links -->
    {{-- <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="btn btn-danger" href=" {{ url('/users/logout') }}" role="button">LOGOUT</a>
        </li>
    </ul> --}}
</nav>
