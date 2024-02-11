<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $results = Event::all();
        $data = [
            "success" => true,
            "results" => $results
        ];
        return response()->json($data);
    }

    public function show($id)
    {
        $event = Event::with(['user', 'tags:name'])->find($id);
        return response()->json([
            "success" => $event ? true : false,
            "results" => $event ? $event : "Nessun evento trovato con l'id"
        ]);
    }
}
