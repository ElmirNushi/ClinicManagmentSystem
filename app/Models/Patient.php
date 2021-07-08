<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'city',
        'phone',
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query
                ->where('first_name', 'like', '%' . request('search') . '%')
                ->orWhere('last_name', 'like', '%' . request('search') . '%')
                ->orWhere('email', 'like', '%' . request('search') . '%')
                ->orWhere('address', 'like', '%' . request('search') . '%')
                ->orWhere('city', 'like', '%' . request('search') . '%');
        }
    }

    public function diagnoses()
    {
        return $this->hasMany(diagnoses::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointments::class);
    }

    public function payment()
    {
        return $this->hasMany(Payments::class);
    }
}
