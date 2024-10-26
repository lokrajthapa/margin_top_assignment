<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAttendeeRequest;
use App\Models\Attendee;
use App\Models\Event;
use Illuminate\Http\Request;

class AttendeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all attendees
        $attendees = Attendee::all();
        return view('attendees.index', compact('attendees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Show the form to create a new attendee
        $events= Event::all();

        return view('attendees.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:attendees',
            'event_id' => 'required|exists:events,id',
        ]);

        // Create a new attendee
        Attendee::create($request->all());

        return redirect()->route('attendees.index')
                         ->with('success', 'Attendee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Retrieve a specific attendee by ID
        $attendee = Attendee::findOrFail($id);
        return view('attendees.show', compact('attendee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Retrieve the specific attendee to edit
        $events= Event::all();

        $attendee = Attendee::findOrFail($id);
        return view('attendees.edit', compact(['attendee','events']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttendeeRequest $request, string $id)
    {



        // Find the attendee and update their details
        $attendee = Attendee::findOrFail($id);
        $attendee->update($request->all());

        return redirect()->route('attendees.index')
                         ->with('success', 'Attendee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find and delete the attendee
        $attendee = Attendee::findOrFail($id);
        $attendee->delete();

        return redirect()->route('attendees.index')
                         ->with('success', 'Attendee deleted successfully.');
    }
}
