<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>@if (Request::path() === 'admins/dashboard')
        ADMIN || DASHBOARD
        @elseif (Request::path() === 'admins/register-user')
        ADMIN || REGISTER-USER
        @elseif (Request::path() === 'admins/pemesanan')
        ADMIN || PEMESANAN
        @elseif (Request::path() === 'admins/user-admin')
        ADMIN || LIST ADMIN
        @elseif (Request::path() === 'admins/user-supplier')
        ADMIN || LIST SUPPLIER
        @elseif (Request::path() === 'admins/kategori')
        ADMIN || LIST KATEGORI
        @elseif (Request::path() === 'admins/produk')
        ADMIN || LIST PRODUK
        @elseif (Request::path() === 'admins/report')
        ADMIN || Laporan Nota
        @endif
  </title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ Request::path() === 'admins/dashboard' ? 'active' : '' }}" href="{{ route('admins.dashboard')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::path() === 'admins/pemesanan' ? 'active' : '' }}" href="{{ route('admins.pemesanan-produk')}}">
                    <i class="fas fa-sort-amount-up-alt"></i>
                  <span class="nav-link-text">Transaksi</span>
                </a>
              </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::path() === 'admins/register-user' ? 'active' : '' }}" href="{{ route('admins.create-user')}}">
                <i class="fas fa-user-plus text-dark"></i>
                <span class="nav-link-text">Register User</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::path() === 'admins/user-admin' ? 'active' : '' }}" href="{{ route('admins.show-admin')}}">
                    <i class="fas fa-user-tie text-red"></i>
                  <span class="nav-link-text">Admin</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::path() === 'admins/user-supplier' ? 'active' : '' }}" href="{{ route('admins.show-supplier')}}">
                    <i class="fas fa-users text-success"></i>
                  <span class="nav-link-text">Supplier</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::path() === 'admins/kategori' ? 'active' : '' }}" href="{{ route('admins.show-kategori')}}">
                    <i class="fas fa-archive text-info"></i>
                  <span class="nav-link-text">Kategori</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::path() === 'admins/produk' ? 'active' : '' }}" href="{{ route('admins.show-produk')}}">
                    <i class="fas fa-boxes text-warning"></i>
                  <span class="nav-link-text">Produk</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::path() === 'admins/report' ? 'active' : '' }}" href="{{ route('admins.laporan-nota')}}">
                    <i class="fas fa-list text-warning"></i>
                  <span class="nav-link-text">Reports</span>
                </a>
              </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
 @yield('content')
  <!-- Argon Scripts -->
  <!-- Core -->
 @yield('js')
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
  <!-- CDN Font-Awesome -->
  <script src="https://kit.fontawesome.com/fbd93ca048.js" crossorigin="anonymous"></script>
</body>

</html>
