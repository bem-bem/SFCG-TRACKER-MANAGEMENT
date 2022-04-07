<?php

namespace App\Http\Controllers;

use App\Http\Requests\SurveyRequest;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function __invoke(SurveyRequest $request, $id)
    {
        $validated = $request->validated();
        $validated['person_id'] = $id;
        Survey::create($validated);

        return redirect()->back()->withSuccess('Data Inserted Successfully');
    }
}
