@extends('layouts.app')
@section('title', 'Agregar alimentos')
@section('content')
    <br>
    <div class="row">

        <div class="col-sm-10"><h1>Agregar alimentos</h1></div>

        <div class="col-sm-2"><a href="{{ route('consumables.index') }}">
                <button class="btn btn-danger">
                    Cancelar
                </button>
            </a></div>
    </div>




<br>
 <div class="jumbotron">
<form action="{{ route('consumables.store') }}" method="post">
    @csrf

<div>
    <label for="">Nombre: </label>
    <input class="form-control" type="text" name="name" id="" maxlength="200" required>
</div>

<div>
    <label for="">Precio: </label>
    <input class="form-control" type="text" name="price" id="" required>
</div>

<div>
    <label for="">Cantidad: </label>
    <input class="form-control" type="number" name="quantity" id="" required>
</div>
<br><br>
<input type="submit" value="Guardar" class="btn btn-primary">

</form>
</div>
@endsection
