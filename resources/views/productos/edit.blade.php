@extends('app')
@section('content')
<br>
<h2>Editar registro</h2>
<table class="container-row">
<form action="{{route('productos.update',$producto->idproducto)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nombre_p">Nombre Producto</label>
        <input type="text" class="form-control" name="nombre_p" required value="{{$producto->nombre_p}}">
    </div>
    <br>
    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" name="categoria" required value="{{$producto->categoria}}">
    </div>
    <br>
    <div class="form-group">
        <label for="marca">Marca</label>
        <input type="text" class="form-control" name="marca" required value="{{$producto->marca}}">
    </div>
    <br>
    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="text" class="form-control" name="precio" required value="{{$producto->precio}}">
    </div>
    <br>
    <div class="form-group">
        <label for="cantidad">Cantidad</label>
        <input type="text" class="form-control" name="cantidad" required value="{{$producto->cantidad}}">
    </div>
    <br>
    <br>
    <div class="text-right">
    <button type="submit" class="btn btn-primary mr-5">Agregar datos</button>
    <a href="javascript:history.back()" class="btn btn-danger mr-5">Cancelar</a>
    </div>
</table>
<br>
@stop