<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'time',
        'date',
        'reason',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
