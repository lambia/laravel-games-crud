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

                <form>
                    <div class="mb-3">
                        <label class="form-label">name</label>
                        <input type="text" class="form-control" name="name" value="{{ $game->name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">description</label>
                        <input type="text" class="form-control" name="description" value="{{ $game->description }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">price</label>
                        <input type="text" class="form-control" name="price" value="{{ $game->price }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">release_year</label>
                        <input type="text" class="form-control" name="release_year" value="{{ $game->release_year }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">cover_image</label>
                        <input type="text" class="form-control" name="cover_image" value="{{ $game->cover_image }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">vote</label>
                        <input type="text" class="form-control" name="vote" value="{{ $game->vote }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
