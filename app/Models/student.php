<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'father',
        'mobile',
        'address',
        'calss',
        'password',
    ];

    public function complaint()
    {
        return $this->hasOne(complaint::class);
    }
}
