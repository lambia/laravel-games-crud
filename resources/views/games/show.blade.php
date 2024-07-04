@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <img src="{{ $game->cover_image }}" class="w-100" style="aspect-ratio: 16/9;" />
            </div>
            <div class="col-12 p-4">
                <h2>{{ $game->name }}</h2>
                <p>Voto {{ $game->vote }} / 10 nel {{ $game->release_year }}</p>
                <p>{{ $game->description }}</p>
                <a href="https://store.steampowered.com/?l=italian" class="btn btn-primary">Compralo per
                    {{ $game->price }}€</a>
            </div>
        </div>
    </div>
@endsection
