<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        return view('dashboard.events.index');
    }
}
