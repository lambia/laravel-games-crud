@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Sfoglia il Catalogo</h1>
                <h3>E' ricco di giochi che ti assicuro non troverai altrove</h3>
            </div>
        </div>

        <div class="row">
            @foreach ($catalog as $gioco)
                <div class="col-3 py-3">
                    <div class="card h-100">
                        <img src="{{ $gioco->cover_image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $gioco->name }}, {{ $gioco->release_year }}</h5>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('games.show', $gioco->id) }}" class="btn btn-primary">Vai ai dettagli</a>
                            <a href="{{ route('games.edit', $gioco->id) }}" class="btn btn-warning">Modifica</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
