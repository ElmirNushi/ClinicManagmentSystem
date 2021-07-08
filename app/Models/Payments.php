<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'user_id',
        'analysis_id',
        'appointment',
        'therapy',
        'reason',
    ];

    public function analyses()
    {
        return $this->hasOne(Analyses::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
