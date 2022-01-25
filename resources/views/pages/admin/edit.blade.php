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
                    <img alt="Image placeholder" src="{{ asset('assets/img/theme/team-4.jpg') }}">
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
        <!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />
<form action="{{ route('admins.update', [$admin->id]) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="name" placeholder="Input Name"
                id="example-text-input" value="{{ $admin->name }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="email" placeholder="Input Email"
                id="example-text-input" value="{{ $admin->email }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-9">
            <input class="form-control" type="password" name="password" placeholder="Input Password"
                id="example-text-input" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label">No Hp</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nohp" placeholder="Input No Hp"
                id="example-text-input" value="{{ $admin->nohp }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary waves-effect waves-light float-right"><i
            class="mdi mdi-file-document-box-plus mr-2"></i>Update</button>
</form>
            </div>
    </div> <!-- end page content -->
  </div>
@endsection
