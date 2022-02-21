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

    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="nom..." class="form-control" value="{{ old('name') }}">
        {{-- <input type="text" name="email" placeholder="Email..."> --}}

        <button class="btn btn-primary mt-3">Ajouter</button>

    </form>

@endsection