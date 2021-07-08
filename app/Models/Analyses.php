<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analyses extends Model
{
    use HasFactory;

    protected $fillable = [
        'test',
        'money',
    ];

    public function payment()
    {
        return $this->hasMany(Payments::class);
    }
}
