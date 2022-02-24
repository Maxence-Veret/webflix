@extends('layouts.base')

@section('content')
<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">


    @foreach ($category->movies as $movie)
        @inculde('partials.movie')
    @endforeach
</div>
@endsection
