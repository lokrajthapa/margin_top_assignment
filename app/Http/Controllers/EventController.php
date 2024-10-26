<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all events and pass them to the index view
        $events = Event::with('category')->get();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Show the form to create a new event
        $categories= Category::all();
        return view('events.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {


        // Create a new event
        Event::create($request->all());

        // Redirect with a success message
        return redirect()->route('events.index')
                         ->with('success', 'Event created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Retrieve and display a specific event by ID
        $event = Event::with('attendees', 'category')->findOrFail($id);
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Retrieve the specific event to edit
        $categories= Category::all();
        $event = Event::findOrFail($id);
        return view('events.edit', compact(['event','categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, string $id)
    {



        // Find the event and update its details
        $event = Event::findOrFail($id);
        $event->update($request->all());

        // Redirect with a success message
        return redirect()->route('events.index')
                         ->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find and delete the event
        $event = Event::findOrFail($id);
        $event->delete();

        // Redirect with a success message
        return redirect()->route('events.index')
                         ->with('success', 'Event deleted successfully.');
    }
}
