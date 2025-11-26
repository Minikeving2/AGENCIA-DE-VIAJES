
@extends('layouts.main')
@section('content')
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-white sidebar vh-100 border-end">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item"><a class="nav-link" href="{{ route('panel.bandeja') }}">Bandeja</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('panel.clientes') }}">Clientes</a></li>
          <li class="nav-item">
    <a class="nav-link" href="{{ route('panel.paquetes.index') }}">
        <i class="bi bi-box-seam"></i> Mis paquetes
    </a>
</li>
          @if(auth()->user() && auth()->user()->role === 'admin')
          <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Admin</a></li>
          @endif
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
      @yield('panel-content')
    </main>
  </div>
</div>
@endsection
