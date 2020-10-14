@extends('layouts.app')
@section('title', 'Agregar Película')
@section('content')

    <br>
<div class="row">

    <div class="col-sm-10"><h1>Agregar películas</h1></div>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">

        <a href="{{ route('movies.index') }}">
            <button class="btn btn-danger">Cancelar</button>
        </a>
    </div>
</div>

    <br>



<div class="jumbotron">

<form action="{{ route('movies.store') }}" method="post" >
    @csrf

    <div>
        <label for="">Película: </label>
            <input  class= "form-control" type="text" name="name" id="" maxlength="100" required>
    </div>
    <div>
        <label for="">Sinopsis: </label>
        <textarea class= "form-control" name="synopsis" id="" cols="30" rows="2"></textarea>
    </div>
    <div>
        <label for="">Director: </label>
        <input class= "form-control" type="text" name="director" id="" maxlength="100" required>
    </div>
    <div>
        <label for="">Género: </label>
        <select class= "form-control" name="genre" id="" required>
            <option value="">Seleccione un género: </option>
            <option value="Ciencia Ficción">Ciencia Ficción</option>
            <option value="Acción">Acción</option>
            <option value="Terror">Terror</option>
            <option value="Infantil">Infantil</option>
            <option value="Romance">Romance</option>
        </select>
    </div>
    <div>
        <label for="">Duración:</label>
        <input class= "form-control" type="text" name="duration" id="" maxlength="30" required>
    </div>
    <div>
        <label for="">Dispinibilidad:</label>
        <select class= "form-control" name="available" id="" required>
            <option value="1">Disponible</option>
            <option value="0">No disponible</option>
        </select>
    </div>
    <br><br>
    <input class="btn btn-primary"   type="submit" value="Guardar">

</form>
</div>
@endsection
