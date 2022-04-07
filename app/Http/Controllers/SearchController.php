<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function personsTable()
    {
        if (isset($_GET['id_number'])) {
            return view('recording', ['persons' => Person::where('id_number', 'LIKE', '%' . $_GET['id_number'] . '%')->simplePaginate(10)]);
        }elseif (isset($_GET['id_number_table'])) {
            return view('track_management', ['persons' => Person::where('id_number', 'LIKE', '%' . $_GET['id_number_table'] . '%')->simplePaginate(10)]);
        }
    }
    

    public function category()
    {
        if (isset($_GET['student'])) {
            return view('track_management', ['persons' => Person::where('category', 'LIKE', '%' . $_GET['student'] . '%')->simplePaginate(10)]);
        }elseif (isset($_GET['staff'])) {
            return view('track_management', ['persons' => Person::where('category', 'LIKE', '%' . $_GET['staff'] . '%')->simplePaginate(10)]);
        }elseif (isset($_GET['visitor'])) {
            return view('track_management', ['persons' => Person::where('category', 'LIKE', '%' . $_GET['visitor'] . '%')->simplePaginate(10)]);
        }else{
            return null;
        }
    }

    public function municipality()
    {
        if (isset($_GET['municipality'])) {
            return view('recording', ['persons' => Person::where('municipality', 'LIKE', '%' . $_GET['municipality'] . '%')->simplePaginate(4)]);
        }
    }

}
