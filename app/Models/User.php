<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'sex',
        'email',
        'password',
        'avatar',
        'address',
        'level',
        'desired_day',
        'desired_time',
        'desired_place',
        'desired_price',
        'desired_gender',
        'desired_goal',
        'desired_level',
        'role',
    ];

    protected $attributes = [
        'role' => 'user',
    ];
    public $timestamps = false;
}
