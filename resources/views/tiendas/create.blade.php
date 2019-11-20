@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="{{route('')}}" method="get">
    @csrf
    Nombre:<br>
    <input type="text" name="nombre">
    <br>
    Descripcion:<br>
    <input type="text" name="descripcion">
    <br>
    Contraseña:<br>
    <input type="text" name="contraseña">
    <br>
    Email:<br>
    <input type="text" name="email">
    <br>
    likes:<br>
    <input type="text" name="likes">
    <br>
    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
