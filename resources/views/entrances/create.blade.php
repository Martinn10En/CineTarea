@extends('layouts.app')
@section('title', 'Agregar entradas')
@section('content')
    <br>
    <div class="row">

        <div class="col-sm-10"><h1>Agregar entradas</h1></div>

        <div class="col-sm-2"><a href="{{ route('entrances.index') }}">
                <button class="btn btn-danger">
                    Cancelar
                </button>
            </a></div>
    </div>

    <br>
    <div class="jumbotron">


<form action="{{ route('entrances.store') }}" method="post">
    @csrf
<div>
    <label for="">Precio: </label>
    <input class="form-control" type="text" name="price" id="" required>
</div>
<div>
    <label for="">Hora de entrada: </label>
    <input class="form-control" type="time" name="hourEntrance" id="">
</div>


<br><br>
<input type="submit" value="Guardar" class="btn btn-primary">

</form>
</div>

@endsection
