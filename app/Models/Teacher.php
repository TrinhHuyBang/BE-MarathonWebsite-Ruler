<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function teacher_class() : HasMany
    {
        return $this->hasMany(Classes::class);
    }

    public function comments() : HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
