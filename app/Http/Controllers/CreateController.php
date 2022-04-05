<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function student()
    {
        return view('student.create');
    }

    public function staff()
    {
        return view('staff.create');
    }

    public function visitor()
    {
        return view('visitor.create');
    }
}
