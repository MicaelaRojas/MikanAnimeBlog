@extends('app')
@section('content')
<br>
<h2>Agregar producto</h2>
<br>
<table class="container-row">
<form action="{{route('productos.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="nombre_p">Nombre Producto</label>
        <input type="text" class="form-control" placeholder=" " name="nombre_p" required >
    </div>
    <br>
    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" placeholder=" " name="categoria" required>
    </div>
    <br>
    <div class="form-group">
        <label for="marca">Marca</label>
        <input type="text" class="form-control" placeholder=" " name="marca" required >
    </div>
    <br>
    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="text" class="form-control" placeholder="" name="precio" required >
    </div>
    <div class="form-group">
        <label for="cantidad">Cantidad</label>
        <input type="text" class="form-control" placeholder=" " name="cantidad" required>
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