@extends("layouts.app")

@section("content")
<h2>questa è la lista dei giochi</h2> 
    @foreach ($catalog as $gioco)
        <p><a href="{{ route("games.show", $gioco->id) }}">{{ $gioco->name }}</a></p>
    @endforeach
@endsection