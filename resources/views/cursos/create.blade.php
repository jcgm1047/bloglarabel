@extends('layouts.plantilla')
@section('title', 'Creacion de Cursos')
@section('content')
    <h1>"En esta pagina podras crear cursos"</h1>


    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>

        @error('name')
            <br>
            <small> *{{ $message }}</small>
            <br>

        @enderror
        <br>

        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>
        @error('descripcion')
            <br>
            <small> *{{ $message }}</small>
            <br>

        @enderror
        <br>

        <label>
            Categoria:
            <br>
            <input type="text" name="categoria">
        </label>
        @error('categoria')
            <br>
            <small> *{{ $message }}</small>
            <br>

        @enderror
        <br>
        <button type="submit">Enviar</button>


    </form>

@endsection
