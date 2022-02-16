@extends('layouts.base')
    
@section('content')
    <h1>Hello {{ $name }}</h1>

    <ul>
    @foreach ($number as $number)
        <li>{{ $number }}</li>
    @endforeach
    </ul>

@endsection