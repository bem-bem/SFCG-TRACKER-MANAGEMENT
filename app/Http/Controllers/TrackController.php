<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function trackTable()
    {
        $this->alertSweat();
        return view('track_management', [
            'persons' => Person::orderBy('id', 'desc')->simplePaginate(10),
        ]);
    }

    public function trackView($id)
    {
        return view('track_view' , ['person' => Person::findOrFail($id)]);
    }
}
