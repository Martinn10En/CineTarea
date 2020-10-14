@extends('layouts.app')
@section('title', 'Funciones')
@section('content')
    <br>
    <div class="row">

        <div class="col-sm-10"><h1>Funciones registradas</h1></div>


    </div>

    <br>

    <div class="card col-sm bg-light" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Inicio de función:
                        <br>{{$funtion->start}}</h5>
                    <h5 class="card-text">Fin de función:
                        <br>{{$funtion->end}}</h5>
                    <h5 class="card-text">Turno: {{$funtion->type}}</h5>

                    <form action="{{ route('funtions.destroy', $funtion->id)}}" method="POST">
                        <a class="btn btn-primary" href="{{ route('funtions.index', $funtion->id) }}">Volver</a>
                        <a class="btn btn-secondary" href="{{ route('funtions.edit', $funtion->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>

                    </form>

                </div>
            </div>

        <br>

@endsection
