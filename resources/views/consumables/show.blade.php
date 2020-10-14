@extends('layouts.app')
@section('title', 'Alimentos')
@section('content')

    <br>
    <div class="row">

        <div class="col-sm-10"><h1>Alimento</h1></div>
    </div>
    <br>

<div class="card col-sm bg-light" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">

            <div class="card-body">
              <h5 class="card-title">Alimentos: {{$consumable->name}}</h5>
              <h3 class="card-text">Precio: {{$consumable->price}}</h3>
              <p class="card-text">Cantidad: {{$consumable->quantity}}</p>

              <form action="{{ route('consumables.destroy', $consumable->id)}}" method="POST">
                <a class="btn btn-primary" href="{{ route('consumables.index', $consumable->id) }}">Volver</a>
               <a class="btn btn-secondary" href="{{ route('consumables.edit', $consumable->id) }}">Editar</a>
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger">Eliminar</button>

               </form>
    </div>
</div>
    <br>

@endsection
