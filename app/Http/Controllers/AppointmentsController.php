<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AppointmentsController extends Controller
{
    public function index(Patient $patient)
    {

        return view('appointments.index', [
            'appointments' => Appointments::paginate(10),
        ]);
    }

    public function create()
    {
        return view('appointments.create', [
            'patients' => Patient::all(),
        ]);
    }

    public function store()
    {
//        ddd(request()->all());
        $attributes = request()->validate([
            'patient_id' => 'required',
            'time' => 'required',
            'date' => 'required',
            'reason' => 'required|max:255'
        ]);

        Appointments::create($attributes);

        return redirect('/appointments')->with('success', 'Appointment has been created successfully!');
    }

    public function edit(Appointments $appointments, $id)
    {
        return view('appointments.edit', compact('appointments'), [
            'appointment' => Appointments::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $appointment = Appointments::findOrFail($id);

        $appointment->update($request->except(['_token', 'patient_id']));

        return redirect('/appointments')->with('success', 'Appointment has been updated successfully!');
    }

    public function destroy($id)
    {
        Appointments::destroy($id);

        return redirect('/appointments')->with('success', 'Appointment has been deleted successfully!');
    }
}
