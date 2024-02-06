<?php

namespace App\Http\Controllers\Admin; // era "App\Http\Controllers"
use App\Http\Controllers\Controller; // Controller di base da importare

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();

        return view("admin.events.index", compact("events"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.events.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $validated = $request->validated();

        $newevent = new Event();
        $newevent->fill($validated);
        $newevent->save();

        return redirect()->route("admin.events.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
