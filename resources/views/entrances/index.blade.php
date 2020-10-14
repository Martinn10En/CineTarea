@extends('layouts.app')
@section('title', 'Entradas')
@section('content')
    <br>
    <div class="row">

        <div class="col-sm-10"><h1>Entradas registradas</h1></div>

        <div class="col-sm-2"><a href="{{ route('entrances.create') }}">
                <button class="btn btn-primary">
                    Agregar
                </button>
            </a></div>
    </div>

    <br>


@forelse ($entrances as $entrance)

<div class="card col-sm bg-light" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">

            <div class="card-body">
              <h5 class="card-title">Precio: {{$entrance->price}}</h5>
              <h4 class="card-text">Hora de entrada: {{$entrance->hourEntrance}}</h4>


              <form action="{{ route('entrances.destroy', $entrance->id)}}" method="POST">
                <a class="btn btn-primary" href="{{ route('entrances.show', $entrance->id) }}">Ver</a>
               <a class="btn btn-secondary" href="{{ route('entrances.edit', $entrance->id) }}">Editar</a>
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger">Eliminar</button>

               </form>
    </div>
</div>
<br>
@empty
    <h3>No hay registro de entradas</h3>
@endforelse

{{$entrances->links()}}

@endsection
