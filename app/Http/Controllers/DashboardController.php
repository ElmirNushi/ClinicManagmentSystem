<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\diagnoses;
use App\Models\Patient;
use App\Models\Payments;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $patientCount = Patient::count();
        $patientsAddedToday = Patient::whereDate('created_at', Carbon::today())->count();
        $patientsAddedThisMonth = Patient::whereMonth('created_at', Carbon::today())->count();
        $diagnosesCount = diagnoses::count();
        $diagnosesAddedToday = diagnoses::whereDate('created_at', Carbon::today())->count();
        $diagnosesAddedThisMonth = diagnoses::whereMonth('created_at', Carbon::today())->count();
        $appointmentCount = Appointments::count();
        $appointmentsForToday = Appointments::whereDate('date', Carbon::today())->count();

        return view('dashboard', compact(
            'patientCount',
            'diagnosesCount',
            'appointmentCount', 'patientsAddedToday', 'diagnosesAddedToday', 'diagnosesAddedThisMonth',
            'patientsAddedThisMonth', 'appointmentsForToday'));
    }
}
