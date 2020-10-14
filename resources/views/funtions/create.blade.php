@extends('layouts.app')
@section('title', 'Agregar funciones')
@section('content')

    <br>
    <div class="row">

        <div class="col-sm-10"><h1>Agregar funciones</h1></div>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">

            <a href="{{ route('funtions.index') }}">
                <button class="btn btn-danger">Cancelar</button>
            </a>
        </div>
    </div>

    <br>



    <div class="jumbotron">

        <form action="{{ route('funtions.store') }}" method="post" >
            @csrf

            <div>
                <label for="">Hora y fecha de inicio:  </label>
                <input class= "form-control" type="datetime-local" name="start" required id="">
            </div>
            <div>
                <label for=""> Hora y fecha de fin: </label>
                <input class= "form-control" type="datetime-local" name="end" required id="">
            </div>
            <div>
                <label for="">Dispinibilidad:</label>
                <select class= "form-control" name="available" id="" required>
                    <option value="1">Disponible</option>
                    <option value="0">No disponible</option>
                </select>
            </div>
            <div>
                <label for="">Turno:  </label>
                <select class= "form-control" name="type" id="" required>
                    <option value="">Seleccione un género: </option>
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noche">Noche</option>
                </select>
            </div>


            <br><br>
            <input class="btn btn-primary"   type="submit" value="Guardar">

        </form>
    </div>
@endsection
