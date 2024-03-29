<?php

use App\Http\Controllers\Api\EventController;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("/prova", function () {
    // $dati = [
    //     "nome" => "Andrea",
    //     "cognome" => "Francioni"
    // ];

    $dati = Event::all();

    return response()->json($dati);
});

Route::get("/events", [EventController::class, "index"]);

Route::get("/events/{id}", [EventController::class, "show"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
