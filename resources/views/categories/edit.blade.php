@extends('layouts.base')

@section('content')

@if ($errors->any())

<div class="alert alert-danger">
    <ul class="mb-0 list-unlisted">
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    </ul>
</div>
    @endif
    <h1>Modifier {{ $category->name }}</h1>
<form action="/categories/{{ $category->id }}" method="post">
    @csrf @method('put')
    <input type="text" name="name" placeholder="nom..." class="form-control" value="{{ old('name', $category->name) }}">
    {{-- <input type="text" name="email" placeholder="Email..."> --}}

    <button class="btn btn-primary mt-3">Modifier</button>

</form>

@endsection