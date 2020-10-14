@extends('layout.layout')
@section('title', 'Películas')
@section('content')
   

<table class="table">
   
    <thead class="thead-dark">
      <tr>
        <th scope="col"><center>Pelicula</center> </th>
        <th scope="col"><center>Director</center> </th>
        <th scope="col"><center>Sinopsis</center> </th>
        <th scope="col"><center>Duracion</center> </th>
        <th scope="col"><center>Acciones</center> </th>
      </tr>
    </thead>
    <tbody>
        @forelse ($movies as $movie)
   
      <tr>
        <th scope="row">{{$movie->name}}</th>
        <td>{{$movie->director}}</td>
        <td>{{$movie->synopsis}}</td>
        <td>{{$movie->duration}}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-primary" href="{{ route('movies.show', $movie->id) }}">Ver</a>
                <a class="btn btn-light" href="{{ route('movies.edit', $movie->id) }}">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>

              </div>
        </td>
      </tr>
     @empty
         <h3>No hay peliculas registradas</h3>
     @endempty

    </tbody>
  </table>
  
@endsection