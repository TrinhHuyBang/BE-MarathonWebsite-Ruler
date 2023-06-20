<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $fillable = [
        'name',
        'teacher_id',
        'type',
        'start_date',
        'end_date',
        'max_student',
    ];
    // public function 

    public function schedule_class() : HasMany
    {
        return $this->hasMany(ClassSchedule::class, "class_id");
    }
}
