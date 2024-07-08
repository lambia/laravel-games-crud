@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiungi un gioco al catalogo</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <form method="POST" action="{{ route("games.store") }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">description</label>
                        <textarea type="text" class="form-control" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">price</label>
                        <input type="number" min="0.99" max="999.99" step="0.01" class="form-control" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">release_year</label>
                        <input type="number" min="1980" max="2024" class="form-control" name="release_year" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">cover_image</label>
                        <input type="text" class="form-control" name="cover_image" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">vote</label>
                        <input type="number" min="0" max="10" class="form-control" name="vote" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
