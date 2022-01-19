@extends('layouts.templateadmin')
@section('content')
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">x</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" value="Log Out" class="dropdown-item text-center text-danger text-bold fw-bold">
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <!-- Table -->
              <!-- Validation Errors -->
<form action="{{ route('admins.update-produk', [$produks->id]) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label">Nama Produk</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nama_produk" placeholder="Nama Produk"
                id="example-text-input" value="{{ $produks->nama_produk }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label">Kategori Produk</label>
        <div class="col-sm-9">
            <select class="form-select" aria-label=".form-select-sm example" name="id_kategori">
                <option value="" selected>Pilih Kategori</option>
                @foreach ($kategoris as $kategori)
                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label">Harga Produk</label>
        <div class="col-sm-9">
            <input class="form-control" type="numeric" name="harga" placeholder="Harga Produk"
                id="example-text-input" value="{{ $produks->harga }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label">Stok Produk</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="stok" placeholder="Stok Produk"
                id="example-text-input" value="{{ $produks->stok }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary waves-effect waves-light float-right"><i
            class="mdi mdi-file-document-box-plus mr-2"></i>Update</button>
</form>
            </div>
    </div> <!-- end page content -->
  </div>
@endsection
