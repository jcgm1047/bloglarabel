@extends('layouts.plantilla')
@section('title','Cursos Edit',)
@section('content')
    <h1>"Editar un curso"</h1>


    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso -> name}}">
        </label>
        <br>

        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5" >{{$curso -> descripcion}}</textarea>
        </label>
        <br>

        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{$curso -> categoria}}">
        </label>
        <br>
        <button type="submit">Actualizar</button>


    </form>

@endsection
