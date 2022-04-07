<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Person;
use App\Models\PersonImage;
use App\Models\VaccineImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use RealRashid\SweetAlert\Facades\Alert;

class PersonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recording' ,['persons' => Person::orderBy('id', 'desc')->simplePaginate(10)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $person = Person::create($validated);

        if ($request->hasFile('person_image')) {
            $path = $request->file('person_image')->store('person_image');
            $person->personImage()->save(PersonImage::make(['path' => $path]));
        }

        if ($request->hasFile('vaccine_card_image')) {
            $path = $request->file('vaccine_card_image')->store('vaccine_card_image');
            $person->vaccineImage()->save(
                VaccineImage::make(['path' => $path])
            );
        }

        return redirect()->back()->withSuccess('inserted');
    }

    /**
        * render survey form
     */
    public function show(Person $person)
    {
        $this->alertSweat();
        return view('add_survey', ['person' => $person]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        if ($person->category == 'student') {
            return view('student.edit', ['person' => $person]);
        } elseif ($person->category == 'staff') {
            return view('staff.edit', ['person' => $person]);
        }
        else {
            return view('visitor.edit', ['person' => $person]);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(PersonRequest $request, Person $person)
    {
        $validated = $request->validated();
        $person->fill($validated);

        if ($request->hasFile('person_image')) {
            $path = $request->file('person_image')->store('person_image');

            if ($person->personImage) {
                Storage::delete($person->personImage->path);
                $person->personImage->path = $path;
                $person->personImage->save();
            }else {
                $person->personImage()->save(
                    PersonImage::make(['path' => $path])
                );
            }
        }

        if ($request->hasFile('vaccine_card_image')) {
            $path = $request->file('vaccine_card_image')->store('vaccine_card_image');

            if ($person->vaccineImage) {
                Storage::delete($person->vaccineImage->path);
                $person->vaccineImage->path = $path;
                $person->vaccineImage->save();
            }else {
                $person->vaccineImage()->save(
                    vaccineImage::make(['path' => $path])
                );
            }
        }

        $person->save();
        return redirect()->route('track.table')->withSuccess('updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        Storage::delete($person->personImage->path);
        $person->delete();
        return back()->withSuccess('Deleted');
    }
}
