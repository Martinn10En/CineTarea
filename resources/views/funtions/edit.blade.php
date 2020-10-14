@extends('layouts.app')
@section('title', 'Editar funciones')
@section('content')

    <br>
    <div class="row">

        <div class="col-sm-10"><h1>Editar funciones</h1></div>

    </div>

    <br>



    <div class="jumbotron">

        <form action="{{ route('funtions.update',$funtion->id) }}" method="post" >
            @csrf
            @method('PUT')

            <div>
                <label for="">Hora y fecha de inicio:  </label>
                <input class= "form-control" type="datetime" value="{{$funtion->start}}" name="start" required id="">
            </div>
            <div>
                <label for=""> Hora y fecha de fin: </label>
                <input class= "form-control" type="datetime" value="{{$funtion->end}}" name="end" required id="">
            </div>
            <div>
                <label for="">Dispinibilidad:</label>
                <select class= "form-control" name="available" id="" required>

                    <option value="{{ $funtion->available}}">{{ $funtion->available}}</option>
                    <option value="1">Disponible</option>
                    <option value="0">No disponible</option>
                </select>
            </div>
            <div>
                <label for="">Turno:  </label>
                <select class= "form-control" name="type" id="" required>
                    <option value="{{$funtion->type}}">{{$funtion->type}} </option>
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noche">Noche</option>
                </select>
            </div>


            <br><br>
            <input class="btn btn-primary"   type="submit" value="Guardar">

            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <a href="{{ route('funtions.index') }}">
                    <button class="btn btn-danger">Cancelar</button>
                </a>
            </div>

        </form>
    </div>
@endsection
