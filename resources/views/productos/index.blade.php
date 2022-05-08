@extends('layouts.app')
@section('content')
<br>
<h1 class="text-warning">Lista de productos</h1>
 <br>
<table class="table table-striped" id="tableconctacto">
  <thead>
    <tr >
        <th class="text-center">ID</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Categoria</th>
        <th class="text-center">Marca</th>
        <th class="text-center">Cantidad</th>
        <th class="text-center">Precio</th>
        <th class="text-center">Ver</th>
        <th class="text-center">Editar</th>
        <th class="text-center">Borrar</th>
    </tr >
  </thead>
  <tbody>
    @foreach($productos as $producto)
        <tr>
            <td class="text-center">{{ $producto->idproducto}}</td>
            <td class="text-center">{{ $producto->nombre_p}}</td>
            <td class="text-center">{{ $producto->categoria}}</td>
            <td class="text-center">{{ $producto->marca}}</td>
            <td class="text-center">{{ $producto->cantidad}}</td>
            <td class="text-center">{{ $producto->precio}}</td>
            <td class="text-center">
                <a href="{{route('productos.show', $producto->idproducto)}}"class="btn btn-info ">Ver</a>
            </td>
            <td class="text-center">
              <a href="{{route('productos.edit',$producto->idproducto)}}"class="btn btn-warning ">Edit</a>
            </td>
            <td class="text-center">
                <form action="{{url('/productos/'.$producto->idproducto)}}" method="post" >
                @csrf
                {{method_field('DELETE')}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            
        </tr>
    @endforeach
  </tbody>
</table>
<br>
<div class="text-right">
<a href="{{route('productos.create')}}" class="btn btn-success mr-5">Nuevo producto</a>
<div>
@stop
