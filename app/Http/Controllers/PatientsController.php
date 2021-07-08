<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index()
    {
        return view('patients.index', [
//            'patients' => Patient::paginate(10),
            'patients' => Patient::latest()->filter(request(['search']))->paginate(10),
        ]);

    }

    public function create()
    {
        return view('patients.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:patients',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'phone' => 'required|min:6',
        ]);

        Patient::create($attributes);

        return redirect('/patients')->with('success', 'Patient has been created successfully!');
    }

    public function edit(Patient $patients, $id)
    {
        return view('patients.edit', compact('patients'), [
            'patient' => Patient::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);

        $patient->update($request->except(['_token']));

        return redirect('patients')->with('success', 'Patient has been updated successfully!');
    }

    public function destroy($id)
    {
        Patient::destroy($id);

        return redirect('/patients')->with('success', 'Patient has been deleted successfully!');
    }
}
