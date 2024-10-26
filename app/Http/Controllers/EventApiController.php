<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\JsonResponse;

class EventApiController extends Controller
{

    public function index()
    {
        $events = Event::all();
        return  EventResource::collection($events);


    }

    public function show(string $id)
    {
        return new EventResource(Event::findOrFail($id));

    }


}
