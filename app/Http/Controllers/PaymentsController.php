<?php

namespace App\Http\Controllers;

use App\Models\Analyses;
use App\Models\Patient;
use App\Models\Payments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{
    public function index(Analyses $analyses)
    {
        return view ('payments.index', compact('analyses'),[
            'patients' => Patient::all(),
            'analysis' => Analyses::all(),
        ]);
    }

    public function show()
    {
        return view ('payments.show', [
            'payments' => Payments::paginate(10),
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'patient_id' => 'required',
            'appointment' => 'required|integer',
            'therapy' => 'required|integer',
        ]);


        Payments::create([
            'patient_id' => $attributes['patient_id'],
            'appointment' => $attributes['appointment'],
            'therapy' => $attributes['therapy'],
        ]);


        return redirect('payments')->with('success', 'Payment has been created successfully!');
    }

    public function destroy($id)
    {
        Payments::destroy($id);

        return redirect('payments')->with('success', 'Payment has been deleted successfully!');
    }
}
