<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cv_url',
        'level',
        'address',
        'age',
        'salary',
        'other_requiments',
        'phone',
        'avatar',
        'sex',
        'status'
    ];

}
