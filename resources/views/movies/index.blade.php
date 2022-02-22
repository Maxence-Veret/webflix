@extends('layouts.base')

@section('content')

<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

    @foreach($movies as $movie)

        <div class="col">
            <a class="text-decoration-none text-reset" href="/movies/{{ $movie->id }}" > 
                <div class="card-body">

                    <img src="{{ $movie->cover }}" alt="" class="" width="100%">

                    <p>{{ $movie->title }}</p>

                    <p>{{ $movie->released_at->translatedFormat('d F Y') }} | {{ $movie->formatDuration() }}</p>

                </div>
            </a>
        </div>

    @endforeach

</div>

    {{ $movies->links() }}

@endsection