@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-lg-5">
        <img src="{{ $movie->cover }}" class="img-fluid" alt="{{ $movie->title }}">
    </div>
    <div class="col-lg-7">
        <div class="card shadow">
            <div class="card-body">
                <h1>{{ $movie->title }}</h1>
                <p>{{ $movie->released_at->translatedFormat('d F Y') }} | {{ $movie->category?->name }} | {{ $movie->formatDuration() }}</p>
                <div class="mb-4">
                    {{ $movie->synopsys }}
                </div>

                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/V-DTTGcWzlk?rel=0" title="Matrix Resurrections" allowfullscreen></iframe> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
