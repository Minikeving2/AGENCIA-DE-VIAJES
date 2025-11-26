
@extends('layouts.main')
@section('title','Ingresar')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h3 class="mb-3">Ingresar</h3>
        <form method="POST" action="{{ route('login') }}">@csrf
          <div class="mb-3"><label class="form-label">Email</label><input class="form-control" name="email" type="email" required></div>
          <div class="mb-3"><label class="form-label">Password</label><input class="form-control" name="password" type="password" required></div>
          <div class="mb-3 form-check"><input class="form-check-input" name="remember" type="checkbox" id="remember"><label class="form-check-label" for="remember">Recordarme</label></div>
          <button class="btn btn-primary">Ingresar</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
