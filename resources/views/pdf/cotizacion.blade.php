
<!doctype html><html><head><meta charset="utf-8"><title>Cotizacion</title></head><body>
<h1>Cotización #{{ $sol->id }}</h1>
<p>Cliente: {{ $sol->cliente->nombre }}</p>
<p>Paquete: {{ $sol->paquete->titulo }}</p>
</body></html>
