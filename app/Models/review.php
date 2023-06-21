<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'teacher_id',
        'rating',
        'bookmark',
        'comment',
    ];

    protected $attributes = [
        'bookmark' => false,
    ];
    public $timestamps = false;
}