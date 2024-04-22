<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getAllEvents()
    {
        // Retrieve all events from the database
        $events = Event::all();

        // Return the events as JSON response
        return response()->json(['events' => $events]);
    }
}
