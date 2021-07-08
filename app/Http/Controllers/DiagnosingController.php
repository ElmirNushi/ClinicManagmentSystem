<?php

namespace App\Http\Controllers;

use App\Models\diagnoses;
use App\Models\Patient;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class DiagnosingController extends Controller
{
    public function index(Patient $patient)
    {
        return view('diagnoses.index', compact('patient'), [
            'patients' => Patient::all(),
//            'diagnoses' => Patient::all(),
        ]);
    }

    public function downloadPdf($id)
    {
//        $patient = Patient::find($_GET['patient_id']);

        $patient = Patient::find($id);

//        ddd($patient);

        $pdf = PDF::loadView('diagnoses.partials.diagnoses',
            compact('patient'),
            ['stylesheet_link' => public_path('css\\diagnoses\\index.css')]);
        return $pdf->download('diagnostic.pdf');
    }

    public function create()
    {
        return view('diagnoses.create', [
            'patients' => Patient::all(),
        ]);
    }

    public function show()
    {
        $patient = Patient::find($_GET['patient_id']);
        $diagnose = diagnoses::find($_GET['patient_id']);
        return view('diagnoses.history', compact('patient', 'diagnose'));
    }

    public function store()
    {
//        ddd(request()->all());
        $attributes = request()->validate([
            'patient_id' => 'required',
            'type' => 'max:255|required',
            'diagnose' => 'required',
            'therapy' => 'required'
        ]);

        diagnoses::create($attributes);

//        session()->flash('success', 'Diagnose has been added!');

        return redirect('diagnostic')->with('success', 'Diagnose has been added successfully!');
    }


}
