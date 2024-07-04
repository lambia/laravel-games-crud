@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>About us</h1>
                <p>Chi siamo? Non l'abbiamo ancora capito ma scriverò comunque un lungo paragrafo dicendo cose
                    apparentemente
                    sensate ma prive di ogni significato.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sit amet eius molestiae maiores tempore
                    voluptates, ipsa inventore nesciunt accusamus, illum pariatur corrupti necessitatibus consequatur iure
                    magni commodi alias dolorem.</p>
                <a href="{{ route('games.index') }}" class="btn btn-primary">Vai al catalogo!</a>
            </div>
        </div>
    </div>
@endsection
