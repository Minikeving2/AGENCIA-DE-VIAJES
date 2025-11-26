@extends('layouts.app')
@section('content')
<h1 class="text-2xl font-bold">{{ $paquete->titulo }}</h1>
<p>{{ $paquete->descripcion }}</p>
<p class="font-bold mt-2">Precio: {{ number_format($paquete->precio,0,',','.') }} COP</p>
<a href="{{ route('solicitud.create', $paquete->id) }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded">Solicitar cotización</a>
@endsection
