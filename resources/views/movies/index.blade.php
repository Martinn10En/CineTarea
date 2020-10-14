@extends('layouts.app')
@section('title', 'Películas')
@section('content')
    <br>
    <div class="row">

        <div class="col-sm-10"><h1>Películas registradas</h1></div>

        <div class="col-sm-2"><a href="{{ route('movies.create') }}">
                <button class="btn btn-primary">
                    Agregar
                </button>
            </a></div>
    </div>

    <br>
    @forelse ($movies as $movie)

        <div class="row">
            <div class="card col-sm bg-light" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->name}}</h5>
                    <p class="card-text">{{$movie->director}}</p>
                    <p class="card-text">{{$movie->synopsis}}</p>
                    <p class="card-text text-muted">{{$movie->duration}}</p>

                    <form action="{{ route('movies.destroy', $movie->id)}}" method="POST">
                        <a class="btn btn-primary" href="{{ route('movies.show', $movie->id) }}">Ver</a>
                        <a class="btn btn-secondary" href="{{ route('movies.edit', $movie->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>

                    </form>

                </div>
            </div>
        </div>
        <br>
    @empty
        <div>
            <h3>No hay películas registradas</h3>
        </div>

    @endforelse

    {{$movies->links()}}
@endsection
