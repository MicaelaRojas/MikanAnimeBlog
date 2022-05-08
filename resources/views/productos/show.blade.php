@extends('app')
@section('content')
<br>
<h1 class="text-warning ">
  Producto: {{ $producto->nombre_p}}
</h1>
 
<p>ID producto: {{ $producto->idproducto}}</p>
<p>Nombre Producto: {{ $producto->nombre_p}}</p>
<p>Categoría: {{ $producto->categoria}}</p>
<p>Marca: {{ $producto->marca}}</p>
<p>Cantidad: {{ $producto->cantidad}}</p>
<p>Precio: {{ $producto->precio}}</p>


<hr>
 
<a href="{{ route('productos.index')}}" class="btn btn-warning btn-sm">Volver</a>
<br>
<div>
@stop