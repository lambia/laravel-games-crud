@extends("layouts.app")

@section("content")
<h2>{{ $game->name }}</h2>
<h3>Anno: {{ $game->release_year }}</h3>
@endsection