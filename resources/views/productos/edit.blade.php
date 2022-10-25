@extends('layout/template')

@section('title', 'Editar producto')

@section('content')

<h2>Editar</h2>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ url('/productos/'.$id) }}" method="post">
    @method("PUT")
    @csrf
    <div class="mb-3">
        <label for="codigo" class="form-label">Código</label>
        <input type="text" name="nombre" id="codigo" class="form-control"
        value="{{ $producto->codigo }}">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" 
        value="{{ old('nombre', $producto->descripcion) }}">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" name="precio" id="precio" class="form-control" 
        value="{{ $producto->precio }}">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection