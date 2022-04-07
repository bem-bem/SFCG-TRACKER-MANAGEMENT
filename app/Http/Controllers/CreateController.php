<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function student()
    {
        $this->alertSweat();
        return view('student.create');
    }

    public function staff()
    {
        $this->alertSweat();
        return view('staff.create');
    }

    public function visitor()
    {
        $this->alertSweat();
        return view('visitor.create');
    }
}
