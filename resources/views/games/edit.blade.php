@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Modifica: {{ $game->name }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                {{-- Questo form non carica una generica rotta "store" ma ha bisogno dell'id del gioco da aggiornare --}}
                <form method="POST" action="{{ route("games.update", $game->id) }}">
                    @method('PUT') {{-- v. slide da 32 a 35 --}}
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">name</label>
                        <input type="text" class="form-control" name="name" required value="{{ $game->name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">description</label>
                        <textarea type="text" class="form-control" name="description" required>{{ $game->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">price</label>
                        <input type="number" min="0.99" max="999.99" class="form-control" name="price" required value="{{ $game->price }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">release_year</label>
                        <input type="number" min="1980" max="2024" class="form-control" name="release_year" required value="{{ $game->release_year }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">cover_image</label>
                        <input type="text" class="form-control" name="cover_image" required value="{{ $game->cover_image }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">vote</label>
                        <input type="number" min="0" max="10" class="form-control" name="vote" required value="{{ $game->vote }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
