@extends('layouts.base')

@section('content')
    <h1>Movies</h1>

    <button class=""><a href="/exercice/movies/creer">Ajouter un film</a></button>

    <ul>
        @foreach ($movies as $movie)
            <div class="container">
                <h2>{{ $movie->title }}</h2>

                <div widht="100px">{{ $movie->cover }}</div>

                <p><a href="/exercice/movies/{{ $movie->id }}">Voir</p>
                </div>
        @endforeach
    </ul>
@endsection