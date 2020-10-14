@extends('layouts.app')
@section('title', 'Entradas')
@section('content')

    <div class="row">
        <div class="col-sm-10"><br><h1>Entradas</h1></div>
    </div>

<div class="card col-sm bg-light" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">

            <div class="card-body">
              <h5 class="card-title">Precio: {{$entrance->price}}</h5>
              <h3 class="card-text">Hora de entrada: {{$entrance->hourEntrance}}</h3>


              <form action="{{ route('entrances.destroy', $entrance->id)}}" method="POST">
                <a class="btn btn-primary" href="{{ route('entrances.index', $entrance->id) }}">Volver</a>
               <a class="btn btn-secondary" href="{{ route('entrances.edit', $entrance->id) }}">Editar</a>
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger">Eliminar</button>

               </form>
    </div>
</div>
<br>

@endsection
