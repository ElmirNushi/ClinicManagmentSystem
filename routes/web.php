<?php

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiagnosingController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Login
Route::get('/', function () {
    if(Auth::user() === 'auth')
    return view('auth.login');
    else
        return redirect('/dashboard');
});

// Register New User
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('auth');

// Dashboard Page
Route::get('/dashboard', [DashboardController::class, 'index'])
->middleware(['auth'])->name('dashboard');

// Users Page
Route::get('/users', [UserController::class, 'create'])
    ->middleware('auth')->name('users');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])
    ->middleware('auth');
Route::patch('/users/edit/{id}', [UserController::class, 'update'])
    ->middleware('auth');
Route::delete('/users/{id}', [UserController::class, 'destroy'])
    ->middleware('auth');

// Change Password
Route::get('/user/password/change', [ChangePassword::class, 'edit'])
    ->middleware('auth');
Route::patch('/user/password/change', [ChangePassword::class, 'update'])
    ->middleware('auth');

// Patients Page
Route::get('/patients', [PatientsController::class, 'index'])
    ->middleware('auth')->name('patients');
Route::get('/patients/add', [PatientsController::class, 'create'])
    ->middleware('auth');
Route::post('/patients/add', [PatientsController::class, 'store'])
    ->middleware('auth');
Route::get('/patients/edit/{id}', [PatientsController::class, 'edit'])
    ->middleware('auth');
Route::patch('/patients/edit/{id}', [PatientsController::class, 'update'])
    ->middleware('auth');
Route::delete('/patients/{id}', [PatientsController::class, 'destroy'])
    ->middleware('auth');

// Diagnosing Page
Route::get('/diagnostic', [DiagnosingController::class, 'index'])
    ->middleware(['auth'])->name('diagnostic');
Route::get('/diagnostic/add', [DiagnosingController::class, 'create'])
    ->middleware(['auth']);
Route::post('/diagnostic/add', [DiagnosingController::class, 'store'])
    ->middleware(['auth']);
Route::get('/diagnostic/history', [DiagnosingController::class, 'show'])
    ->middleware(['auth']);
Route::get('/diagnostic/history/{id}/downloadPdf', [DiagnosingController::class, 'downloadPdf']);

// Appointments Page
Route::get('/appointments', [AppointmentsController::class, 'index'])
->middleware(['auth'])->name('appointments');
Route::get('/appointments/create', [AppointmentsController::class, 'create'])
    ->middleware('auth');
Route::post('/appointments/create', [AppointmentsController::class, 'store'])
    ->middleware('auth');
Route::get('/appointments/edit/{id}', [AppointmentsController::class, 'edit'])
    ->middleware('auth');
Route::patch('/appointments/edit/{id}', [AppointmentsController::class, 'update'])
    ->middleware('auth');
Route::delete('/appointments/{id}', [AppointmentsController::class, 'destroy'])
    ->middleware('auth');



// Payments Page
Route::get('/payments', [PaymentsController::class, 'index'])
    ->middleware(['auth'])->name('operation');
Route::get('/payments/view', [PaymentsController::class, 'show'])
    ->middleware(['auth']);
Route::post('/payments/pay', [PaymentsController::class, 'store'])
    ->middleware(['auth']);
Route::delete('/payments/view/{id}', [PaymentsController::class, 'destroy'])
    ->middleware(['auth']);

require __DIR__.'/auth.php';
