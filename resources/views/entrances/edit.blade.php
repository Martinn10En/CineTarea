@extends('layouts.app')
@section('title', 'Editar entradas')
@section('content')

    <br>
    <div class="row">

        <div class="col-sm-10"><h1>Agregar entradas</h1></div>
    </div>





    <br>
    <div class="jumbotron">


        <form action="{{ route('entrances.update', $entrance->id) }}" method="post">
            @csrf
            @method('PUT')
            <div>
                <label for="">Precio: </label>
                <input class="form-control" type="text" name="price" id="" required value="{{$entrance->price}}">
            </div>

            <div>
                <label for="">Hora de entrada: </label>
                <input class="form-control" type="time" name="hourEntrance" id="" value="{{$entrance->hourEntrance}}">
            </div>
            <br><br>
            <input type="submit" value="Guardar cambios" class="btn btn-primary">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <div class="col-sm-2">
                    <a href="{{ route('entrances.index') }}">
                        <button class="btn btn-danger">Cancelar</button>
                    </a>
                </div>

        </form>
    </div>
@endsection
