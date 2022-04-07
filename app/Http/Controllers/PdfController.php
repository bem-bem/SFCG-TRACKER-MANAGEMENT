<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pdf($id)
    {
       $person = \App\Models\Person::findOrFail($id);
        // $person = Person::findOrFail($id);
        $path1 = storage_path('app/public/'. $person->personImage->path);
        $type1 = pathinfo($path1, PATHINFO_EXTENSION);
        $data1 = file_get_contents($path1);
        $personPic = 'data:image/' . $type1 . ';base64,' . base64_encode($data1);

        $path2 = storage_path('app/public/'. $person->vaccineImage->path);
        $type2 = pathinfo($path2, PATHINFO_EXTENSION);
        $data2 = file_get_contents($path2);
        $vaccinePic = 'data:image/' . $type2 . ';base64,' . base64_encode($data2);

        $pdf = PDF::setOptions(
                [
                    'isHtml5ParserEnabled' => true,
                    'isRemoteEnabled' => true,
                    'defaultFont' => 'sans-serif'
                ]
            )->loadView('pdf_view', compact('person', 'personPic', 'vaccinePic'));
        return $pdf->stream();
    }

    // public function pdf($id)
    // {
    //     $person = Person::findOrFail($id);
    //     $pdf = PDF::loadView('pdf_view', compact('person'));
    //     return $pdf->download('invoice.pdf');
    // }

    // public function pdf($id)
    // {
    //     $person = Person::findOrFail($id);
    //     return view('pdf_view', ['person' => $person]);

    // }
}
