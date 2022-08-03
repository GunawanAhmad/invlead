<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" {{ url('') }}">
        <img src="{{ asset('img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Inovindo Lead</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ $path == '' ? 'active' : '' }}" href="{{ url('') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $path == 'rekening' ? 'active' : '' }}" href="{{ url('rekening') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Daftar Peserta</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $path == 'transfer' ? 'active' : '' }}" href="{{ url('transfer') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Penilaian</span>
          </a>
        </li>        <li class="nav-item">
          <a class="nav-link {{ $path == 'pembayaran' ? 'active' : '' }}" href="{{ url('pembayaran') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Absensi</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link {{ $path == 'presensi/laporan' ? 'active' : '' }}" href="{{ url('presensi/laporan') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Laporan Umum</span>
          </a>
        </li> -->        
        @can('view users list')
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">User</h6>
        </li>
          <li class="nav-item">
            <a class="nav-link {{ $path == 'user/list' ? 'active' : '' }}" href="{{ url('user/list') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-collection text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Daftar User</span>
            </a>
          </li>
        @endcan
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="{{ asset('img/illustrations/icon-documentation.svg') }}" alt="sidebar_illustration">        
      </div>
    </div>
  </aside>