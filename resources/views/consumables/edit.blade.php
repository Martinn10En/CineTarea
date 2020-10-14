@extends('layouts.app')
@section('title', 'Editar alimentos')
@section('content')

    <br>
    <div class="row">

        <div class="col-sm-10"><h1>Editar alimento</h1></div>

    </div>

    <br>



    <div class="jumbotron">

        <form action="{{ route('consumables.update',$consumable->id) }}" method="post">
            @csrf
            @method('PUT')
            <div>
                <label for="">Nombre: </label>
                <input class="form-control" type="text" name="name" id="" maxlength="200" required
                       value="{{$consumable->name}}">
            </div>

            <div>
                <label for="">Precio: </label>
                <input class="form-control" type="text" name="price" id="" required value="{{$consumable->price}}">
            </div>

            <div>
                <label for="">Cantidad: </label>
                <input class="form-control" type="number" name="quantity" id="" required
                       value="{{$consumable->quantity}}">
            </div>
            <br><br>
            <input type="submit" value="Guardar cambios" class="btn btn-primary">

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
