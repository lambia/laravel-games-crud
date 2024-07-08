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
        // $data è un array associativo con tutti i dati inviati dal form

        // recupero tutti i dati inviati con il form
        $data = $request->all();
        // dd($data);
        
        // Creo un nuovo Game e ne scrivo i dati
        $newGame = new Game();
        $newGame->name = $data["name"];
        $newGame->description = $data["description"];
        $newGame->price = $data["price"];
        $newGame->release_year = $data["release_year"];
        $newGame->cover_image = $data["cover_image"];
        $newGame->vote = $data["vote"];
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
        // $data è un array associativo con tutti i dati inviati dal form

        //come per il metodo store, recupero tutti i dati inviati con il form
        $data = $request->all();
        // dd($data);

        // non ho bisogno di creare un new Game
        // cambio i valori delle proprietà
        // esempio: $game->nomeCampoSulDatabase = $data["nameDellaInputNelForm"];
        $game->name = $data["name"];
        $game->description = $data["description"];
        $game->price = $data["price"];
        $game->release_year = $data["release_year"];
        $game->cover_image = $data["cover_image"];
        $game->vote = $data["vote"];
        $game->save();

        //come per il metodo store, redireziono sulla pagina che mostra i dettagli del gioco
        return redirect()->route('games.show', $game);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
