<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, "index"])->name("home");
Route::get('/about', [PageController::class, "about"])->name("about");

Route::resource('/games', GameController::class);

// Le stesse rotte di Route::resource, create manualmente:
// Route::get('/games', [GameController::class, "index"])->name("games.index");
// Route::post('/games', [GameController::class, "store"])->name("games.store");
// Route::get('/games/create', [GameController::class, "create"])->name("games.create");
// Route::get('/games/{gioco}', [GameController::class, "show"])->name("games.show");
// Route::put('/games/{gioco}', [GameController::class, "update"])->name("games.update");
// Route::delete('/games/{gioco}', [GameController::class, "destroy"])->name("games.destroy");
// Route::get('/games/{gioco}/edit', [GameController::class, "edit"])->name("games.edit");