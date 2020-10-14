@extends('layouts.app')
@section('title', 'Salas')
@section('content')

    <div class="row">
        <div class="col-sm-10"><br><h1>Agregar salas</h1></div>

        <div class="col-sm-2"><br>
            <a href="{{ route('rooms.create') }}">
                <button class="btn btn-primary">Agregar</button>
            </a>
        </div>
    </div>

<br>

@forelse ($rooms as $room)
    <div class="card col-sm bg-light" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">


    <div class="card-body">
        <h4 class="card-title">Silla: {{$room->chairs}}</h4>
        <h4 class="card-text">Lugar: {{$room->location}}</h4>
        <h4 class="card-text">Capacidad: {{$room->capacity}}</h4>

      <form action="{{ route('rooms.destroy', $room->id)}}" method="POST">
        <a class="btn btn-primary" href="{{ route('rooms.show', $room->id) }}">Ver</a>
       <a class="btn btn-secondary" href="{{ route('rooms.edit', $room->id) }}">Editar</a>
       @csrf
       @method('DELETE')
       <button type="submit" class="btn btn-danger">Eliminar</button>

       </form>


    </div>
  </div>

<br>

@empty
    <div>
      <h3>NO HAY SALAS REGISTRADAS</h3>
    </div>
@endforelse

{{$rooms->links()}}

@endsection
