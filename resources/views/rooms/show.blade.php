@extends('layouts.app')
@section('title', 'Ver detalles de las salas')
@section('content')

<div class="row">
        <div class="col-sm-10"><br><h1>Salas</h1></div>
</div>
    <div class="card col-sm bg-light" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h2 class="card-title">Número de silla: {{$room->chairs}} </h2>
          <h3 class="card-text">Lugar: {{$room->location}}</h3>
          <h4 class="card-text">Capacidad:  {{$room->capacity}}</h4>

          <form action="{{ route('rooms.destroy', $room->id)}}" method="POST">
            <a class="btn btn-primary" href="{{ route('rooms.index', $room->id) }}">Volver</a>
           <a class="btn btn-secondary" href="{{ route('rooms.edit', $room->id) }}">Editar</a>
           @csrf
           @method('DELETE')
           <button type="submit" class="btn btn-danger">Eliminar</button>

           </form>


        </div>
      </div>

    <br>



    @endsection
