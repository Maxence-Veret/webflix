@extends('layouts.base')

@section('content')

<div class="row row-cols-2">

    <div class="col">

        <img src="{{ $movie->cover }}" alt="Responsive image" height="600px">
    </div>

    <div class="col">

        <h1>{{ $movie->title }}</h1>

        <p>{{ $movie->synopsys }}</p>

    </div>

</div>


@endsection