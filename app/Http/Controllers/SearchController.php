<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function personsTable()
    {
        if (isset($_GET['id_number'])) {
            return view('recording', ['persons' => Person::where('id_number', 'LIKE', '%' . $_GET['id_number'] . '%')->simplePaginate(3)]);
        }
    }

    public function category()
    {
        if (isset($_GET['student'])) {
            return view('recording', ['persons' => Person::where('category', 'LIKE', '%' . $_GET['student'] . '%')->simplePaginate(3)]);
        }elseif (isset($_GET['staff'])) {
            return view('recording', ['persons' => Person::where('category', 'LIKE', '%' . $_GET['staff'] . '%')->simplePaginate(3)]);
        }elseif (isset($_GET['visitor'])) {
            return view('recording', ['persons' => Person::where('category', 'LIKE', '%' . $_GET['visitor'] . '%')->simplePaginate(3)]);
        }else{
            return null;
        }
    }

    public function municipality()
    {
        if (isset($_GET['municipality'])) {
            return view('recording', ['persons' => Person::where('municipality', 'LIKE', '%' . $_GET['municipality'] . '%')->simplePaginate(3)]);
        }
    }

}
