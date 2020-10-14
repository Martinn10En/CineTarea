@extends('layouts.app')
@section('title', 'Agregar alimentos')
@section('content')

<div class="row">

    <div class="col-sm-10"><br><h1>Agregar salas</h1></div>


    <div class="col-sm-2"><br>
        <a href="{{ route('rooms.index') }}">
            <button class="btn btn-danger">Cancelar</button>
        </a>
    </div>

</div>

<div class="jumbotron">
<form action="{{ route('rooms.store') }} " method="post">
    @csrf
    <div>
        <label for="">Número de silla: </label>
        <input class= "form-control" type="number" name="chairs" id="" maxlength="3" required>
    </div>

    <div>
        <label for="">Lugar: </label>
        <input class= "form-control" type="text" name="location" id="" maxlength="200" required>
    </div>

    <div>
        <label for="">Capacidad: </label>
        <input class= "form-control" type="number" name="capacity" id="" maxlength="3" required>
    </div>
    <br><br>
    <input class="btn btn-primary" type="submit" value="Guardar">

</form>
</div>
@endsection
