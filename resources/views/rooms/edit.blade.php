@extends('layouts.app')
@section('title', 'Editar alimentos')
@section('content')
    <br>
    <div class="row">

        <div class="col-sm-10"><h1>Editar lugar</h1></div>

    </div>
    <br>
    <div class="jumbotron">

        <form action="{{ route('rooms.update',$room->id) }}" method="post">
            @csrf
            @method('PUT')

            <div>
                <label for="">Número de silla: </label>
                <input class="form-control" value="{{$room->chairs}}" type="number" name="chairs" id="" maxlength="3"
                       required>
            </div>

            <div>
                <label for="">Lugar: </label>
                <input class="form-control" value="{{$room->location}}" type="text" name="location" id=""
                       maxlength="200" required>
            </div>

            <div>
                <label for="">Capacidad: </label>
                <input class="form-control" value="{{$room->capacity}}" type="number" name="capacity" id=""
                       maxlength="3" required>
            </div>
            <br><br>
            <input class="btn btn-primary" type="submit" value="Guardar cambios">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <div class="col-sm-2">
                    <a href="{{ route('rooms.index') }}">
                        <button class="btn btn-danger">Cancelar</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection
