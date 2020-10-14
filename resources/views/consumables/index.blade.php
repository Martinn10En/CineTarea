@extends('layouts.app')
@section('title', 'Alimentos')
@section('content')

    <br>
    <div class="row">

        <div class="col-sm-10"><h1>Alimentos registrados</h1></div>

        <div class="col-sm-2"><a href="{{ route('consumables.create') }}">
                <button class="btn btn-primary">
                    Agregar
                </button>
            </a></div>
    </div>

    <br>

@forelse ($consumables as $consumable)

<div class="card col-sm bg-light" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">


            <div class="card-body">
              <h2 class="card-title">{{$consumable->name}}</h2>
              <h3 class="card-text">Precio: {{$consumable->price}}</h3>
              <h4 class="card-text">Cantidad: {{$consumable->quantity}}</h4>

              <form action="{{ route('consumables.destroy', $consumable->id)}}" method="POST">
                <a class="btn btn-primary" href="{{ route('consumables.show', $consumable->id) }}">Ver</a>
               <a class="btn btn-secondary" href="{{ route('consumables.edit', $consumable->id) }}">Editar</a>
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger">Eliminar</button>

               </form>
    </div>
</div>
    <br>
@empty
    <h3>No hay alimentos registrados</h3>
@endforelse

{{$consumables->links()}}

@endsection
