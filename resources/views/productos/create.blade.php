@extends('layout/template')

@section('title', 'Nuevo producto')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ url('/productos') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="codigo" class="form-label">Código</label>
        <input type="text" name="nombre" id="codigo" class="form-control"
        value="{{ old('codigo')}}">
    </div>
    @error('codigo')
        {{$message}}
    @enderror
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control"
        value="{{ old('nombre')}}">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" name="precio" id="precio" class="form-control"
        value="{{ old('precio')}}">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection