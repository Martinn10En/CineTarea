@extends('layout.layout')
@section('title', 'Alimentos')
@section('content')
 

<table class="table">
  <br>
</div> 
<div class="col"></div>
 <div class="col-sm-10"><h2>Agregar alimentos <a href=" {{ route('consumables.create') }}">
  <button class="btn btn-primary">Agregar</button>
</a></h2></div>
</div>  
<br> 




    <thead class="thead-dark">
      <tr>
        <th scope="col">Alimentos</th>
        <th scope="col">Precio</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Acciones </th>
      </tr>
    </thead>
    <tbody>
       
        @forelse ($consumables as $consumable)
      <tr>
        <th scope="row">{{$consumable->name}}</th>
        <td>{{$consumable->price}}</td>
        <td>{{$consumable->quantity}}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-primary" href="{{ route('consumables.show', $consumable->id) }}">Ver</a>
                <a class="btn btn-light" href="{{ route('consumables.edit', $consumable->id) }}">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
 
              </div>
        </td>
      </tr>
     @empty
         <h3>No hay alimentos registrados</h3>
     @endempty

    </tbody>
  </table>
  
@endsection