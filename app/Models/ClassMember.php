<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassMember extends Model
{
    use HasFactory;
    protected $table = 'class_members';
    protected $fillable = [
        'class_id',
        'user_id'

    ];
    // public function 
    protected $attributes = [
        'status' => false,
    ];
    public $timestamps = false;
}
