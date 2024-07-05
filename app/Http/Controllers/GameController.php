<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gamesList = Game::all();

        $data = [
            "catalog" => $gamesList
        ];

        return view("games.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("games.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {	
        $data = $request->all();
        
        $newGame = new Game();
        $newGame->name = $data["name"];
        $newGame->description = $data["description"];
        $newGame->price = $data["price"];
        $newGame->release_year = $data["release_year"];
        $newGame->cover_image = $data["cover_image"];
        $newGame->vote = $data["vote"];
         
        $newGame->save();
                  
        return redirect()->route('games.show', $newGame->id);
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id) {
    //     $game = Game::findOrFail($id);

    //     $data = [
    //         "game" => $game
    //     ];

    //     return view("games.show", $data);
    // }

    public function show(Game $game) {

        $data = [
            "game" => $game
        ];

        return view("games.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        $data = [
            "game" => $game
        ];

        return view("games.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
