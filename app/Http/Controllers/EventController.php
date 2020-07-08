<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('events.index');
    }

    public function show($event)
    {
        return view('events.show', compact('event'));
    }
}
