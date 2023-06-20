<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ClassSchedule extends Model
{
    use HasFactory;
    protected $table = 'class_schedule';
    protected $fillable = [
        'class_id',
        'schedule_id',
    ];
    
}
