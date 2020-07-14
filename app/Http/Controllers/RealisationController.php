<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealisationController extends Controller
{
    public function index()
    {
        return view('realisations.index');
    }

    public function show($realisations)
    {
        return view('realisations.show', compact('realisations'));
    }
}
