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
        // recupero e valido  i dati inviati con il form necessari al mio model
        $data = $request->validate([
            "name" => "required|min:3|max:255",
            "description" => "required|min:3|max:255",
            "price" => "required",
            "release_year" => "required",
            "cover_image" => "required",
            "vote" => "required",
        ]);

        // dd($data);
        
        // Creo un nuovo Game e ne scrivo i dati
        $newGame = new Game();
        $newGame->fill( $data );

        // Scrivo il Game sul database
        $newGame->save();
                 
        // redireziono sulla pagina che mostra i dettagli del gioco
        return redirect()->route('games.show', $newGame);
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
    public function update(Request $request, Game $game)
    {
        // $game è la nostra istanza di Game

        // recupero e valido  i dati inviati con il form necessari al mio model
        $data = $request->validate([
            "name" => "required|min:3|max:255",
            "description" => "required|min:3|max:255",
            "price" => "required",
            "release_year" => "required",
            "cover_image" => "required",
            "vote" => "required",
        ]);

        //posso popolare il model e poi salvarlo, come abbiamo fatto nel metodo store():
        // $game->fill($data);
        // $game->save();
        //oppure fare tutto in un'unica istruzione
        $game->update($data);

        //come per il metodo store, redireziono sulla pagina che mostra i dettagli del gioco
        return redirect()->route('games.show', $game);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('games.index');
    }
}
