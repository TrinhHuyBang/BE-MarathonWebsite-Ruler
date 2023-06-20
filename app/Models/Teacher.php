<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'rating',
        'cv_url',
        'level',
        'address',
        'route',
        'age',
        'salary',
        'goal',
        'other_requiments',
        'phone',
    ];

    public function teacher_class() : HasMany
    {
        return $this->hasMany(Classes::class);
    }

}
